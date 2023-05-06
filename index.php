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

// Verifica si hubo algún error en la solicitud CURL
if(curl_errno($ch)) {
    echo 'Error al conectarse al servicio web SDR Fulls de Seguiment: ' . curl_error($ch);
} else {
    // Imprime la respuesta del servicio web
    echo $result . "\n";
}



// Cierra la conexión CURL
curl_close($ch);


?>
