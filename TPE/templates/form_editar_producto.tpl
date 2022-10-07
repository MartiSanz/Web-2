{include 'templates/header.tpl'}

<!-- formulario de edicion de producto -->

<div class='card'>
    <div class='card-header'>
        <span> <b>Editar Producto</span> </b>
    </div>


    <div class='card-body'>
        <form action="editarProducto/{$idProducto}" method="POST" class="my-4">
            <table class='table'>
                <tbody>
                    <tr>
                        <th><span>Nombre producto actual: {$nombreViejoProducto}</span></th>
                        <td><input placeholder="Nombre nuevo" name="nombre" type="text" class="form-control" required></td>
                    </tr>
                    <tr>
                        <th><span>Marca producto actual: {$nombreViejoMarca}</span></th>
                        <td><input placeholder="Nombre marca nuevo" name="marca" type="text" class="form-control" required></td>
                    </tr>
                    <tr>
                        <th><span>Precio producto actual: ${$precioViejo}</span></th>
                        <td><input placeholder="Precio nuevo" name="precio" type="number" class="form-control" required></td>
                    </tr>
                    <tr>
                        <th><span>Categoria producto actual: {$nombreViejoCategoria}</span></th>
                        <td><select name="idCategoria" class="form-select">
                            {foreach from=$listadoCategorias item=$item}
                                <option value="{$item->id}">{$item->nombre}</option>
                            {/foreach} 
                        </select></td>
                    </tr>
                    
                </tbody>
            </table>
            
            <div class='card-footer'>
                <button type="submit" class='btn btn-secondary'>Guardar</button>
            </div>
        </form>
        
        
    </div>
</div>


{include 'templates/footer.tpl'}