<?php

class CategoriaView{
    private $smarty;
    
    function __construct(){
        $this->smarty = new Smarty();
    }

    function verCategorias($categorias){
        $this->smarty->assign('titulo', 'LISTADO DE CATEGORIAS');
        $this->smarty->assign('listado', $categorias);
        $this->smarty->assign('href', 'verProductosPorCategoria/');
        $this->smarty->display('templates/verListado.tpl');   
    }
    
}