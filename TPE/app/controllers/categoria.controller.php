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

}