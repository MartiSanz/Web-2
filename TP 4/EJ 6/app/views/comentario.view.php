<?php

class ComentarioView{
    
    function showComentarios($comentarios){
        include './templates/form_alta.php';
    
        echo '<h1>Listado de Comentarios</h1>';
        echo '<ul class="list-group">';
        foreach ($comentarios as $comentario) {
           echo "<li class='list-group-item d-flex justify-content-between align-items-center'>
                    <b>$comentario->titulo - $comentario->descripcion</b>
                </li>";
        }
        echo "</ul>";

        include './templates/footer.php';
    
    }

 //   function verProducto($producto){
 //       $nombre = $producto[0]->nombre;
 //       $descripcion = $producto[0]->descr;
  //      $precio = $producto[0]->precio;
   //     print_r($producto[0]->descr);
    //    echo "<h1>$nombre</h1>";
    //    echo "<span > <b>$nombre ---> $descripcion -$$precio </b></span>";   
    //    echo "<a href='./'> Volver </a>";  // NO ANDAA
//    }

    
}