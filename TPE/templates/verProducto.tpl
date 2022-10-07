{include 'templates/header.tpl'}

<div class='card'>
    <div class='card-header'>
        <span> <b>{$titulo}</b></span>
    </div>
    <div class='card-body'>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>{$tituloCol1}</th>
                    <th scope='col'>{$tituloCol2}</th>
                    <th scope='col'>{$tituloCol3}</th>
                    <th scope='col'>{$tituloCol4}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{$producto->productoNombre}</td>
                    <td>{$producto->marca}</td>
                    <td>${$producto->precio}</td>
                    <td>{$producto->categoriaNombre}</td>
                </tr>
            </tbody>
        </table>
    </div>

    {if $esHome}
        <div class='card-footer'>
            <span> <a class='btn btn-outline-secondary' href='{$href}'> Volver </a> </span>
        </div>
    {/if}
</div>

{include 'templates/footer.tpl'}