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
        $esHome = 1; // si es home muestro los botones de editar, eliminar y agregar producto
        $controllerProducto->verProductos($esHome);
        break;
    case 'verProducto':
        $id_producto = $params[1];
        $esHome = $params[2];
        $controllerProducto->verProducto($id_producto, $esHome);
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
    case 'verFormAgregarProducto':
        $categorias = $controllerCategoria->getCategorias();
        $controllerProducto->verFormAgregarProducto($categorias);
        break;
    case 'verFormEditarProducto':
        $id_producto = $params[1];
        $categorias = $controllerCategoria->getCategorias();
        $controllerProducto->verFormEditarProducto($categorias, $id_producto);
        break;
    case 'agregarProducto':
        $controllerProducto->agregarProducto();
        break;
    case 'editarProducto':
        print_r ($params[1]);
        $id_producto = $params[1];
        $controllerProducto->editarProducto($id_producto);
        break;
    case 'eliminarProducto':
        $id_producto = $params[1];
        $controllerProducto->eliminarProducto($id_producto);
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
