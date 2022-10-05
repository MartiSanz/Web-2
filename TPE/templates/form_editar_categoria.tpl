{include 'templates/header.tpl'}

<form action="editarCategoria/{$idCategoria}" method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="card">
                <div class='card-header'>
                    <span> <b>Editando Categoria -> {$nombreViejoCategoria->nombre}</b></span>
                </div>
                <input placeholder="Nombre categoria" name="nombre" type="text" class="form-control">
            </div>
        </div>
    </div>

    <button type="submit" class='btn btn-secondary'>Editar</button>

</form>


{include 'templates/footer.tpl'}