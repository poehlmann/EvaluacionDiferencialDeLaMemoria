<?php /* Smarty version Smarty-3.1.8, created on 2015-06-15 21:39:28
         compiled from "C:\Xampp\htdocs\mvc\modules\usuarios\views\registro\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:738354d2503d76c211-56492855%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1826305db5ec3db8fd4e85e590496b941b95028c' => 
    array (
      0 => 'C:\\Xampp\\htdocs\\mvc\\modules\\usuarios\\views\\registro\\index.tpl',
      1 => 1434397112,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '738354d2503d76c211-56492855',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54d2503d79b029_03171603',
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d2503d79b029_03171603')) {function content_54d2503d79b029_03171603($_smarty_tpl) {?><h2>Registro</h2>

<div class="container">
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
</div><?php }} ?>