<!doctype html>
<html lang="es" dir="ltr"><head>
</head>
<body style="background: url('{$_layoutParams.root}public/img/wallpaper.jpg') no-repeat fixed 100% 100%;no-repeat center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">

<title>{$titulo|default:"Sin título"}</title>

{*<!--?php include ('{$_layoutParams.root}public/files/mapModel.php'); ?--> *}
<link rel="shortcut icon" href="{$_layoutParams.ruta_img}icono.png">
<meta charset="UTF-8">
<meta http-equiv="Content-type" content="text/html; charset=utf-8">

{*<link href="{$_layoutParams.ruta_css}bootstrap.css" rel="stylesheet" type="text/css">*}
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" href="{$_layoutParams.root}views/encuesta/css/stylespeech.css">
{*<link href="{$_layoutParams.root}public/css/marker.css" rel="stylesheet" type="text/css" *}
<meta ="" name="viewport" content="width=device-width, initial-scale=1.0">
{*<link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.4/material.indigo-blue.min.css">*}
{*<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">*}
{*<link href="{$_layoutParams.ruta_css}bootstrap-responsive.css" rel="stylesheet">*}
{if isset($_layoutParams.link_plugin) && count($_layoutParams.link_plugin)}
    {foreach item=link from=$_layoutParams.link_plugin}
        <link href="{$link}" rel="import">
    {/foreach}
{/if}
<style type="text/css">
    body {
        padding-top: 60px;
        /*padding-bottom: 40px;*/
    }
</style>


{if isset($widgets.top)}
    {foreach from=$widgets.top item=tp}
        {$tp}
    {/foreach}
{/if}

<div class="row" align="center" style="background: rgba(0, 11, 15, 0.38); margin-bottom: 20px;">
    <div class="offset2 col-sm-2 col-lg-2"><img src="{$_layoutParams.ruta_img}icono.png" style="width: 40%;" alt="imagen1"></div>
    <div class="col-sm-4 col-lg-4"><h2 style="font-style: italic;color: #fff; margin-top: 32px;font-size: 3em;">
            NEUROLAP</h2><br><h4 style="font-style: italic;color: #fff;margin-top: -5%; ">Laboratorio Neuropsicológico
            Virtual</h4></div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2 col-lg-2" style="">
            {if isset($widgets.sidebar)}
                {foreach from=$widgets.sidebar item=wd}
                    {$wd}
                {/foreach}
            {/if}
        </div>
        <div class="col-sm-9 col-lg-9" style="background: white">
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

{*<script src="https://storage.googleapis.com/code.getmdl.io/1.0.4/material.min.js"></script>*}
{*<script type="text/javascript" src="{$_layoutParams.root}public/js/jquery-1.7.2.min.js"></script>*}
<!--<script type="text/javascript" src="{$_layoutParams.root}public/js/treetagger.js"></script>-->


<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

{*<script type="text/javascript" src="{$_layoutParams.ruta_js}bootstrap.js"></script>*}
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script type="text/javascript" src="{$_layoutParams.ruta_js}modernizr.custom.80867.js"></script>
{*<script type="text/javascript" src="{$_layoutParams.ruta_css}js/bootstrap-transition.js"></script>*}
{*<script type="text/javascript" src="{$_layoutParams.ruta_css}js/bootstrap-alert.js"></script>*}
{*<script type="text/javascript" src="{$_layoutParams.ruta_css}js/bootstrap-modal.js"></script>*}
{*<script type="text/javascript" src="{$_layoutParams.ruta_css}js/bootstrap-dropdown.js"></script>*}
{*<script type="text/javascript" src="{$_layoutParams.ruta_css}js/bootstrap-scrollspy.js"></script>*}
{*<script type="text/javascript" src="{$_layoutParams.ruta_css}js/bootstrap-tab.js"></script>*}
{*<script type="text/javascript" src="{$_layoutParams.ruta_css}js/bootstrap-tooltip.js"></script>*}
{*<script type="text/javascript" src="{$_layoutParams.ruta_css}js/bootstrap-popover.js"></script>*}
{*<script type="text/javascript" src="{$_layoutParams.ruta_css}js/bootstrap-button.js"></script>*}
{*<script type="text/javascript" src="{$_layoutParams.ruta_css}js/bootstrap-collapse.js"></script>*}
{*<script type="text/javascript" src="{$_layoutParams.ruta_css}js/bootstrap-carousel.js"></script>*}
{*<script type="text/javascript" src="{$_layoutParams.ruta_css}js/bootstrap-typeahead.js"></script>*}
{*<script type="text/javascript" src="{$_layoutParams.ruta_css}js/bootstrap-affix.js"></script>*}

{*<script type="text/javascript" src="{$_layoutParams.ruta_js}jquery-1.4.2.min.js"></script>*}
<script type="text/javascript" src="{$_layoutParams.ruta_js}jquery.easing.1.3.js"></script>
<script type="text/javascript" src="{$_layoutParams.ruta_js}cufon-yui.js"></script>
<script type="text/javascript" src="{$_layoutParams.ruta_js}Quicksand_Book_400.font.js"></script>
{*<script src="http://www.google.com/jsapi"></script>*}
{*<script type="text/javascript" src="{$_layoutParams.root}public/js/jquery-1.10.2.min.js"></script>*}
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCu1TRnRzmgLs3OpGdFOLdp7QOToxkao8M"></script>
{*<script type="text/javascript">*}
{*<script>google.load("jquery", "1");</script>*}
<script type="text/javascript">
    var _root_ = '{$_layoutParams.root}';
</script>
<script type="text/javascript" src="{$_layoutParams.root}node_modules/resemblejs/resemble.js"></script>
<script src="{$_layoutParams.root}public/js/jquery.ez-bg-resize.js" type="text/javascript"></script>

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


</body></html>