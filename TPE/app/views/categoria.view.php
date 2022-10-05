<?php

class CategoriaView{
    private $smarty;
    
    function __construct(){
        $this->smarty = new Smarty();
    }

    function verCategorias($categorias){
        //titulos 
        $this->smarty->assign('titulo', 'LISTADO DE CATEGORIAS');
        $this->smarty->assign('botonAgregar', 'Agregar categoria');
        $this->smarty->assign('botonEliminar', 'Eliminar categoria');

        //listado de categorias
        $this->smarty->assign('listado', $categorias);
        //href
        $this->smarty->assign('hrefVerProductosPorCategoria', 'verProductosPorCategoria/');
        $this->smarty->assign('hrefBotonAgregar', 'verFormCategoria');
        $this->smarty->assign('hrefBotonEliminar', 'eliminarCategoria/');

        $this->smarty->display('templates/verListado.tpl');   
    }

    function verFormCategoria(){
        $this->smarty->display('templates/form_alta_categoria.tpl');   
    }
    
}