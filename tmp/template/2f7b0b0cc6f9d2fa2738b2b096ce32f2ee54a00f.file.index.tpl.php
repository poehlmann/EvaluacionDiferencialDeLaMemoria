<?php /* Smarty version Smarty-3.1.8, created on 2015-03-05 21:10:11
         compiled from "C:\Xampp\htdocs\mvc\modules\usuarios\views\login\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:827654d6d28a8f6235-12154237%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f7b0b0cc6f9d2fa2738b2b096ce32f2ee54a00f' => 
    array (
      0 => 'C:\\Xampp\\htdocs\\mvc\\modules\\usuarios\\views\\login\\index.tpl',
      1 => 1425586197,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '827654d6d28a8f6235-12154237',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54d6d28aac31a1_78077155',
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d6d28aac31a1_78077155')) {function content_54d6d28aac31a1_78077155($_smarty_tpl) {?><style type="text/css">
    table.table td { vertical-align: middle; }
    table.table td input { margin: 0; }
</style>

<h2>Iniciar Sesi&oacute;n</h2>

<form name="form1" method="post" action="">
    <input type="hidden" value="1" name="enviar" />
    
    <table class="table table-bordered" style="width: 350px;">
        <tr>
            <td style="text-align: right;">Usuario: </td>
            <td><input type="text" name="usuario" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['usuario'])===null||$tmp==='' ? '' : $tmp);?>
" /></td>
        </tr>

        <tr>
            <td style="text-align: right;">Password: </td>
            <td><input type="password" name="pass" /></td>
        </tr>
    </table>
        
    <p><button type="submit" class="btn btn-success"><li class="icon-user icon-white"> </li> Entrar</button></p>
</form><?php }} ?>