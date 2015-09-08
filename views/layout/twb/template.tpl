<!DOCTYPE html>
<html lang="es">
    <head>
        <title>{$titulo|default:"Sin t&iacute;tulo"}</title>
        <link rel="shortcut icon" href="{$_layoutParams.ruta_img}icono.png" />
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <link href="{$_layoutParams.ruta_css}bootstrap.css" rel="stylesheet" type="text/css">
        <link href="{$_layoutParams.root}views/encuesta/css/stylespeech.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{$_layoutParams.ruta_css}bootstrap-responsive.css" rel="stylesheet">
        {if isset($_layoutParams.link_plugin) && count($_layoutParams.link_plugin)}
            {foreach item=link from=$_layoutParams.link_plugin}
                <link href="{$link}"  rel="import">
            {/foreach}
        {/if}
        <style type="text/css">
        body{
            padding-top: 40px;
            padding-bottom: 40px;

        }
        </style>
    </head>

    <body style="background: url('{$_layoutParams.ruta_img}fondo3.jpg') no-repeat fixed 100% 100%;no-repeat center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
        {if isset($widgets.top)}
                    {foreach from=$widgets.top item=tp}
                        {$tp}
                    {/foreach}
                {/if}

        <div class="row"  style="background: rgba(224, 234, 182, 0.37); height: 125px; margin-bottom: 20px; width: 100%;">
            <div class="span4" style="margin-left: 16%;width:245px; height:125px; background: url('{$_layoutParams.ruta_img}neurolap.jpg') no-repeat center left"></div>
            <div class="span7" style="width: 0px;"><h2 style="color: #fff; margin-top: 32px;">NEUROLAP</h2></div>
        </div>

        <div class="container-fluid" >
            <div class="row-fluid">
                <div class="span9 offset1" style="background: #fff;">
                    <noscript><p>Para el correcto funcionamiento debe tener el soporte para javascript habilitado</p></noscript>
                    {if isset($_error)}
                        <div id="_errl" class="alert alert-error">
                            <a class="close" data-dismiss="alert">x</a>
                            {$_error}
                        </div>
                    {/if}

                    {if isset($_mensaje)}
                        <div id="_msgl" class="alert alert-success">
                            <a class="close" data-dismiss="alert">x</a>
                            {$_mensaje}
                        </div>
                    {/if}
                    {include file=$_contenido}
                </div>
                <div class="span2" >
                    {if isset($widgets.sidebar)}
                        {foreach from=$widgets.sidebar item=wd}
                            {$wd}
                        {/foreach}
                    {/if}
                </div>
            </div>

        </div>

        <!-- Footer -->
        <div class="navbar navbar-fixed-bottom">
            <div class="navbar-inner">
                <div class="container">
                    <div style="margin-top: 10px; text-align: center;">Copyright&copy; 2015 <a href="TESIS-UPSA" target="_blank">TESIS-UPSA</a></div>
                </div>
            </div>
        </div>

        <!-- javascript -->
        <script type="text/javascript" src="{$_layoutParams.root}public/js/jquery-1.7.2.min.js"></script>
        <!--<script type="text/javascript" src="{$_layoutParams.root}public/js/treetagger.js"></script>-->
        <script type="text/javascript" src="{$_layoutParams.ruta_js}bootstrap.js"></script>
        <script type="text/javascript" src="{$_layoutParams.ruta_js}modernizr.custom.80867.js"></script>
        <script type="text/javascript" src="{$_layoutParams.ruta_css}js/bootstrap-transition.js"></script>
        <script type="text/javascript" src="{$_layoutParams.ruta_css}js/bootstrap-alert.js"></script>
        <script type="text/javascript" src="{$_layoutParams.ruta_css}js/bootstrap-modal.js"></script>
        <script type="text/javascript" src="{$_layoutParams.ruta_css}js/bootstrap-dropdown.js"></script>
        <script type="text/javascript" src="{$_layoutParams.ruta_css}js/bootstrap-scrollspy.js"></script>
        <script type="text/javascript" src="{$_layoutParams.ruta_css}js/bootstrap-tab.js"></script>
        <script type="text/javascript" src="{$_layoutParams.ruta_css}js/bootstrap-tooltip.js"></script>
        <script type="text/javascript" src="{$_layoutParams.ruta_css}js/bootstrap-popover.js"></script>
        <script type="text/javascript" src="{$_layoutParams.ruta_css}js/bootstrap-button.js"></script>
        <script type="text/javascript" src="{$_layoutParams.ruta_css}js/bootstrap-collapse.js"></script>
        <script type="text/javascript" src="{$_layoutParams.ruta_css}js/bootstrap-carousel.js"></script>
        <script type="text/javascript" src="{$_layoutParams.ruta_css}js/bootstrap-typeahead.js"></script>
        <script type="text/javascript" src="{$_layoutParams.ruta_css}js/bootstrap-affix.js"></script>

        <script type="text/javascript" src="{$_layoutParams.ruta_js}jquery-1.4.2.min.js" ></script>
        <script type="text/javascript" src="{$_layoutParams.ruta_js}jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="{$_layoutParams.ruta_js}cufon-yui.js" ></script>
        <script type="text/javascript" src="{$_layoutParams.ruta_js}Quicksand_Book_400.font.js" ></script>
        <script src="http://www.google.com/jsapi"></script>
        <script>google.load("jquery", "1");</script>
        <script type="text/javascript">
            var _root_ = '{$_layoutParams.root}';
        </script>
        <script type="text/javascript" src="{$_layoutParams.root}views/encuesta/node_modules/resemblejs/resemble.js"></script>
        <script src="{$_layoutParams.root}public/js/jquery.ez-bg-resize.js" type="text/javascript" ></script>

        {if isset($_layoutParams.js_plugin) && count($_layoutParams.js_plugin)}
            {foreach item=plg from=$_layoutParams.js_plugin}
                <script src="{$plg}" type="text/javascript"></script>
            {/foreach}
        {/if}


        {if isset($_layoutParams.js) && count($_layoutParams.js)}
            {foreach item=js from=$_layoutParams.js}
                <script src="{$js}" type="text/javascript"></script>
            {/foreach}
        {/if}
    </body>
</html>