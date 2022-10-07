<?php

require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class ProductoView{
    private $smarty;
    
    function __construct(){
        $this->smarty = new Smarty();
    }
    
    function verProductos($productos, $esHome){
        //titulos
        $this->smarty->assign('titulo', 'LISTADO DE PRODUCTOS');
        $this->smarty->assign('botonAgregar', 'Agregar producto');
        $this->smarty->assign('botonEditar', 'Editar producto');
        $this->smarty->assign('botonEliminar', 'Eliminar producto');
        
        //listado
        $this->smarty->assign('listado', $productos);

        //href
        $this->smarty->assign('href', 'verProducto/');
        $this->smarty->assign('hrefBotonAgregar', 'verFormAgregarProducto');
        $this->smarty->assign('hrefBotonEditar', 'verFormEditarProducto/');
        $this->smarty->assign('hrefBotonEliminar', 'eliminarProducto/');

        //es home de listado?
        $this->smarty->assign('esHome', $esHome);
        
        $this->smarty->display('templates/verListado.tpl');   
    }


    function verProducto($producto, $esHome){
        //titulos
        $this->smarty->assign('titulo', 'DETALLE DEL PRODUCTO');

        $this->smarty->assign('tituloCol1', 'Nombre');
        $this->smarty->assign('tituloCol2', 'Marca');
        $this->smarty->assign('tituloCol3', 'Precio');
        $this->smarty->assign('tituloCol4', 'Categoria');

        //Listado
        $this->smarty->assign('producto', $producto);

        //href
        $this->smarty->assign('href', './home');

        //es home de listado?
        $this->smarty->assign('esHome', $esHome);

        $this->smarty->display('templates/verProducto.tpl');   
    }

    function verFormAgregarProducto($listadoCategorias){
        $this->smarty->assign('listadoCategorias', $listadoCategorias);
        $this->smarty->display('templates/form_alta_producto.tpl');   
    }

    function verFormEditarProducto($listadoCategorias, $producto){
        $this->smarty->assign('idProducto', $producto->id);
        $this->smarty->assign('nombreViejoProducto', $producto->productoNombre);
        $this->smarty->assign('nombreViejoMarca', $producto->marca);
        $this->smarty->assign('precioViejo', $producto->precio);
        $this->smarty->assign('nombreViejoCategoria', $producto->categoriaNombre);
        $this->smarty->assign('listadoCategorias', $listadoCategorias);
        $this->smarty->display('templates/form_editar_producto.tpl');   
    }

   
}