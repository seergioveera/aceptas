<?php

	$lugar = $_POST['lugar'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];

    // echo "".$lugar;
    // echo "".$fecha;
    // echo "".$hora;
    header("Status: 301 Moved Permanently");
    header("Location: https://api.whatsapp.com/send?phone=+5950982879587&text=Lugar:%20$lugar. %0D%0AFecha:%20$fecha. %0D%0AHora: $hora");
    exit;

 ?>
