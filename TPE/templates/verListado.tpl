{include 'templates/header.tpl'}

<div class='card'>
    <div class='card-header'>
        <span> <b>{$titulo}</span> </b>
    </div>


    <div class='card-body'>
        <table class='table'>
            <tbody>
            {foreach from=$listado item=$item}
                <tr>
                    <td><a class="btn bi bi-pencil-square" href='{$href}{$item->id}'> <b>{$item->nombre}</b></a></td>
                    <th><a class="btn btn-outline-success" href="{$hrefBotonEditar}{$item->id}">{$botonEditar}</a></th>
                    <th><a class="btn btn btn-danger" href='{$hrefBotonEliminar}{$item->id}'>{$botonEliminar}</a></th>
                </tr>
            {/foreach}  
            </tbody>
        </table>

        <div class='card-footer'>
            <span> <a class='btn btn-outline-secondary' href='{$hrefBotonAgregar}'> {$botonAgregar} </a> </span>
        </div>
    </div>
</div>
{include 'templates/footer.tpl'}