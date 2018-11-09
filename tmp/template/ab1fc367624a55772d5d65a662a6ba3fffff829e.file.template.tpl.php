<?php /* Smarty version Smarty-3.1.8, created on 2018-11-08 23:05:02
         compiled from "/opt/lampp/htdocs/EvaluacionDiferencialDeLaMemoria/views/layout/twb/template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12767522435afafa28579cb4-21268387%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab1fc367624a55772d5d65a662a6ba3fffff829e' => 
    array (
      0 => '/opt/lampp/htdocs/EvaluacionDiferencialDeLaMemoria/views/layout/twb/template.tpl',
      1 => 1541714701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12767522435afafa28579cb4-21268387',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5afafa286a8972_09598461',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'titulo' => 0,
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
<?php if ($_valid && !is_callable('content_5afafa286a8972_09598461')) {function content_5afafa286a8972_09598461($_smarty_tpl) {?><!doctype html>
<html lang="es" dir="ltr"><head>
</head>
<body style="background: url('<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/wallpaper.jpg') no-repeat fixed 100% 100%;no-repeat center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">

<title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['titulo']->value)===null||$tmp==='' ? "Sin título" : $tmp);?>
</title>


<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
icono.png">
<meta charset="UTF-8">
<meta http-equiv="Content-type" content="text/html; charset=utf-8">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
views/encuesta/css/stylespeech.css">

<meta ="" name="viewport" content="width=device-width, initial-scale=1.0">



<?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['link_plugin'])&&count($_smarty_tpl->tpl_vars['_layoutParams']->value['link_plugin'])){?>
    <?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['link_plugin']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value){
$_smarty_tpl->tpl_vars['link']->_loop = true;
?>
        <link href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
" rel="import">
    <?php } ?>
<?php }?>
<style type="text/css">
    body {
        padding-top: 60px;
        /*padding-bottom: 40px;*/
    }
</style>


<?php if (isset($_smarty_tpl->tpl_vars['widgets']->value['top'])){?>
    <?php  $_smarty_tpl->tpl_vars['tp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['widgets']->value['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tp']->key => $_smarty_tpl->tpl_vars['tp']->value){
$_smarty_tpl->tpl_vars['tp']->_loop = true;
?>
        <?php echo $_smarty_tpl->tpl_vars['tp']->value;?>

    <?php } ?>
<?php }?>

<div class="row" align="center" style="background: rgba(0, 11, 15, 0.38); margin-bottom: 20px;">
    <div class="offset2 col-sm-2 col-lg-2"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
icono.png" style="width: 40%;" alt="imagen1"></div>
    <div class="col-sm-4 col-lg-4"><h2 style="font-style: italic;color: #fff; margin-top: 32px;font-size: 3em;">
            NEUROLAP</h2><br><h4 style="font-style: italic;color: #fff;margin-top: -5%; ">Laboratorio Neuropsicológico
            Virtual</h4></div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2 col-lg-2" style="">
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
        <div class="col-sm-9 col-lg-9" style="background: white">
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
<div class="navbar navbar-fixed-bottom" style="background: #e8e8ea;">
    <div class="navbar-inner">
        <div class="container">
            <div style="margin-top: 10px; text-align: center;">Copyright© 2018 <a href="" target="_blank">BPM</a></div>
        </div>
    </div>
</div>

<!-- javascript -->



<!--<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/treetagger.js"></script>-->


<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
modernizr.custom.80867.js"></script>















<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
cufon-yui.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
Quicksand_Book_400.font.js"></script>


<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCu1TRnRzmgLs3OpGdFOLdp7QOToxkao8M"></script>


<script type="text/javascript">
    var _root_ = '<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
';
</script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
node_modules/resemblejs/resemble.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/jquery.ez-bg-resize.js" type="text/javascript"></script>

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


</body></html><?php }} ?>