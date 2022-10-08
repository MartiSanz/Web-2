{include 'templates/header.tpl'}

<div class='card'>
    <div class='card-header'>
        <span class="fs-4 text"> <b>{$titulo} </b> </span>
    </div>


    <div class='card-body'>
        <table class='table text-center'>
            <tbody>
            {foreach from=$listado item=$item}
                <tr>
                    <td><a class="btn bi bi-pencil-square" href='{$href}{$item->id}/{$esHome}'> <b>{$item->nombre}</b></a></td>
                    {if isset($item->imagen)}
                        <th class="col-sm-2"><a href='{$href}{$item->id}/{$esHome}'> <img class="img-fluid" src="{$item->imagen}"/></a></th>
                    {else}
                        <th></th>
                    {/if}  
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