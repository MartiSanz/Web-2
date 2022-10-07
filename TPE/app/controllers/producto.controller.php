<?php

include_once './app/models/producto.model.php';
include_once './app/views/producto.view.php';

class ProductoController{
    private $model;
    private $view;

    public function __construct(){
        $this->view = new ProductoView();
        $this->model = new ProductoModel();
    }

    //imprime la lista de productos
    function verProductos($esHome) {    
        
        //obtiene los productos del modelo
        $productos = $this->model->getAll();
        //actualiza la vista
        $this->view->verProductos($productos, $esHome);
    }

    //muestra la descr y precio del producto
    function verProducto($id, $esHome) {   
        $producto = $this->model->getProductoById($id);

        //actualiza la vista
        $this->view->verProducto($producto, $esHome);
    }

    function verProductosPorCategoria($idCategoria) {   

        $productos = $this->model->getProductoByCategoriaId($idCategoria);
        $esHome = 0;
        //actualiza la vista
        $this->view->verProductos($productos, $esHome);
    }

    // inserta un producto
    function agregarProducto(){
        // validar entrada de datos
        $nombreProducto = $_POST['nombre'];
        $nombreMarca = $_POST['marca'];
        $precio = $_POST['precio'];
        $idCategoria = $_POST['idCategoria'];
    
        $id = $this->model->insertar($nombreProducto, $nombreMarca, $precio, $idCategoria);

        header('Location: ' .BASE_URL. 'home');
    }

    // edita un producto
    function editarProducto($id_producto){
        // validar entrada de datos
        $nombreProducto = $_POST['nombre'];
        $nombreMarca = $_POST['marca'];
        $precio = $_POST['precio'];
        $idCategoria = $_POST['idCategoria'];
    
        $id = $this->model->editarProducto($id_producto, $nombreProducto, $nombreMarca, $precio, $idCategoria);

        header('Location: ' .BASE_URL. 'home');
    }

    function verFormAgregarProducto($listadoCategorias) {   
        //actualiza la vista
        $this->view->verFormAgregarProducto($listadoCategorias);
    }

    function verFormEditarProducto($listadoCategorias, $id_producto) {   
        //actualiza la vista
        $producto = $this->model->getProductoById($id_producto);

        $this->view->verFormEditarProducto($listadoCategorias, $producto);
    }

    // elimina un producto
    function eliminarProducto($id){
        // validar entrada de datos
        $this->model->eliminarProductoById($id);

        header('Location: ' .BASE_URL. 'home');
    }
}