{include  file='templates/form_alta.tpl'}

<ul  class="list-group">

    {foreach from=$tasks item=$task}
        <li class='list-group-item d-flex justify-content-between align-items-center'>
            <span> <b>{$task->titulo}</b> - {$task->descripcion} (prioridad {$task->prioridad}) </span>
            <a href='delete/$task->id' type='button' class='btn btn-danger ml-auto'>Borrar</a>
        </li>
    {/foreach}

</ul>

{include file='templates/footer.tpl'}