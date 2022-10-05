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
        $id_producto = $params[1];
        $controllerProducto->verProducto($id_producto);
        break;
    case 'verCategorias':
        $controllerCategoria->verCategorias();
        break;
    case 'verProductosPorCategoria':
        $id_categoria = $params[1];
        $controllerProducto->verProductosPorCategoria($id_categoria);
        break;
    case 'verFormAgregarCategoria':
        $controllerCategoria->verFormAgregarCategoria();
        break;
    case 'verFormEditarCategoria':
        $id_categoria = $params[1];
        $controllerCategoria->verFormEditarCategoria($id_categoria);
        break;
    case 'agregarCategoria':
        $controllerCategoria->agregarCategoria();
        break;
    case 'eliminarCategoria':
        $id_categoria = $params[1];
        $controllerCategoria->eliminarCategoria($id_categoria);
        break;
    case 'editarCategoria':
        $id_categoria = $params[1];
        $controllerCategoria->editarCategoria($id_categoria);
        break;
    default:
        header("HTTP/1.0 404 Not Found");
        break;
}
