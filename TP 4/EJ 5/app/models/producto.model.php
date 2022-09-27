<?php

class ProductoModel{

    private $db;
    
    function __construct(){
        $this->db = $this->getDB();
    }

    private function getDB() {
        $db = new PDO('mysql:host=localhost;'.'dbname=db_productos_limpieza;charset=utf8', 'root', '');
        return $db;
    }
        
    /**
     * Devuelve la lista de productos completa.
     */
    function getAll() {
        // 1. abro conexión a la DB en el constructor

        // 2. ejecuto la sentencia (2 subpasos)
        $query = $this->db->prepare('SELECT * FROM producto');
        $query->execute();

        // 3. obtengo los resultados
        $productos = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $productos;
    }

    function getProductoById($id) {
        // 2. ejecuto la sentencia (2 subpasos)
         $query = $this->db->prepare('SELECT * FROM producto WHERE id = ?');
         $query->execute([$id]);

        // 3. obtengo los resultados
        $producto = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos

        return $producto;
     }
}