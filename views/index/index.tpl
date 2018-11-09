
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Carousel items -->
        <div class="carousel-inner">
            <div align="center" class="item active">
                <a href="{$_layoutParams.root}info2">
                    <img src="{$_layoutParams.ruta_img}slider5.jpg">
                </a>
            </div><!-- End Item -->
            <div align="center" class="item">
                <a href="{$_layoutParams.root}info3">
                    <img src="{$_layoutParams.ruta_img}slider2.jpg">
                </a>
            </div><!-- End Item -->
            <div align="center" class="item">
                <a href="{$_layoutParams.root}info4">
                    <img src="{$_layoutParams.ruta_img}slider4.jpg">
                </a>
            </div><!-- End Item -->
            <div align="center" class="item ">
                <a href="{$_layoutParams.root}info">
                    <img src="{$_layoutParams.ruta_img}slider1.jpg">
                </a>
            </div><!-- End Item -->
            <div align="center" class="item">
                <a href="{$_layoutParams.root}info3">
                    <img src="{$_layoutParams.ruta_img}slider1.jpg">
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

{*<div class="row" style="margin-left: 3%;margin-right: 3%; max-width: 100%;">*}
{*<ul class="thumbnails">*}
{*<li class="span3">*}
{*<div class="thumbnail">*}
{*<img src="{$_layoutParams.root}views/index/equipo.png" style="max-width: 58%;" class="img-responsive" alt="Responsive image">*}
{*Quienes Somos?*}
{*<p>...</p>*}
{*<a class="btn btn-primary btn-large">*}
{*Entrar*}
{*</a>*}
{*</div>*}
{*</li>*}
{*<li class="span3">*}
{*<div class="thumbnail">*}
{*<img src="{$_layoutParams.root}views/index/servicios.png" style="max-width: 33%;" class="img-responsive" alt="Responsive image">*}
{*Servicio*}
{*<p>...</p>*}
{*<a class="btn btn-primary btn-large">*}
{*Entrar*}
{*</a>*}
{*</div>*}
{*</li>*}
{*<li class="span3">*}
{*<div class="thumbnail">*}
{*<img src="{$_layoutParams.root}views/index/investigacion.png" class="img-responsive" alt="Responsive image">*}
{*Investigaciones*}
{*<p>...</p>*}
{*<a class="btn btn-primary btn-large">*}
{*Entrar*}
{*</a>*}
{*</div>*}
{*</li>*}
{*<li class="span3">*}
{*<div class="thumbnail">*}
{*<img src="{$_layoutParams.root}views/index/ayuda.png" style="max-width: 59%;" class="img-responsive" alt="Responsive image">*}
{*Necesitas Ayuda?*}
{*<p>...</p>*}
{*<a class="btn btn-primary btn-large">*}
{*Entrar*}
{*</a>*}
{*</div>*}
{*</li>*}
{*</ul>*}
{*</div>*}