<h2>Datos Personales</h2>

{if isset($posts) && count($posts)}

<table class="table table-bordered table-condensed table-striped">
    <tr>         
        {if $_acl->permiso('editar_post')}{/if}
        {if $_acl->permiso('eliminar_post')}{/if}
    </tr>
    
     {foreach item=datos from=$posts}
        <!--
        <tr>
            <td style="text-align: center;">{$datos.id}</td>
        </tr>
        -->
        {*{$rol.role|@var_dump}*}
         {*{$encuesta.id_evaluacion|@var_dump}*}
        <tr>
            <td style='font-weight:bold;'> Nombre </td>
            <td style="text-align: center; vertical-align: middle;">{$datos.nombre}</td>
        </tr>
        <tr>
            <td style='font-weight:bold;'> Email </td>
            <td style="text-align: center; vertical-align: middle;">{$datos.email}</td>
        </tr>
            <!--
            <td style="text-align: center;">
                {if isset($datos.imagen)}

                    <a href="{$_layoutParams.root}public/img/post/{$datos.imagen}">
                        <img src="{$_layoutParams.root}public/img/post/thumb/thumb_{$datos.imagen}" />
                    </a>

                {/if}
            </td>
        -->
        <tr>
            {if $_acl->permiso('editar_post')}
                <td style='font-weight:bold;'> Editar </td>
                <td style="text-align: center; vertical-align: middle;"><a href="{$_layoutParams.root}post/editar/{$datos.id}">Editar</a></td>
            {/if}
        </tr>
        <tr> 
            {if $_acl->permiso('eliminar_post')}
                <td style='font-weight:bold;'>Eliminar</td>
                <td style="text-align: center; vertical-align: middle;"><a href="{$_layoutParams.root}post/eliminar/{$datos.id}">Eliminar</a></td>
            {/if}
        </tr>
         {if $rol.role==3 or $rol.role==1}
             {if $encuesta.id_evaluacion!=NULL}
                <tr>
                    <td style='font-weight:bold;'> Resultados </td>
                    <td style="text-align: center; vertical-align: middle;"><a href="{$_layoutParams.root}resultado/buscar/{$datos.id}">Resultados</a></td>
                </tr>
             {else}
                 <tr>
                     <td style='font-weight:bold;'> Resultados </td>
                     <td style="text-align: center; vertical-align: middle;">No ha realizado la evalación</td>
                 </tr>
             {/if}
         {/if}
        {*<tr>*}
            {*<td style='font-weight:bold;'> ... </td>*}
            {*<td style="text-align: center; vertical-align: middle;"><a href="{$_layoutParams.root}xxx/xxx/{$datos.id}">.</a></td>*}
        {*</tr>*}
        {*<tr>*}
            {*<td style='font-weight:bold;'> ... </td>*}
            {*<td style="text-align: center; vertical-align: middle;"><a href="{$_layoutParams.root}xxx/xxx/{$datos.id}">.</a></td>*}
        {*</tr>*}
    {/foreach}
</table>

{else}

<p><strong>No hay datos del paciente!</strong></p>

{/if}

{$paginacion|default:""}

<p> </p>