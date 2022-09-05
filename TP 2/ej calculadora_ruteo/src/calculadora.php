<?php

  //  print_r($_REQUEST); // con esto veo que datos recibo
 
    require_once('operaciones.php');

    function showOperacion($valor1 , $valor2, $operacion){
        if(!is_numeric($valor1) 
        || !is_numeric($valor2)
        || empty($operacion)){
            echo('ERROR');
            die();
        } 

        switch($operacion){
            case 'sumar':{
                $resultado = $valor1 + $valor2;
                break;
            }
            case 'restar':{
                $resultado = restar($valor1, $valor2);
                break;
            }
            case 'multiplicar':{
                $resultado = multiplicar($valor1, $valor2);
                break;
            }
            case 'dividir':{
                $resultado = dividir($valor1, $valor2);
                break;
            }

            default: {
                echo('Fallo');
                break;
            }
        }

        echo('El resultado es: '.$resultado);

    }