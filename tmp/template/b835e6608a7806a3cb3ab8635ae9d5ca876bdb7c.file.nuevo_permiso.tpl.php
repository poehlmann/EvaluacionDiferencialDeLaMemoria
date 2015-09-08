<?php /* Smarty version Smarty-3.1.8, created on 2015-05-24 06:41:23
         compiled from "C:\Xampp\htdocs\mvc\views\acl\nuevo_permiso.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2692754ef3ed21e8204-74363574%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b835e6608a7806a3cb3ab8635ae9d5ca876bdb7c' => 
    array (
      0 => 'C:\\Xampp\\htdocs\\mvc\\views\\acl\\nuevo_permiso.tpl',
      1 => 1432442481,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2692754ef3ed21e8204-74363574',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54ef3ed22fd7c8_12901555',
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ef3ed22fd7c8_12901555')) {function content_54ef3ed22fd7c8_12901555($_smarty_tpl) {?><h2>Nuevo Permiso</h2>

<form name="form1" method="post" action="">
    <input type="hidden" name="guardar" value="1">
    
    <table class="table table-bordered" style="width: 350px;">
        <tr>
            <td style="text-align: right;">Permiso: </td>
            <td><input type="text" name="permiso" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['permiso'])===null||$tmp==='' ? '' : $tmp);?>
"></td>
        </tr>

        <tr>
            <td style="text-align: right;">Llave: </td>
            <td><input type="text" name="key" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['key'])===null||$tmp==='' ? '' : $tmp);?>
"></td>
        </tr>
    </table>
        
    <p><button type="submit" class="btn btn-primary"><li class="icon-ok icon-white"> </li> Guardar</button></p>
</form><?php }} ?>