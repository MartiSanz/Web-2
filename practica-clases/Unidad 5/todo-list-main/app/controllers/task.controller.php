<?php

include_once './app/models/task.model.php';
include_once './app/views/task.view.php';
require_once './app/helpers/auth.helper.php';

class TaskController{
    private $model;
    private $view;

    public function __construct(){
        $this->view = new TaskView();
        $this->model = new TaskModel();

        // BARRRERA DE SEGURIDAD
        // Haciendolo de esta manera no le permito al usuario usar nada de
        // la aplicacion
        // Si quisiera solo permitirle NO USAR algunas funciones, debo sacarlo del constructor
        // y agregar la barrera de seguridad en las funciones en que solo va a tener permiso si esta logueado
        $authHelper = new AuthHelper();
        $authHelper->checkLoggedIn(); // verifica que el usuario este logueado

    }

    //imprime la lista de tareas
    function showTasks() {
        include './templates/header.tpl';
    
        //obtiene las tareas del modelo
        $tasks = $this->model->getAll();

        //actualiza la vista
        $this->view->showTask($tasks);
    }

    // inserta las tareas en el sistema
    function addTask() {
        // TODO: validar entrada de datos
    
        $title = $_POST['title'];
        $description = $_POST['description'];
        $priority = $_POST['priority'];
    
        if($_FILES['input_name']['type'] == "image/jpg" || $_FILES['input_name']['type'] == "image/jpeg" || $_FILES['input_name']['type'] == "image/png"){
            $id = $this->model->insertTask($title, $description, $priority, $_FILES['input_name']['tmp_name']);
        }
        else {
            $id = $this->model->insertTask($title, $description, $priority);
        }
    
        header("Location: " . BASE_URL); 
    }

    // elimina la tarea del sistema
    function deleteTask($id) {
        $this->model->deleteById($id);
        header("Location: " . BASE_URL); 
    }
}