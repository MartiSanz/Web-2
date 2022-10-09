<?php

class CategoriaView{
    private $smarty;
    
    function __construct(){
        $this->smarty = new Smarty();
    }

    function verCategorias($categorias, $seLogueo){
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

        //es listado de home? no
        $this->smarty->assign('esHome', 1); // tendria que pasar el parameto como hice con loproducto

        //esta logueado?
        $this->smarty->assign('seLogueo', $seLogueo);

        $this->smarty->display('templates/verListado.tpl');   
    }

    function verFormAgregarCategoria(){
        $this->smarty->display('templates/form_alta_categoria.tpl');   
    }
    
    function verFormEditarCategoria($categoria){
        $this->smarty->assign('idCategoria', $categoria->id);
        $this->smarty->assign('nombreViejoCategoria', $categoria->nombre);
        $this->smarty->display('templates/form_editar_categoria.tpl');   
    }
}