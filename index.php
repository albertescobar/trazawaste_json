<?php

// Configura los componentes de la URL
$host = "sdr.arc.cat";
$basePath = "/fitxes3/rest";

// Construye la URL completa
$url = "https://$host$basePath";

$datos = array(
    'beanUsuari' => array (
      "usuari"=> "93437520",
      "contrasenya"=> "k4A25D4f",
      "codi"=> "E-1534.15"
    ),
    "numFull"=> "4271655",
    "tipusFull"=> "FS"
);


$datos_json = json_encode($datos);

// Configura la solicitud CURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "$url/getFs.action");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $datos_json);

// Configura las cabeceras de la solicitud
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($datos_json)
));

// Envía la solicitud al servicio web
$result = curl_exec($ch);


// Verifica si hubo algún error en la solicitud CURL y listar todo el json
if(curl_errno($ch)) {
    echo 'Error al conectarse al servicio web SDR Fulls de Seguiment: ' . curl_error($ch);
} else {
    // Imprime la respuesta del servicio web
    echo "todos los valores del json" . "<br>";
    echo "<br>" . $result . "<br>";
}



// Decodifica el objeto JSON en un array asociativo para meter en variables los parámetros deseados
$response = json_decode($result, true);

// Accede a cada valor usando la clave correspondiente
$numFull = $response['BeanRestFullReturnDades']['numFull'];
$tipusFull = $response['BeanRestFullReturnDades']['tipusFull'];
$estat = $response['BeanRestFullReturnDades']['estat'];
$codiProductor = $response['BeanRestFullReturnDades']['codiProductor'];
$codiNotificant = $response['BeanRestFullReturnDades']['codiNotificant'];
$nomNotificant = $response['BeanRestFullReturnDades']['nomNotificant'];
// y así sucesivamente para cada valor que quieras obtener

// Puedes imprimir los valores para verificar si se han obtenido correctamente
echo "<br>" . "algunos valores del json en varible" . "<br>";
echo "<br>" . "numFull: " . $numFull . "<br>";
echo "tipusFull: " . $tipusFull . "<br>";
echo "estat: " . $estat . "<br>";
echo "codiProductor: " . $codiProductor . "<br>";
echo "codiNotificant: " . $codiNotificant . "<br>";
echo "nomNotificant: " . $nomNotificant . "<br>";
// y así sucesivamente para cada valor que quieras imprimir

// Cierra la conexión CURL
curl_close($ch);

?>
