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
                <h3>LA MEJOR OPCION EN EL MUNICIPIO</h3>
                <h2><span>DE U</span>RRAO</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec interdum rhoncus arcu eget porttitor. Praesent id sapien maximus, eleifend ex in, sollicitudin purus. Duis malesuada libero quis nunc tristique pretium. Mauris et enim pharetra augue lobortis suscipit tempus et nisl. In eu nulla in augue fringilla pretium dictum non odio. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce eu tellus in tortor lobortis varius et sed purus. Aenean semper, ex id elementum tincidunt, lorem tortor suscipit metus, quis fringilla ante eros at justo. Ut eu laoreet dui, vitae vestibulum risus. Proin ut dictum diam. Maecenas vel magna ut orci pellentesque viverra ut eu eros. Aenean in auctor purus. Pellentesque eget lacus tincidunt, hendrerit nibh sit amet, finibus nisl. Sed malesuada eget elit ac sodales.</p>
              </div>
            </div>

          </div>
        </article>

        <div class="parallax-container">
         <div class="parallax"><img src="Assets/img/town/pic-1.png"></div>
       </div>

       <article>
         <div class="row">

           <div class="col s12 m12 l6 hotel-text2 valign-wrapper">
             <div class="valign">
               <h3>HABITACIONES CONFORTABLES PARA</h3>
               <h2><span>SU D</span>ESCANSO</h2>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec interdum rhoncus arcu eget porttitor. Praesent id sapien maximus, eleifend ex in, sollicitudin purus. Duis malesuada libero quis nunc tristique pretium. Mauris et enim pharetra augue lobortis suscipit tempus et nisl. In eu nulla in augue fringilla pretium dictum non odio. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce eu tellus in tortor lobortis varius et sed purus. Aenean semper, ex id elementum tincidunt, lorem tortor suscipit metus, quis fringilla ante eros at justo. Ut eu laoreet dui, vitae vestibulum risus. Proin ut dictum diam. Maecenas vel magna ut orci pellentesque viverra ut eu eros. Aenean in auctor purus. Pellentesque eget lacus tincidunt, hendrerit nibh sit amet, finibus nisl. Sed malesuada eget elit ac sodales.</p>
             </div>
           </div>

           <div class="col hide-on-med-and-down l6 white-text">
             <div class="row">
               <div class="col s12" style="height:60vh">
                 <img src="Assets/img/rooms/Suite.jpg" width="100%">
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

      </section>
    </div>
  </body>
</html>
