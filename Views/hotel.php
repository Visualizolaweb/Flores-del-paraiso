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
      <section id="wrap-content" class="load-fade">
        <header class="banner">
          <div class="title">
            <h3>CONOCE NUESTRO</h3>
            <h2>HOTEL</h2>
          </div>
          <?php include_once("Components/slider-home.php"); ?>
        </header>
        <article>
          <div class="row">
            <div class="col hide-on-med-and-down l6" style="margin-bottom: -6px">
              <img src="Assets/img/hotel/pic-hotel-2.jpg">
            </div>

            <div id="item-text" class="col s12 m12 l6 hotel-text valign-wrapper">
              <div class="valign">
                <h3>Nuestra</h3>
                <h2>VISIÓN </h2>
                <p>El hotel Flores del Paraíso será en el año 2020, el hotel de referencia en el municipio de Urrao Antioquia, por la calidad del servicio y por su estilo moderno e innovador.</p>

                <h3 class="right-align" style="padding-right:12px;">Nuestra</h3>
                <h2 class="right-align" style="padding-right:12px;">MISIÓN </h2>
                <p>Estamos comprometidos a satisfacer las necesidades de nuestros clientes, superando sus expectativas y brindando experiencias memorables.</p>
              </div>
            </div>

          </div>
        </article>

        <div class="parallax-container  parallax-banner">
         <div class="parallax"><img src="Assets/img/town/pic-1.png"></div>
       </div>

       <article>
         <div class="row">

           <div class="col s12 m12 l6 hotel-text2 valign-wrapper">
             <div class="valign">
               <h3>OBJETIVOS</h3>
               <h2><span>ESTRA</span>TÉGICOS</h2>
               <ul id="hotel-items">
                  <li>Lograr una buena gestión del talento humano, para disponer de empleados capacitados y con alto sentido de pertenencia que permitan garantizar el cumplimiento de la misión y visión de la organización.</li>
                  <li>Consolidar la calidad como la principal ventaja competitiva, mediante la prestación de un servicio que supere las expectativas de los clientes.</li>
                  <li>Impulsar la competitividad del sector, para contribuir a la generación de ingresos y fortalecer el municipio como un destino turístico atrayente.</li>
                  <li>Posicionar nuestra organización como la mejor opción en hospedaje de calidad en el suroeste antioqueño.</li>
                  <li>Innovar constantemente en la prestación del servicio, ofreciendo valores agregados constantes a la experiencia de hospedaje del viajero.</li>
                </ul>
             </div>
           </div>

           <div class="col hide-on-med-and-down l6 white-text">
             <div class="row">
               <div class="col s12" style="height:60vh">
                 <img src="Assets/img/rooms/Suite2.jpg" width="100%">
               </div>
               <div class="col s12" style="background-color: #57585a;height:40vh">
                 <div class="ads-room">
                   <h4>TODAVIA NO HA ELEGIDO UNA HABITACION?</h4>

                   <p>suscipit orem ipsum dolor sit amet, consectetur  adipiscing elit. Donec interdum rhoncus arcu eget  porttitor. Praesent id sapien maximus, eleifend ex in,</p>
                   <a href="" class="btn wave-effect waves-light">VER LAS HABITACIONES</a>
                 </div>
               </div>
             </div>
           </div>



         </div>
       </article>

       <article>
         <div class="row blue-grey darken-4 white-text">

           <div class="col s12 hotel-text3  " style="text-align: justify">
             <div class="valign">
               <h4 class="center-align">VALORES CORPORATIVOS</h4>
               <div class="col s12 m6 l4" style="padding:0px 12px;">

                 <h5>Honestidad</h5>
                 <p>Cumplimos con transparencia cada una de las actividades desarrolladas, para generar confianza y lealtad de clientes internos y externos.</p>
               </div>

               <div class="col s12 m6 l4" style="padding:0px 12px;">

                 <h5>Respeto</h5>
                 <p>Trabajamos con amor y compromiso para brindar una actitud de cortesía hacia todas las personas involucradas con nuestra organización.</p>
               </div>

               <div class="col s12 m6 l4"  style="padding:0px 12px;">

                 <h5>Responsabilidad</h5>
                 <p>Prestamos servicios de calidad y protegemos el medio ambiente. Hacemos las cosas de la mejor manera, cumpliendo los compromisos adquiridos y asumiendo positivamente las consecuencias de nuestros errores.</p>
               </div>

               <div class="col s12 m6 l4"  style="padding:0px 12px;">

                 <h5>Innovación</h5>
                 <p>Estamos en constante investigación para estar a la vanguardia, porque consideramos que es fundamental la satisfacción de nuestros clientes.</p>
               </div>

               <div class="col s12 m6 l4"  style="padding:0px 12px;">

                 <h5>Trabajo en Equipo</h5>
                 <p>Contamos con un grupo de trabajo comprometido a la unión de esfuerzos, orientados hacia la prestación de un servicio de calidad.</p>
               </div>
             </div>
           </div>

         </div>
       </article>

      </section>
    </div>
  </body>
</html>
