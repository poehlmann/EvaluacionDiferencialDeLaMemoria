<?php /* Smarty version Smarty-3.1.8, created on 2018-05-15 17:46:44
         compiled from "/opt/lampp/htdocs/EvaluacionDiferencialDeLaMemoria/views/post/datospaciente.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2447688155afb00e4577143-91978964%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42942fa9f2067ddab25e7d2ab248c3cb0752975b' => 
    array (
      0 => '/opt/lampp/htdocs/EvaluacionDiferencialDeLaMemoria/views/post/datospaciente.tpl',
      1 => 1487453370,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2447688155afb00e4577143-91978964',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'posts' => 0,
    '_acl' => 0,
    'datos' => 0,
    '_layoutParams' => 0,
    'rol' => 0,
    'encuesta' => 0,
    'paginacion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5afb00e460a155_36963409',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5afb00e460a155_36963409')) {function content_5afb00e460a155_36963409($_smarty_tpl) {?><h2>Datos Personales</h2>

<?php if (isset($_smarty_tpl->tpl_vars['posts']->value)&&count($_smarty_tpl->tpl_vars['posts']->value)){?>

<table class="table table-bordered table-condensed table-striped">
    <tr>         
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('editar_post')){?><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('eliminar_post')){?><?php }?>
    </tr>
    
     <?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value){
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
        <!--
        <tr>
            <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['id'];?>
</td>
        </tr>
        -->
        
         
        <tr>
            <td style='font-weight:bold;'> Nombre </td>
            <td style="text-align: center; vertical-align: middle;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['nombre'];?>
</td>
        </tr>
        <tr>
            <td style='font-weight:bold;'> Email </td>
            <td style="text-align: center; vertical-align: middle;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['email'];?>
</td>
        </tr>
            <!--
            <td style="text-align: center;">
                <?php if (isset($_smarty_tpl->tpl_vars['datos']->value['imagen'])){?>

                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/post/<?php echo $_smarty_tpl->tpl_vars['datos']->value['imagen'];?>
">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/post/thumb/thumb_<?php echo $_smarty_tpl->tpl_vars['datos']->value['imagen'];?>
" />
                    </a>

                <?php }?>
            </td>
        -->
        <tr>
            <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('editar_post')){?>
                <td style='font-weight:bold;'> Editar </td>
                <td style="text-align: center; vertical-align: middle;"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
post/editar/<?php echo $_smarty_tpl->tpl_vars['datos']->value['id'];?>
">Editar</a></td>
            <?php }?>
        </tr>
        <tr> 
            <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('eliminar_post')){?>
                <td style='font-weight:bold;'>Eliminar</td>
                <td style="text-align: center; vertical-align: middle;"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
post/eliminar/<?php echo $_smarty_tpl->tpl_vars['datos']->value['id'];?>
">Eliminar</a></td>
            <?php }?>
        </tr>
         <?php if ($_smarty_tpl->tpl_vars['rol']->value['role']==3||$_smarty_tpl->tpl_vars['rol']->value['role']==1){?>
             <?php if ($_smarty_tpl->tpl_vars['encuesta']->value['id_evaluacion']!=null){?>
                <tr>
                    <td style='font-weight:bold;'> Resultados </td>
                    <td style="text-align: center; vertical-align: middle;"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
resultado/buscar/<?php echo $_smarty_tpl->tpl_vars['datos']->value['id'];?>
">Resultados</a></td>
                </tr>
             <?php }else{ ?>
                 <tr>
                     <td style='font-weight:bold;'> Resultados </td>
                     <td style="text-align: center; vertical-align: middle;">No ha realizado la evalación</td>
                 </tr>
             <?php }?>
         <?php }?>
        
            
            
        
        
            
            
        
    <?php } ?>
</table>

<?php }else{ ?>

<p><strong>No hay datos del paciente!</strong></p>

<?php }?>

<?php echo (($tmp = @$_smarty_tpl->tpl_vars['paginacion']->value)===null||$tmp==='' ? '' : $tmp);?>


<p> </p><?php }} ?>