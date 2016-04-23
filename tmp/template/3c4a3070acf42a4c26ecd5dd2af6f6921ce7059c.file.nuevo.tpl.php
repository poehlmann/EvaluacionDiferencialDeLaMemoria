<?php /* Smarty version Smarty-3.1.8, created on 2015-12-01 03:15:38
         compiled from "C:\Xampp\htdocs\mvc\views\post\nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3162054d7bb0b563d19-38098700%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c4a3070acf42a4c26ecd5dd2af6f6921ce7059c' => 
    array (
      0 => 'C:\\Xampp\\htdocs\\mvc\\views\\post\\nuevo.tpl',
      1 => 1448936135,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3162054d7bb0b563d19-38098700',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54d7bb0b627244_16455931',
  'variables' => 
  array (
    'datos' => 0,
    'tipousuario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d7bb0b627244_16455931')) {function content_54d7bb0b627244_16455931($_smarty_tpl) {?><h2>Registro</h2>

<div class="well span5">
    <form id="form1" method="post" action="" enctype="multipart/form-data">
        <input type="hidden" name="guardar" value="1" />
            
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

        <p><button class="btn btn-primary"><i class="icon-ok icon-white"> </i> Guardar</button></p>
    </form>
</div>
    <?php $_smarty_tpl->tpl_vars['tipousuario'] = new Smarty_variable(substr($_SERVER['REQUEST_URI'],-1), null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['tipousuario']->value==2){?>
    <h1 class="heading">MAPA DE NEUROPSICOLOGOS</h1><div align="center"><a href="http://localhost:8080/google%20maps/">Entrar para introducir tu ubicacion</a></div>
    <?php }?><?php }} ?>