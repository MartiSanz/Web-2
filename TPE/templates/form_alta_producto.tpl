{include 'templates/header.tpl'}

<!-- formulario de alta de producto -->
<form action="agregarProducto" method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="card">
                <div class='card-header'>
                    <span> <b>Agregar Producto</b></span>
                </div>
                <input placeholder="Nombre producto" name="nombre" type="text" class="form-control">
                <input placeholder="Nombre marca" name="marca" type="text" class="form-control">
                <input placeholder="Precio producto" name="precio" type="number" class="form-control">
                <select class="form-select">
                {foreach from=$listadoCategorias item=$item} <!-- required}-->
                    <option value="{$item}">{$item}</option>
                {/foreach} 
                </select>
                </div>
        </div>
    </div>

    <button type="submit" class='btn btn-secondary'>Guardar</button>

</form>


{include 'templates/footer.tpl'}