<?php 

    require_once '04.php';

    $indice = $_GET['id'];
    $limite = $opciones[$indice];

    echo('<ul>');
        for($i = 0; $i < $limite; $i ++){
           $cadena = '<li>'.$i.'</li>';
           echo($cadena);
        }
    echo('</ul>');
?>
