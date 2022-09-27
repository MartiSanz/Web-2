<?php

require_once './app/controllers/comentario.controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'list'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

$params = explode('/', $action);
//print_r($params[0]);

// tabla de ruteo
switch ($params[0]) {
    case 'list':
        $controller = new ComentarioController();
        $controller->showComentarios();
        break;
    case 'add':
        $controller = new ComentarioController();
        $controller->agregarComentario();
        break;
    default:
        header("HTTP/1.0 404 Not Found");
        echo('404 Page not found'); // esto pertenece a la vista 
        break;
}
