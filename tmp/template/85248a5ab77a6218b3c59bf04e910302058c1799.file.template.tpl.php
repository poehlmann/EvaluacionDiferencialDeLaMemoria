<?php /* Smarty version Smarty-3.1.8, created on 2015-12-02 19:41:38
         compiled from "C:\Xampp\htdocs\mvc\views\layout\twb\template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2605054d25040a109f9-10715404%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85248a5ab77a6218b3c59bf04e910302058c1799' => 
    array (
      0 => 'C:\\Xampp\\htdocs\\mvc\\views\\layout\\twb\\template.tpl',
      1 => 1449081697,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2605054d25040a109f9-10715404',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54d25040be5650_04763676',
  'variables' => 
  array (
    'titulo' => 0,
    '_layoutParams' => 0,
    'link' => 0,
    'widgets' => 0,
    'tp' => 0,
    'wd' => 0,
    '_error' => 0,
    '_mensaje' => 0,
    '_contenido' => 0,
    'plg' => 0,
    'js' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d25040be5650_04763676')) {function content_54d25040be5650_04763676($_smarty_tpl) {?><!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        
                

        <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['titulo']->value)===null||$tmp==='' ? "Sin t&iacute;tulo" : $tmp);?>
</title>

        
        <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
icono.png" />
        <meta charset="UTF-8">
        
        <link href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
bootstrap.css" rel="stylesheet" type="text/css">
        
        <link href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
views/encuesta/css/stylespeech.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.4/material.indigo-blue.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
bootstrap-responsive.css" rel="stylesheet">
        <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['link_plugin'])&&count($_smarty_tpl->tpl_vars['_layoutParams']->value['link_plugin'])){?>
            <?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['link_plugin']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value){
$_smarty_tpl->tpl_vars['link']->_loop = true;
?>
                <link href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
"  rel="import">
            <?php } ?>
        <?php }?>
        <style type="text/css">
        body{
            padding-top: 40px;
            padding-bottom: 40px;

        }
        </style>
    </head>

    <body style="background: url('<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
fondo3.jpg') no-repeat fixed 100% 100%;no-repeat center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
        <?php if (isset($_smarty_tpl->tpl_vars['widgets']->value['top'])){?>
                    <?php  $_smarty_tpl->tpl_vars['tp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['widgets']->value['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tp']->key => $_smarty_tpl->tpl_vars['tp']->value){
$_smarty_tpl->tpl_vars['tp']->_loop = true;
?>
                        <?php echo $_smarty_tpl->tpl_vars['tp']->value;?>

                    <?php } ?>
                <?php }?>

        <div class="row"  style="background: rgba(224, 234, 182, 0.37); height: 125px; margin-bottom: 20px; width: 100%;">
            <div class="span4" style="margin-left: 16%;width:245px; height:125px; background: url('<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
neurolap.jpg') no-repeat center left"></div>
            <div class="span7" ><h2 style="font-style: italic;color: #fff; margin-top: 32px;">NEUROLAP</h2><br><h4 style="font-style: italic;color: #fff;margin-top: -5%; ">Laboratorio Neuropsicol&oacute;gico Virtual</h4></div>
        </div>

        <div class="container-fluid" >
            <div class="row-fluid">
                <div class="span2" style="max-width: 20%">
                    <?php if (isset($_smarty_tpl->tpl_vars['widgets']->value['sidebar'])){?>
                        <?php  $_smarty_tpl->tpl_vars['wd'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['wd']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['widgets']->value['sidebar']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['wd']->key => $_smarty_tpl->tpl_vars['wd']->value){
$_smarty_tpl->tpl_vars['wd']->_loop = true;
?>
                            <?php echo $_smarty_tpl->tpl_vars['wd']->value;?>

                        <?php } ?>
                    <?php }?>
                </div>
                <div class="span9 " style="background: #fff;">
                    <noscript><p>Para el correcto funcionamiento debe tener el soporte para javascript habilitado</p></noscript>
                    <?php if (isset($_smarty_tpl->tpl_vars['_error']->value)){?>
                        <div id="_errl" class="alert alert-error">
                            <a class="close" data-dismiss="alert">x</a>
                            <?php echo $_smarty_tpl->tpl_vars['_error']->value;?>

                        </div>
                    <?php }?>

                    <?php if (isset($_smarty_tpl->tpl_vars['_mensaje']->value)){?>
                        <div id="_msgl" class="alert alert-success">
                            <a class="close" data-dismiss="alert">x</a>
                            <?php echo $_smarty_tpl->tpl_vars['_mensaje']->value;?>

                        </div>
                    <?php }?>
                    <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['_contenido']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                </div>

            </div>

        </div>

        <!-- Footer -->
        <div class="navbar navbar-fixed-bottom">
            <div class="navbar-inner">
                <div class="container">
                    <div style="margin-top: 10px; text-align: center;">Copyright&copy; 2015 <a href="" target="_blank">TESIS-UPSA</a></div>
                </div>
            </div>
        </div>

        <!-- javascript -->

        <script src="https://storage.googleapis.com/code.getmdl.io/1.0.4/material.min.js"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/jquery-1.7.2.min.js"></script>
        <!--<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/treetagger.js"></script>-->
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
bootstrap.js"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
modernizr.custom.80867.js"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
js/bootstrap-transition.js"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
js/bootstrap-alert.js"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
js/bootstrap-modal.js"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
js/bootstrap-dropdown.js"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
js/bootstrap-scrollspy.js"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
js/bootstrap-tab.js"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
js/bootstrap-tooltip.js"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
js/bootstrap-popover.js"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
js/bootstrap-button.js"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
js/bootstrap-collapse.js"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
js/bootstrap-carousel.js"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
js/bootstrap-typeahead.js"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
js/bootstrap-affix.js"></script>

        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
jquery-1.4.2.min.js" ></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
cufon-yui.js" ></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
Quicksand_Book_400.font.js" ></script>
        
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCu1TRnRzmgLs3OpGdFOLdp7QOToxkao8M&sensor=false"></script>
        
        
        <script type="text/javascript">
            var _root_ = '<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
';
        </script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
views/encuesta/node_modules/resemblejs/resemble.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/jquery.ez-bg-resize.js" type="text/javascript" ></script>

        <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['js_plugin'])&&count($_smarty_tpl->tpl_vars['_layoutParams']->value['js_plugin'])){?>
            <?php  $_smarty_tpl->tpl_vars['plg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['js_plugin']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['plg']->key => $_smarty_tpl->tpl_vars['plg']->value){
$_smarty_tpl->tpl_vars['plg']->_loop = true;
?>
                <script src="<?php echo $_smarty_tpl->tpl_vars['plg']->value;?>
" type="text/javascript"></script>
            <?php } ?>
        <?php }?>


        <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['js'])&&count($_smarty_tpl->tpl_vars['_layoutParams']->value['js'])){?>
            <?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value){
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
                <script src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
" type="text/javascript"></script>
            <?php } ?>
        <?php }?>
    </body>
</html><?php }} ?>