<?php /* Smarty version Smarty-3.1.8, created on 2015-08-24 02:01:11
         compiled from "C:\Xampp\htdocs\mvc\views\resultado\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8736552e9e11c68bb3-49309219%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ecec295e991453204421d6ec840640ce8888f4a7' => 
    array (
      0 => 'C:\\Xampp\\htdocs\\mvc\\views\\resultado\\index.tpl',
      1 => 1440374470,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8736552e9e11c68bb3-49309219',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_552e9e11c68bb5_52903903',
  'variables' => 
  array (
    'pacientes' => 0,
    'datos' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552e9e11c68bb5_52903903')) {function content_552e9e11c68bb5_52903903($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['pacientes']->value)&&count($_smarty_tpl->tpl_vars['pacientes']->value)){?>
<div style="max-width: 100%; border: groove 10px;  ; padding: 5px; background-color: rgba(131, 197, 205, 0); border-radius: 19px;">
		<h2> Resultados </h2>
            <table class="table table-bordered">
                <?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pacientes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value){
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
                <tr>
                    <td>Nombre del Usuario:<label for="opcion1"><span id="paciente" class="input-xlarge uneditable-input"><?php echo $_smarty_tpl->tpl_vars['datos']->value;?>
</span></td>
                    <td> Resultados EDM: <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
resultado/edm">EDM</a> </td>
                </tr>
                <?php } ?>
                <tr>
                    <td>Nombre del Profesional Asignado:<label for="opcion2"><span id="doctor" class="input-xlarge uneditable-input">Dra. Carol Osinaga</span></td>
                    <td> Resultados MMSE: <a href="edm.tpl">MMSE</a> </td>
                </tr>
                <tr>
                    <td>Fecha de Evaluacion:<label for="opcion3"></label><span id="fecha" class="input-xlarge uneditable-input"><?php echo date("m/d/Y");?>
</span></td>
                    <td> Escala de Reserva Cognitiva: <a href="edm.tpl">EQUILAM</a> </td>
                </tr>
                <tr>
                    <td></td>
                    <td> Escala de Deterioro Global de Reisberg: <a href="edm.tpl">GDS</a> </td>
                </tr>
                <tr>
                    <th colspan="2" align="center">Muchas Gracias por haber utilizado nuestros servicios</th>
                </tr>

            </table>
</div>
<?php }?><?php }} ?>