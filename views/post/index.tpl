<h2>Personas registradas</h2>

{if $_acl->permiso('nuevo_post')}
    <p><a href="{$_layoutParams.root}post/nuevo" class="btn btn-primary"><i class="icon-plus-sign icon-white"> </i> Agregar Pacientes</a></p>
{/if}

{if isset($posts) && count($posts)}

<table class="table table-bordered table-condensed table-striped">
    <tr>
        <th>CI</th>
        <th>NOMBRE</th>
        <th>APELLIDO PATERNO</th>
        <th>APELLIDO MATERNO</th>
         
        {if $_acl->permiso('editar_post')}<th></th>{/if}
        {if $_acl->permiso('eliminar_post')}<th></th>{/if}
    </tr>
    
     {foreach item=datos from=$posts}
        <tr>
            <td style="text-align: center;">{$datos.ci}</td>
            <td>{$datos.nombre}</td>
            <td>{$datos.apellidopaterno}</td>
            <td>{$datos.apellidomaterno}</td>
            <!--
            <td style="text-align: center;">
                {if isset($datos.imagen)}

                    <a href="{$_layoutParams.root}public/img/post/{$datos.imagen}">
                        <img src="{$_layoutParams.root}public/img/post/thumb/thumb_{$datos.imagen}" />
                    </a>

                {/if}
            </td>
        -->
            {if $_acl->permiso('editar_post')}
                <td style="text-align: center; vertical-align: middle;"><a href="{$_layoutParams.root}post/editar/{$datos.id}">Editar</a></td>
            {/if}
            
            {if $_acl->permiso('eliminar_post')}
                <td style="text-align: center; vertical-align: middle;"><a href="{$_layoutParams.root}post/eliminar/{$datos.id}">Eliminar</a></td>
            {/if}
        </tr>
    {/foreach}
</table>

{else}

<p><strong>No hay personas registradas!</strong></p>

{/if}

{$paginacion|default:""}

<p> </p>