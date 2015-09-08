<?php /* Smarty version Smarty-3.1.8, created on 2015-03-09 15:35:08
         compiled from "C:\Xampp\htdocs\mvc\modules\usuarios\views\registro\activar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1348454fdaf9ccfaa19-70497341%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4509ef6b3951f8cb04dbd2a18daabcd7863a0ed3' => 
    array (
      0 => 'C:\\Xampp\\htdocs\\mvc\\modules\\usuarios\\views\\registro\\activar.tpl',
      1 => 1350432930,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1348454fdaf9ccfaa19-70497341',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54fdaf9d273634_43921305',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54fdaf9d273634_43921305')) {function content_54fdaf9d273634_43921305($_smarty_tpl) {?><h2>Activaci&oacute;n de Cuenta</h2>

<p> </p>

<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
">Ir al Inicio</a>

<?php if (!Session::get('autenticado')){?>
	
	| <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
login">Iniciar Sesi&oacute;n</a>

<?php }?><?php }} ?>