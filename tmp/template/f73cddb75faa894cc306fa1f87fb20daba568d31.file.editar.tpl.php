<?php /* Smarty version Smarty-3.1.8, created on 2015-12-01 03:17:02
         compiled from "C:\Xampp\htdocs\mvc\views\post\editar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:301245507430eda7b76-34046026%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f73cddb75faa894cc306fa1f87fb20daba568d31' => 
    array (
      0 => 'C:\\Xampp\\htdocs\\mvc\\views\\post\\editar.tpl',
      1 => 1448936220,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '301245507430eda7b76-34046026',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5507430f09fcf0_03022465',
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5507430f09fcf0_03022465')) {function content_5507430f09fcf0_03022465($_smarty_tpl) {?><h2>Registro</h2>

<div class="well span5">
    <form name="form1" method="post" action="" class="form">
        <input type="hidden" value="1" name="enviar" />
        <p>
            <label>Nombre: </label>
            <input type="text" name="nombre" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['nombre'])===null||$tmp==='' ? '' : $tmp);?>
" />
        </p>

         <p>
            <label>Apellido: </label>
            <input type="text" name="apellido" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['apellido'])===null||$tmp==='' ? '' : $tmp);?>
" />
        </p>

        <p>
            <label>Usuario: </label>
            <input type="text" name="usuario" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['usuario'])===null||$tmp==='' ? '' : $tmp);?>
" />
        </p>

        <p>
            <label>Email: </label>
            <td><input type="email" name="email" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['email'])===null||$tmp==='' ? "...@...com" : $tmp);?>
"  onfocus="if (this.value=='...@...com') this.value='';" onblur="if (this.value=='') this.value='...@...com';" /></td>
        </p>


        <p>
            <label>Fecha de Nacimiento: </label>
            <input type="Date" name="fechanac" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['fechanac'])===null||$tmp==='' ? '' : $tmp);?>
" />
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
<?php }} ?>