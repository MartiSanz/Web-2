<?php

 //   print_r($_POST); //imprimo el formulario tal cual lo recibo
    $apellido = $_POST['apellido'];
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    echo('Apellidooooooo:'.$apellido);
    echo(' Nombre:'.$nombre);
    echo('<br>');
    echo('Edad:'.$edad);
    echo('<br>');
    echo('<br>');

?>

<a href="03.html"> Volver al formulario</a>