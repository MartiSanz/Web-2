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