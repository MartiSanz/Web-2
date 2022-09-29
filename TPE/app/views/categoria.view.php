<?php

class CategoriaView{
    
    function verCategorias($categorias){
        include './templates/header.php';
        echo "<div class='card'>
                <div class='card-header'>
                    <span> <b>LISTADO DE CATEGORIAS </span> </b>
                </div>
            </div>";
            echo '<ul class="list-group">';
            foreach ($categorias as $categoria) {
            echo "<li class='list-group-item d-flex justify-content-between align-items-center'>
                        <a class='link-dark' href='verProductosPorCategoria/$categoria->id'> <b>$categoria->nombre</b></a>
                    </li>";
            }
            echo "</ul>";
        include './templates/footer.php';
    
    }
    
}