<?php /* Smarty version Smarty-3.1.8, created on 2018-11-09 00:26:39
         compiled from "/opt/lampp/htdocs/EvaluacionDiferencialDeLaMemoria/views/index/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19030723235afafa28725eb9-27752763%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '318013252f61f7bdeffc26b16c2e7dc89c5609a1' => 
    array (
      0 => '/opt/lampp/htdocs/EvaluacionDiferencialDeLaMemoria/views/index/index.tpl',
      1 => 1541711969,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19030723235afafa28725eb9-27752763',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5afafa28760d92_69769714',
  'variables' => 
  array (
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5afafa28760d92_69769714')) {function content_5afafa28760d92_69769714($_smarty_tpl) {?>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Carousel items -->
        <div class="carousel-inner">
            <div align="center" class="item active">
                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
info2">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
slider5.jpg">
                </a>
            </div><!-- End Item -->
            <div align="center" class="item">
                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
info3">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
slider2.jpg">
                </a>
            </div><!-- End Item -->
            <div align="center" class="item">
                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
info4">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
slider4.jpg">
                </a>
            </div><!-- End Item -->
            <div align="center" class="item ">
                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
info">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
slider1.jpg">
                </a>
            </div><!-- End Item -->
            <div align="center" class="item">
                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
info3">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
slider1.jpg">
                </a>
            </div><!-- End Item -->
        </div>
        <!-- Controls -->
        <div class="carousel-controls">
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            var clickEvent = false;
            $('#myCarousel').carousel({
                interval:   4000
            }).on('click', '.list-group li', function() {
                clickEvent = true;
                $('.list-group li').removeClass('active');
                $(this).addClass('active');
            }).on('slid.bs.carousel', function(e) {
                if(!clickEvent) {
                    var count = $('.list-group').children().length -1;
                    var current = $('.list-group li.active');
                    current.removeClass('active').next().addClass('active');
                    var id = parseInt(current.data('slide-to'));
                    if(count == id) {
                        $('.list-group li').first().addClass('active');
                    }
                }
                clickEvent = false;
            });
        });

        $(window).load(function() {
            var boxheight = $('#myCarousel .carousel-inner').innerHeight();
            var itemlength = $('#myCarousel .item').length;
            var triggerheight = Math.round(boxheight/itemlength+1);
            $('#myCarousel .list-group-item').outerHeight(triggerheight);
        });
    </script>












































<?php }} ?>