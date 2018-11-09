<h3>Evaluaci&oacute;n Cognitiva (MMSE) Modificado</h3>
<!-- Paginacion Virtual  -->
<!-- Paginacion Adicional DIV (Podria ser un Div Vacio)-->
<div id="scriptspaginate2" class="paginationstyle" style="width: 400px"></div>

<hr style="margin-top: 40px; color: blue" />
<div id="scriptspaginate2" class="paginationstyle" style="width: 400px"></div>

<div style="max-width: 100%; border: groove 10px ; padding: 5px; background-color: rgba(56, 89, 253, 0.52); border-radius: 19px;">
    <div class="virtualpage hidepiece">
        <div id="preview"> </div>
        <div id="formbox">
            <p>
                <b>Dara inicio al MMSE</b>:
            </p>
            <button class="btn btn-success" onclick="gallery.navigate(1)"><i class="icon-folder-open icon-white"></i>Siguiente</button>
        </div>
    </div>
    <!--Pregunta 1 REALIZADO-->
    <div class="virtualpage hidepiece">
        <div id="preview"> </div>
        <div id="formbox">
            <p>
                <b>Por favor, d&iacute;game la fecha de hoy</b>:
            </p>
            <div align="center"><button class="botonesdemo" onclick="hover1.playclip();" ><input type="image" onclick='return false;' src="{$_layoutParams.root}views/encuesta/img/audio.png">Escuche la orden</button></div>

            <form id="form1" method="post" action="{$_layoutParams.root}encuesta3/pregunta1" enctype="multipart/form-data">
                <input type="hidden" name="guardar" value="1" />
                <table class="table table-bordered" style="width: 90%;">
                    <tr>
                        <td style="text-align: left;"><h4>1.Mes: </h4></td>
                        <td><label for="opcion1"></label><input type="text" name="11" value="{$datos.113|default:"Mes"}"  onfocus="if (this.value==='Mes') this.value='';" onblur="if (this.value==='') this.value='Mes';" id='opcion4'/></td>
                        <td>    <input name="boton1" type="image" onclick='deshabilitar4();return false;' src="{$_layoutParams.root}views/encuesta/img/emoticon.png"></td>
                    </tr>
                    <tr>
                        <td style="text-align: left;"><h4>2.D&iacute;a del mes:</h4></td>
                        <td><label for="opcion2"></label><input type="text" name="12" value="{$datos.113|default:"Dia del Mes"}"  onfocus="if (this.value==='Dia del Mes') this.value='';" onblur="if (this.value==='') this.value='Dia del Mes';" id='opcion3'/></td>
                        <td>    <input name="boton1" type="image" onclick='deshabilitar3();return false;' src="{$_layoutParams.root}views/encuesta/img/emoticon.png"></td>
                    </tr>
                    <tr>
                        <td style="text-align: left;"><h4>3.En qu&eacute; a&ntilde;o estamos?: </h4></td>
                        <td><label for="opcion3"></label><input type="text" name="13" value="{$datos.111|default:"A&ntilde;o"}"  onfocus="if (this.value==='A&ntilde;o') this.value='';" onblur="if (this.value==='') this.value='A&ntilde;o';" id='opcion1'/></td>
                        <td>    <input name="boton1" type="image" onclick='deshabilitar1();return false;' src="{$_layoutParams.root}views/encuesta/img/emoticon.png"></td>
                    </tr>
                    <tr>
                        <td style="text-align: left;"><h4>4.En qu&eacute; d&iacute;a de la semana?: </h4></td>
                        <td><label for="opcion4"></label><input type="text" name="14" value="{$datos.113|default:"Dia de la Semana"}"  onfocus="if (this.value==='Dia de la Semana') this.value='';" onblur="if (this.value==='') this.value='Dia de la Semana';" id='opcion5'/></td>
                        <td>   <input name="boton1" type="image" onclick='deshabilitar5();return false;' src="{$_layoutParams.root}views/encuesta/img/emoticon.png"></td>
                    </tr>
                </table>
                <button class="btn btn-success" onclick="gallery.navigate(2)"><i class="icon-folder-open icon-white"></i>Siguiente</button>
            </form>
        </div>
    </div>

    <!--Pregunta 2 REALIZADO-->
    <div class="virtualpage hidepiece">
        <div id="preview"> </div>
        <div id="formbox">
            <div align="center">
                <button class="botonesdemo" onclick="hover2.playclip();document.getElementById('button1').style.display = 'block';this.style.display = 'none' " ><input type="image" onclick='return false;' src="{$_layoutParams.root}views/encuesta/img/audio.png">Escuche la orden</button>
                <button class="botonesdemo" id="button1" onclick="hover21.playclip();this.disabled= true;document.getElementById('button50').style.display = 'block';this.style.display = 'none' " style="display:none;"><input type="image" onclick='return false;' src="{$_layoutParams.root}views/encuesta/img/audio.png">Lista de Palabras</button>
            </div><form id="form1" method="post" action="{$_layoutParams.root}encuesta/pregunta2" enctype="multipart/form-data">
                <input type="hidden" name="guardar" value="1" />
                <table class="table table-bordered" style="width: 90%;">
                    <template is="auto-binding">
                        <p> <speech-input continuous="true" interimResults="true" language="es-BO" value="{poly_bind expr='text1'}"></speech-input>
                        <input type="hidden" name="text1"  value="{poly_bind expr='text1'}">
                        <p>{poly_bind expr='text1'}</p>
                    </template>
                </table>
                <button class="btn btn-success" onclick="gallery.navigate(3)"><i class="icon-folder-open icon-white"></i>Siguiente</button>
            </form>
        </div>
    </div>

    <!--Pregunta 3 REALIZADO  -->
    <div class="virtualpage hidepiece">
        <div id="preview"> </div>
        <div id="formbox">
            <b>Ahora voy a decirle unos numeros y quiero que me los repita al reves</b>:
            <div align="center">
                <button class="botonesdemo" onclick="hover3.playclip();document.getElementById('button2').style.display = 'block';this.style.display = 'none' " ><input type="image" onclick='return false;' src="{$_layoutParams.root}views/encuesta/img/audio.png">Escuche la orden</button>
                <button class="botonesdemo" id="button2" onclick="hover31.playclip();this.disabled= true;document.getElementById('button50').style.display = 'block';this.style.display = 'none' " style="display:none;"><input type="image" onclick='return false;' src="{$_layoutParams.root}views/encuesta/img/audio.png">Lista de N&uacute;meros</button>
            </div>
            <form id="form1" method="POST" action="{$_layoutParams.root}encuesta/pregunta3" enctype="multipart/form-data">
                <input type="hidden" name="guardar" value="1" />
                <p>
                <table class="table table-bordered" style="width: 90%;">
                    <template is="auto-binding">
                        <speech-input continuous="true" interimResults="true" language="es-BO" value="{poly_bind expr='text2'}"></speech-input>
                        <input type="hidden" name="text2" value="{poly_bind expr='text2'}">
                        <p>{poly_bind expr='text2'}</p>
                    </template>
                </table>
                <button class="btn btn-success" onclick="gallery.navigate(4)"><i class="icon-folder-open icon-white"></i>Siguiente</button>
            </form>
        </div>
    </div>

    <!--Pregunta 4 REALIZADO -->
    <div class="virtualpage hidepiece">
        <div id="preview"> </div>
        <div id="formbox">
            <b>Seleccione las acciones que le ire indicando:</b>:</br>tome el papel con la mano derecha</br>doblelo por la mitad con ambas manos</br>coloquelo sobre sus piernas </br>
            <div align="center">
                <button  class="botonesdemo" onclick="hover4.playclip();document.getElementById('accion1').style.display = 'block'; this.style.display = 'none';" ><input type="image" onclick='return false;' src="{$_layoutParams.root}views/encuesta/img/audio.png">Escuche la orden</button>
                <button  id="accion1" class="botonesdemo" onclick="hover321.playclip();document.getElementById('accion2').style.display = 'block'; this.style.display = 'none';" style="display:none"><input type="image" onclick='return false;' src="{$_layoutParams.root}views/encuesta/img/audio.png" >Acci&oacute;n 1</button>
                <button  id="accion2" class="botonesdemo" onclick="hover322.playclip();document.getElementById('accion3').style.display = 'block'; this.style.display = 'none';" style="display:none"><input type="image" onclick='return false;' src="{$_layoutParams.root}views/encuesta/img/audio.png" >Acci&oacute;n 2</button>
                <button  id="accion3" class="botonesdemo" onclick="hover323.playclip(); this.style.display = 'none';" style="display:none"><input type="image" onclick='return false;' src="{$_layoutParams.root}views/encuesta/img/audio.png" >Acci&oacute;n 3</button>
            </div>
            <section id="contenedorPuzzle">
                <div id="contenedorPiezas" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)">
                    <img id="pieza1" src="{$_layoutParams.root}views/encuesta/img/pieza11.jpg" alt="pieza1" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                    <img id="pieza4" src="{$_layoutParams.root}views/encuesta/img/pieza12.jpg" alt="pieza1" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                    <img id="pieza2" src="{$_layoutParams.root}views/encuesta/img/pieza21.jpg" alt="pieza1" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                    <img id="pieza5" src="{$_layoutParams.root}views/encuesta/img/pieza22.jpg" alt="pieza1" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                    <img id="pieza3" src="{$_layoutParams.root}views/encuesta/img/pieza31.jpg" alt="pieza1" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                    <img id="pieza6" src="{$_layoutParams.root}views/encuesta/img/pieza32.jpg" alt="pieza1" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                </div>
                <div id="puzzle" style="background-image:url({$_layoutParams.root}views/encuesta/img/32.png) ">
                    <div class="contenedorPieza" id="uno" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"></div>
                    <div class="contenedorPieza" id="dos" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"></div>
                    <div class="contenedorPieza" id="tres" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"></div>
                    <!--<div class="contenedorPieza" id="cuatro" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"></div>-->
                </div>
            </section>
            <form id="form1" method="post" enctype="multipart/form-data">
                <input type="hidden" name="guardar" value="1" />
                <div name='puzzleresp' class="puzzleresp" hidden> </div>
                <label for="puzzleresp"></label><input type='text' id='puzzleresp' name='puzzleresp' value='' hidden>
                <button  class="btn btn-success" onclick="gallery.navigate(5);this.form.action = '{$_layoutParams.root}encuesta/pregunta4';"><i class="icon-folder-open icon-white"></i>Siguiente</button>
            </form>
        </div>
    </div>
    <!--Pregunta 5 REALIZADO  -->
    <div class="virtualpage hidepiece">
        <div id="preview"> </div>
        <div id="formbox">
            <b>hace un momento le lei una seria de 3 palabras y ud. repitio las que recordo.</b>:</br>Por favor, digame ahora cuales recuerda.
            <table class="table table-bordered" style="width: 90%;">
                <div align="center"><button  class="botonesdemo" onclick="hover5.playclip();this.disabled= true;" ><input type="image" onclick='return false;' src="{$_layoutParams.root}views/encuesta/img/audio.png">Escuche la orden</button></div>
                <p>
                    <template is="auto-binding">
                        <form id="form1" method="post" action="{$_layoutParams.root}encuesta/pregunta5" enctype="multipart/form-data">
                            <input type="hidden" name="guardar" value="1" />
                            <p>
                                <speech-input continuous="true" interimResults="true" language="es-BO" value="{poly_bind expr='text4'}"></speech-input>
                                <input type="hidden" name="text4" value="{poly_bind expr='text4'}">
                            <p>{poly_bind expr='text4'}</p>
                            <button class="btn btn-success" onclick="gallery.navigate(6)"><i class="icon-folder-open icon-white"></i>Siguiente</button>
                        </form>
                    </template>
                </p>
            </table>
        </div>
    </div>
    <!--Pregunta 6 REALIZADO  -->
    <div class="virtualpage hidepiece">
        <div id="preview"> </div>
        <div id="formbox">
            <b> Por favor copie este dibujo: </b>
            <table class="table table-bordered" style="width: 90%;">
                <div align="center"><button  class="botonesdemo" onclick="hover6.playclip();this.disabled= true;" ><input type="image" onclick='return false;' src="{$_layoutParams.root}views/encuesta/img/audio.png">Escuche la orden</button></div>
                <p>
                </p>
            </table>
        </div>
    </div>

    <!--Finalizado -->
    <div class="virtualpage hidepiece">
        <div id="preview"> </div>
        <div id="formbox">
            <b><h3>Felicidades a completado con &eacute;xito "La Evaluaci&oacute;n Cognitiva"</h3>
                <input type="hidden" name="guardar" value="1" />
                <table class="table table-bordered" style="width: 90%;">
                    <h4>Continue la evaluaci&oacute;n con el <a class=""  href="{$_layoutParams.root}resultado" rel="next">Resultado </a></h4>
                </table>
        </div>
    </div>

</div>

<!-- Paginacion de div -->
Esto no entra para la vista del usuario, solo es de guia
<div id="gallerypaginate2" class="paginationstyle">
    <a href="#" rel="previous" style="margin-right: 80px">atras</a>
    <span class="paginateinfo" style="font-weight:bold"></span>
    <a class=""  href="#" rel="next">siguiente</a>
</div>

<hr style="margin-top: 35px; color: red" />