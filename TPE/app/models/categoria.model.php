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
     * Devuelve el nombre de una categoria dado un id
     */
    function getNombreCategoriaById($id_categoria){
        $query = $this->db->prepare('SELECT nombre FROM categoria WHERE id = ?');
        $query->execute([$id_categoria]);

        // obtengo los resultados
        $categoria = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $categoria;
    }

    /**
     * Inserta una categoria en la base de datos.
    */
    function insertar($nombreCategoria) {
        //$db = $this->getDB();
        $query = $this->db->prepare("INSERT INTO categoria (nombre) VALUES (?)");
        $query->execute([$nombreCategoria]);

        return $this->db->lastInsertId(); 
    }

    /**
     * elimina una categoria en la base de datos.
    */
    function eliminarCategoriaById($id){
        // validar entrada de datos
        $query = $this->db->prepare("DELETE FROM categoria WHERE id = ?");
        $query->execute([$id]);
    }

    /**
     * edita una categoria en la base de datos.
    */
    function editarCategoriaById($id, $nombreCategoria){
        // validar entrada de datos
        $query = $this->db->prepare("UPDATE categoria SET nombre = ? WHERE id = ?");
        $query->execute([$nombreCategoria, $id]);

    //    var_dump($id, $nombreCategoria);
    }

}