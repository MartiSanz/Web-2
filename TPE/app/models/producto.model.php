<?php

class ProductoModel{

    private $db;
    
    public function __construct(){
        $this->db = $this->getDB();
    }

    private function getDB() {
        $db = new PDO('mysql:host=localhost;'.'dbname=db_tienda;charset=utf8', 'root', '');
        return $db;
    }
        
    /**
     * Devuelve la lista de productos completa.
     */
    function getAll() {

        $query = $this->db->prepare('SELECT * FROM producto');
        $query->execute();

        // obtengo los resultados
        $productos = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $productos;
    }

    function getProductoById($id) {

        //CONSULTAR
        // Esta bien llamar dos tablas desde el model de producto? Aca se debe mostrar la categoria?
        $query = $this->db->prepare('SELECT p.id, p.nombre as productoNombre, p.marca, p.precio, c.nombre as categoriaNombre FROM producto p JOIN categoria c on c.id = p.id_categoria_fk WHERE p.id = ?');
        $query->execute([$id]);

        // obtengo los resultados
        $producto = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos

        return $producto[0];
    }

    function getProductoByCategoriaId($id){

        $query = $this->db->prepare('SELECT * FROM producto WHERE id_categoria_fk = ?');
        $query->execute([$id]);

        // obtengo los resultados
        $productos = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $productos;
    }

    /**
     * Inserta una categoria en la base de datos.
    */
    function insertar($nombreProducto, $nombreMarca, $precio, $idCategoria){
        $query = $this->db->prepare("INSERT INTO producto (nombre,marca,precio,id_categoria_fk) VALUES (?,?,?,?)");
        $query->execute([$nombreProducto,$nombreMarca,$precio,$idCategoria]);

        return $this->db->lastInsertId(); 
    }

    /**
     * elimina un prodcuto en la base de datos.
    */
    function eliminarProductoById($id){
        // validar entrada de datos
        $query = $this->db->prepare("DELETE FROM producto WHERE id = ?");
        $query->execute([$id]);
    }

    //falta editar
}