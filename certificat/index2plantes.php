<!doctype html>
<html lang="en" class="h-100" data-bs-theme="auto">
  <head><script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.111.3">
    <title>Certificado 2n plantas</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/cover/">

    <?php

      $estado_bbdd_recepcion = "aceptado"; //cambiar valor por resutlado BBDD

      if ($estado_bbdd_recepcion == "pendiente")
        {
          $estado = '<img src="img/pendiente.png" alt="pendiente" width="25px"> <b>Pendiente</b>';
        }
      else {
        $estado = '<img src="img/aceptado.png" alt="aceptado" width="25px"> <b>Aceptado</b>';
      }

      $estado_bbdd_gestion = "reexpedido"; //cambiar valor por resutlado BBDD

      if ($estado_bbdd_gestion == "pendiente")
        {
          $estado2 = '<img src="img/pendiente.png" alt="pendiente" width="25px"> <b>Pendiente</b>';
        }
      if ($estado_bbdd_gestion == "aceptado")
        {
          $estado2 = '<img src="img/aceptado.png" alt="aceptado" width="25px"> <b>Aceptado</b>';
        }
      if ($estado_bbdd_gestion == "reexpedido")
        {
          $estado2 = '<img src="img/reenviado.jpeg" alt="reexpedido" width="30px"> <b>Reexpedido</b>';
        }

        $estado_bbdd_gestion_2 = "aceptado"; //cambiar valor por resutlado BBDD

        if ($estado_bbdd_gestion_2 == "pendiente")
          {
            $estado3 = '<img src="img/pendiente.png" alt="pendiente" width="25px"> <b>Pendiente</b>';
          }
        if ($estado_bbdd_gestion_2 == "aceptado")
          {
            $estado3 = '<img src="img/aceptado.png" alt="aceptado" width="25px"> <b>Aceptado</b>';
          }
        if ($estado_bbdd_gestion_2 == "reexpedido")
          {
            $estado3 = '<img src="img/reenviado.jpeg" alt="reexpedido" width="30px"> <b>Reexpedido</b>';
          }
      ?>


<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }
      .bd-mode-toggle {
        z-index: 1500;
      }
    </style>

      <style type="text/css" media="print">

        /*comando para que no se imprima la barra de navegación, boton imprimir...*/
        @media print {
        .nav {display:none;}
        .imprimir {display:none;}
        }

        /*instrucción para que no se imprima el encabeza y pie de pagina que sale por defecto*/
        @page
            {
                size:  auto;   /* auto is the initial value */
                margin: 2mm;  /* this affects the margin in the printer settings */
            }

      </style>



    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
  </head>
  <body class="d-flex h-100 text-center text-bg-dark">
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
      </symbol>
    </svg>

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      <img class="float-md-start mb-0" src="../img/logo.png" alt="logo" width="200px">
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link fw-bold py-1 px-0 active" aria-current="page" href="#">Inicio</a>
        <a class="nav-link fw-bold py-1 px-0" href="#">Perfil</a>
        <a class="nav-link fw-bold py-1 px-0" href="#">Trazabilidad</a>
      </nav>
    </div>
  </header>

  <main class="px-3">
    <h1 class="tit_certificat">Certificat</h1>

  <p class="lead"><b>EMPRESA, SL</b>, amb CIF <b>B00000000</b> i seu social al <b>Calle 3, 08000 Barcelona</b>,
     i representada per <b>Fernando Perez </b>en qualitat d’administrador, informa:</p>

  <p class="lead">Que a la planta <b>EMPRESA, SL</b> situada al <b>Calle 3, 08000 Barcelona</b> ha
    rebut <b>12,50 Tn</b> el dia <b>01/06/2023</b> de <b>terres especials</b> amb CER <b>170503</b> i ha tractat mitjançant <b>R12</b>,
    procedents de <b>Industria Rocra</b> sita en <b>C/Industrial, 6, 08777 Sabadell (Barcelona)</b>.</p>

  <p class="lead">Residuo recepcionado en la instalación: <?php echo $estado;?></p>

  <p class="lead">Residuo gestionado y/o reexpedido R12: <?php echo $estado2;?></p>

  <p class="lead curs" >Que a la planta <b>EMPRESA 2, SA</b> situada al <b>C/ Cuatro, s/n 17777 Vilareal (Castellón)</b>
     a rebut <b>12,5 Tn</b> el dia <b>04/06/2023</b> de <b>terres especials</b> amb CER <b>170503</b> mitjançant tractament <b>R05</b>, procedents de <b>EMPRESA, SL</b>
    sita en <b>Calle 3, 08000 Barcelona</b>.</p>

  <p class="lead">Residuo gestionado y/o reexpedido R05: <?php echo $estado3;?></p>

  <p class="lead">I perquè consti es signa el present certificat a <b>Barcelona (04/06/2023)</b>.</p>

  <p class="lead">Atentament,</p>

<div class="firma">
<img src="../img/firma.png" alt="firma_gestor" width="100px">
</div>
  <p class="lead"> <b>Senyor/a</b></p>
<div class="imprimir">
<input type="button" value="Imprimir" class="printbutton">
</div>
  </main>

  <footer class="mt-auto text-white-50">
    <p>© 2023 <a href="https://www.trazawaste.com/" class="text-white"> Trazawaste, SL</a></p>
  </footer>
</div>

<script>
        document.querySelectorAll('.printbutton').forEach(function(element) {
            element.addEventListener('click', function() {
                print();
            });
        });
    </script>

  </body>
</html>
