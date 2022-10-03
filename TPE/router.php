<?php

require_once './app/controllers/producto.controller.php';
require_once './app/controllers/categoria.controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'home'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

$params = explode('/', $action);
$controllerProducto = new ProductoController();
$controllerCategoria = new CategoriaController();
//print_r($params[0]);

// tabla de ruteo
switch ($params[0]) {
    case 'home':
        $controllerProducto->verProductos();
        break;
    case 'verProducto':
        $id = $params[1];
        $controllerProducto->verProducto($id);
        break;
    case 'verCategorias':
        $controllerCategoria->verCategorias();
        break;
    case 'verProductosPorCategoria':
        $id = $params[1];
        $controllerProducto->verProductosPorCategoria($id);
        break;
    default:
        header("HTTP/1.0 404 Not Found");
        echo('404 Page not found'); // esto pertenece a la vista 
        break;
}