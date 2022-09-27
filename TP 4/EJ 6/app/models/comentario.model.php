<?php

class ComentarioModel{

    private $db;
    
    function __construct(){
        $this->db = $this->getDB();
    }

    private function getDB() {
        $db = new PDO('mysql:host=localhost;'.'dbname=db_comentario;charset=utf8', 'root', '');
        return $db;
    }
        
    /**
     * Devuelve la lista de comentarios completa.
     */
    function getAll() {
        // 1. abro conexión a la DB en el constructor

        // 2. ejecuto la sentencia (2 subpasos)
        $query = $this->db->prepare('SELECT * FROM comentario');
        $query->execute();

        // 3. obtengo los resultados
        $comentarios = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $comentarios;
    }

    /**
     * Inserta un comentario en la base de datos.
    */
    function insert($titulo, $descripcion) {
         $query = $this->db->prepare("INSERT INTO comentario (titulo, descripcion) VALUES (?, ?)");
         $query->execute([$titulo, $descripcion]);
 
         return $this->db->lastInsertId(); // luego de hacer el insert devuelve el id
     }

}