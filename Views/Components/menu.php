<?php
  $archivo_actual = basename($_SERVER['PHP_SELF']);

  $a = "";
  $b = "";
  $c = "";
  $d = "";
  $e = "";
  $f = "";
  $g = "";
  $h = "";

  switch ($archivo_actual) {
    default: $a = "class='select'"; break;
    case 'hotel.php': $b = "class='select'"; break;
    case 'servicios.php': $c = "class='select'"; break;
    case 'tarifa.php': $d = "class='select'"; break;
    case 'galeria.php': $e = "class='select'"; break;
    case 'eventos.php': $f = "class='select'"; break;
    case 'ubicacion.php': $g = "class='select'"; break;
    case 'contactenos.php': $h = "class='select'"; break;
  }
?>

  <header class="menu elastic-left hide-on-med-and-down">
      <div id="logotype"><img src="Assets/img/Flores-del-paraiso-logotipo.png" alt="Flores del Paraiso, la mejor opción de Urrao - Antioquía"/></div>
      <div id="nav">
        <ul>
          <li <?php echo $a; ?>><a href="index.php">INICIO</a></li>
          <li <?php echo $b; ?>><a href="hotel.php">EL HOTEL</a></li>
          <li <?php echo $c; ?>><a href="servicios.php">SERVICIOS</a></li>
          <li <?php echo $d; ?>><a href="tarifa.php">TARIFA</a></li>
          <li <?php echo $e; ?>><a href="galeria.php">GALERIA</a></li>
          <li <?php echo $f; ?>><a href="eventos.php">EVENTOS</a></li>
          <li <?php echo $g; ?>><a href="ubicacion.php">UBICACION</a></li>
          <li <?php echo $h; ?>><a href="contactenos.php">CONTACTENOS</a></li>
        </ul>
        <a class="booking-access waves-effect waves-light btn-large" href="#">REALIZAR RESERVA</a>
      </div>
        <ul class="row social-icons center-align">
          <li class="col m4"><a href="" target="_blank"><i class="fa fa-facebook-official"></i></a></li>
          <li class="col m4"><a href="" target="_blank"><i class="fa fa-instagram"></i></a></li>
          <li class="col m4"><a href="" target="_blank"><i class="fa fa-twitter-square"></i></a></li>
        </ul>

  </header>
  <header class="menu-mobile hide-on-large-only">
    <div id="logotype"><img src="Assets/img/Flores-del-paraiso-logotipo.png" alt="Flores del Paraiso, la mejor opción de Urrao - Antioquía"/></div>
    <a href="#" data-activates="mobile-demo" class="button-collapse white-text"><i class="fa fa-bars"> </i></a>
    <ul class="side-nav" id="mobile-demo">
      <li><a href="index.php">INICIO</a></li>
      <li><a href="hotel.php">EL HOTEL</a></li>
      <li><a href="servicios.php">SERVICIOS</a></li>
      <li><a href="tarifa.php">TARIFA</a></li>
      <li><a href="galeria.php">GALERIA</a></li>
      <li><a href="eventos.php">EVENTOS</a></li>
      <li><a href="ubicacion.php">UBICACION</a></li>
      <li><a href="contactenos.php">CONTACTENOS</a></li>
      </ul>
  </header>
