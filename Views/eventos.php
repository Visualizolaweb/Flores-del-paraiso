<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Bienvenidos a Flores del Paraiso</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="Assets/css/materialize.min.css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Assets/css/main.css" media="screen" title="no title" charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <script type="text/javascript" src="Assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="Assets/js/materialize.min.js"></script>
    <script type="text/javascript" src="Assets/js/main.js"></script>

  </head>
  <body>
    <div class="container-fluid">
      <?php require_once("Components/menu.php"); ?>
      <section id="wrap-content" class="load-fade">
        <header class="banner">
          <div class="title">
            <h3>REALIZA AQUI</h3>
            <h2>TU EVENTO</h2>
          </div>
          <?php include_once("Components/slider-events.php"); ?>
        </header>
        <article class="row">
          <p style="padding:12px;">¡Celebre su boda con nosotros! En Flores del Paraiso disponemos ubicaciones e instalaciones perfectas para que su día sea inmejorable. Entornos mágicos, atención personalizada y toda nuestra dedicación: valores que hacen de estos eventos una satisfacción garantizada para nuestros clientes.</p>
          <div class="row">
            <div class="col hide-on-med-and-down l6" style="margin-bottom: -6px">
              <img src="Assets/img/events/pic-events2.jpg">
            </div>

            <div id="item-text" class="col s12 m12 l6 hotel-text valign-wrapper">
              <div class="valign">
                <h3>CELEBRE SU BODA </h3>
                <h2><span>CON NO</span>SOTROS </h2>
                <p style="padding-top:20px;">Sabemos de la importancia de este día para ti, y por eso nuestro único objetivo es crear un evento único que quede en la memoria de todos los asistentes. Nuestro equipo de profesionales diseñará propuestas a medida para cada caso, adaptándose a los gustos y preferencias de los novios.</p>

               </div>
            </div>

          </div>

       </article>
 
      </section>
    </div>
  </body>
</html>
