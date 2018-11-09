<?php /* Smarty version Smarty-3.1.8, created on 2015-08-18 23:51:52
         compiled from "C:\Xampp\htdocs\mvc\views\resultado\edm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:320255588e307dd8349-32812174%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d5b862633062e9d53b6c4977f323d0f404153c8' => 
    array (
      0 => 'C:\\Xampp\\htdocs\\mvc\\views\\resultado\\edm.tpl',
      1 => 1439934711,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '320255588e307dd8349-32812174',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5588e307f18882_91247931',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'pacientes' => 0,
    'datos' => 0,
    'resultados' => 0,
    'i' => 0,
    'resul' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5588e307f18882_91247931')) {function content_5588e307f18882_91247931($_smarty_tpl) {?><div style="max-width: 100%; border: groove 10px;padding: 5px; background-color: rgba(131, 197, 205, 0); border-radius: 19px;">
    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
resultado"><button>Regresar</button></a>
    <form id="form1" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
resultado/" enctype="multipart/form-data">
        <h2> Resultados
        <?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pacientes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value){
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
           <?php echo strtoupper($_smarty_tpl->tpl_vars['datos']->value);?>

        <?php } ?>
        </h2>
        <input type="image" style="width: 100%" onclick='return false;' src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
views/resultado/reportefinal.png">
        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <td style="width: 156px;height: 24px;"></td>
                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(1, null, 0);?>
                        <?php  $_smarty_tpl->tpl_vars['resul'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['resul']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['resultados']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['resul']->key => $_smarty_tpl->tpl_vars['resul']->value){
$_smarty_tpl->tpl_vars['resul']->_loop = true;
?>
                             <?php if ($_smarty_tpl->tpl_vars['i']->value==20){?>
                                 <?php if ($_smarty_tpl->tpl_vars['resul']->value[0]==4||$_smarty_tpl->tpl_vars['resul']->value[0]==3){?>
                                     <td  style="width: 16px; background-color: red"></td>
                                 <?php }?>
                                 <?php if ($_smarty_tpl->tpl_vars['resul']->value[0]==2){?>
                                     <td  style="width: 16px; background-color: yellow"></td>
                                 <?php }?>
                                 <?php if ($_smarty_tpl->tpl_vars['resul']->value[0]==1){?>
                                     <td  style="width: 16px; background-color: green"></td>
                                 <?php }?>
                             <?php }else{ ?>
                                 <?php if ($_smarty_tpl->tpl_vars['resul']->value[0]==4||$_smarty_tpl->tpl_vars['resul']->value[0]==3){?>
                                    <td  style="width: 8px; background-color: red"></td>
                                <?php }?>
                                 <?php if ($_smarty_tpl->tpl_vars['resul']->value[0]==2){?>
                                    <td style="width: 8px; background-color: yellow"></td>
                                <?php }?>
                                 <?php if ($_smarty_tpl->tpl_vars['resul']->value[0]==1){?>
                                    <td style="width: 8px; background-color: green"></td>
                                <?php }?>
                             <?php }?>
                            <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
                        <?php } ?>
                </tr>
            </table>
        </div>
    </form>
</div><?php }} ?>