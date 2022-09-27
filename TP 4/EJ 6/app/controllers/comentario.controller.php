<?php

include_once './app/models/comentario.model.php';
include_once './app/views/comentario.view.php';

class ComentarioController{
    private $model;
    private $view;

    public function __construct(){
        $this->view = new ComentarioView();
        $this->model = new ComentarioModel();
    }

    //imprime la lista de comentarios
    function showComentarios() {    
        include './templates/header.php';
        //obtiene los comentarios del modelo
        $comentarios = $this->model->getAll();

        //actualiza la vista
        $this->view->showComentarios($comentarios);
    }
    
    // inserta comentario en el sistema
    function agregarComentario() {
      // TODO: validar entrada de datos
  
      $titulo = $_POST['titulo'];
      $descripcion = $_POST['descripcion'];
  
      $id = $this->model->insert($titulo, $descripcion);
  
      header("Location: " . BASE_URL); 
  }
}