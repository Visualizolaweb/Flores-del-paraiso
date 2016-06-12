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
            <h3>NUESTROS</h3>
            <h2>SERVICIOS</h2>
          </div>
          <?php include_once("Components/slider-services.php"); ?>
        </header>
        <article class="row services">

          <div class="col l3">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="Assets/img/services/thum-habitaciones.jpg">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Habitaciones<i class="material-icons right">more_vert</i></span>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Habitaciones<i class="material-icons right">close</i></span>
                <p>Contamos con 38 habitaciones (Acomodación individual, doble y triple), todas nuestras habitaciones cuentan con baño independiente, televisor LCD y citófono.</p>
                <span class="badge" style="background-color: #f26c6a; color: #fff; border-radius:5px; padding:5px">Planes desde $35.000 COP</span>
              </div>
            </div>
          </div>


          <div class="col l3">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="Assets/img/services/thum-suite.jpg">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">SUITES<i class="material-icons right">more_vert</i></span>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">SUITES<i class="material-icons right">close</i></span>
                <p>Por el momento nuestro hotel cuenta con dos Suites, ambas con las siguientes comodidades:</p>
                <ul>
                  <li>Jacuzzi</li>
                  <li>Nevera</li>
                  <li>Minibar</li>
                  <li>Botella de Champaña</li>
                  <li>Aceite para masajes y Aromas</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col l3">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="Assets/img/services/thum-wifi.jpg">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Internet WiFi<i class="material-icons right">more_vert</i></span>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Internet WiFi<i class="material-icons right">close</i></span>
                <p>Sabemos la importancia de mantenernos conectados, por eso tenemos cobertura WiFi gratuita en todo el edificio para nuestros huéspedes y visitantes.</p>
              </div>
            </div>
          </div>

          <div class="col l3">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="Assets/img/services/thum-tv.jpg">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">TV por Cable<i class="material-icons right">more_vert</i></span>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">TV por Cable<i class="material-icons right">close</i></span>
                <p>En nuestras habitaciones y lobby contamos con televisión por cable, una forma más  de disfrutar de la comodidad de nuestro hotel.</p>
              </div>
            </div>
          </div>

          <div class="col l3">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="Assets/img/services/thum-recepcion.jpg">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Recepción 24/7<i class="material-icons right">more_vert</i></span>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Recepción 24/7<i class="material-icons right">close</i></span>
                <p>Nuestra recepción está disponible 24 horas los 7 días a la semana para cumplir las necesidades de nuestros huéspedes.</p>
              </div>
            </div>
          </div>

          <div class="col l3">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="Assets/img/services/thum-restaurante.jpg">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Restaurante<i class="material-icons right">more_vert</i></span>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Restaurante<i class="material-icons right">close</i></span>
                <p>Cocina tradicional y moderna es lo que encontraras en nuestro restaurante, con alimentos frescos y la mejor atención que suroeste Antioqueño.</p>
              </div>
            </div>
          </div>

          <div class="col l3">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="Assets/img/services/thum-bar.jpg">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Bar<i class="material-icons right">more_vert</i></span>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Bar<i class="material-icons right">close</i></span>
                <p>Nada mejor que acompañar el descanso con una refrescante bebida o un excelente licor junto a una gran compañía... Licores nacionales e internacionales es lo que te ofrecemos en nuestro bar.</p>
              </div>
            </div>
          </div>

          <div class="col l3">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="Assets/img/services/thum-turco.jpg">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Turco<i class="material-icons right">more_vert</i></span>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Turco<i class="material-icons right">close</i></span>
                <p>Consiente tu piel y dale un merecido descanso a tu cuerpo gracias a nuestro maravilloso turco, la mejor manera de terminar el día.</p>
              </div>
            </div>
          </div>

          <div class="col l3">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="Assets/img/services/thum-gimnasio.jpg">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Gimnasio<i class="material-icons right">more_vert</i></span>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Gimnasio<i class="material-icons right">close</i></span>
                <p>¿Te preocupa tu rutina en el gimnasio?, acá no tendrás ese problema, el hotel flores del paraíso te ofrece el espacio para que le dediques a tu cuerpo un tiempo de ejercicio.</p>
              </div>
            </div>
          </div>

          <div class="col l3">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="Assets/img/services/thum-roomservices.jpg">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Room Services<i class="material-icons right">more_vert</i></span>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Room Services<i class="material-icons right">close</i></span>
                <p>No tienes que salir de tu cuarto si no quieres!, solicita nuestro servicio a la habitación y tendremos el placer de complacerte.</p>
              </div>
            </div>
          </div>
       </article>

      </section>
    </div>
  </body>
</html>
