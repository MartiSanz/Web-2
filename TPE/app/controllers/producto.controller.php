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
    function verProductos() {    
        
        //obtiene los productos del modelo
        $productos = $this->model->getAll();
        //actualiza la vista
        $this->view->verProductos($productos);
    }

    //muestra la descr y precio del producto
    function verProducto($id) {   
        $producto = $this->model->getProductoById($id);

        //actualiza la vista
        $this->view->verProducto($producto);
    }

    function verProductosPorCategoria($idCategoria) {   

        $productos = $this->model->getProductoByCategoriaId($idCategoria);

        //actualiza la vista
        $this->view->verProductos($productos);
    }
}