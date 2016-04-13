<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Bienvenidos a Flores del Paraiso</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="Assets/css/materialize.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Assets/css/main.css" media="screen" title="no title" charset="utf-8">


    <script type="text/javascript" src="Assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="Assets/js/materialize.min.js"></script>
    <script type="text/javascript" src="Assets/js/main.js"></script>
  </head>
  <body>
    <div class="container-fluid">
      <?php require_once("Components/menu.php"); ?>
      <section id="wrap-content">
        <div class="row">
          <div class="col m6 first-pane">
               <?php require_once("Components/rooms-home.php"); ?>
          </div>

          <div class="col m6">
              <div class="row">
                <div class="col m12 yellow second-pane">
                  <div class="text">
                    <h4>Todos nuestros planes son con</h4>
                    <h2>DESAYUNO</h2>
                    <h3>Incluido</h3>
                  </div>

                  <div class="center-align">
                    <a href="#" class="btn-panel "> Mas Información</a>
                  </div>
                </div>
                <div class="col m12 black third-pane">
                  <div class="video-container">
                    <iframe width="100%" height="100%" src="//www.youtube.com/embed/tiryD0uCZPY?rel=0" frameborder="0" allowfullscreen></iframe>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col m6 four-pane">
              <div class="text white-text">
                <h3>Somos la mejor alternativa en</h3>
                <h4>URRAO</h4>
              </div>
              <img src="Assets/img/pic-home.jpg" alt="La mejor opción de URRAO"/>
          </div>

          <div class="col m6">
              <div class="row">
                <div class="col m12 yellow second-pane">
                  <div class="text">
                    <h4>Todos nuestros planes son con</h4>
                    <h2>DESAYUNO</h2>
                    <h3>Incluido</h3>
                  </div>

                  <div class="center-align">
                    <a href="#" class="btn-panel "> Mas Información</a>
                  </div>
                </div>
                <div class="col m12 black third-pane">
                  <div class="video-container">
                  
                  </div>
                </div>
              </div>
          </div>
        </div>

      </section>
    </div>

  </body>
</html>
