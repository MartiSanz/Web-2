<?php

class ProductoView{
    
    function showProductos($productos){
        
        echo '<h1>Listado de productos</h1>';
        echo '<ul class="list-group">';
        foreach ($productos as $producto) {
           echo "<li class='list-group-item d-flex justify-content-between align-items-center'>
                    <a href='verProducto/$producto->id'> <b>$producto->nombre</b></a>
                </li>";
        }
        echo "</ul>";
    
    }

    function verProducto($producto){
        $nombre = $producto[0]->nombre;
        $descripcion = $producto[0]->descr;
        $precio = $producto[0]->precio;
   //     print_r($producto[0]->descr);
        echo "<h1>$nombre</h1>";
        echo "<span > <b>$nombre ---> $descripcion -$$precio </b></span>";   
        echo "<a href='./'> Volver </a>";  // NO ANDAA
    }

    
}