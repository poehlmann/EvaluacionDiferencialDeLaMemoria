<h2>Registro</h2>

<div class="well span5">
    <form name="form1" method="post" action="" class="form">
        <input type="hidden" value="1" name="enviar" />
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
            <button type="submit" class="btn btn-primary"><i class="icon-plus-sign icon-white"> </i> Enviar</button>
        </p>
    </form>
</div>