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
    <script type="text/javascript" src="http://maps.google.com/maps/api/js"></script>
    <script type="text/javascript" src="Assets/js/hpneo-gmaps-0.4.24-0-g648f15a/hpneo-gmaps-648f15a/gmaps.js"></script>

    <script type="text/javascript">
      var map;
      $(document).ready(function(){

        map = new GMaps({
          el: '#map',
          lat:  6.316844979906267,
          lng: -76.1335078383064,
          zoom: 18,

        });
        map.addMarker({
          lat: 6.316844979906267,
          lng: -76.1340295279598,
          title: 'Hotel Flores el Paraiso',
          icon:'Assets/img/marker-maps.png'
        });

      });

    </script>

    <script type="text/javascript" src="Assets/js/materialize.min.js"></script>
    <script>
    $('#textarea1').trigger('autoresize');
    </script>
  </head>
  <body>
    <div class="container-fluid">
      <?php require_once("Components/menu.php"); ?>
      <section id="wrap-content" class="load-fade">
      <article class="row">
        <div class="col hide-on-med-and-down l9">
          <div class="span11 fade-right">
            <div id="map" ></div>
          </div>
        </div>
        <div id="contacto-panel" class="col s12 m12 l3">
          <div id="form-text" class="center-align">

              <h4 class="center-align">CONTACTENOS</h4>
              <ul>
                <li><strong>TELÉFONO:</strong> 8502057</li>
                <li><strong>CELULAR:</strong> 3104151508</li>
                <li><strong>DIRECCIÓN:</strong> CARRERA 30 N. 30-51<br>Urrao - Antioquia</li>
              </ul>


          </div>  <p style="padding:12px;" class="center-align">¿Tienes alguna inquietud?, escribenos un mensaje y con gusto te lo resolveremos.</p>
          <form method="post" action=" " style="padding:0 12px">
            <div class="input-field col s12">
              <input id="first_name" type="text" class="validate">
              <label for="first_name">Nombre Completo</label>
            </div>

            <div class="input-field col s12">
              <input id="first_name" type="text" class="validate">
              <label for="first_name">Correo Electrónico</label>
            </div>
            <div class="input-field col s12">
              <textarea id="textarea1" class="materialize-textarea"></textarea>
              <label for="first_name">Mensaje</label>
            </div>
            <button class="btn waves-effect waves-light">Enviar Mensaje</button>
          </form>
        </div>
       </article>

      </section>
    </div>
  </body>
</html>
