<?php /* Smarty version Smarty-3.1.8, created on 2015-12-08 01:39:20
         compiled from "C:\Xampp\htdocs\mvc\views\post\pacientes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2804554d6e0ee0daae9-56673364%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da4f9fc52b1c667e8a2885bad45c43e1a9234537' => 
    array (
      0 => 'C:\\Xampp\\htdocs\\mvc\\views\\post\\pacientes.tpl',
      1 => 1449535160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2804554d6e0ee0daae9-56673364',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54d6e0ee270f41_54411243',
  'variables' => 
  array (
    '_acl' => 0,
    '_layoutParams' => 0,
    'posts' => 0,
    'datos' => 0,
    'encuesta' => 0,
    'paginacion' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d6e0ee270f41_54411243')) {function content_54d6e0ee270f41_54411243($_smarty_tpl) {?><h2>Pacientes registrados</h2>

<?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('nuevo_post')){?>
    <p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
post/nuevo/3" class="btn btn-primary"><i class="icon-plus-sign icon-white"> </i> Agregar Pacientes</a></p>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['posts']->value)&&count($_smarty_tpl->tpl_vars['posts']->value)){?>

<table class="table table-bordered table-condensed table-striped">
    <tr>
        
        <th>NOMBRE</th>
        <th>EMAIL</th>
        <th>RESULTADO</th>
         
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('editar_post')){?><th></th><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('eliminar_post')){?><th></th><?php }?>
    </tr>
    
     <?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value){
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
        <tr>
            
            <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['nombre'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['email'];?>
</td>
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
            <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('editar_post')){?>
                <td style="text-align: center; vertical-align: middle;"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
post/editar/<?php echo $_smarty_tpl->tpl_vars['datos']->value['id'];?>
">Editar</a></td>
            <?php }?>
            
            <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('eliminar_post')){?>
                <td style="text-align: center; vertical-align: middle;"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
post/eliminar/<?php echo $_smarty_tpl->tpl_vars['datos']->value['id'];?>
">Eliminar</a></td>
            <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['encuesta']->value['id_evaluacion'])){?>
                    <td style="text-align: center; vertical-align: middle;"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
resultado/buscar/<?php echo $_smarty_tpl->tpl_vars['datos']->value['id'];?>
">Resultados</a></td>
             <?php }else{ ?>
                     <td style="text-align: center; vertical-align: middle;">No ha realizado la evalación</td>
             <?php }?>
        </tr>
    <?php } ?>
</table>

<?php }else{ ?>

<p><strong>No hay pacientes registrados!</strong></p>

<?php }?>

<?php echo (($tmp = @$_smarty_tpl->tpl_vars['paginacion']->value)===null||$tmp==='' ? '' : $tmp);?>


<p> </p><?php }} ?>