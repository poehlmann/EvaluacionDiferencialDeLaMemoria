<?php /* Smarty version Smarty-3.1.8, created on 2018-11-06 16:35:33
         compiled from "/opt/lampp/htdocs/EvaluacionDiferencialDeLaMemoria/modules/usuarios/views/registro/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9443078955be1abb34826d8-41153470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5062f4c5c97df9401a36a341d1c7ce4d00fa8068' => 
    array (
      0 => '/opt/lampp/htdocs/EvaluacionDiferencialDeLaMemoria/modules/usuarios/views/registro/index.tpl',
      1 => 1541518533,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9443078955be1abb34826d8-41153470',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5be1abb3537ae8_18162859',
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be1abb3537ae8_18162859')) {function content_5be1abb3537ae8_18162859($_smarty_tpl) {?><div class="container" style="padding-left: 49px;background: white">
    <div class="row">
        <form name="form1" method="post" action="" class="form">
            <input type="hidden" value="1" name="enviar"/>

            <h2>Por favor registrese
                <small>Es gratis y siempre lo ser&aacute;</small>
            </h2>
            <h4>Datos Personales: </h4>
            <div class="row-fluid">
                <div class="span3">
                    <label>Nombre:</label>
                        <input  type="text" name="nombre" pattern="[A-Z,a-z, ]*" tabindex="1"/>
                </div>
                <div class="span3 offset1">
                    <label>Apellido:</label>
                        <input type="text" name="apellido" pattern="[A-Z,a-z, ]*" tabindex="2"/>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span3 ">
                    <label>Edad:</label>
                    <input  type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="edad" tabindex="3"/>
                </div>
                <div class="span3 offset1">
                        <label>Fecha de Nacimiento: </label>
                        <input  type="date" name="fechanac" placeholder="dd/mm/aaaa" tabindex="4"/>
                </div>
                <div class="span3 offset1">
                    <label for="selectLugarNac">Lugar de Nacimiento: </label>
                    <select name="selectLugarNac" tabindex="4">
                            <option value="" selected="selected"></option>
                            <option value="Santa Cruz">Santa Cruz</option>
                            <option value="Potosi">Potosi</option>
                            <option value="Oruro">Oruro</option>
                            <option value="Beni">Beni</option>
                            <option value="La Paz">La Paz</option>
                            <option value="Chuquisaca">Chuquisaca</option>
                            <option value="Tarija">Tarija</option>
                            <option value="Cochabamaba">Cochabamba</option>
                            <option value="Pando">Pando</option>
                    </select>
                </div>
            </div>
            <hr>
            <div class="row-fluid">
                <div class="span3">
                    <label for="Profesion">Profesion: </label>
                    <select name="Profesion" tabindex="5">
                            <option value="" selected="selected"></option>
                            <option value='Administracion y Oficina'  >Administracion y Oficina</option>
                            <option value='Agricultura y Campo'  >Agricultura y Campo</option>
                            <option value='Arquitectura'  >Arquitectura</option>
                            <option value='Atenci�n al Cliente'  >Atencion al Cliente</option>
                            <option value='Banca y Finanzas'  >Banca y Finanzas</option>
                            <option value='Cient�fico e Investigaci�n'  >Cientifico e Investigacion</option>
                            <option value='Cocina y Reposteria'  >Cocina y Reposteria</option>
                            <option value='Construccion'  >Construccion</option>
                            <option value='Contabilidad y Economia'  >Contabilidad y Economia</option>
                            <option value='Direccion y Gerencia'  >Direccion y Gerencia</option>
                            <option value='Dise�o y Medios'  >Dise&ntilde;o y Medios</option>
                            <option value='Educacion'  >Educacion</option>
                            <option value='Industria Alimentaria'  >Industria Alimentaria</option>
                            <option value='Industria Minera'  >Industria Minera</option>
                            <option value='Industria Textil'  >Industria Textil</option>
                            <option value='Informatica'  >Informatica</option>
                            <option value='Ingenieria'  >Ingenieria</option>
                            <option value='Inmobiliaria'  >Inmobiliaria</option>
                            <option value='Internet'  >Internet</option>
                            <option value='Legal y Asesor�a'  >Legal y Asesoria</option>
                            <option value='Log�stica y Almac�n'  >Logistica y Almacen</option>
                            <option value='Mano Obra Calificada'  >Mano Obra Calificada</option>
                            <option value='Mano Obra No Calificada'  >Mano Obra No Calificada</option>
                            <option value='Marketing y Ventas'  >Marketing y Ventas</option>
                            <option value='Medicina y Salud'  >Medicina y Salud</option>
                            <option value='Moda y Belleza'  >Moda y Belleza</option>
                            <option value='ONG y Org. Ben�ficas'  >ONG y Org. Beneficas</option>
                            <option value='Otros'  >Otros</option>
                            <option value='Recursos Humanos'  >Recursos Humanos</option>
                            <option value='Sector P�blico'  >Sector Publico</option>
                            <option value='Seguridad Industrial'  >Seguridad Industrial</option>
                            <option value='Servicios Petroleros'  >Servicios Petroleros</option>
                            <option value='Sociales y Humanidades'  >Sociales y Humanidades</option>
                            <option value='Telecomunicaciones'  >Telecomunicaciones</option>
                            <option value='Turismo y Hoteler�a'  >Turismo y Hoteleria</option>
                            <option value='T�cnico'  >Tecnico</option>
                    </select>
                </div>
                <div class="span3 offset1">
                    <label for="ocupacion">Ocupacion: </label>
                    <select name="ocupacion" tabindex="6">
                        <option value="" selected="selected"></option>
                        <option value='Administracion y Oficina'  >Administracion y Oficina</option>
                        <option value='Agricultura y Campo'  >Agricultura y Campo</option>
                        <option value='Arquitectura'  >Arquitectura</option>
                        <option value='Atenci�n al Cliente'  >Atencion al Cliente</option>
                        <option value='Banca y Finanzas'  >Banca y Finanzas</option>
                        <option value='Cient�fico e Investigaci�n'  >Cientifico e Investigacion</option>
                        <option value='Cocina y Reposteria'  >Cocina y Reposteria</option>
                        <option value='Construccion'  >Construccion</option>
                        <option value='Contabilidad y Economia'  >Contabilidad y Economia</option>
                        <option value='Direccion y Gerencia'  >Direccion y Gerencia</option>
                        <option value='Dise�o y Medios'  >Dise&ntilde;o y Medios</option>
                        <option value='Educacion'  >Educacion</option>
                        <option value='Industria Alimentaria'  >Industria Alimentaria</option>
                        <option value='Industria Minera'  >Industria Minera</option>
                        <option value='Industria Textil'  >Industria Textil</option>
                        <option value='Informatica'  >Informatica</option>
                        <option value='Ingenieria'  >Ingenieria</option>
                        <option value='Inmobiliaria'  >Inmobiliaria</option>
                        <option value='Internet'  >Internet</option>
                        <option value='Legal y Asesor�a'  >Legal y Asesoria</option>
                        <option value='Log�stica y Almac�n'  >Logistica y Almacen</option>
                        <option value='Mano Obra Calificada'  >Mano Obra Calificada</option>
                        <option value='Mano Obra No Calificada'  >Mano Obra No Calificada</option>
                        <option value='Marketing y Ventas'  >Marketing y Ventas</option>
                        <option value='Medicina y Salud'  >Medicina y Salud</option>
                        <option value='Moda y Belleza'  >Moda y Belleza</option>
                        <option value='ONG y Org. Ben�ficas'  >ONG y Org. Beneficas</option>
                        <option value='Otros'  >Otros</option>
                        <option value='Recursos Humanos'  >Recursos Humanos</option>
                        <option value='Sector P�blico'  >Sector Publico</option>
                        <option value='Seguridad Industrial'  >Seguridad Industrial</option>
                        <option value='Servicios Petroleros'  >Servicios Petroleros</option>
                        <option value='Sociales y Humanidades'  >Sociales y Humanidades</option>
                        <option value='Telecomunicaciones'  >Telecomunicaciones</option>
                        <option value='Turismo y Hoteler�a'  >Turismo y Hoteleria</option>
                        <option value='T�cnico'  >Tecnico</option>
                    </select>
                </div>
                <div class="span3 offset1">
                    <label for="estado_civil">Estado Civil: </label>
                   <select name="estado_civil" tabindex="7">
                        <option value="" selected="selected"></option>
                        <option value="Soltero" >Soltero(a)</option>
                        <option value="Casado"  >Casado(a)</option>
                        <option value="Divorciado"  >Divorciado(a)</option>
                        <option value="Viudo"  >Viudo(a)</option>
                    </select>
                </div>
            </div>
            <hr>
            <div class="row-fluid">
                <div class="span3">
                    <label for="Numero_hijos">Numero de hijos: </label>
                    <select name="Numero_hijos" tabindex="8">
                        <option value="" selected="selected"></option>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </div>
                <div class="span3 offset1">
                    <label for="idioma_materno">Idioma Materno: </label>
                    <select name="idioma_materno" tabindex="9">
                        <option value="Ingles" selected="selected" >Ingles</option>
                        <option value="Espanhol"  >Espa&ntilde;ol</option>
                        <option value="Portugues"  >Portugues</option>
                        <option value="Frances"  >Frances</option>
                        <option value="Aleman"  >Aleman</option>
                        <option value="Italiano"  >Italiano</option>
                        <option value="Ruso"  >Ruso</option>
                        <option value="Japones"  >Japones</option>
                        <option value="Chino"  >Chino</option>
                        <option value="Coreano"  >Coreano</option>
                        <option value="Otro"  >Otro</option>
                    </select>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span3">
                    <label>otro idioma: </label>
                    <input type="text" name="otro_idioma" tabindex="10">
                </div>
                <div class="span3 offset1">
                    <label>Con quienes vive: </label>
                    <select name="Conquienvive" tabindex="11">
                        <option value="" selected="selected"></option>
                        <option value="Solo">Solo</option>
                        <option value="Con_mis_padres">Con mis padres</option>
                        <option value="Con_mi_esposa">Con mi esposa</option>
                        <option value="Con_mi_hija">Con mi hija</option>
                        <option value="Otro">Otro</option>
                    </select>
                </div>
            </div>
            <hr>
            <h4>Observaciones relevantes: </h4>
            <div class="row-fluid">
                <div class="span12">
                    <label for="enfermedades">Anteriores enfermedades o intervenciones Quirurgicas...</label>
                    <textarea tabindex="12" style="width: 90%" type="text" rows= "3" cols="20" name="enfermedades" ></textarea>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <label for="memoria">Dificultades de memoria,manifiestas o diagnosticadas...</label>
                    <textarea style="width: 90%" type="text" rows= "3" cols="20" name="memoria" tabindex="13"></textarea>
                </div>
            </div>
            <hr>
            <h4>Datos de Usuario: </h4>
            <div class="row-fluid">
                <div class="span3">
                    <label>Usuario: </label>
                    <input class="input-large" type="text" name="usuario" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['usuario'])===null||$tmp==='' ? '' : $tmp);?>
"
                           placeholder="Nombre de Usuario" tabindex="15"/>
                </div>
                <div class="span6 offset1">
                    <label>Email:</label>
                        <input style="width: 90%;" tabindex="14" type="email" name="email"
                               value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['email'])===null||$tmp==='' ? " ...@...com" : $tmp);?>
"
                        onfocus="if (this.value=='...@...com') this.value='';"
                        onblur="if (this.value=='') this.value='...@...com';"/>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span3">
                    <label>Password: </label>
                    <input class="input-large" type="password" name="pass" placeholder="Password" tabindex="16"/>
                </div>
                <div class="span3 offset1">
                    <label>Confirmar: </label>
                    <input type="password" name="confirmar" placeholder="Confirmar Password" class="input-large" tabindex="17"/>
                </div>
            </div>
            <hr>
            <div class="form-inline" align="center">
                <button tabindex="18" style="width: 20%" class="btn btn-large btn-block btn-primary" type="submit">
                    <i class="icon-plus-sign icon-white"> </i> Enviar
                </button>
            </div>
        </form>
    </div>
</div>

<?php }} ?>