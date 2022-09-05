<?php

    require_once "src/calculadora.php";
    require_once "src/sections.php";
    
    // esto se define para que pueda leer las imagenes con rutas 
    // define na constante para generar una url semantica
    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    //Debe leer una acción y una lista de parámetros => :action/[:a/:b]
    if(!empty($_GET['action'])){
        $action = $_GET['action'];
    }
    else{
        $action = 'home'; // accion por defecto si viene sin accion
    }

    $params = explode('/', $action); // array

    //determina que camino seguir

    if(!empty($params[1]) && !empty($params[2])){
        showOperacion($params[1], $params[2], $params[0]); // mando los valores y la operacion a realizar
    }
    else{
        switch($params[0]){ //$params[0] es actiom
            case 'home': // PRIMER PANTALLA QUE VEMOS
                showHome(); 
                break;
            case 'pi':
                showPi(); 
                break;
            case 'about':
                if(isset($params[1])){
                    showAbout($params[1]); // si viene un dev particular
                }
                else{
                    showAbout(null); // si no viene con dev particular
                }
                break;
            default:
                echo('error');
                break;
    
        }
    
    }
