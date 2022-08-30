<?php

    //SI EL ARREGLO NO ESTA VACIO, MUESTRO
    if(!empty($_POST)){
        $apellido = $_POST['apellido'];
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        echo('Apellidooooooo:'.$apellido);
        echo(' Nombre:'.$nombre);
        echo('<br>');
        echo('Edad:'.$edad);
        echo('<br>');
        echo('<br>');
    }

?>

<form method="POST" action="03_2.php"> 
 <!--   indico que lo que reciba en este formulario va a ser enviado por POST al archivo 03.php -->
    <label>Nombre:</label><input type="text" name="nombre"/></label>
    <label>Apellido:</label><input type="text" name="apellido"/></label>
    <label>Edad:</label><input type="text" name="edad"/></label>
    <input type="submit">
</form>


<a href="03_2.php"> Volver al formulario</a>


