<!-- formulario de edicion de categoria 
<form action="CAMBIAR" method="POST" class="my-4"> -->

<!-- formulario de alta de categoria 
<form action="CAMBIAR" method="POST" class="my-4">
    <div class="mb-3">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" name="nombre" value="{$categoria->nombre}">
    </div>

    <button class="btn" type="submit">Guardar</button>
</form>-->

{include 'templates/header.tpl'}

<form action="agregarCategoria" method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="card">
                <div class='card-header'>
                    <span> <b>Agregar Categoria</b></span>
                </div>
                <input placeholder="Nombre categoria" name="nombre" type="text" class="form-control">
            </div>
        </div>
    </div>

    <button type="submit" class='btn btn-secondary'>Guardar</button>

</form>


{include 'templates/footer.tpl'}