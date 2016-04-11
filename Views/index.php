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
          <div class="col m12">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
      </section>
    </div>

  </body>
</html>
