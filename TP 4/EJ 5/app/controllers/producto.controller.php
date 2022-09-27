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
    function showProductos() {    
        //obtiene los productos del modelo
        $productos = $this->model->getAll();

        //actualiza la vista
        $this->view->showProductos($productos);
    }

    //muestra la descr y precio del producto
    function verProducto($id) {    
        $producto = $this->model->getProductoById($id);
//        header("Location: " . BASE_URL); 

        //actualiza la vista
        $this->view->verProducto($producto);
    }
}