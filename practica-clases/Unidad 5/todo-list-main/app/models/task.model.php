<?php
class TaskModel{
    private $db;
    
    private function getDB() {
        $db = new PDO('mysql:host=localhost;'.'dbname=db_tasks;charset=utf8', 'root', '');
        return $db;
    }
        
    /**
     * Devuelve la lista de tareas completa.
     */
    function getAll() {
        // 1. abro conexión a la DB
        $db = $this->getDB();

        // 2. ejecuto la sentencia (2 subpasos)
        $query = $db->prepare('SELECT * FROM task');
        $query->execute();

        // 3. obtengo los resultados
        $tasks = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $tasks;
    }

    /**
     * Inserta una tarea en la base de datos.
     */
    function insertTask($title, $description, $priority, $imagen) {
        $pathImg = null;
        if ($imagen)
            $pathImg = $this->uploadImage($imagen);

        $db = $this->getDB();
        $query = $db->prepare("INSERT INTO task (titulo, descripcion, prioridad, finalizada, imagen) VALUES (?, ?, ?, ?, ?)");
        $query->execute([$title, $description, $priority, false, $pathImg]);

        return $db->lastInsertId();
    }

    private function uploadImage($image){
        $target = 'img/task/' . uniqid() . '.jpg'; // verifica que el nombre sea unico
        move_uploaded_file($image, $target);
        return $target;
    }


    /**
     * Elimina una tarea dado su id.
     */
    function deleteById($id) {
        $db =  $this->getDB();
        $query = $db->prepare('DELETE FROM task WHERE id = ?');
        $query->execute([$id]);
    }

}