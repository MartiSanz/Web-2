<?php

  //  print_r($_REQUEST); // con esto veo que datos recibo
 
    require_once('operaciones.php');
  
    if(!is_numeric($_REQUEST['valor1']) 
        || !is_numeric($_REQUEST['valor2'])
        || empty($_REQUEST['operacion'])){
            echo('ERROR');
            die();
    }

    $operando1 = $_REQUEST['valor1'];
    $operando2 = $_REQUEST['valor2'];
    $operacion = $_REQUEST['operacion'];    

    switch($operacion){
        case 'sumar':{
            $resultado = $operando1 + $operando2;
            break;
        }
        case 'restar':{
            $resultado = restar($operando1, $operando2);
            break;
        }
        case 'multiplicar':{
            $resultado = multiplicar($operando1, $operando2);
            break;
        }
        case 'dividir':{
            $resultado = dividir($operando1, $operando2);
            break;
        }

        default: {
            echo('Fallo');
            break;
        }
    }

    echo('El resultado es: '.$resultado);

?>