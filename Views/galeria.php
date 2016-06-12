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
    <link rel="stylesheet" href="Assets/js/galereya-latest/galereya-latest/css/jquery.galereya.css">
    <!--[if lt IE 9]>
    <link rel="stylesheet" href="Assets/js/galereya-latest/galereya-latest/css/jquery.galereya.ie.css">
     <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <script type="text/javascript" src="Assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="Assets/js/materialize.min.js"></script>
    <script type="text/javascript" src="Assets/js/galereya-latest/galereya-latest/js/jquery.galereya.min.js"></script>
    <script type="text/javascript" src="Assets/js/main.js"></script>

  </head>
  <body>
    <div class="container-fluid">
      <?php require_once("Components/menu.php"); ?>
      <section id="wrap-content" class="load-fade">
        <header class="banner">
          <div class="title">
            <h3></h3>
            <h2>GALERIA</h2>
          </div>
          <?php include_once("Components/slider-galeria.php"); ?>
        </header>
        <article class="row services">
          <div id="gallery">

            <?php
            for ($i=1; $i <= 60 ; $i++) {
              echo "  <img src='Assets/img/Gallery/thum/".$i.".jpg' data-desc='Flores del Paraiso Foto Nº ".$i."'  data-fullsrc='Assets/img/Gallery/big/".$i.".jpg'/>";

            }
            ?>
          </div>
       </article>
      </section>
    </div>
  </body>
</html>
