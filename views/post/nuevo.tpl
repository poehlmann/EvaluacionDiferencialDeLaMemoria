<h2>Registro</h2>

<div class="well span5">
    <form id="form1" method="post" action="" enctype="multipart/form-data">
        <input type="hidden" name="guardar" value="1" />
            
            <p>
                <label>Nombre: </label>
                <input type="text" name="nombre" value="{$datos.nombre|default:""}" />
            </p>

             <p>
                <label>Apellido: </label>
                <input type="text" name="apellido" value="{$datos.apellido|default:""}" />
            </p>

            <p>
                <label>Usuario: </label>
                <input type="text" name="usuario" value="{$datos.usuario|default:""}" />
            </p>

            <p>
                <label>Email: </label>
                <td><input type="email" name="email" value="{$datos.email|default:"...@...com"}"  onfocus="if (this.value=='...@...com') this.value='';" onblur="if (this.value=='') this.value='...@...com';" /></td>
            </p>


            <p>
                <label>Fecha de Nacimiento: </label>
                <input type="Date" name="fechanac" value="{$datos.fechanac|default:""}" />
            </p>

            <p>
                <label>Password: </label>
                <input type="password" name="pass" />
            </p>

            <p>
                <label>Confirmar: </label>
                <input type="password" name="confirmar" />
            </p>    

            <p>

        <p><button class="btn btn-primary"><i class="icon-ok icon-white"> </i> Guardar</button></p>
    </form>
</div>
    {$tipousuario = $smarty.server.REQUEST_URI|substr:-1}
    {if $tipousuario eq 2}
    <h1 class="heading">MAPA DE NEUROPSICOLOGOS</h1><div align="center"><a href="http://localhost:8080/google%20maps/">Entrar para introducir tu ubicacion</a></div>
    {/if}