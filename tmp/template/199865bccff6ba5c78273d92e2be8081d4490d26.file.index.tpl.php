<?php /* Smarty version Smarty-3.1.8, created on 2018-05-15 17:36:09
         compiled from "/opt/lampp/htdocs/EvaluacionDiferencialDeLaMemoria/modules/usuarios/views/login/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4048397285afafe69640fb4-92447855%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '199865bccff6ba5c78273d92e2be8081d4490d26' => 
    array (
      0 => '/opt/lampp/htdocs/EvaluacionDiferencialDeLaMemoria/modules/usuarios/views/login/index.tpl',
      1 => 1487453370,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4048397285afafe69640fb4-92447855',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5afafe69781361_28713593',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5afafe69781361_28713593')) {function content_5afafe69781361_28713593($_smarty_tpl) {?><style type="text/css">
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