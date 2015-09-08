<?php /* Smarty version Smarty-3.1.8, created on 2015-02-04 20:13:30
         compiled from "C:\Xampp\htdocs\mvc\views\acl\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:718254d26f5a6e7974-36364833%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '558d3beb3577ff16d3c558b406ce06c760ba0ede' => 
    array (
      0 => 'C:\\Xampp\\htdocs\\mvc\\views\\acl\\index.tpl',
      1 => 1352151370,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '718254d26f5a6e7974-36364833',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54d26f5a778223_62194191',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d26f5a778223_62194191')) {function content_54d26f5a778223_62194191($_smarty_tpl) {?><h2>Listas de control de acceso</h2>

<ul>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/roles">Roles</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/permisos">Permisos</a></li>
</ul><?php }} ?>