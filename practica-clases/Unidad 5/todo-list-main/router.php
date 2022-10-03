<?php

require_once './app/controllers/task.controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'list'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

// parsea la accion Ej: dev/juan --> ['dev', juan]
$params = explode('/', $action);


// tabla de ruteo
switch ($params[0]) {
    case 'list':
        $controller = new TaskController();
        $controller->showTasks();
        break;
    case 'add':
        $controller = new TaskController();
        $controller->addTask();
        break;
    case 'delete':
        // obtengo el parametro de la acción
        $controller = new TaskController();
        $id = $params[1];
        $controller->deleteTask($id);
        break;
    default:
        header("HTTP/1.0 404 Not Found");
        echo('404 Page not found'); // esto pertenece a la vista 
        break;
}
