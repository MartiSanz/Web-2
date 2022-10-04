{include 'templates/header.tpl'}

<div class='card'>
    <div class='card-header'>
        <span> <b>{$titulo}</span> </b>
    </div>
</div>

<ul class="list-group">
    {foreach from=$listado item=$item}
        <li class='list-group-item d-flex justify-content-between align-items-center'>
            <a class='link-dark' href='{$href}{$item->id}'> <b>{$item->nombre}</b></a>
        </li>
    {/foreach}   
</ul>

{include 'templates/footer.tpl'}