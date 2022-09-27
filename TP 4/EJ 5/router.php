<?php

require_once './app/controllers/producto.controller.php';

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
        $controller = new ProductoController();
        $controller->showProductos();
        break;
    case 'verProducto':
        // obtengo el parametro de la acción
        $controller = new ProductoController();
        $id = $params[1];
        $controller->verProducto($id);
        break;
    default:
        header("HTTP/1.0 404 Not Found");
        echo('404 Page not found'); // esto pertenece a la vista 
        break;
}
