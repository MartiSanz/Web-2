<?php

class CategoriaModel{

    private $db;
    
    public function __construct(){
        $this->db = $this->getDB();
    }

    private function getDB() {
        $db = new PDO('mysql:host=localhost;'.'dbname=db_tienda;charset=utf8', 'root', '');
        return $db;
    }
        
    /**
     * Devuelve la lista de categorias completa.
     */
    function getAll() {

        $query = $this->db->prepare('SELECT * FROM categoria');
        $query->execute();

        // obtengo los resultados
        $categorias = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $categorias;
    }

    /**
     * Inserta una categoria en la base de datos.
    */
    function insert($nombreCategoria) {
        $db = $this->getDB();
        $query = $db->prepare("INSERT INTO categoria (nombre) VALUES (?)");
        $query->execute([$nombreCategoria]);

        return $db->lastInsertId();
    }

    // elimina una categoria
    function eliminarCategoriaById($id){
        // validar entrada de datos
        $db = $this->getDB();
        $query = $db->prepare("DELETE FROM categoria WHERE id = ?");
        $query->execute([$id]);
    }

    // editar
}