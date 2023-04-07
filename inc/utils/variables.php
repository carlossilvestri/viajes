<?php
   $phone = "919891119";
   $file = basename($_SERVER['PHP_SELF']);
   $page = str_replace(".php", "", $file);
   $footerInformation = "Puedes llamar al teléfono " .  $phone . " de forma totalmente gratuita y le atenderemos sin compromiso."; 
   $mainTitle = "Viajes";
    $titles = [
        "index.php" =>  $mainTitle . " | Inicio",
        "vuelos.php" =>  $mainTitle . " | Reservas Vuelos",
        "hoteles.php" =>  $mainTitle . " | Reservas Hoteles",
        "contacto.php" =>  $mainTitle . " | Asistencia y Contacto",
        "politica-de-privacidad.php" =>  $mainTitle . " | Política de Privacidad",
        "aviso-legal.php" =>  $mainTitle . " | Aviso Legal"
    ];
    $pages = [
        "index.php" => "Inicio",
        "vuelos.php" => "Reservas Vuelos",
        "hoteles.php" => "Reservas Hoteles",
        "contacto.php" => "Asistencia y Contacto",
        "politica-de-privacidad.php" => "Política de Privacidad",
        "aviso-legal.php" => "Aviso Legal"
    ];
    $pagesHeader = [
        "index.php" =>  "Inicio",
        "vuelos.php" =>  "Vuelos",
        "hoteles.php" =>  "Hoteles",
        "contacto.php" =>  "Contáctanos",
    ];
