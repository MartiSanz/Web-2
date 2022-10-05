<?php

require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class ProductoView{
    private $smarty;
    
    function __construct(){
        $this->smarty = new Smarty();
    }
    
    function verProductos($productos){
        //titulos
        $this->smarty->assign('titulo', 'LISTADO DE PRODUCTOS');
        $this->smarty->assign('botonAgregar', 'Agregar producto');
        //listado
        $this->smarty->assign('listado', $productos);
        //href
        $this->smarty->assign('href', 'verProducto/');
        
        $this->smarty->display('templates/verListado.tpl');   
    }

    function verProducto($producto){
        //titulos
        $this->smarty->assign('titulo', 'DETALLE DEL PRODUCTO');

        $this->smarty->assign('tituloCol1', 'Nombre');
        $this->smarty->assign('tituloCol2', 'Marca');
        $this->smarty->assign('tituloCol3', 'Precio');
        $this->smarty->assign('tituloCol4', 'Categoria');

        //Listado
        $this->smarty->assign('producto', $producto);

        $this->smarty->display('templates/verProducto.tpl');   
    }

   
}