<?php /* Smarty version Smarty-3.1.8, created on 2015-05-23 18:01:18
         compiled from "C:\Xampp\htdocs\mvc\views\acl\nuevo_role.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2371755608d29ba3138-85784528%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73efedfa360f37a56d67f677507d0cd90ac7fa6a' => 
    array (
      0 => 'C:\\Xampp\\htdocs\\mvc\\views\\acl\\nuevo_role.tpl',
      1 => 1432396878,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2371755608d29ba3138-85784528',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55608d29ec3e70_82486626',
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55608d29ec3e70_82486626')) {function content_55608d29ec3e70_82486626($_smarty_tpl) {?><h2>Nuevo Rol</h2>

<form name="form1" method="post" action="">
    <input type="hidden" value="1" name="guardar">
    
    <table class="table table-bordered" style="width: 350px;">
        <tr>
            <td style="text-align: right;">Rol: </td>
            <td><input type="text" name="role" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['role'])===null||$tmp==='' ? '' : $tmp);?>
"></td>
        </tr>
    </table>
        
    <p><button type="submit" class="btn btn-primary"><li class="icon-ok icon-white"> </li> Guardar</button></p>
</form><?php }} ?>