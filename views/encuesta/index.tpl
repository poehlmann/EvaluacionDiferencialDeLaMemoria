<!-- Paginacion Virtual  -->
<h3>Evaluación Diferencial de la Memoria</h3>
<!-- Paginacion Adicional DIV (Podria ser un Div Vacio)-->

<div style="border: groove 10px; background-color: rgba(42,223,202,0.47);">
    <!-- Inicio Encuesta -->
    <div class="virtualpage hidepiece">
        <div id="preview"></div>
        <div id="formbox">
            <table style="width:100%">
                <tbody>
                <tr>
                    <td>
                        <p>
                            Bienvenido a la aplicacion de la pagina web<br>
                            las siguientes evaluaciones que se presentarán son:<br>
                        </p>
                        <ul>
                            <li>Evaluacion Diferencial de la Memoria - EDM</li>
                            <li>Escala de Reserva Cognitiva de la Memoria - EQUILAM</li>
                            <li>Evaluacion Cognitiva - MMSE</li>
                            <li>Escala de Deterioro Global de Reisberg - GDS</li>
                        </ul>
                        Lleva tiempo realizar la evaluacion, se le pide tener el tiempo disponible para concluirlo
                        <p></p>
                    </td>
                    <td style="align-content: center">
                        <img class="img2" src="{$_layoutParams.root}views/layout/twb/img/icono2.png">

                        <button class="btn btn-danger"
                                onclick="gallery.navigate(1);{*launchFullscreen(document.documentElement);*}"><i
                                    class="icon-star icon-white"></i>Inicio<i class="icon-star icon-white"></i></button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!--Pregunta 1 REALIZADO-->
    <div class="virtualpage hidepiece">
        <div id="preview"></div>
        <div id="formbox">
            <p>
                <b>1 - 1 Memoria Episódica : Orientación - Orientación - Tiempo</b>:
            </p>
            <div align="center">
                <button class="botonesdemo" onclick="hover1.playclip();">
                    <input type="image" onclick="return false;" src="{$_layoutParams.root}views/encuesta/img/audio.png"
                           />Escuche la orden
                </button>
            </div>
            <form id="form1" method="post" action="{$_layoutParams.root}encuesta/pregunta1"
                  enctype="multipart/form-data">
                <input type="hidden" name="guardar" value="1" class="form-control">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-3 col-md-3">
                            <h4>1.En qué año estamos?: </h4>
                        </div>
                        <div class="col-sm-8 col-md-8">
                            <label for="opcion1"></label><input type="text" name="111"
                                                                value="{$datos.111|default:" a&ntilde;o"}"
                                                                onfocus="if (this.value==='Año') this.value='';"
                                                                onblur="if (this.value==='') this.value='Año';"
                                                                id="opcion1" class="form-control">
                        </div>
                        <div class="col-sm-1 col-md-1">
                            <input name="boton1" type="image" onclick="deshabilitar1();return false;"
                                   src="{$_layoutParams.root}views/encuesta/img/emoticon.png" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3 col-md-3"><h4>2.Qué hora es aproximadamente?: </h4></div>
                        <div class="col-sm-8 col-md-8"><label for="opcion2"></label><input type="time" name="112"
                                                                                           value="{$datos.112|default:" "}"
                                                                                           id="opcion2"
                                                                                           class="form-control"></div>
                        <div class="col-sm-1 col-md-1"><input name="boton1" type="image"
                                                              onclick="deshabilitar2();return false;"
                                                              src="{$_layoutParams.root}views/encuesta/img/emoticon.png"
                                                              ></div>
                    </div>

                    <div class="row">
                        <div class="col-sm-3 col-md-3"><h4>3.En qué fecha estamos?:</h4></div>
                        <div class="col-sm-8 col-md-8"><label for="opcion3"></label><input type="text" name="113"
                                                                                           value="{$datos.113|default:" dia del mes"}"
                                                                                           onfocus="if (this.value==='Dia del Mes') this.value='';"
                                                                                           onblur="if (this.value==='') this.value='Dia del Mes';"
                                                                                           id="opcion3"
                                                                                           class="form-control">
                        </div>
                        <div class="col-sm-1 col-md-1"><input name="boton1" type="image"
                                                              onclick="deshabilitar3();return false;"
                                                              src="{$_layoutParams.root}views/encuesta/img/emoticon.png"
                                                              >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3 col-md-3"><h4>4.En qué mes?: </h4></div>
                        <div class="col-sm-8 col-md-8"><label for="opcion4"></label><input type="text" name="114"
                                                                                           value="{$datos.113|default:" mes"}"
                                                                                           onfocus="if (this.value==='Mes') this.value='';"
                                                                                           onblur="if (this.value==='') this.value='Mes';"
                                                                                           id="opcion4"
                                                                                           class="form-control">
                        </div>
                        <div class="col-sm-1 col-md-1"><input name="boton1" type="image"
                                                              onclick="deshabilitar4();return false;"
                                                              src="{$_layoutParams.root}views/encuesta/img/emoticon.png"
                                                              >
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-3 col-md-3"><h4>5.En qué día de la semana?: </h4></div>
                        <div class="col-sm-8 col-md-8"><label for="opcion5"></label><input type="text" name="115"
                                                                                           value="{$datos.113|default:" dia de la semana"}"
                                                                                           onfocus="if (this.value==='Dia de la Semana') this.value='';"
                                                                                           onblur="if (this.value==='') this.value='Dia de la Semana';"
                                                                                           id="opcion5"
                                                                                           class="form-control">
                        </div>
                        <div class="col-sm-1 col-md-1"><input name="boton1" type="image"
                                                              onclick="deshabilitar5();return false;"
                                                              src="{$_layoutParams.root}views/encuesta/img/emoticon.png"
                                                              >
                        </div>
                    </div>
                </div>
                <button class="btn btn-success" onclick="gallery.navigate(2)"><i
                            class="icon-folder-open icon-white"></i>Siguiente
                </button>
            </form>
        </div>
    </div>
    <!--Pregunta 2 REALIZADO-->
    <div class="virtualpage hidepiece">
        <div id="preview"></div>
        <div id="formbox">
            <p>
                <b>2 - 2 Memoria Episódica : Orientación - Orientación - Espacio</b>:
            </p>
            <div align="center">
                <button class="botonesdemo" onclick="hover2.playclip();"><input type="image" onclick="return false;"
                                                                                src="{$_layoutParams.root}views/encuesta/img/audio.png"
                                                                                >Escuche la orden
                </button>
            </div>
            <form id="form1" method="post" action="{$_layoutParams.root}encuesta/pregunta2"
                  enctype="multipart/form-data">
                <input type="hidden" name="guardar" value="1" class="form-control">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <img src="{$_layoutParams.root}views/encuesta/img/2.png" style="width: 100%;">
                        </div>
                        <div class="col-sm-5 col-md-5">
                            <div class="container-fluid">

                                <div class="row">
                                    <div class="col-sm-3 col-md-3"><h4>1.En qué dirección se encuentra el niño?: </h4></div>
                                    <div class="col-sm-8 col-md-8"><label for="opcion6"></label><input type="text" name="221"
                                                                                                       value="{$datos.221|default:" "}"
                                                                                                       onfocus="if (this.value==='') this.value='';"
                                                                                                       onblur="if (this.value==='') this.value='Año';"
                                                                                                       id="opcion6"
                                                                                                       class="form-control"></div>
                                    <div class="col-sm-1 col-md-1"><input name="boton1" type="image"
                                                                          onclick="deshabilitar6();return false;"
                                                                          src="{$_layoutParams.root}views/encuesta/img/emoticon.png"
                                                                          ></div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3 col-md-3"><h4>2.En qué piso se encuentra la niña?: </h4></div>
                                    <div class="col-sm-8 col-md-8"><label for="opcion7"></label><input type="text" name="222"
                                                                                                       value="{$datos.222|default:" "}"
                                                                                                       id="opcion7"
                                                                                                       class="form-control"></div>
                                    <div class="col-sm-1 col-md-1"><input name="boton1" type="image"
                                                                          onclick="deshabilitar7();return false;"
                                                                          src="{$_layoutParams.root}views/encuesta/img/emoticon.png"
                                                                          ></div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3 col-md-3"><h4>3.En qué lugar de la casa se encuentra el abuelo?: </h4>
                                    </div>
                                    <div class="col-sm-8 col-md-8"><label for="opcion8"></label><input type="text" name="223"
                                                                                                       value="{$datos.223|default:" "}"
                                                                                                       onfocus="if (this.value==='') this.value='';"
                                                                                                       onblur="if (this.value==='') this.value='';"
                                                                                                       id="opcion8"
                                                                                                       class="form-control"></div>
                                    <div class="col-sm-1 col-md-1"><input name="boton1" type="image"
                                                                          onclick="deshabilitar8();return false;"
                                                                          src="{$_layoutParams.root}views/encuesta/img/emoticon.png"
                                                                          ></div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3 col-md-3"><h4>4.En qué ciudad se encuentra el niño?: </h4></div>
                                    <div class="col-sm-8 col-md-8"><label for="opcion9"></label><input type="text" name="224"
                                                                                                       value="{$datos.224|default:" "}"
                                                                                                       onfocus="if (this.value==='') this.value='';"
                                                                                                       onblur="if (this.value==='') this.value='';"
                                                                                                       id="opcion9"
                                                                                                       class="form-control"></div>
                                    <div class="col-sm-1 col-md-1"><input name="boton1" type="image"
                                                                          onclick="deshabilitar9();return false;"
                                                                          src="{$_layoutParams.root}views/encuesta/img/emoticon.png"
                                                                          ></div>
                                </div>

                                <div class="row">
                            <div class="col-sm-3 col-md-3"><h4>5.En qué país se encuetra la niña?: </h4></div>
                            <div class="col-sm-8 col-md-8"><label for="opcion10"></label><input type="text" name="225"
                                                                                                value="{$datos.225|default:" "}"
                                                                                                onfocus="if (this.value==='') this.value='';"
                                                                                                onblur="if (this.value==='') this.value='';"
                                                                                                id="opcion10"
                                                                                                class="form-control"></div>
                            <div class="col-sm-1 col-md-1"><input name="boton1" type="image"
                                                                  onclick="deshabilitar10();return false;"
                                                                  src="{$_layoutParams.root}views/encuesta/img/emoticon.png"
                                                                  ></div>
                        </div>

                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-success" onclick="gallery.navigate(3)"><i
                            class="icon-folder-open icon-white"></i>Siguiente
                </button>
            </form>
        </div>
    </div>
    <!--Pregunta 3 REALIZADO-->
    <div class="virtualpage hidepiece">
        <div id="preview"></div>
        <div id="formbox">
            <p>
                <b>3 - 3 Memoria Episódica : Orientación - Identifiación - Persona</b>:
            </p>
            <div align="center">
                <button class="botonesdemo" onclick="hover3.playclip();"><input type="image" onclick="return false;"
                                                                                src="{$_layoutParams.root}views/encuesta/img/audio.png"
                                                                                >Escuche la orden
                </button>
            </div>
            <form id="form1" method="post" action="{$_layoutParams.root}encuesta/pregunta3"
                  enctype="multipart/form-data">
                <input type="hidden" name="guardar" value="1" class="form-control">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-3 col-md-3"><h4>1.Cuál es su nombre?: </h4></div>
                        <div class="col-sm-8 col-md-8"><label for="opcion11"></label><input type="text" name="331"
                                                                                            value="{$datos.331|default:" "}"
                                                                                            id="opcion11"
                                                                                            class="form-control"></div>
                        <div class="col-sm-1 col-md-1"><input name="boton11" type="image"
                                                              onclick="deshabilitar11();return false;"
                                                              src="{$_layoutParams.root}views/encuesta/img/emoticon.png"
                                                              ></div>
                    </div>

                    <div class="row">
                        <div class="col-sm-3 col-md-3"><h4>2.Cuál es su apellido?: </h4></div>
                        <div class="col-sm-8 col-md-8"><label for="opcion12"></label><input type="text" name="332"
                                                                                            value="{$datos.332|default:" "}"
                                                                                            id="opcion12"
                                                                                            class="form-control"></div>
                        <div class="col-sm-1 col-md-1"><input name="boton12" type="image"
                                                              onclick="deshabilitar12();return false;"
                                                              src="{$_layoutParams.root}views/encuesta/img/emoticon.png"
                                                              ></div>
                    </div>

                    <div class="row">
                        <div class="col-sm-3 col-md-3"><h4>3.Qué edad tiene?: </h4></div>
                        <div class="col-sm-8 col-md-8"><label for="opcion13"></label><input type="text" name="333"
                                                                                            value="{$datos.333|default:" "}"
                                                                                            id="opcion13"
                                                                                            class="form-control"></div>
                        <div class="col-sm-1 col-md-1"><input name="boton13" type="image"
                                                              onclick="deshabilitar13();return false;"
                                                              src="{$_layoutParams.root}views/encuesta/img/emoticon.png"
                                                              ></div>
                    </div>
                </div>
                <button class="btn btn-success" onclick="gallery.navigate(4)"><i
                            class="icon-folder-open icon-white"></i>Siguiente
                </button>
            </form>
        </div>
    </div>
    <!--Pregunta 4 REALIZADO-->
    <div class="virtualpage hidepiece">
        <div id="preview"></div>
        <div id="formbox">
            <p>
                <b>4 - 4 Memoria Episódica : Orientación - Identificación - Remota</b>:
            </p>
            <div align="center">
                <button class="botonesdemo" onclick="hover4.playclip();"><input type="image" onclick="return false;"
                                                                                src="{$_layoutParams.root}views/encuesta/img/audio.png"
                                                                                >Escuche la orden
                </button>
            </div>
            <form id="form1" method="post" action="{$_layoutParams.root}encuesta/pregunta4"
                  enctype="multipart/form-data">
                <input type="hidden" name="guardar" value="1" class="form-control">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-3 col-md-3"><h4>1.Cuándo es Navidad?: </h4></div>
                        <div class="col-sm-8 col-md-8">
                            <label for="opcion14"></label><input type="date" name="441" value="{$datos.441|default:" "}"
                                                                 id="opcion14" class="form-control">
                        </div>
                        <div class="col-sm-1 col-md-1">
                            <input name="boton14" type="image" onclick="deshabilitar14();return false;"
                                   src="{$_layoutParams.root}views/encuesta/img/emoticon.png">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3 col-md-3"><h4>2.Qué se festeja el 06 de Agosto?:</h4></div>
                        <div class="col-sm-8 col-md-8">
                            <div class="radio">
                                <label for="opcion15"></label><input type="radio" name="442" value="v" id="opcion15">Día de la Independencia
                            </div>
                            <div class="radio">
                                <label for="opcion16"></label><input type="radio" name="442" value="f" id="opcion16">Día de la Fundación de Bolivia.
                            </div>
                            <div class="radio">
                                <label for="opcion17"></label><input type="radio" name="442" value="f" id="opcion17">Año Nuevo Aymara
                            </div>
                        </div>
                        <div class="col-sm-1 col-md-1">
                            <input name="boton11" type="image" onclick="deshabilitar15();return false;"
                                   src="{$_layoutParams.root}views/encuesta/img/emoticon.png" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3 col-md-3"><h4>3.Cuántos días tiene Octubre?: </h4></div>
                        <div class="col-sm-8 col-md-8">
                            <label for="opcion18"></label><input type="text" name="443" value="{$datos.443|default:" "}"
                                                                 id="opcion18" class="form-control">
                        </div>
                        <div class="col-sm-1 col-md-1">
                            <input name="boton11" type="image" onclick="deshabilitar16();return false;"
                                   src="{$_layoutParams.root}views/encuesta/img/emoticon.png" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3 col-md-3"><h4>4.Qué se festeja el 24 de septiembre?: </h4></div>
                        <div class="col-sm-8 col-md-8">
                            <div class="radio">
                            <label for="opcion19"></label><input type="radio" name="444" value="v" id="opcion19">Día
                            de la independencia de Santa Cruz
                            </div>
                            <div class="radio">
                            <label for="opcion20"></label><input type="radio" name="444" value="f" id="opcion20">Día de
                            la Autonomía
                            </div>
                            <div class="radio">
                            <label for="opcion21"></label><input type="radio" name="444" value="f" id="opcion21">Fundación
                            de Santa Cruz de la Sierra
                            </div>
                        </div>
                        <div class="col-sm-1 col-md-1">
                            <input name="boton11" type="image" onclick="deshabilitar17();return false;"
                                   src="{$_layoutParams.root}views/encuesta/img/emoticon.png" >
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-3 col-md-3"><h4>5.¿Cuáles son los colores de la bandera Boliviana?: </h4>
                        </div>
                        <div class="col-sm-8 col-md-8">
                            <div class="radio">
                            <label for="opcion22"></label><input type="radio" name="445" value="f" id="opcion22">Rojo-Blanco-Verde
                            </div>
                            <div class="radio">
                            <label for="opcion23"></label><input type="radio" name="445" value="f" id="opcion23">Rojo-Naranja-Verde
                            </div>
                            <div class="radio">
                            <label for="opcion24"></label><input type="radio" name="445" value="v" id="opcion24">Rojo-Amarillo-Verde
                            </div>
                        </div>
                        <div class="col-sm-1 col-md-1">
                            <input name="boton11" type="image" onclick="deshabilitar18();return false;"
                                   src="{$_layoutParams.root}views/encuesta/img/emoticon.png" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3 col-md-3"><h4>6.¿Cuántos departamentos tiene Bolivia?: </h4></div>
                        <div class="col-sm-8 col-md-8">
                            <label for="opcion25"></label><input type="text" name="446" value="{$datos.446|default:" "}"
                                                                 id="opcion25" class="form-control">
                        </div>
                        <div class="col-sm-1 col-md-1">
                            <input name="boton11" type="image" onclick="deshabilitar19();return false;"
                                   src="{$_layoutParams.root}views/encuesta/img/emoticon.png" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3 col-md-3"><h4>7.¿Quién fue Simon Bolivar?: </h4></div>
                        <div class="col-sm-8 col-md-8">
                            <div class="radio">
                            <label for="opcion26"></label><input type="radio" name="447" value="v" id="opcion26">Un
                            Libertador
                            </div>
                            <div class="radio">
                            <label for="opcion27"></label><input type="radio" name="447" value="f" id="opcion27">Un
                            Cantante
                            </div>
                            <div class="radio">
                            <label for="opcion28"></label><input type="radio" name="447" value="f" id="opcion28">Un
                            Escritor
                            </div>
                        </div>
                        <div class="col-sm-1 col-md-1">
                            <input name="boton11" type="image" onclick="deshabilitar20();return false;"
                                   src="{$_layoutParams.root}views/encuesta/img/emoticon.png" >
                        </div>
                    </div>
                </div>
                <button class="btn btn-success" onclick="gallery.navigate(5)"><i
                            class="icon-folder-open icon-white"></i>Siguiente
                </button>
            </form>
        </div>
    </div>
    <!--Pregunta 5 REALIZADO-->
    <div class="virtualpage hidepiece">
        <div id="preview"></div>
        <div id="formbox">
            <b>5 - 5 Memoria Operativa : Atención - Calc. y Seguim. - Progresión</b>:
            <div align="center">
                <button class="botonesdemo" onclick="hover5.playclip();"><input type="image" onclick="return false;"
                                                                                src="{$_layoutParams.root}views/encuesta/img/audio.png"
                                                                                >Escuche la orden
                </button>
            </div>
            <form id="form1" method="POST" action="{$_layoutParams.root}encuesta/pregunta5"
                  enctype="multipart/form-data">
                <input type="hidden" name="guardar" value="1" class="form-control">
                <div class="container-fluid">
                    <template is="auto-binding">
                        <speech-input continuous="true" interimresults="true" language="es-BO"
                                      value="{poly_bind expr='text1'}"></speech-input>
                        <input type="hidden" name="text1" value="{poly_bind expr='text1'}">
                        {*<p>{poly_bind expr='text1'}</p>*}
                    </template>
                </div>
                <button class="btn btn-success" onclick="gallery.navigate(6)"><i
                            class="icon-folder-open icon-white"></i>Siguiente
                </button>
            </form>
        </div>
    </div>
    <!--Pregunta 6 REALIZADO-->
    <div class="virtualpage hidepiece">
        <div id="preview"></div>
        <div id="formbox">
            <b>6 - 6 Memoria Operativa : Atención - Calc. y Seguim. - Regresión</b>:
            <div align="center">
                <button class="botonesdemo" onclick="hover6.playclip();"><input type="image" onclick="return false;"
                                                                                src="{$_layoutParams.root}views/encuesta/img/audio.png"
                                                                                >Escuche la orden
                </button>
            </div>
            <form id="form1" method="POST" action="{$_layoutParams.root}encuesta/pregunta6"
                  enctype="multipart/form-data">
                <input type="hidden" name="guardar" value="1" class="form-control">
                <div class="container-fluid">
                    <template is="auto-binding">
                        <speech-input continuous="true" interimresults="true" language="es-BO"
                                      value="{poly_bind expr='text2'}"></speech-input>
                        <input type="hidden" name="text2" value="{poly_bind expr='text2'}">
                        {*<p>{poly_bind expr='text2'}</p>*}
                    </template>
                </div>
                <button class="btn btn-success" onclick="gallery.navigate(7)"><i
                            class="icon-folder-open icon-white"></i>Siguiente
                </button>
            </form>
        </div>
    </div>
    <!--Pregunta 7 REALIZADO-->
    <div class="virtualpage hidepiece">
        <div id="preview"></div>
        <div id="formbox">
            <b>7 - 12 Memoria Operativa : Codificación - Codificación -AudioVerbal</b>:
            <div align="center">
                <button class="botonesdemo"
                        onclick="hover7.playclip();this.disabled= true;document.getElementById('button1').style.display = 'block'; this.style.display = 'none';">
                    <input type="image" onclick="return false;" src="{$_layoutParams.root}views/encuesta/img/audio.png"
                           >Escuche la orden
                </button>
            </div>
            <form id="form1" method="post" action="{$_layoutParams.root}encuesta/pregunta7"
                  enctype="multipart/form-data">
                <input type="hidden" name="guardar" value="1" class="form-control">
                <div class="container-fluid">
                    <template is="auto-binding">
                        <div align="center">
                            <button id="button1" class="botonesdemo"
                                    onclick="hover71.playclip();this.disabled= true;this.style.display = 'none';"
                                    style="display:none;"><input type="image" onclick="return false;"
                                                                 src="{$_layoutParams.root}views/encuesta/img/audio.png">Lista 1</button>
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                            <div class="col-sm-10 col-md-10">
                                <div id="speech1">
                                    <speech-input continuous="true" interimresults="true" language="es-BO"
                                                  value="{poly_bind expr='text3'}" onclick="document.getElementById('buttonAux_7').style.display = 'block';"></speech-input>
                                    <input type="hidden" name="text3" value="{poly_bind expr='text3'}">
                                    {*<p>{poly_bind expr='text3'}</p>*}
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-10 col-md-10">
                                    <div id="buttonAux_7" align="center" style="display:none;">
                                <button class="botonesdemo"
                                        onclick="this.disabled= true;document.getElementById('speech1').style.display = 'none';
                                        document.getElementById('speech2').style.display = 'block'; this.style.display = 'none';">Continuar...</button>
                            </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid" id="speech2" style="display:none">
                            <div class="row">
                            <div class="col-sm-10 col-md-10">
                                <div align="center">
                                    <button class="botonesdemo"
                                            onclick="hover72.playclip();this.disabled= true;this.style.display = 'none';">Lista 2
                                    <input type="image" onclick="return false;" src="{$_layoutParams.root}views/encuesta/img/audio.png">
                                    </button>
                                </div>
                                    <speech-input continuous="true" interimresults="true" language="es-BO"
                                              value="{poly_bind expr='text4'}"></speech-input>
                                    <input type="hidden" name="text4" value="{poly_bind expr='text4'}">
                                    {*<p>{poly_bind expr='text4'}</p>*}
                            </div>
                        </div>
                        </div>
                    </template>
                </div>
                <button class="btn btn-success" onclick="gallery.navigate(8)"><i
                            class="icon-folder-open icon-white"></i>Siguiente
                </button>
            </form>
        </div>
    </div>
    <!--Pregunta 8 REALIZADO-->
    <div class="virtualpage hidepiece">
        <div id="preview"></div>
        <div id="formbox">
            <b>8 - 10 Memoria Operativa : Codificación - Codificación - Verbal</b>:
            <div align="center">
                <button class="botonesdemo"
                        onclick="hover8.playclip();this.disabled= true;document.getElementById('button8-1').style.display = 'block'; this.style.display = 'none';">
                    <input type="image" onclick="return false;" src="{$_layoutParams.root}views/encuesta/img/audio.png"
                           >Escuche la orden
                </button>
            </div>
            <form id="form1" method="post" action="{$_layoutParams.root}encuesta/pregunta8"
                  enctype="multipart/form-data">
                <input type="hidden" name="guardar" value="1" class="form-control">
                <div class="container-fluid">
                    <template is="auto-binding">
                        <div id="button8-1" class="row">
                            <div class="col-sm-10 col-md-10">
                                <button  class="botonesdemo"
                                        onclick="hover8Grupo.playclip();this.disabled= true;this.style.display = 'none';"
                                        style="display:none;"><input type="image" onclick="return false;"
                                                                     src="{$_layoutParams.root}views/encuesta/img/audio.png">Grupo 1
                                </button>
                                <speech-input continuous="true" interimresults="true" language="es-BO"
                                              value="{poly_bind expr='text5'}" onclick="document.getElementById('button8-Aux').style.display = 'block';"></speech-input>
                                <input type="hidden" name="text5" value="{poly_bind expr='text5'}">
                                {*<p>{poly_bind expr='text5'}</p>*}
                            </div>
                        </div>
                        <div align="center" id="button8-Aux" class="row" style="display:none">
                            <div class="col-sm-10 col-md-10">
                                <button  class="botonesdemo"
                                        onclick="this.disabled= true;document.getElementById('button8-2').style.display = 'block';document.getElementById('button8-1').style.display ='none'; document.getElementById('button8-Aux').style.display ='none';"
                                        ><input type="image" onclick="return false;"
                                                                     src="{$_layoutParams.root}views/encuesta/img/audio.png">Continuar...
                                </button>
                            </div>
                        </div>
                        <div  class="row" id="button8-2" style="display:none;">
                            <div class="col-sm-10 col-md-10">
                                <div align="center">
                                    <button  class="botonesdemo"
                                            onclick="hover8Grupo.playclip();this.disabled= true;this.style.display = 'none';">
                                        <input type="image" onclick="return false;" src="{$_layoutParams.root}views/encuesta/img/audio.png">Grupo 2
                                    </button>
                                </div>
                                <speech-input continuous="true" interimresults="true" language="es-BO"
                                              value="{poly_bind expr='text6'}" onclick="document.getElementById('button8-Aux2').style.display = 'block';"></speech-input>
                                <input type="hidden" name="text6" value="{poly_bind expr='text6'}">
                                {*<p>{poly_bind expr='text6'}</p>*}
                            </div>
                        </div>
                        <div align="center" id="button8-Aux2" class="row" style="display:none">
                            <div class="col-sm-10 col-md-10">
                                <button  class="botonesdemo"
                                         onclick="this.disabled= true;document.getElementById('button8-3').style.display = 'block';document.getElementById('button8-2').style.display ='none'; document.getElementById('button8-Aux2').style.display ='none';"
                                ><input type="image" onclick="return false;"
                                        src="{$_layoutParams.root}views/encuesta/img/audio.png">Continuar...
                                </button>
                            </div>
                        </div>
                        <div  class="row" id="button8-3" style="display:none;">
                            <div class="col-sm-12 col-md-12">
                                <div align="center">
                                    <button  class="botonesdemo"
                                            onclick="hover8Grupo.playclip();this.disabled= true;this.style.display = 'none';"
                                            ><input type="image" onclick="return false;"
                                                                         src="{$_layoutParams.root}views/encuesta/img/audio.png">Grupo 3
                                    </button>
                                </div>
                                <speech-input continuous="true" id="speech3" interimresults="true" language="es-BO"
                                              value="{poly_bind expr='text7'}"></speech-input>
                                <input type="hidden" name="text7" value="{poly_bind expr='text7'}">
                                {*<p>{poly_bind expr='text7'}</p>*}
                            </div>
                        </div>
                    </template>
                </div>
                <button class="btn btn-success" onclick="gallery.navigate(9)"><i
                            class="icon-folder-open icon-white"></i>Siguiente
                </button>
            </form>
        </div>
    </div>
    <!--Pregunta 9 REALIZADO-->
    <div class="virtualpage hidepiece">
        <div id="preview"></div>
        <div id="formbox">
            <b>9 - 14 Memoria Operativa : Codificación - Visoverbal</b>:
            <div align="center">
                <button class="botonesdemo"
                        onclick="hover9.playclip();document.getElementById('button9-1').style.display = 'block';  this.style.display = 'none';">
                    <input type="image" onclick="return false;" src="{$_layoutParams.root}views/encuesta/img/audio.png"
                           >Escuche la orden
                </button>
            </div>
            <div align="center">
                <img src="{$_layoutParams.root}views/encuesta/img/9-14.png" alt="words" class="content"
                     style="display:none;">
                <button id="button9-1" onclick="show_aux9();showHide();this.style.display = 'none';"
                        class="btn btn-info" style="display:none;"><i class="icon-eye-open icon-white"></i> Ver Imagen
                </button>
            </div>
            <div align="center" id="button9-2" style="display: none">
                <button class="botonesdemo"
                        onclick="hover91.playclip();document.getElementById('button9-3').style.display = 'block'; document.getElementById('button9-2').style.display = 'none';return false;"
                        ><input type="image" onclick="return false;"
                                                    src="{$_layoutParams.root}views/encuesta/img/audio.png">Escuche
            </div>
            <form id="form1" method="post" action="{$_layoutParams.root}encuesta/pregunta9"
                  enctype="multipart/form-data">
                <input type="hidden" name="guardar" value="1" class="form-control">
                <div class="container-fluid">
                    <template is="auto-binding">
                        <div class="row" id="button9-3" style="display: none;">
                            <div class="col-sm-10 col-md-10">
                                <speech-input continuous="true" interimresults="true" language="es-BO"
                                              value="{poly_bind expr='text9'}" onclick="document.getElementById('button9-4').style.display = 'block';"></speech-input>
                                <input type="hidden" name="text9" value="{poly_bind expr='text9'}">
                            </div>
                        </div>
                        <div align="center" id="button9-4" style="display: none;">
                            <button class="botonesdemo"
                                    onclick="hover92.playclip();document.getElementById('button9-5').style.display = 'block';document.getElementById('button9-3').style.display = 'none';document.getElementById('button9-4').style.display = 'none';return false;">
                                <input type="image" onclick="return false;" src="{$_layoutParams.root}views/encuesta/img/audio.png">
                        </div>
                        <div class="row" id="button9-5" style="display: none;">
                            <div class="col-sm-10 col-md-10">
                                <speech-input continuous="true" interimresults="true" language="es-BO"
                                              value="{poly_bind expr='text10'}"></speech-input>
                                <input type="hidden" name="text10" value="{poly_bind expr='text10'}">
                            </div>
                        </div>
                    </template>
                </div>
                <button class="btn btn-success" onclick="gallery.navigate(10)"><i
                            class="icon-folder-open icon-white"></i>Siguiente
                </button>
            </form>
        </div>
    </div>
    <!--Pregunta 10 REALIZADO-->
    <div class="virtualpage hidepiece">
        <div id="preview"></div>
        <div id="formbox">
            <b>10 - 8 Memoria Operativa : Atención - Reconoc. - Detección Visual</b>:
            <div align="center">
                <button class="botonesdemo"
                        onclick="hover10.playclip();document.getElementById('button10-1').style.display = 'block';  this.style.display = 'none';">
                    <input type="image" onclick="return false;" src="{$_layoutParams.root}views/encuesta/img/audio.png"
                           >Escuche la orden
                </button>
                <img src="{$_layoutParams.root}views/encuesta/img/lamina10principal.png" alt="wordss" class="content2"
                     style="display:none;">
                <button id="button10-1" onclick="show_aux10(); showHide2();this.style.display = 'none';" class="btn btn-info"
                        style="display:none;"><i class="icon-eye-open icon-white"></i> Ver Imagen
                </button>
            </div>

            <form id="form1" method="post" action="{$_layoutParams.root}encuesta/pregunta10"
                  enctype="multipart/form-data"></form>
            <input type="hidden" name="guardar" value="1" class="form-control">
            <div id="button10-2" style="display: none">
                <h4>Escoja los que se parecen a la imagen</h4>
                {$k=1}
                {for $j=65 to 81}
                <ul class="checkpanel_ul">
                    {for $i=1 to 15 }
                        <div hidden="">{$k++}</div>
                        <li class="checkpanel_li">
                            <input type="checkbox" id="cb{$j}-{$i}" name="&#{$j};{$i}"/>
                            <label for="cb{$j}-{$i}"><img src="{$_layoutParams.root}views/encuesta/img/10-{$k}.jpg"></label>
                        </li>
                    {/for}
                </ul>
                {/for}
            </div>
            <div hidden="" id="checkedResult"></div>
            <!--<button id="findChecked"  class="btn btn-success" onclick="gallery.navigate(11)" autofocus><i class="icon-folder-open icon-white"> </i>Siguiente</button>-->
            <button class="btn btn-success" id="findChecked" onclick="gallery.navigate(11)"><i
                        class="icon-folder-open icon-white"></i>Siguiente
            </button>
        </div>
    </div>
    <!--Pregunta 11 REALIZADO -->
    <div class="virtualpage hidepiece">
        <div id="preview"></div>
        <div id="formbox">
            <b>11 - 9 Memoria Operativa : Orientación - Reconocimiento - Detección Auditiva</b>:
            <div align="center">
                <button class="botonesdemo"
                        onclick="hover11.playclip();this.disabled= true;document.getElementById('button11-1').style.display = 'block';this.style.display='none'; ">
                    <input type="image" onclick="return false;" src="{$_layoutParams.root}views/encuesta/img/audio.png">Escuche la orden
                </button>
            </div>
            <div class="container-fluid">
                <div class="row" id="button11-1"  style="display:none;">
                    <div class="col-sm-10 col-md-10">
                        <div align="center">
                            <button class="botonesdemo" onclick="hover11A1.playclip();activate();this.disabled= true;this.style.display='none'; ">
                                <input type="image" onclick="return false;" src="{$_layoutParams.root}views/encuesta/img/audio.png">Escuche la orden
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row" id="button70" style="display:none;">
                    <div class="col-sm-10 col-md-10">
                        <div align="center">
                            <button class="botonesdemo"
                                    onclick="hover11A2.playclip();activate();this.disabled= true;this.style.display='none'; ">
                                <input type="image" onclick="return false;" src="{$_layoutParams.root}views/encuesta/img/audio.png">Orden
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row" id="button71" style="display:none;">
                    <div class="col-sm-10 col-md-10">
                        <div align="center">
                            <button class="botonesdemo"
                                    onclick="hover11A3.playclip();activate();this.disabled= true;this.style.display='none'; ">
                                <input type="image" onclick="return false;" src="{$_layoutParams.root}views/encuesta/img/audio.png">Escuche la orden
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row" id="button72" style="display:none;">
                    <div class="col-sm-10 col-md-10">
                        <div align="center">
                            <button class="botonesdemo"
                                    onclick="hover11B1.playclip();activate2();this.disabled= true;this.style.display='none'; ">
                                <input type="image" onclick="return false;" src="{$_layoutParams.root}views/encuesta/img/audio.png">Escuche la orden
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row" id="button73" style="display:none;">
                    <div class="col-sm-10 col-md-10">
                        <div align="center">
                            <button class="botonesdemo"
                                    onclick="hover11B2.playclip();activate2();this.disabled= true;this.style.display='none'; ">
                                <input type="image" onclick="return false;" src="{$_layoutParams.root}views/encuesta/img/audio.png">Escuche la orden
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row" id="button73" style="display:none;">
                    <div class="col-sm-10 col-md-10">
                        <div align="center">
                            <button class="botonesdemo" id="button74" onclick="hover11B3.playclip();activate2();this.disabled= true;this.style.display='none'; ">
                                <input type="image" onclick="return false;" src="{$_layoutParams.root}views/encuesta/img/audio.png">Escuche la orden
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div align="center">
                <button id="arcade-button" onclick="incrementar();" value="incrementar">&nbsp;</button>
            </div>
            <form id="form1" method="post" action="{$_layoutParams.root}encuesta/pregunta11"enctype="multipart/form-data">
                <input type="hidden" name="guardar" value="1" class="form-control">
                <div name="resp" class="results" hidden=""></div>
                <input type="hidden" id="respu" name="respu" value="" class="form-control">
                <button class="btn btn-success" onclick="gallery.navigate(12)"><i class="icon-folder-open icon-white"></i>Siguiente</button>
            </form>
        </div>
    </div>
    <!--Pregunta 12 REALIZADO -->
    <div class="virtualpage hidepiece">
        <div id="preview"></div>
        <div id="formbox">
            <b>12 - 7 Memoria Operativa : Atención - Cálculo y Seguimiento Verbal</b>:
            <div align="center">
                <button class="botonesdemo"
                        onclick="hover12.playclip();activate();this.disabled= true;document.getElementById('button80').style.display = 'block';  this.style.display = 'none';">
                    <input type="image" onclick="return false;" src="{$_layoutParams.root}views/encuesta/img/audio.png"
                           >Escuche la orden
                </button>
            </div>

            {for $i=1 to 10}

            {/for}


            {for $i=80 to 89}

                {for $j=0 to 9}

                {/for}

            {/for}
            <table class="table table-bordered" style="  margin-left: 3%;width: 90%;">
                <tbody>
                <tr>
                    <th colspan="11"> AYER FUI A LA TIENDA Y COMPRE:</th>
                </tr>

                <tr>
                    <th width="5%">ITEM</th>
                    <th colspan="10">NUMERO</th>
                </tr>
                <tr>
                    <td></td>
                    <th>{$i}</th>
                </tr>
                <tr> <!--bgcolor="red"-->
                    <td id="audio{$i-79}">
                        <div align="center">
                            <button class="botonesdemo" id="button{$i}"
                                    onclick="hover12{$i-79}.playclip();activate();this.disabled= true;document.getElementById('div{$i}').style.display = 'block';  this.style.display = 'none'; "
                                    style="display:none;"><input type="image" onclick="return false;"
                                                                 src="{$_layoutParams.root}views/encuesta/img/audio.png"
                                                                 >Escuche la orden
                            </button>
                        </div>
                    </td>
                    <td id="celda{$i}{$j}" bgcolor="#96A7FD">
                        {if $i-80 eq $j}
                            <div id="div{$i}" style="display:none;">
                                <template is="auto-binding">
                                    <speech-input continuous="true" interimresults="true" onclick="activarevaluacion()"
                                                  language="es-BO" value="{poly_bind expr=" text{$i}"}"></speech-input>
                                    <input type="hidden" id="text{$i}" name="text{$i}"
                                           value="{poly_bind expr=" text{$i}"}">
                                    <p>{poly_bind expr="text{$i}"}</p>
                                </template>
                            </div>
                        {/if}
                    </td>
                </tr>
                </tbody>
            </table>
            <form id="form1" method="post" action="{$_layoutParams.root}encuesta/pregunta12"
                  enctype="multipart/form-data">
                <input type="hidden" name="guardar" value="1" class="form-control">
                <div name="filaresp" class="filaresp" hidden=""></div>
                <label for="filaresp"></label><input type="text" id="filaresp" name="filaresp" value="" hidden=""
                                                     class="form-control">
                <button class="btn btn-success" onclick="gallery.navigate(13)"><i
                            class="icon-folder-open icon-white"></i>Siguiente
                </button>
            </form>
        </div>
    </div>
    <!--Pregunta 13 REALIZADO EN MODO DE PRUEBA-->
    <div class="virtualpage hidepiece">
        <div id="preview"></div>
        <div id="formbox">
            <b>13 - 11 Memoria Operativa : Codificación - Codificación - Visoespacial</b>:
            <button class="botonesdemo"
                    onclick="hover13.playclip();this.disabled= true;document.getElementById('button131').style.display = 'block';this.style.display = 'none' ">
                <input type="image" onclick="return false;" src="{$_layoutParams.root}views/encuesta/img/audio.png"
                       >Escuche la orden
            </button>
            <table class="table table-bordered" style="  margin-left: 3%;width: 90%;">
                <tbody>
                <tr>
                    <td style="text-align:center; width:50%">
                        <button id="button131" onclick="showHide4();this.disabled=true; this.style.display = 'none';"
                                class="btn btn-info"><i class="icon-eye-open icon-white"></i> Iniciar
                        </button>
                        <img src="{$_layoutParams.root}views/encuesta/img/13-1.png" alt="wordss" class="content3"
                             style="display:none;">
                        <img src="{$_layoutParams.root}views/encuesta/img/13-2.png" alt="wordss" class="content4"
                             style="display:none;">
                        <img src="{$_layoutParams.root}views/encuesta/img/13-3.png" alt="wordss" class="content5"
                             style="display:none;">
                        <img src="{$_layoutParams.root}views/encuesta/img/13-4.png" alt="wordss" class="content6"
                             style="display:none;">
                        <div class="content7" id="content7" style="display:none;">
                            <label for="1311">Introduzca la opcion correcta</label><input type="text" name="1311"
                                                                                          value="{$datos.112|default:" "}"
                                                                                          id="1311"
                                                                                          class="form-control">
                            <input name="boton1" type="image" onclick="deshabilitar2();return false;"
                                   src="{$_layoutParams.root}views/encuesta/img/emoticon.png" >
                        </div>
                        <button id="button132"
                                onclick="showHide5();this.disabled=true; this.style.display = 'none';document.getElementById('content7').style.display = 'none';"
                                style="display:none;" class="btn btn-info"><i class="icon-eye-open icon-white"></i>
                            Continuar
                        </button>
                        <img src="{$_layoutParams.root}views/encuesta/img/13-1-2.png" alt="wordss" class="content8"
                             style="display:none;">
                        <img src="{$_layoutParams.root}views/encuesta/img/13-2-2.png" alt="wordss" class="content9"
                             style="display:none;">
                        <img src="{$_layoutParams.root}views/encuesta/img/13-3-2.png" alt="wordss" class="content10"
                             style="display:none;">
                        <div class="content12" id="content12" style="display:none;">
                            <label for="1312">Introduzca la opcion correcta</label><input type="text" name="1312"
                                                                                          value="{$datos.112|default:" "}"
                                                                                          id="1312"
                                                                                          class="form-control">
                            <input name="boton1" type="image" onclick="deshabilitar2();return false;"
                                   src="{$_layoutParams.root}views/encuesta/img/emoticon.png" >
                        </div>
                        <button id="button133"
                                onclick="showHide6();this.disabled=true; this.style.display = 'none';document.getElementById('content12').style.display = 'none';"
                                style="display:none;" class="btn btn-info"><i class="icon-eye-open icon-white"></i>
                            Continuar
                        </button>
                        <img src="{$_layoutParams.root}views/encuesta/img/13-1-3.png" alt="wordss" class="content13"
                             style="display:none;">
                        <img src="{$_layoutParams.root}views/encuesta/img/13-2-3.png" alt="wordss" class="content14"
                             style="display:none;">
                        <img src="{$_layoutParams.root}views/encuesta/img/13-3-3.png" alt="wordss" class="content15"
                             style="display:none;">
                        <div class="content17" style="display:none;">
                            <label for="1313">Introduzca la opcion correcta</label><input type="text" name="1313"
                                                                                          value="{$datos.112|default:" "}"
                                                                                          id="1313"
                                                                                          class="form-control">
                            <input name="boton1" type="image" onclick="deshabilitar2();return false;"
                                   src="{$_layoutParams.root}views/encuesta/img/emoticon.png" >
                        </div>

                    </td>
                    <td style="text-align:center; width:50%">
                        <img src="{$_layoutParams.root}views/encuesta/img/13.png" alt="wordss">
                    </td>
                </tr>
                </tbody>
            </table>
            <form id="form1" method="post" action="{$_layoutParams.root}encuesta/pregunta13"
                  enctype="multipart/form-data">
                <input type="hidden" name="guardar" value="1" class="form-control">
                <!--
                <div name='filaresp' class="filaresp" hidden> </div>
                <label for="filaresp"></label><input type='text' id='filaresp' name='filaresp' value='' hidden>
                -->
                <button class="btn btn-success" onclick="gallery.navigate(14)"><i
                            class="icon-folder-open icon-white"></i>Siguiente
                </button>
            </form>
        </div>
    </div>
    <!--Pregunta 14 REALIZADO  -->
    <div class="virtualpage hidepiece">
        <div id="preview"></div>
        <div id="formbox">
            <b>14 - 13 Memoria Operativa : Codificación - Codificación - Audio Verbal (Numeral)</b>:
            <div align="center">
                <button class="botonesdemo"
                        onclick="hover14.playclip();this.disabled= true;document.getElementById('button7').style.display = 'block';this.style.display = 'none' ">
                    <input type="image" onclick="return false;" src="{$_layoutParams.root}views/encuesta/img/audio.png"
                           >Escuche la orden
                </button>
                <button class="botonesdemo" id="button7"
                        onclick="hover142.playclip();this.disabled= true;document.getElementById('button50').style.display = 'block';this.style.display = 'none' "
                        style="display:none;"><input type="image" onclick="return false;"
                                                     src="{$_layoutParams.root}views/encuesta/img/audio.png"
                                                     >Lista de Números
                </button>
                <button class="botonesdemo" id="button50"
                        onclick="hover143.playclip();this.disabled= true;this.style.display = 'none'"
                        style="display:none;"><input type="image" onclick="return false;"
                                                     src="{$_layoutParams.root}views/encuesta/img/audio.png"
                                                     >Pregunta
                </button>
            </div>
            <form id="form1" method="POST" action="{$_layoutParams.root}encuesta/pregunta14"
                  enctype="multipart/form-data">
                <input type="hidden" name="guardar" value="1" class="form-control">
                <p>
                </p>
                <table class="table table-bordered" style="  margin-left: 3%;width: 90%;">
                    <template is="auto-binding">
                        <speech-input continuous="true" interimresults="true" language="es-BO"
                                      value="{poly_bind expr='text11'}"></speech-input>
                        <input type="hidden" name="text11" value="{poly_bind expr='text11'}">
                        <p>{poly_bind expr='text11'}</p>
                    </template>
                </table>
                <button class="btn btn-success" onclick="gallery.navigate(15)"><i
                            class="icon-folder-open icon-white"></i>Siguiente
                </button>
            </form>
        </div>
    </div>
    <!--Pregunta 15 REALIZADO  -->
    <div class="virtualpage hidepiece">
        <div id="preview"></div>
        <div id="formbox">
            <b>15 - 15 Memoria Operativa : Codificación - Codificación - Visoverbal</b>:
            <div align="center">
                <button class="botonesdemo"
                        onclick="hover15.playclip();this.disabled= true;document.getElementById('button8').style.display = 'block'; this.style.display = 'none';">
                    <input type="image" onclick="return false;" src="{$_layoutParams.root}views/encuesta/img/audio.png"
                           >Escuche la orden
                </button>
                <img src="{$_layoutParams.root}views/encuesta/img/15.png" alt="wordss" class="content2"
                     style="display:none;">
                <button id="button8"
                        onclick="showHide3();this.disabled=true;document.getElementById('button9').style.display = 'block'; this.style.display = 'none';"
                        class="btn btn-info" style="display:none;"><i class="icon-eye-open icon-white"></i> Ver Imagen
                </button>
                <button id="button9" class="botonesdemo"
                        onclick="hover152.playclip();this.disabled= true;this.style.display = 'none';"
                        style="display:none;"><input type="image" onclick="return false;"
                                                     src="{$_layoutParams.root}views/encuesta/img/audio.png"
                                                     >Escuche la orden
                </button>
            </div>
            <table class="table table-bordered" style="  margin-left: 3%;width: 90%;">

                <template is="auto-binding">
                    <form id="form1" method="post" action="{$_layoutParams.root}encuesta/pregunta15"
                          enctype="multipart/form-data">
                        <input type="hidden" name="guardar" value="1">
                        <speech-input continuous="true" interimresults="true" language="es-BO"
                                      value="{poly_bind expr='text12'}"></speech-input>
                        <input type="hidden" name="text12" value="{poly_bind expr='text12'}">
                        <p>{poly_bind expr='text12'}</p>
                        <button class="btn btn-success" onclick="gallery.navigate(16)"><i
                                    class="icon-folder-open icon-white"></i>Siguiente
                        </button>
                    </form>
                </template>
            </table>
        </div>
    </div>
    <!--Pregunta 16 REALIZADO  -->
    <div class="virtualpage hidepiece">
        <div id="preview"></div>
        <div id="formbox">
            <b>16 - 16 Memoria Semántica : Lenguaje - Evocación Verbal - Denominación</b>:
            <div align="center">
                <button class="botonesdemo"
                        onclick="hover16.playclip();this.disabled= true;document.getElementById('button55').style.display = 'block'; this.style.display = 'none';">
                    <input type="image" onclick="return false;" src="{$_layoutParams.root}views/encuesta/img/audio.png"
                           >Escuche la orden
                </button>
                <div id="myimageDiv" style="display:none">
                    <img id="myimage" class="clase" src="{$_layoutParams.root}views/encuesta/img/16.png" alt="Imagen"
                         title="Imagen">
                </div>
                <button id="button55" class="btn btn-info" onclick="show();" style="display:none;"><i
                            class="icon-eye-open icon-white"></i> Ver Imagen
                </button>
            </div>
            <table class="table table-bordered" style="  margin-left: 3%;width: 90%;">
                <template is="auto-binding">
                    <form id="form1" method="post" action="{$_layoutParams.root}encuesta/pregunta16"
                          enctype="multipart/form-data">
                        <input type="hidden" name="guardar" value="1">
                        <p>
                            <speech-input continuous="true" interimresults="true" language="es-BO"
                                          value="{poly_bind expr='text13'}"></speech-input>
                            <input type="hidden" name="text13" value="{poly_bind expr='text13'}">
                        </p>
                        <p>{poly_bind expr='text13'}</p>
                        <button class="btn btn-success" onclick="gallery.navigate(17)"><i
                                    class="icon-folder-open icon-white"></i>Siguiente
                        </button>
                    </form>
                </template>
            </table>
        </div>
    </div>
    <!--Pregunta 17 REALIZADO  -->
    <div class="virtualpage hidepiece">
        <div id="preview"></div>
        <div id="formbox">
            <b>17 - 17 Memoria Semántica : Lenguaje - Evocación Verbal - Repetición</b>:
            <p>
            </p>
            <div align="center">
                <button class="botonesdemo"
                        onclick="hover17.playclip();this.disabled= true;document.getElementById('button10').style.display = 'block'; this.style.display = 'none';">
                    <input type="image" onclick="return false;" src="{$_layoutParams.root}views/encuesta/img/audio.png"
                           >Escuche la orden
                </button>
            </div>
            <table class="table table-bordered" style="  margin-left: 3%;width: 90%;">

                <template is="auto-binding">
                    <form id="form1" method="post" action="{$_layoutParams.root}encuesta/pregunta17"
                          enctype="multipart/form-data">
                        <input type="hidden" name="guardar" value="1">
                        <p>
                        </p>
                        <div align="center">
                            <button id="button10" class="botonesdemo"
                                    onclick="hover171.playclip();this.disabled= true;document.getElementById('button11').style.display = 'block'; this.style.display = 'none';"
                                    style="display:none"><input type="image" onclick="return false;"
                                                                src="{$_layoutParams.root}views/encuesta/img/audio.png">

                            <speech-input continuous="true" interimresults="true" language="es-BO"
                                          value="{poly_bind expr='text14'}"></speech-input>
                            <input type="hidden" name="text14" value="{poly_bind expr='text14'}">
                            <p>{poly_bind expr='text14'}</p></div>
                        <hr>
                        <p>
                        </p>
                        <div align="center">
                            <button id="button11" class="botonesdemo"
                                    onclick="hover172.playclip();this.disabled= true;document.getElementById('button12').style.display = 'block'; this.style.display = 'none';"
                                    style="display:none"><input type="image" onclick="return false;"
                                                                src="{$_layoutParams.root}views/encuesta/img/audio.png">

                            <speech-input continuous="true" interimresults="true" language="es-BO"
                                          value="{poly_bind expr='text15'}"></speech-input>
                            <input type="hidden" name="text15" value="{poly_bind expr='text15'}">
                            <p>{poly_bind expr='text15'}</p></div>
                        <hr>
                        <p>
                        </p>
                        <div align="center">
                            <button id="button12" class="botonesdemo"
                                    onclick="hover173.playclip();this.disabled= true;document.getElementById('button13').style.display = 'block'; this.style.display = 'none';"
                                    style="display:none"><input type="image" onclick="return false;"
                                                                src="{$_layoutParams.root}views/encuesta/img/audio.png">

                            <speech-input continuous="true" interimresults="true" language="es-BO"
                                          value="{poly_bind expr='text16'}"></speech-input>
                            <input type="hidden" name="text16" value="{poly_bind expr='text16'}">
                            <p>{poly_bind expr='text16'}</p></div>
                        <hr>
                        <p>
                        </p>
                        <div align="center">
                            <button id="button13" class="botonesdemo"
                                    onclick="hover174.playclip();this.disabled= true;this.style.display = 'none';"
                                    style="display:none"><input type="image" onclick="return false;"
                                                                src="{$_layoutParams.root}views/encuesta/img/audio.png">

                            <speech-input continuous="true" interimresults="true" language="es-BO"
                                          value="{poly_bind expr='text17'}"></speech-input>
                            <input type="hidden" name="text17" value="{poly_bind expr='text17'}">
                            <p>{poly_bind expr='text17'}</p></div>
                        <hr>
                        <button class="btn btn-success" onclick="gallery.navigate(18)"><i
                                    class="icon-folder-open icon-white"></i>Siguiente
                        </button>
                    </form>
                </template>
            </table>
        </div>
    </div>
    <!--Pregunta 18 ADAPTANDO A LA PAG -->
    <div class="virtualpage hidepiece">
        <div id="preview"></div>
        <div id="formbox">
            <b>18 - 18 Memoria Semántica : Lenguaje - Evocación Verb.- Comprensión</b>:
            <h1><span id="orden"></span></h1>
            <table id="tablecam" class="table table-bordered" style="width: 90%;">
                <tbody>
                <tr id="filacam">
                    <td id="EspacioCam">
                        <div align="center">
                            {*<div class="botonesdemo" onmouseover="hover18.playclip();"><input type="image"*}
                            {*onclick="return false;"*}
                            {*src="{$_layoutParams.root}views/encuesta/img/audio.png"*}">Escuche la orden*}
                            {*</div>*}
                        </div>
                        <button id="botonCamara" type="button" class="btn btn-primary" value="Iniciar">Iniciar Cámara
                        </button>
                        <button id="botonDetenerCamara" type="button" class="btn btn-primary" value="Detener">Detener
                            Camara
                        </button>
                        <h1><span style="color:red" id="espera"></span></h1>
                        <span id="puntaje"></span>
                        <template id="game-template">
                            <button data-id="0" data-x="900" data-y="400" class="game-prop game-inicio"
                                    onclick="iniciar();">
                                INICIO
                            </button>
                            <button data-id="1" data-x="30" data-y="30" class="game-prop game-bigcircle"
                                    id="CirculoGrande" onclick="presionado(this.id);">
                            </button>
                            <button data-id="2" data-x="300" data-y="30" class="game-prop game-littlesquare"
                                    id="CuadradoPequenho" onclick="presionado(this.id);">
                            </button>
                            <button data-id="3" data-x="500" data-y="30" class="game-prop game-littlecircle"
                                    id="CirculoPequenho" onclick="presionado(this.id);">
                            </button>
                            <button data-id="4" data-x="700" data-y="30" class="game-prop game-bigsquare"
                                    id="CuadradoGrande" onclick="presionado(this.id);">
                            </button>
                        </template>
                    </td>
                </tr>


                </tbody>
            </table>
            <form id="form1" method="post" action="{$_layoutParams.root}encuesta/pregunta18"
                  enctype="multipart/form-data">
                <input type="hidden" name="guardar" value="1" class="form-control">

                <button class="btn btn-success" onclick="gallery.navigate(19)"><i
                            class="icon-folder-open icon-white"></i>Siguiente
                </button>
            </form>
        </div>
    </div>
    <!--Pregunta 19 REALIZADO  -->
    <div class="virtualpage hidepiece">
        <div id="preview"></div>
        <div id="formbox">
            <b>19 - 29 Memoria Semántica : F.E. - Evocación Verbal - Espontánea</b>:
            <div align="center">
                <button class="botonesdemo" onclick="hover19.playclip();"><input type="image" onclick="return false;"
                                                                                 src="{$_layoutParams.root}views/encuesta/img/audio.png"
                                                                                 >Escuche la orden
                </button>
            </div>
            <template is="auto-binding">
                <form id="form1" method="post" action="{$_layoutParams.root}encuesta/pregunta19"
                      enctype="multipart/form-data">
                    <input type="hidden" name="guardar" value="1">
                    <speech-input continuous="true" interimresults="true" language="es-BO"
                                  value="{poly_bind expr='text18'}"></speech-input>
                    <input type="hidden" name="text18" value="{poly_bind expr='text18'}">
                    <p>{poly_bind expr='text18'}</p>
                    <button class="btn btn-success" onclick="gallery.navigate(20)"><i
                                class="icon-folder-open icon-white"></i>Siguiente
                    </button>
                </form>
            </template>
        </div>
    </div>
    <!--Pregunta 20 REALIZADO -->
    <div class="virtualpage hidepiece">
        <div id="preview"></div>
        <div id="formbox">
            <b>20 - 30 Memoria Semántica : F.E. - Evocación Verbal - Por Claves</b>:
            <div align="center">
                <button class="botonesdemo" onclick="hover20.playclip();"><input type="image" onclick="return false;"
                                                                                 src="{$_layoutParams.root}views/encuesta/img/audio.png"
                                                                                 >Escuche la orden
                </button>
            </div>
            <template is="auto-binding">
                <form id="form1" method="post" action="{$_layoutParams.root}encuesta/pregunta20"
                      enctype="multipart/form-data">
                    <input type="hidden" name="guardar" value="1">
                    <speech-input continuous="true" interimresults="true" language="es-BO"
                                  value="{poly_bind expr='text19'}"></speech-input>
                    <input type="hidden" name="text19" value="{poly_bind expr='text19'}">
                    <div style.display="none">{poly_bind expr='text19'}</div>
                    <button class="btn btn-success" onclick="gallery.navigate(21)"><i
                                class="icon-folder-open icon-white"></i>Siguiente
                    </button>
                </form>
            </template>
        </div>
    </div>
    <!--Pregunta 21 REALIZADO  -->
    <div class="virtualpage hidepiece">
        <div id="preview"></div>
        <div id="formbox">
            <b>21 - 31 Memoria Semántica : Evocación Verbal.Codificación - Por Reconocimiento</b>:
            <div align="center">
                <button id="button14" class="botonesdemo"
                        onclick="hover21.playclip();this.disabled= true;document.getElementById('button15').style.display = 'block';">
                    <input type="image" onclick="return false;" src="{$_layoutParams.root}views/encuesta/img/audio.png"
                           >Escuche la orden
                </button>
            </div>
            <form id="form1" method="post" action="{$_layoutParams.root}encuesta/pregunta21"
                  enctype="multipart/form-data">
                <input type="hidden" name="guardar" value="1" class="form-control">
                <table class="table table-bordered" style="  margin-left: 3%;width: 90%;">
                    <input type="hidden" name="guardar" value="1" class="form-control">
                    <tbody>
                    <tr>
                        <!--Gato-->
                        <td style="text-align:center;">
                            <button id="button15" class="botonesdemo"
                                    onclick="hover211.playclip();this.disabled= true;document.getElementById('button18').style.display = 'block';"
                                    style="display:none"><input type="image" onclick="return false;"
                                                                src="{$_layoutParams.root}views/encuesta/img/audio.png"
                                                                >Palabra 1
                            </button>
                            <label>
                                <input name="21-1" type="radio" value="v">
                                Si
                                <input name="21-1" type="radio" value="f">
                                No
                            </label>
                        </td>
                        <!--Melon-->
                        <td style="text-align:center;">
                            <button id="button16" class="botonesdemo"
                                    onclick="hover212.playclip();this.disabled= true;document.getElementById('button19').style.display = 'block'; "
                                    style="display:none"><input type="image" onclick="return false;"
                                                                src="{$_layoutParams.root}views/encuesta/img/audio.png"
                                                                >Palabra 5
                            </button>
                            <label>
                                <input name="21-2" type="radio" value="f">
                                Si
                                <input name="21-2" type="radio" value="v">
                                No
                            </label>
                        </td>
                        <!--Codo-->
                        <td style="text-align:center;">
                            <button id="button17" class="botonesdemo"
                                    onclick="hover213.playclip();this.disabled= true;document.getElementById('button20').style.display = 'block';"
                                    style="display:none"><input type="image" onclick="return false;"
                                                                src="{$_layoutParams.root}views/encuesta/img/audio.png"
                                                                >Palabra 9
                            </button>
                            <label>
                                <input name="21-3" type="radio" value="v">
                                Si
                                <input name="21-3" type="radio" value="f">
                                No
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <!--Brazo-->
                        <td style="text-align:center;">
                            <button id="button18" class="botonesdemo"
                                    onclick="hover214.playclip();this.disabled= true;document.getElementById('button21').style.display = 'block'; "
                                    style="display:none"><input type="image" onclick="return false;"
                                                                src="{$_layoutParams.root}views/encuesta/img/audio.png"
                                                                >Palabra 2
                            </button>
                            <label>
                                <input name="21-4" type="radio" value="f">
                                Si
                                <input name="21-4" type="radio" value="v">
                                No
                            </label>
                        </td>
                        <!--Mano-->
                        <td style="text-align:center;">
                            <button id="button19" class="botonesdemo"
                                    onclick="hover215.playclip();this.disabled= true;document.getElementById('button22').style.display = 'block'; "
                                    style="display:none"><input type="image" onclick="return false;"
                                                                src="{$_layoutParams.root}views/encuesta/img/audio.png"
                                                                >Palabra 6
                            </button>
                            <label>
                                <input name="21-5" type="radio" value="v">
                                Si
                                <input name="21-5" type="radio" value="f">
                                No
                            </label>
                        </td>
                        <!--Perro-->
                        <td style="text-align:center;">
                            <button id="button20" class="botonesdemo"
                                    onclick="hover216.playclip();this.disabled= true;document.getElementById('button23').style.display = 'block'; "
                                    style="display:none"><input type="image" onclick="return false;"
                                                                src="{$_layoutParams.root}views/encuesta/img/audio.png"
                                                                >Palabra 10
                            </button>
                            <label>
                                <input name="21-6" type="radio" value="f">
                                Si
                                <input name="21-6" type="radio" value="v">
                                No
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <!--Rojo-->
                        <td style="text-align:center;">
                            <button id="button21" class="botonesdemo"
                                    onclick="hover217.playclip();this.disabled= true;document.getElementById('button24').style.display = 'block';"
                                    style="display:none"><input type="image" onclick="return false;"
                                                                src="{$_layoutParams.root}views/encuesta/img/audio.png"
                                                                >Palabra 3
                            </button>
                            <label>
                                <input name="21-7" type="radio" value="f">
                                Si
                                <input name="21-7" type="radio" value="v">
                                No
                            </label>
                        </td>
                        <!--Flor-->
                        <td style="text-align:center;">
                            <button id="button22" class="botonesdemo"
                                    onclick="hover218.playclip();this.disabled= true;document.getElementById('button25').style.display = 'block';"
                                    style="display:none"><input type="image" onclick="return false;"
                                                                src="{$_layoutParams.root}views/encuesta/img/audio.png"
                                                                >Palabra 7
                            </button>
                            <label>
                                <input name="21-8" type="radio" value="f">
                                Si
                                <input name="21-8" type="radio" value="v">
                                No
                            </label>
                        </td>
                        <!--Mesa-->
                        <td style="text-align:center;">
                            <button id="button23" class="botonesdemo"
                                    onclick="hover219.playclip();this.disabled= true;document.getElementById('button26').style.display = 'block';"
                                    style="display:none"><input type="image" onclick="return false;"
                                                                src="{$_layoutParams.root}views/encuesta/img/audio.png"
                                                                >Palabra 11
                            </button>
                            <label>
                                <input name="21-9" type="radio" value="f">
                                Si
                                <input name="21-9" type="radio" value="v">
                                No
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <!--Pera-->
                        <td style="text-align:center;">
                            <button id="button24" class="botonesdemo"
                                    onclick="hover2110.playclip();this.disabled= true;document.getElementById('button16').style.display = 'block';"
                                    style="display:none"><input type="image" onclick="return false;"
                                                                src="{$_layoutParams.root}views/encuesta/img/audio.png"
                                                                >Palabra 4
                            </button>
                            <label>
                                <input name="21-10" type="radio" value="v">
                                Si
                                <input name="21-10" type="radio" value="f">
                                No
                            </label>
                        </td>
                        <!--Vaca-->
                        <td style="text-align:center;">
                            <button id="button25" class="botonesdemo"
                                    onclick="hover2111.playclip();this.disabled= true;document.getElementById('button17').style.display = 'block';"
                                    style="display:none"><input type="image" onclick="return false;"
                                                                src="{$_layoutParams.root}views/encuesta/img/audio.png"
                                                                >Palabra 8
                            </button>
                            <label>
                                <input name="21-11" type="radio" value="v">
                                Si
                                <input name="21-11" type="radio" value="f">
                                No
                            </label>
                        </td>
                        <!--Frutilla-->
                        <td style="text-align:center;">
                            <button id="button26" class="botonesdemo"
                                    onclick="hover2112.playclip();this.disabled= true;" style="display:none"><input
                                        type="image" onclick="return false;"
                                        src="{$_layoutParams.root}views/encuesta/img/audio.png" >Palabra
                                12
                            </button>
                            <label>
                                <input name="21-12" type="radio" value="v">
                                Si
                                <input name="21-12" type="radio" value="f">
                                No
                            </label>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <button class="btn btn-success" onclick="gallery.navigate(23)"><i
                            class="icon-folder-open icon-white"></i>Siguiente
                </button>
            </form>
        </div>
    </div>
    <!--Pregunta 22 NO REALIZADO REVISAR LA LAMINA DE DIBUJO NO PINTA Y COMPARAR CON LA IMAGEN ANTERIOR REALIZADA -->
    <div class="virtualpage hidepiece">
        <div id="preview"></div>
        <div id="formbox">
            <b>22 - 27 Memoria Semántica : F.E. - Representación - Visoespacial</b>:
            <div align="center">
                <button class="botonesdemo" onclick="hover22.playclip();this.disabled= true;"><input type="image"
                                                                                                     onclick="return false;"
                                                                                                     src="{$_layoutParams.root}views/encuesta/img/audio.png"
                                                                                                     >Escuche
                    la orden
                </button>
            </div>
            <label for="dtool"></label><select hidden="" id="dtool">
                <option value="pencil">Pencil</option>
            </select>
            <button class="btn btn-success" onclick="gallery.navigate(23)"><i class="icon-folder-open icon-white"></i>Siguiente
            </button>
            <table class="table table-bordered" style="  margin-left: 3%;width: 90%;">

                <tbody>
                <tr>
                    <td style="text-align:center;">
                        <div id="container-fluid">
                            <canvas id="imageView" width="400" height="300">
                                <p>Unfortunately, your browser is currently unsupported by our web
                                    application. We are sorry for the inconvenience. Please use one of the
                                    supported browsers listed below, or draw the image you want using an
                                    offline tool.</p>
                            </canvas>
                        </div>
                    </td>
                    <form id="form1" method="post" action="{$_layoutParams.root}encuesta/pregunta22"
                          enctype="multipart/form-data"></form>
                    <input type="hidden" name="guardar" value="1" class="form-control">


                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!--Pregunta 23 REALIZADA -->
    <div class="virtualpage hidepiece">
        <div id="preview"></div>
        <div id="formbox">
            <b>23 - 28 Memoria Semántica : F.E. - Evocación Verbal y Codificación - Fluidez Verbal</b>:
            <div align="center">
                <button class="botonesdemo"
                        onclick="hover23.playclip();this.disabled= true;document.getElementById('cell1').style.display = 'block';  this.style.display = 'none';">
                    <input type="image" onclick="return false;" src="{$_layoutParams.root}views/encuesta/img/audio.png"
                           >Escuche la orden
                </button>
            </div>
            <form id="form1" method="post" action="{$_layoutParams.root}encuesta/pregunta23"
                  enctype="multipart/form-data">
                <input type="hidden" name="guardar" value="1" class="form-control">
                <table class="table table-bordered" style="  margin-left: 3%;width: 90%;">
                    <tbody style="max-width: 90%;">
                    <tr>
                        <td style="width:50%">
                            <div id="cell1" style="text-align:center;display:none">
                                <button class="botonesdemo" onclick="hover231.playclip();this.disabled= true;"><input
                                            type="image" onclick="return false;"
                                            src="{$_layoutParams.root}views/encuesta/img/audio.png"
                                            >Orden de Palabras 1
                                </button>
                                <template is="auto-binding">
                                    <speech-input continuous="true" interimresults="true"
                                                  onclick="controlarAnimalesYF(1)" language="es-BO"
                                                  value="{poly_bind expr='text20'}"></speech-input>
                                    <input type="hidden" name="text20" value="{poly_bind expr='text20'}">
                                    <p>{poly_bind expr='text20'}</p>
                                </template>
                            </div>
                        </td>
                        <td style="width:50%">
                            <div id="cell2" style="text-align:center;display:none">
                                <button class="botonesdemo" onclick="hover232.playclip();this.disabled= true;"><input
                                            type="image" onclick="return false;"
                                            src="{$_layoutParams.root}views/encuesta/img/audio.png"
                                            >Orden de Palabras 2
                                </button>
                                <template is="auto-binding">
                                    <speech-input continuous="true" interimresults="true"
                                                  onclick="controlarAnimalesYF(2)" language="es-BO"
                                                  value="{poly_bind expr='text21'}"></speech-input>
                                    <input type="hidden" name="text21" value="{poly_bind expr='text21'}">
                                    <p>{poly_bind expr='text21'}</p>
                                </template>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <button class="btn btn-success" onclick="gallery.navigate(24)"><i
                            class="icon-folder-open icon-white"></i>Siguiente
                </button>
            </form>
        </div>
    </div>
    <!--Pregunta 24 REALIZADA -->
    <div class="virtualpage hidepiece">
        <div id="preview"></div>
        <div id="formbox">
            <b>24 - 19 Memoria Semántica : LectoEscritura - Evocación Verbal - Lectura Simple</b>:
            <div align="center">
                <button class="botonesdemo" onclick="hover24.playclip();"><input type="image" onclick="return false;"
                                                                                 src="{$_layoutParams.root}views/encuesta/img/audio.png"
                                                                                 >Escuche la orden
                </button>
            </div>
            <form id="form1" method="post" action="{$_layoutParams.root}encuesta/pregunta24"
                  enctype="multipart/form-data">
                <input type="hidden" name="guardar" value="1" class="form-control">
                <table class="table table-bordered" style="  margin-left: 3%;width: 90%;">
                    <tbody>
                    <tr>
                        <td style="text-align:center;">
                            <template is="auto-binding">
                                <p>
                                    <speech-input continuous="true" interimresults="true" language="es-BO"
                                                  value="{poly_bind expr='text22'}"></speech-input>
                                    <input type="hidden" name="text22" value="{poly_bind expr='text22'}">
                                </p>
                                <p>{poly_bind expr='text22'}</p>
                            </template>
                        </td>
                        <td style="text-align:center;">
                            <input name="boton1" type="image" onclick="return false;"
                                   src="{$_layoutParams.root}views/encuesta/img/23.png" class="form-control">
                        </td>
                    </tr>
                    </tbody>
                </table>
                <button class="btn btn-success" onclick="gallery.navigate(25)"><i
                            class="icon-folder-open icon-white"></i>Siguiente
                </button>
            </form>
        </div>
    </div>
    <!--Pregunta 25 NO REALIZADO -->
    <div class="virtualpage hidepiece">
        <div id="preview"></div>
        <div id="formbox">
            <b>25 - 20 Memoria Semántica : LectoEscritura - Comprensión - Lectura de Comp.</b>:
            <div align="center">
                <button class="botonesdemo"
                        onclick="hover25.playclip();document.getElementById('orden').style.display = 'block';this.style.display='none';">
                    <input type="image" onclick="return false;" src="{$_layoutParams.root}views/encuesta/img/audio.png"
                           >Escuche la orden
                </button>
            </div>
            <form id="form1" method="post" action="{$_layoutParams.root}encuesta/pregunta25"
                  enctype="multipart/form-data">
                <input type="hidden" name="guardar" value="1" class="form-control">
                <table class="table table-bordered" style="  margin-left: 3%;width: 90%;">
                    <tbody>
                    <tr>
                        <td>
                            <div id="orden" style="display:none">
                                <div align="center">
                                    <button class="botonesdemo"
                                            onclick="hover251.playclip();document.getElementById('continuar').style.display = 'block';document.getElementById('myimageDiv2').style.display = 'block';this.style.display='none';return false; ">
                                        <input type="image" onclick="return false;"
                                               src="{$_layoutParams.root}views/encuesta/img/audio.png"
                                               >Escuche la orden
                                    </button>
                                </div>

                                <div id="myimageDiv2" style="display:none">
                                    <img id="myimage" class="clase" src="{$_layoutParams.root}views/encuesta/img/25.png"
                                         alt="Imagen" title="Imagen">
                                </div>
                                <template is="auto-binding">
                                    <speech-input continuous="true" interimresults="true" language="es-BO"
                                                  value="{poly_bind expr='text23'}"></speech-input>
                                    <input type="hidden" name="text23" value="{poly_bind expr='text23'}">
                                    <p>{poly_bind expr='text23'}</p>
                                </template>
                            </div>

                        </td>
                        <td>
                            <div id="orden211" style="display:none">
                                <div align="center">
                                    <button class="botonesdemo"
                                            onclick="hover252.playclip();this.style.display='none';return false;"><input
                                                type="image" onclick="return false;"
                                                src="{$_layoutParams.root}views/encuesta/img/audio.png"
                                                >Escuche la orden
                                    </button>
                                </div>
                                <div id="botonera">
                                    <button id="botonIniciar" type="button" class="btn btn-primary" value="Iniciar">
                                        Iniciar Cámara
                                    </button>
                                    <button id="botonDetener" type="button" class="btn btn-primary" value="Detener">
                                        Detener
                                    </button>
                                    <button id="botonFoto" type="button" class="btn btn-danger" value="Foto">Sacar
                                        Foto
                                    </button>
                                </div>
                                <div class="contenedor">
                                    <h3>Cámara</h3>
                                    <video id="camara" autoplay=""></video>
                                </div>
                                <div class="contenedor">
                                    <h3>Fotos</h3>
                                    <canvas id="foto1"></canvas>
                                    <canvas id="foto2"></canvas>
                                </div>
                                <div id="diff-results" style="display:none;">
                                    <p>
                                        <label for="porcentaje"></label><input type="text" id="porcentaje"
                                                                               name="porcentaje" value=""
                                                                               class="form-control">
                                        <strong>La segunda imagen es <span id="mismatch"></span>% diferente comparada a
                                            la primera.
                                            <span id="differentdimensions" style="display:none;">y ellas tienen diferentes dimensiones.</span></strong>
                                    </p>
                                </div>
                                <p id="thesame" style="display:none;">
                                    <strong>Estas imagenes son las mismas</strong>
                                </p>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <button class="btn btn-success" onclick="gallery.navigate(26)"><i
                            class="icon-folder-open icon-white"></i>Siguiente
                </button>
            </form>
            <div id="continuar" style="display:none" align="center">
                <button class="botonesdemo"
                        onclick="document.getElementById('orden').style.display = 'none';document.getElementById('orden211').style.display = 'block';this.style.display='none';">
                    Continuar...
                </button>
            </div>
        </div>
    </div>
    <!--Pregunta 26 NO REALIZADO -->
    <div class="virtualpage hidepiece">
        <div id="preview"></div>
        <div id="formbox">
            <b>26 - 21 Memoria Semántica : Lecto Escritura - Compresión - Redacción</b>:
            <div align="center">
                <button class="botonesdemo" onclick="hover26.playclip();"><input type="image" onclick="return false;"
                                                                                 src="{$_layoutParams.root}views/encuesta/img/audio.png"
                                                                                 >Escuche la orden
                </button>
            </div>
            <form id="form1" method="post" action="{$_layoutParams.root}encuesta/pregunta9"
                  enctype="multipart/form-data">

                <input type="hidden" name="guardar" value="1" class="form-control">
                <table class="table table-bordered" style="  margin-left: 3%;width: 90%;">
                    <tbody>
                    <tr>
                        <td style="width: 90%;">
                            <label for="opcion38"></label><input style="width: 98%;" type="text" name="26" id="opcion38"
                                                                 class="form-control">
                        </td>
                        <td style="text-align:center; width: 20%;">
                            <input name="boton1" type="image" onclick="deshabilitar30();return false;"
                                   src="{$_layoutParams.root}views/encuesta/img/emoticon.png" >
                        </td>
                    </tr>


                    </tbody>
                </table>
                <button class="btn btn-success" onclick="gallery.navigate(27)"><i
                            class="icon-folder-open icon-white"></i>Siguiente
                </button>
            </form>
        </div>
    </div>
    <!--Pregunta 27 REALIZADO -->
    <div class="virtualpage hidepiece">
        <div id="preview"></div>
        <div id="formbox">
            <b>27 - 22 Memoria Semántica : LectoEscritura - Seguimiento Ordenes - Copia</b>:
            <div align="center">
                <button class="botonesdemo"
                        onclick="hover27.playclip();document.getElementById('oracion').style.display = 'block';"><input
                            type="image" onclick="return false;" src="{$_layoutParams.root}views/encuesta/img/audio.png"
                            >Escuche la orden
                </button>
                <img id="oracion" style="display:none" src="{$_layoutParams.root}views/encuesta/img/27.png" alt="Imagen"
                     title="Imagen">
            </div>
            <form id="form1" method="post" action="{$_layoutParams.root}encuesta/pregunta27"
                  enctype="multipart/form-data">
                <input type="hidden" name="guardar" value="1" class="form-control">
                <table class="table table-bordered" style="  margin-left: 3%;width: 90%;">
                    <tbody>
                    <tr>
                        <td style="width: 80%;">
                            <label for="opcion39"></label><input style="width: 98%;" type="text" name="27" id="opcion39"
                                                                 class="form-control">
                        </td>
                        <td style="text-align:center;width: 20%;">
                            <input name="boton1" type="image" onclick="deshabilitar31();return false;"
                                   src="{$_layoutParams.root}views/encuesta/img/emoticon.png" >
                        </td>
                    </tr>
                    </tbody>
                </table>
                <button class="btn btn-success" onclick="gallery.navigate(28)"><i
                            class="icon-folder-open icon-white"></i>Siguiente
                </button>
            </form>
        </div>
    </div>
    <!--Pregunta 28 REALIZADO -->
    <div class="virtualpage hidepiece">
        <div id="preview"></div>
        <div id="formbox">
            <b>28 - 23 Memoria Semántica : LectoEscritura - Seguimiento Ordenes - Dictado</b>:
            <div align="center">
                <button class="botonesdemo"
                        onclick="hover28.playclip();document.getElementById('button90').style.display = 'block'; this.style.display = 'none';">
                    <input type="image" onclick="return false;" src="{$_layoutParams.root}views/encuesta/img/audio.png"
                           >Escuche la orden
                </button>
                <button id="button90" class="botonesdemo" onclick="hover281.playclip();" style="display:none"><input
                            type="image" onclick="return false;" src="{$_layoutParams.root}views/encuesta/img/audio.png"
                            >Oración
                </button>
            </div>
            <form id="form1" method="post" action="{$_layoutParams.root}encuesta/pregunta28"
                  enctype="multipart/form-data">
                <input type="hidden" name="guardar" value="1" class="form-control">
                <table class="table table-bordered" style="  margin-left: 3%;width: 90%;">

                    <tbody>
                    <tr>
                        <td style="width: 80%;">
                            <label for="opcion40"></label><input style="width: 98%;" type="text" name="28" id="opcion40"
                                                                 class="form-control">
                        </td>
                        <td style="text-align:center;width: 20%;">
                            <input name="boton1" type="image" onclick="deshabilitar32();return false;"
                                   src="{$_layoutParams.root}views/encuesta/img/emoticon.png" >
                        </td>
                    </tr>
                    </tbody>
                </table>
                <button class="btn btn-success" onclick="gallery.navigate(29)"><i
                            class="icon-folder-open icon-white"></i>Siguiente
                </button>
            </form>

        </div>
    </div>
    <!--Pregunta 29 REALIZADO -->
    <div class="virtualpage hidepiece">
        <div id="preview"></div>
        <div id="formbox">
            <b>29 - 24 Memoria Semántica : Lecto Escritura - Discriminación - Conceptualización</b>:
            <div align="center">
                <div id="desaparecertitulo"><h2>¿Entiende lo que son las semejanzas?</h2></div>
                <button id="si" class="botonesdemo"
                        onclick="this.style.display = 'none';document.getElementById('no').style.display = 'none';document.getElementById('desaparecertitulo').style.display = 'none';">
                    Si
                </button>
                <button id="no" class="botonesdemo"
                        onclick="document.getElementById('explicacion').style.display = 'block'; this.style.display = 'none';document.getElementById('si').style.display = 'none';document.getElementById('desaparecertitulo').style.display = 'none';">
                    No
                </button>
                <button id="explicacion" class="botonesdemo"
                        onclick="hover29.playclip();this.disabled= true;document.getElementById('respuestasemejanza').style.display = 'block'; this.style.display = 'none';"
                        style="display:none"><input type="image" onclick="return false;"
                                                    src="{$_layoutParams.root}views/encuesta/img/audio.png"
                                                    >Semejanzas
                </button>
                <button id="respuestasemejanza" class="botonesdemo" onclick="hover291.playclip();" style="display:none">
                    <input type="image" onclick="return false;" src="{$_layoutParams.root}views/encuesta/img/audio.png"
                           >Respuesta
                </button>
            </div>
            <form id="form1" method="post" action="{$_layoutParams.root}encuesta/pregunta29"
                  enctype="multipart/form-data">
                <input type="hidden" name="guardar" value="1" class="form-control">
                <table class="table table-bordered" style="  margin-left: 3%;width: 90%;">
                    <tbody>
                    <tr>
                        <td>
                            <h4>Naranja - Pera</h4>
                        </td>
                        <td>
                            <label for="opcion29"></label><input type="text" name="291" id="opcion29"
                                                                 class="form-control">
                        </td>
                        <td style="text-align:center;">
                            <input name="boton1" type="image" onclick="deshabilitar21();return false;"
                                   src="{$_layoutParams.root}views/encuesta/img/emoticon.png" >
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4>Perro - Caballo</h4>
                        </td>
                        <td>
                            <label for="opcion30"></label><input type="text" name="292" id="opcion30"
                                                                 class="form-control">
                        </td>
                        <td style="text-align:center;">
                            <input name="boton1" type="image" onclick="deshabilitar22();return false;"
                                   src="{$_layoutParams.root}views/encuesta/img/emoticon.png" >
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4>Ojo - Nariz</h4>
                        </td>
                        <td>
                            <label for="opcion31"></label><input type="text" name="293" id="opcion31"
                                                                 class="form-control">
                        </td>
                        <td style="text-align:center;">
                            <input name="boton1" type="image" onclick="deshabilitar23();return false;"
                                   src="{$_layoutParams.root}views/encuesta/img/emoticon.png" >
                        </td>
                    </tr>
                    </tbody>
                </table>
                <button class="btn btn-success" onclick="gallery.navigate(30)"><i
                            class="icon-folder-open icon-white"></i>Siguiente
                </button>
            </form>
        </div>
    </div>
    <!--Pregunta 30 REALIZADO -->
    <div class="virtualpage hidepiece">
        <div id="preview"></div>
        <div id="formbox">
            <b>30 - 25 Memoria Semántica : Funciones Ejecutivas - Cálculo y Segui. - Cálculo (Abstracto)</b>:
            <div align="center">
                <button class="botonesdemo" onclick="hover30.playclip();"><input type="image" onclick="return false;"
                                                                                 src="{$_layoutParams.root}views/encuesta/img/audio.png"
                                                                                 >Escuche la orden
                </button>
            </div>
            <form id="form1" method="post" action="{$_layoutParams.root}encuesta/pregunta30"
                  enctype="multipart/form-data">
                <input type="hidden" name="guardar" value="1" class="form-control">
                <table class="table table-bordered" style="  margin-left: 3%;width: 90%;">
                    <tbody>
                    <tr>
                        <td>
                            <h4>13 + 15 ?</h4>
                        </td>
                        <td>
                            <label for="opcion32"></label><input type="text" name="301" id="opcion32"
                                                                 class="form-control">
                        </td>
                        <td style="text-align:center;">
                            <input name="boton1" type="image" onclick="deshabilitar24();return false;"
                                   src="{$_layoutParams.root}views/encuesta/img/emoticon.png" >
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4>20 - 12 ?</h4>
                        </td>
                        <td>
                            <label for="opcion33"></label><input type="text" name="302" id="opcion33"
                                                                 class="form-control">
                        </td>
                        <td style="text-align:center;">
                            <input name="boton1" type="image" onclick="deshabilitar25();return false;"
                                   src="{$_layoutParams.root}views/encuesta/img/emoticon.png" >
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4>6 x 5 ?</h4>
                        </td>
                        <td>
                            <label for="opcion34"></label><input type="text" name="303" id="opcion34"
                                                                 class="form-control">
                        </td>
                        <td style="text-align:center;">
                            <input name="boton1" type="image" onclick="deshabilitar26();return false;"
                                   src="{$_layoutParams.root}views/encuesta/img/emoticon.png" >
                        </td>
                    </tr>
                    </tbody>
                </table>
                <button class="btn btn-success" onclick="gallery.navigate(31)"><i
                            class="icon-folder-open icon-white"></i>Siguiente
                </button>
            </form>
        </div>
    </div>
    <!--Pregunta 31 REALIZADO -->
    <div class="virtualpage hidepiece">
        <div id="preview"></div>
        <div id="formbox">
            <b>31 - 26 Memoria Semántica : Funciones Ejecutivas - Cálculo y Segui. - Cálculo (Concreto)</b>:
            <div align="center">
                <button class="botonesdemo" onclick="hover31.playclip();"><input type="image" onclick="return false;"
                                                                                 src="{$_layoutParams.root}views/encuesta/img/audio.png"
                                                                                 >Escuche la orden
                </button>
            </div>
            <form id="form1" method="post" action="{$_layoutParams.root}encuesta/pregunta31"
                  enctype="multipart/form-data">
                <input type="hidden" name="guardar" value="1" class="form-control">
                <table class="table table-bordered" style="  margin-left: 3%;width: 90%;">
                    <tbody>
                    <tr>
                        <td>
                            <h4>José tenía 12 Bs recibió 9 y gastó 14. Cuánto le queda?</h4>
                        </td>
                        <td>
                            <label for="opcion35"></label><input type="text" name="311" id="opcion35"
                                                                 class="form-control">
                        </td>
                        <td style="text-align:center;">
                            <input name="boton1" type="image" onclick="deshabilitar27();return false;"
                                   src="{$_layoutParams.root}views/encuesta/img/emoticon.png" >
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4>Cuántas naranjas hay en dos docenas y medias?</h4>
                        </td>
                        <td>
                            <label for="opcion36"></label><input type="text" name="312" id="opcion36"
                                                                 class="form-control">
                        </td>
                        <td style="text-align:center;">
                            <input name="boton1" type="image" onclick="deshabilitar28();return false;"
                                   src="{$_layoutParams.root}views/encuesta/img/emoticon.png" >
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4>María tenía 49 manzanas y 7 amigos. Cuántas les dio a cada uno?</h4>
                        </td>
                        <td>
                            <label for="opcion37"></label><input type="text" name="313" id="opcion37"
                                                                 class="form-control">
                        </td>
                        <td style="text-align:center;">
                            <input name="boton1" type="image" onclick="deshabilitar29();return false;"
                                   src="{$_layoutParams.root}views/encuesta/img/emoticon.png" >
                        </td>
                    </tr>
                    </tbody>
                </table>
                <button class="btn btn-success" onclick="gallery.navigate(32)"><i
                            class="icon-folder-open icon-white"></i>Siguiente
                </button>
            </form>
        </div>
    </div>
    <!--Pregunta 32 REALIZADO -->
    <div class="virtualpage hidepiece">
        <div id="preview"></div>
        <div id="formbox">
            <b>32 - 32 Memoria Procedimental: F.E. - Seguimiento Ordenes - Producción Mot. (Corporal)</b>:
            <div align="center">
                <button class="botonesdemo"
                        onclick="hover32.playclip();document.getElementById('accion1').style.display = 'block'; this.style.display = 'none';">
                    <input type="image" onclick="return false;" src="{$_layoutParams.root}views/encuesta/img/audio.png"
                           >Escuche la orden
                </button>
                <button id="accion1" class="botonesdemo"
                        onclick="hover321.playclip();document.getElementById('accion2').style.display = 'block'; this.style.display = 'none';"
                        style="display:none"><input type="image" onclick="return false;"
                                                    src="{$_layoutParams.root}views/encuesta/img/audio.png"
                                                    >Acción 1
                </button>
                <button id="accion2" class="botonesdemo"
                        onclick="hover322.playclip();document.getElementById('accion3').style.display = 'block'; this.style.display = 'none';"
                        style="display:none"><input type="image" onclick="return false;"
                                                    src="{$_layoutParams.root}views/encuesta/img/audio.png"
                                                    >Acción 2
                </button>
                <button id="accion3" class="botonesdemo" onclick="hover323.playclip(); this.style.display = 'none';"
                        style="display:none"><input type="image" onclick="return false;"
                                                    src="{$_layoutParams.root}views/encuesta/img/audio.png"
                                                    >Acción 3
                </button>
            </div>
            <section id="contenedorPuzzle">
                <div id="contenedorPiezas" ondragenter="return enter(event)" ondragover="return over(event)"
                     ondrop="return drop(event)">
                    <img id="pieza1" src="{$_layoutParams.root}views/encuesta/img/pieza11.jpg" alt="pieza1"
                         draggable="true" ondragstart="start(event)" ondragend="end(event)">
                    <img id="pieza4" src="{$_layoutParams.root}views/encuesta/img/pieza12.jpg" alt="pieza1"
                         draggable="true" ondragstart="start(event)" ondragend="end(event)">
                    <img id="pieza2" src="{$_layoutParams.root}views/encuesta/img/pieza21.jpg" alt="pieza1"
                         draggable="true" ondragstart="start(event)" ondragend="end(event)">
                    <img id="pieza5" src="{$_layoutParams.root}views/encuesta/img/pieza22.jpg" alt="pieza1"
                         draggable="true" ondragstart="start(event)" ondragend="end(event)">
                    <img id="pieza3" src="{$_layoutParams.root}views/encuesta/img/pieza31.jpg" alt="pieza1"
                         draggable="true" ondragstart="start(event)" ondragend="end(event)">
                    <img id="pieza6" src="{$_layoutParams.root}views/encuesta/img/pieza32.jpg" alt="pieza1"
                         draggable="true" ondragstart="start(event)" ondragend="end(event)">
                </div>
                <div id="puzzle" style="background-image:url({$_layoutParams.root}views/encuesta/img/32.png) ">
                    <div class="contenedorPieza" id="uno" ondragenter="return enter(event)"
                         ondragover="return over(event)" ondrop="return drop(event)"></div>
                    <div class="contenedorPieza" id="dos" ondragenter="return enter(event)"
                         ondragover="return over(event)" ondrop="return drop(event)"></div>
                    <div class="contenedorPieza" id="tres" ondragenter="return enter(event)"
                         ondragover="return over(event)" ondrop="return drop(event)"></div>
                    <!--<div class="contenedorPieza" id="cuatro" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"></div>-->
                </div>
            </section>
            <form id="form1" method="post" action="{$_layoutParams.root}encuesta/pregunta32"
                  enctype="multipart/form-data">
                <input type="hidden" name="guardar" value="1" class="form-control">
                <div name="puzzleresp" class="puzzleresp" hidden=""></div>
                <label for="puzzleresp"></label><input type="text" id="puzzleresp" name="puzzleresp" value="" hidden=""
                                                       class="form-control">
                <button class="btn btn-success" onclick="gallery.navigate(33);"><i
                            class="icon-folder-open icon-white"></i>Siguiente
                </button>
            </form>
        </div>
    </div>
    <!--Pregunta 34 NO REALIZADO -->
    <div class="virtualpage hidepiece">
        <div id="preview"></div>
        <div id="formbox">
            <b>34-34 Memoria Procedimental : F.E - Seguimiento Ordenes - Imitación</b>:
            <input type="hidden" name="guardar" value="1" class="form-control">
            <div align="center">
                {*<div class="botonesdemo" onmouseover="hover34.playclip()">Escuche la orden</div>*}
            </div>
            <button class="btn btn-success" onclick="gallery.navigate(34)"><i
                        class="icon-folder-open icon-white"></i>Siguiente
            </button>
            <table class="table table-bordered" style="  width: 90%;">

                <tbody>
                <tr>
                    <td align="center">
                        <video id="VideoPPT" width="90%"
                               src="{$_layoutParams.root}views/encuesta/img/piedrapapeltijera.mp4" controls=""></video>
                    </td>
                    <td width="35%">
                        <h2>Accion con la mano izquierda</h2>
                        <section id="contenedorPuzzle">
                            <div id="contenedorPiezas" ondragenter="return enter(event)" ondragover="return over(event)"
                                 ondrop="return drop(event)">
                                <img id="mano1" src="{$_layoutParams.root}views/encuesta/img/piedraizquierda.jpg"
                                     alt="pieza1" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                <img id="mano2" src="{$_layoutParams.root}views/encuesta/img/papelderecha.jpg"
                                     alt="pieza1" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                <img id="mano3" src="{$_layoutParams.root}views/encuesta/img/tijeraizquierda.jpg"
                                     alt="pieza1" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                <img id="mano4" src="{$_layoutParams.root}views/encuesta/img/piedraderecha.jpg"
                                     alt="pieza1" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                <img id="mano5" src="{$_layoutParams.root}views/encuesta/img/papelizquierda.jpg"
                                     alt="pieza1" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                <img id="mano6" src="{$_layoutParams.root}views/encuesta/img/tijeraderecha.jpg"
                                     alt="pieza1" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                            </div>
                            <div id="puzzle"
                                 style="background-image:url({$_layoutParams.root}views/encuesta/img/32.png) ">
                                <div class="contenedorPieza" id="manounoizquierda" ondragenter="return enter(event)"
                                     ondragover="return over(event)" ondrop="return drop(event)"></div>
                                <div class="contenedorPieza" id="manodosizquierda" ondragenter="return enter(event)"
                                     ondragover="return over(event)" ondrop="return drop(event)"></div>
                                <div class="contenedorPieza" id="manotresizquierda" ondragenter="return enter(event)"
                                     ondragover="return over(event)" ondrop="return drop(event)"></div>
                            </div>
                        </section>
                    </td>
                    <td width="35%">
                        <h2>Accion con la mano derecha</h2>
                        <section id="contenedorPuzzle">
                            <div id="contenedorPiezas" ondragenter="return enter(event)" ondragover="return over(event)"
                                 ondrop="return drop(event)">
                                <img id="mano1" src="{$_layoutParams.root}views/encuesta/img/piedraizquierda.jpg"
                                     alt="pieza1" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                <img id="mano2" src="{$_layoutParams.root}views/encuesta/img/papelderecha.jpg"
                                     alt="pieza1" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                <img id="mano3" src="{$_layoutParams.root}views/encuesta/img/tijeraizquierda.jpg"
                                     alt="pieza1" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                <img id="mano4" src="{$_layoutParams.root}views/encuesta/img/piedraderecha.jpg"
                                     alt="pieza1" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                <img id="mano5" src="{$_layoutParams.root}views/encuesta/img/papelizquierda.jpg"
                                     alt="pieza1" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                <img id="mano6" src="{$_layoutParams.root}views/encuesta/img/tijeraderecha.jpg"
                                     alt="pieza1" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                            </div>
                            <div id="puzzle"
                                 style="background-image:url({$_layoutParams.root}views/encuesta/img/32.png) ">
                                <div class="contenedorPieza" id="manounoizquierda" ondragenter="return enter(event)"
                                     ondragover="return over(event)" ondrop="return drop(event)"></div>
                                <div class="contenedorPieza" id="manodosizquierda" ondragenter="return enter(event)"
                                     ondragover="return over(event)" ondrop="return drop(event)"></div>
                                <div class="contenedorPieza" id="manotresizquierda" ondragenter="return enter(event)"
                                     ondragover="return over(event)" ondrop="return drop(event)"></div>
                            </div>
                        </section>
                    </td>
                </tr>
                <form id="form1" method="post" action="{$_layoutParams.root}encuesta/pregunta34"
                      enctype="multipart/form-data"></form>
                <input type="hidden" name="guardar" value="1" class="form-control">


                </tbody>
            </table>
        </div>
    </div>
    <!-- Presentacion Final -->
    <div class="virtualpage hidepiece">
        <div id="preview"></div>
        <div id="formbox">
            <h3>Felicidades a completado con éxito "La Evaluación Diferencial de la Memoria"</h3>
            <input type="hidden" name="guardar" value="1" class="form-control">
            <h4>Continue la evaluación con el <a class="" href="{$_layoutParams.root}encuesta2"
                                                 rel="next">EQUILAM </a></h4>
        </div>
    </div>
</div>

<!-- Paginacion de div -->
Esto no entra para la vista del usuario, solo es de guia
<div id="gallerypaginate" class="paginationstyle">
    <a href="#" rel="previous" style="margin-right: 80px">atras</a>
    <span class="paginateinfo" style="font-weight:bold"></span>
    <a class="" href="#" rel="next">siguiente</a>
</div>
<br>
<hr>