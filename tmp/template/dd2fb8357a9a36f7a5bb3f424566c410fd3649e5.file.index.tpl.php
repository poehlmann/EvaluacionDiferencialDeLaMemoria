<?php /* Smarty version Smarty-3.1.8, created on 2015-09-28 06:00:07
         compiled from "C:\Xampp\htdocs\mvc\views\index\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:814754d25040d6ff36-00160563%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd2fb8357a9a36f7a5bb3f424566c410fd3649e5' => 
    array (
      0 => 'C:\\Xampp\\htdocs\\mvc\\views\\index\\index.tpl',
      1 => 1443412806,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '814754d25040d6ff36-00160563',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54d25040d7bab6_25738175',
  'variables' => 
  array (
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d25040d7bab6_25738175')) {function content_54d25040d7bab6_25738175($_smarty_tpl) {?><!--<h3>Bienvenido a la Clinica Neuropsicologica</h3>-->
<div id="myCarousel" class="carousel slide">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>
    <!-- Carousel items -->
    <div class="carousel-inner" style="max-width: 100%;">
        <div class="active item"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
info3"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
slider5.jpg" style="width: 100%;" alt="imagen1"></a></div>
        <div class="item"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
info3"> <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
slider2.jpg" style="width: 100%;" alt="imagen2"></a></div>
        <div class="item"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
info4"> <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
slider4.jpg" style="width: 100%;" alt="imagen3"></a></div>
        <div class="item"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
info"> <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
slider1.jpg" style="width: 100%;" alt="imagen4"></a></div>
        <div class="item"> <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
info3"> <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
slider6.jpg" style="width: 100%;" alt="imagen5"></a></div>
    </div>
    <!-- Carousel nav -->
    <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
    <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>

    <div class="row" style="margin-left: 3%;margin-right: 3%; max-width: 100%;">
        <ul class="thumbnails">
            <li class="span3">
                <div class="thumbnail">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
views/index/equipo.png" style="max-width: 58%;" class="img-responsive" alt="Responsive image">
                    Quienes Somos?
                    <p>...</p>
                    <a class="btn btn-primary btn-large">
                        Entrar
                    </a>
                </div>
            </li>
            <li class="span3">
                <div class="thumbnail">
                    <img  src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
views/index/servicios.png" style="max-width: 33%;" class="img-responsive" alt="Responsive image">
                    Servicio
                    <p>...</p>
                    <a class="btn btn-primary btn-large">
                        Entrar
                    </a>
                </div>
            </li>
            <li class="span3">
                <div class="thumbnail">
                    <img  src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
views/index/investigacion.png" class="img-responsive" alt="Responsive image">
                    Investigaciones
                    <p>...</p>
                    <a class="btn btn-primary btn-large">
                        Entrar
                    </a>
                </div>
            </li>
            <li class="span3">
                <div class="thumbnail">
                    <img  src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
views/index/ayuda.png" style="max-width: 59%;" class="img-responsive" alt="Responsive image">
                    Necesitas Ayuda?
                    <p>...</p>
                    <a class="btn btn-primary btn-large">
                        Entrar
                    </a>
                </div>
            </li>
        </ul>
    </div>

<hr>
<?php }} ?>