<?php

include_once 'app/models/task.model.php';
include_once 'app/views/task.view.php';

class TaskController{

    private $model;
    private $view;

    function __construct(){
        $this->view = new TaskView();
        $this->model = new TaskModel();
    }

    //imprime la lista de tareas
    function showTasks() {
        include './templates/header.php';
    
        //obtiene las tareas del modelo
        $tasks = $this->model->getAllTasks();

        //actualiza la vista
        $this->view->showTask($task);
    }

    // inserta las tareas en el sistema
    function addTask() {
        // TODO: validar entrada de datos
    
        $title = $_POST['title'];
        $description = $_POST['description'];
        $priority = $_POST['priority'];
    
        $id = $this->model->insertTask($title, $description, $priority);
    
        header("Location: " . BASE_URL); 
    }

    // elimina la tarea del sistema
    function deleteTask($id) {
        $this->model->deleteTaskById($id);
        header("Location: " . BASE_URL); 
    }
}