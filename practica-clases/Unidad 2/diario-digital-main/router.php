<?php
require_once 'noticias.php';
require_once 'about.php';

//Se define la URL siempre asi
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

// leo el parametro accion
$action = 'home'; // accion por defecto que lee de lo que se manda en href
if (!empty($_GET['action'])) {
    $action = $_GET['action'];  // action => about/juan
}

// parsea la accion Ej: about/juan --> ['about', 'juan']
$params = explode('/', $action); // genera un arreglo
    
switch ($params[0]) {
    case 'home':
        showHome();
        break;
    case 'noticia':
        showNoticia($params[1]);
        break;
    case 'about':
        if (empty($params[1])) {
            showAbout();
        } else {
            showAbout($params[1]);
        }
        break;
    default:
        echo "404 not found";
        # code...
        break;
}