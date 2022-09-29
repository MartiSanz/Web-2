<?php

class CategoriaModel{

    private $db;
    
    public function __construct(){
        $this->db = $this->getDB();
    }

    private function getDB() {
        $db = new PDO('mysql:host=localhost;'.'dbname=sistema;charset=utf8', 'root', '');
        return $db;
    }
        
    /**
     * Devuelve la lista de Categorias completa.
     */
    function getAll() {

        $query = $this->db->prepare('SELECT * FROM categoria');
        $query->execute();

        // obtengo los resultados
        $categorias = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $categorias;
    }

    function getCategoriaById($id) {

         $query = $this->db->prepare('SELECT * FROM categoria WHERE id = ?');
         $query->execute([$id]);

        // obtengo los resultados
        $categoria = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos

        return $categoria[0];
    }

    //faltan agregar, eliminar y editar
}