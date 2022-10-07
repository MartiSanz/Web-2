{include  file='templates/form_alta.tpl'}

<ul  class="list-group">

    {foreach from=$tasks item=$task}
        <li class='list-group-item d-flex justify-content-between align-items-center'>
            <span> <b>{$task->titulo|upper}</b> - {$task->descripcion|truncate:20} (prioridad {$task->prioridad}) </span>
            {if isset($task->imagen)}
                <img src="{$task->imagen}"/>
            {/if}        
            <a href='delete/$task->id' type='button' class='btn btn-danger ml-auto'>Borrar</a>
        </li>
    {/foreach}

</ul>

{include file='templates/footer.tpl'}