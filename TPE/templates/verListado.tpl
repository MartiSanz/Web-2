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
                    <td><a class="btn bi bi-pencil-square" href='{$href}{$item->id}/{$esHome}'> <b>{$item->nombre}</b></a></td>
                    {if $esHome}
                        <th><a class="btn btn-outline-success" href="{$hrefBotonEditar}{$item->id}">{$botonEditar}</a></th>
                        <th><a class="btn btn btn-danger" href='{$hrefBotonEliminar}{$item->id}'>{$botonEliminar}</a></th>
                    {/if}
                </tr>
            {/foreach}  
            </tbody>
        </table>
        
        {if $esHome}
            <div class='card-footer'>
                <span> <a class='btn btn-outline-secondary' href='{$hrefBotonAgregar}'> {$botonAgregar} </a> </span>
            </div>
        {/if}
    </div>
</div>
{include 'templates/footer.tpl'}