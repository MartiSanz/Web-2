<?php

class ProductoView{
    
    function verProductos($productos){
        include './templates/header.php';
        echo "<div class='card'>
                <div class='card-header'>
                    <span> <b>LISTADO DE PRODUCTOS </span> </b>
                </div>
            </div>";
            echo '<ul class="list-group">';
            foreach ($productos as $producto) {
            echo "<li class='list-group-item d-flex justify-content-between align-items-center'>
                        <a class='link-dark' href='verProducto/$producto->id'> <b>$producto->nombre</b></a>
                    </li>";
            }
            echo "</ul>";
        include './templates/footer.php';
    
    }

    function verProducto($producto){
        include './templates/header.php';
        echo "<div class='card'>
                <div class='card-header'>
                    <span> <b>DETALLE DEL PRODUCTO </span> </b>
                </div>
            <div class='card-body'>
                <table class='table'>
                    <thead>
                        <tr>
                            <th scope='col'>Nombre</th>
                            <th scope='col'>Marca</th>
                            <th scope='col'>Precio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>$producto->nombre</td>
                            <td>$producto->marca</td>
                            <td>$$producto->precio</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>";

        

/*        echo '<ul class="list-group">';
        echo "<li class='list-group-item d-flex justify-content-between align-items-center'>
                <b>$producto->nombre</b>
            </li>
            <li class='list-group-item d-flex justify-content-between align-items-center'>
                <b>$producto->marca</b>
            </li>
            <li class='list-group-item d-flex justify-content-between align-items-center'>
                <b>$producto->precio</b>
            </li>";
        echo "</ul>";*/


 //      echo "<h1>$nombre</h1>";
 //       echo "<span > <b>$nombre ---> $descripcion -$$precio </b></span>";   
 //       echo "<a href='./'> Volver </a>";  // NO ANDAA

         include './templates/footer.php';
    }

   
}