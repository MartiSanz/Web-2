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

    function verFormAgregarCategoria() {   
        //actualiza la vista
        $this->view->verFormAgregarCategoria();
    }

    function verFormEditarCategoria($id_categoria) {   
        //actualiza la vista
        $nombreCategoria = $this->model->getNombreCategoriaById($id_categoria);

        //FALTA TERMINAR, VER SI MANDA UN ARREGLO O SI MANDA EL NOMBRE DE LA CATEGORIA

        //verFromEditarCategoria d ela vista esta sin acomodar . tambien falta agregar el nombre actual de la categoria al formulario para que se vea como referencia de lo que se esta editando
        $this->view->verFormEditarCategoria($id_categoria, $nombreCategoria[0]);
    }

    // inserta una categoria
    function agregarCategoria(){
        // validar entrada de datos
        $nombreCategoria = $_POST['nombre'];
    
        $id = $this->model->insertar($nombreCategoria);

        header('Location: ' .BASE_URL. 'verCategorias');
    }

    // elimina una categoria
    function eliminarCategoria($id){
        // validar entrada de datos
        $this->model->eliminarCategoriaById($id);

        header('Location: ' .BASE_URL. 'verCategorias');
    }

    // edita una categoria
    function editarCategoria($id){
        // validar entrada de datos
    
        $nombreCategoria = $_POST['nombre'];
    
        $id = $this->model->editarCategoriaById($id, $nombreCategoria);

        header('Location: ' .BASE_URL. 'verCategorias');
    }
    

}