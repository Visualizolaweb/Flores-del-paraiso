<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Bienvenidos a Flores del Paraiso</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="Assets/css/materialize.min.css">
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
      <section id="wrap-content">

        <div class="row">
          <div class="col s12 m12 l6 first-pane">
               <?php require_once("Components/rooms-home.php"); ?>
          </div>

          <div class="col s12 m12 l6">
              <div class="row">
                <div class="col s12 m6 l12 second-pane">
                  <div class="text">
                    <h4>Todos nuestros planes son con</h4>
                    <h2>DESAYUNO</h2>
                    <h3>Incluido</h3>
                  </div>

                  <div class="center-align">
                    <a href="#" class="btn-panel "> Mas Información</a>
                  </div>
                </div>
                <div class="col s12 m6 l12 black third-pane hide-on-small-only">
                  <div class="video-container">
                    <iframe width="100%" height="100%" src="//www.youtube.com/embed/tiryD0uCZPY?rel=0" frameborder="0" allowfullscreen></iframe>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col s12 m12 l6 four-pane">
              <div class="text white-text">
                <h3>Somos la mejor alternativa en</h3>
                <h4>URRAO</h4>
              </div>
              <img src="Assets/img/pic-home.jpg" alt="La mejor opción de URRAO"/>
          </div>

          <div class="col s12 m12 l6">
              <div class="row">
                <div class="col m12  five-pane">
                    <img src="Assets/img/pic-home-2.jpg" alt="La mejor opción de URRAO"/>
                </div>
                <div class="col m12 white five-pane">
                  <div class="text">
                    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                    <h2>Aenean in auctor purus.</h2>
                    <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus sed gravida leo, nec venenatis sem. Phasellus blandit venenatis mauris vel malesuada. Phasellus pellentesque in nunc nec tincidunt. Maecenas posuere ante neque, semper eleifend odio lacinia nec. Vivamus viverra volutpat tortor, et commodo arcu congue eget. Nulla molestie eros non tincidunt venenatis. Proin sed ligula justo. Vestibulum luctus efficitur ultricies. Curabitur in mattis ex, vitae tristique quam. Suspendisse condimentum volutpat venenatis. Nam libero urna, varius </p>
                  </div>
                </div>
              </div>
          </div>
        </div>


      </section>
    </div>

  </body>
</html>
