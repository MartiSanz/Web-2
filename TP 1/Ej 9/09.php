<?php

    //SI EL ARREGLO NO ESTA VACIO, MUESTRO
    if(!empty($_POST)){
    //    print_r($_POST); //imprimo el formulario tal cual lo recibo

        $apellido = $_POST['apellido'];
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        $paises = $_POST['paises'];
        
        if(!empty($_POST['Genero1']))
            $genero = $_POST['Genero1'];
        if(!empty($_POST['Genero2']))
            $genero = $_POST['Genero2'];
        if(!empty($_POST['Genero3']))
            $genero = $_POST['Genero3'];

        echo('Apellidooooooo:'.$apellido);
        echo('<br>');
        echo(' Nombre:'.$nombre);
        echo('<br>');
        echo('Edad:'.$edad);
        echo('<br>');
        echo('Pais:'.$paises);
        echo('<br>');
        echo('Genero:'.$genero);
        echo('<br>');
    }

?>

<form method="POST" action="09.php"> 
 <!--   indico que lo que reciba en este formulario va a ser enviado por POST al archivo 03.php -->
    <label>Nombre:</label><input type="text" name="nombre"/></label>
    <label>Apellido:</label><input type="text" name="apellido"/></label>
    <label>Edad:</label><input type="text" name="edad"/></label>
    <input type="radio" name="Genero1" value="Genero 1"><label for="g1">Genero 1</label>
    <input type="radio" name="Genero2" value="Genero 2"><label for="g2">Genero 2</label>
    <input type="radio" name="Genero3" value="Genero 3"><label for="g3">Genero 3</label>

    <label for="pais">Pais:</label>
    <select name="paises" id="paises">
        <option value="Arg">Arg</option>
        <option value="Uru">Uru</option>
    </select>
    <input type="submit">
</form>


<a href="09.php"> Volver al formulario</a>


