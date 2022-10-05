<?php

include_once './app/models/categoria.model.php';
include_once './app/views/categoria.view.php';

class CategoriaController{
    private $model;
    private $view;

    public function __construct(){
        $this->view = new CategoriaView();
        $this->model = new CategoriaModel();
    }

    //imprime la lista de categorias
    function verCategorias() {    
        
        //obtiene los categorias del modelo
        $categorias = $this->model->getAll();

        //actualiza la vista
        $this->view->verCategorias($categorias);
    }

    function verFormCategoria() {   
        //actualiza la vista
        $this->view->verFormCategoria();
    }

    // inserta una categoria
    function agregarCategoria(){
        // validar entrada de datos
        $nombreCategoria = $_POST['nombre'];
    
        $id = $this->model->insert($nombreCategoria);

        //CONSULTAR puedo llamar a un mismo metodo del controlador?
        $this->verCategorias();
    }

    // elimina una categoria
    function eliminarCategoria($id){
        // validar entrada de datos
        $this->model->eliminarCategoriaById($id);

        $this->verCategorias();
    }

    // edita una categoria
    function editarCategoria(){
        // validar entrada de datos
    
        $nombreCategoria = $_POST['nombre'];
    
        $id = $this->model->insert($nombreCategoria);

        $this->view->verFormCategoria();
    
        header("Location: " . BASE_URL); 
    }
    

}