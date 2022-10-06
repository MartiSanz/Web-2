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
        $this->smarty->assign('botonEditar', 'Editar categoria');
        $this->smarty->assign('botonEliminar', 'Eliminar categoria');

        //listado de categorias
        $this->smarty->assign('listado', $categorias);
        //href
        $this->smarty->assign('href', 'verProductosPorCategoria/');
        $this->smarty->assign('hrefBotonAgregar', 'verFormAgregarCategoria');
        $this->smarty->assign('hrefBotonEditar', 'verFormEditarCategoria/');
        $this->smarty->assign('hrefBotonEliminar', 'eliminarCategoria/');

        $this->smarty->display('templates/verListado.tpl');   
    }

    function verFormAgregarCategoria(){
        $this->smarty->display('templates/form_alta_categoria.tpl');   
    }
    
    function verFormEditarCategoria($id_categoria, $nombreCategoria){
        $this->smarty->assign('idCategoria', $id_categoria);
        $this->smarty->assign('nombreViejoCategoria', $nombreCategoria);
        $this->smarty->display('templates/form_editar_categoria.tpl');   
    }
}