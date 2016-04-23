<?php /* Smarty version Smarty-3.1.8, created on 2015-11-04 03:01:32
         compiled from "C:\Xampp\htdocs\mvc\modules\usuarios\views\registro\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:738354d2503d76c211-56492855%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1826305db5ec3db8fd4e85e590496b941b95028c' => 
    array (
      0 => 'C:\\Xampp\\htdocs\\mvc\\modules\\usuarios\\views\\registro\\index.tpl',
      1 => 1446602490,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '738354d2503d76c211-56492855',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54d2503d79b029_03171603',
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d2503d79b029_03171603')) {function content_54d2503d79b029_03171603($_smarty_tpl) {?><div class="container" style="padding-left: 49px;max-width: 64%;">
    <div class="row">
        <form name="form1" method="post" action="" class="form">
            <input type="hidden" value="1" name="enviar"/>

            <h2>Por favor registrese
                <small>Es gratis y siempre lo ser&aacute;</small>
            </h2>
            <h4>Datos Personales: </h4>
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--4-col">
                    <label>Nombre:</label>
                    <label>
                        <input  type="text" name="nombre" pattern="[A-Z,a-z, ]*" tabindex="1"/>
                    </label>
                </div>
                <div class="mdl-cell mdl-cell--8-col">
                    <label>Apellido:</label>
                    <label>
                        <input style="width:94%"  type="text" name="apellido" pattern="[A-Z,a-z, ]*" tabindex="2"/>
                    </label>
                </div>
            </div>
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--4-col">
                    <label>Edad:</label>
                    <label>
                        <input  type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="edad" tabindex="3"/>
                    </label>
                </div>
                <div class="mdl-cell mdl-cell--4-col">
                        <label>Fecha de Nacimiento: </label>
                        <input  type="date" name="fechanac" placeholder="dd/mm/aaaa" tabindex="4"/>
                </div>
                <div class="mdl-cell mdl-cell--4-col">
                    <label>Lugar de Nacimiento: </label>
                    <label for="selectLugarNac"></label><select name="selectLugarNac" tabindex="4">
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
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--4-col">
                    <label>Profesion: </label>
                    <label for="Profesion"></label><select name="Profesion" tabindex="5">
                            <option value="" selected="selected"></option>
                            <option value='Administracion y Oficina'  >Administracion y Oficina</option>
                            <option value='Agricultura y Campo'  >Agricultura y Campo</option>
                            <option value='Arquitectura'  >Arquitectura</option>
                            <option value='Atención al Cliente'  >Atencion al Cliente</option>
                            <option value='Banca y Finanzas'  >Banca y Finanzas</option>
                            <option value='Científico e Investigación'  >Cientifico e Investigacion</option>
                            <option value='Cocina y Reposteria'  >Cocina y Reposteria</option>
                            <option value='Construccion'  >Construccion</option>
                            <option value='Contabilidad y Economia'  >Contabilidad y Economia</option>
                            <option value='Direccion y Gerencia'  >Direccion y Gerencia</option>
                            <option value='Diseño y Medios'  >Dise&ntilde;o y Medios</option>
                            <option value='Educacion'  >Educacion</option>
                            <option value='Industria Alimentaria'  >Industria Alimentaria</option>
                            <option value='Industria Minera'  >Industria Minera</option>
                            <option value='Industria Textil'  >Industria Textil</option>
                            <option value='Informatica'  >Informatica</option>
                            <option value='Ingenieria'  >Ingenieria</option>
                            <option value='Inmobiliaria'  >Inmobiliaria</option>
                            <option value='Internet'  >Internet</option>
                            <option value='Legal y Asesoría'  >Legal y Asesoria</option>
                            <option value='Logística y Almacén'  >Logistica y Almacen</option>
                            <option value='Mano Obra Calificada'  >Mano Obra Calificada</option>
                            <option value='Mano Obra No Calificada'  >Mano Obra No Calificada</option>
                            <option value='Marketing y Ventas'  >Marketing y Ventas</option>
                            <option value='Medicina y Salud'  >Medicina y Salud</option>
                            <option value='Moda y Belleza'  >Moda y Belleza</option>
                            <option value='ONG y Org. Benéficas'  >ONG y Org. Beneficas</option>
                            <option value='Otros'  >Otros</option>
                            <option value='Recursos Humanos'  >Recursos Humanos</option>
                            <option value='Sector Público'  >Sector Publico</option>
                            <option value='Seguridad Industrial'  >Seguridad Industrial</option>
                            <option value='Servicios Petroleros'  >Servicios Petroleros</option>
                            <option value='Sociales y Humanidades'  >Sociales y Humanidades</option>
                            <option value='Telecomunicaciones'  >Telecomunicaciones</option>
                            <option value='Turismo y Hotelería'  >Turismo y Hoteleria</option>
                            <option value='Técnico'  >Tecnico</option>
                        </select>
                </div>
                <div class="mdl-cell mdl-cell--4-col">
                    <label>Ocupacion: </label>
                    <label for="ocupacion"></label><select name="ocupacion" tabindex="6">
                        <option value="" selected="selected"></option>
                        <option value='Administracion y Oficina'  >Administracion y Oficina</option>
                        <option value='Agricultura y Campo'  >Agricultura y Campo</option>
                        <option value='Arquitectura'  >Arquitectura</option>
                        <option value='Atención al Cliente'  >Atencion al Cliente</option>
                        <option value='Banca y Finanzas'  >Banca y Finanzas</option>
                        <option value='Científico e Investigación'  >Cientifico e Investigacion</option>
                        <option value='Cocina y Reposteria'  >Cocina y Reposteria</option>
                        <option value='Construccion'  >Construccion</option>
                        <option value='Contabilidad y Economia'  >Contabilidad y Economia</option>
                        <option value='Direccion y Gerencia'  >Direccion y Gerencia</option>
                        <option value='Diseño y Medios'  >Dise&ntilde;o y Medios</option>
                        <option value='Educacion'  >Educacion</option>
                        <option value='Industria Alimentaria'  >Industria Alimentaria</option>
                        <option value='Industria Minera'  >Industria Minera</option>
                        <option value='Industria Textil'  >Industria Textil</option>
                        <option value='Informatica'  >Informatica</option>
                        <option value='Ingenieria'  >Ingenieria</option>
                        <option value='Inmobiliaria'  >Inmobiliaria</option>
                        <option value='Internet'  >Internet</option>
                        <option value='Legal y Asesoría'  >Legal y Asesoria</option>
                        <option value='Logística y Almacén'  >Logistica y Almacen</option>
                        <option value='Mano Obra Calificada'  >Mano Obra Calificada</option>
                        <option value='Mano Obra No Calificada'  >Mano Obra No Calificada</option>
                        <option value='Marketing y Ventas'  >Marketing y Ventas</option>
                        <option value='Medicina y Salud'  >Medicina y Salud</option>
                        <option value='Moda y Belleza'  >Moda y Belleza</option>
                        <option value='ONG y Org. Benéficas'  >ONG y Org. Beneficas</option>
                        <option value='Otros'  >Otros</option>
                        <option value='Recursos Humanos'  >Recursos Humanos</option>
                        <option value='Sector Público'  >Sector Publico</option>
                        <option value='Seguridad Industrial'  >Seguridad Industrial</option>
                        <option value='Servicios Petroleros'  >Servicios Petroleros</option>
                        <option value='Sociales y Humanidades'  >Sociales y Humanidades</option>
                        <option value='Telecomunicaciones'  >Telecomunicaciones</option>
                        <option value='Turismo y Hotelería'  >Turismo y Hoteleria</option>
                        <option value='Técnico'  >Tecnico</option>
                    </select>
                </div>
                <div class="mdl-cell mdl-cell--4-col">
                    <label>Estado Civil: </label>
                    <label for="estado_civil"></label><select name="estado_civil" tabindex="7">
                        <option value="" selected="selected"></option>
                        <option value="Soltero" >Soltero(a)</option>
                        <option value="Casado"  >Casado(a)</option>
                        <option value="Divorciado"  >Divorciado(a)</option>
                        <option value="Viudo"  >Viudo(a)</option>
                </select>
                </div>
            </div>
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--2-col">
                    <label>Numero de hijos: </label>
                    <label for="Numero_hijos"></label><select style="width: 100%;" name="Numero_hijos" tabindex="8">
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
                <div class="mdl-cell mdl-cell--3-col">
                    <label>Idioma Materno: </label>
                    <label for="idioma_materno"></label><select style="width: 100%;" name="idioma_materno" tabindex="9">
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
                <div class="mdl-cell mdl-cell--3-col">
                    <label>otro idioma: </label>
                    <label>
                        <input style="width: 100%;" type="text" name="otro_idioma" tabindex="10">
                    </label>
                </div>
                <div class="mdl-cell mdl-cell--3-col">
                    <label>Con quienes vive: </label>
                    <select style="width: 100%;" name="Conquienvive" tabindex="11">
                    <option value="" selected="selected"></option>
                    <option value="Solo">Solo</option>
                    <option value="Con_mis_padres">Con mis padres</option>
                    <option value="Con_mi_esposa">Con mi esposa</option>
                    <option value="Con_mi_hija">Con mi hija</option>
                    <option value="Otro">Otro</option>
                    </select>
                </div>
            </div>
            <h4>Observaciones relevantes: </h4>
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--12-col">
                    <label>Anteriores enfermedades o intervenciones Quirurgicas...</label>
                    <label for="enfermedades"></label><textarea style="width: 94%;" tabindex="12"  type="text" rows= "3" cols="20" name="enfermedades" ></textarea>
                </div>
            </div>
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--12-col">
                    <label>Dificultades de memoria,manifiestas o diagnosticadas...</label>
                    <label for="memoria"></label><textarea style="width: 94%;" type="text" rows= "3" cols="20" name="memoria" tabindex="13"></textarea>
                </div>
            </div>
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--12-col">
                    <label>Email:</label>
                    <label>
                        <input style="width: 90%;" tabindex="14" type="email" name="email"
                               value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['email'])===null||$tmp==='' ? " ...@...com" : $tmp);?>
"
                        onfocus="if (this.value=='...@...com') this.value='';"
                        onblur="if (this.value=='') this.value='...@...com';"/>
                    </label>
                </div>
            </div>
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--4-col">
                    <label>Usuario: </label>
                    <input style="width: 90%;" class="input-large" type="text" name="usuario" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['usuario'])===null||$tmp==='' ? '' : $tmp);?>
"
                            placeholder="Nombre de Usuario" tabindex="15"/>
                </div>
                <div class="mdl-cell mdl-cell--4-col">
                    <label>Password: </label>
                    <input style="width: 90%;" class="input-large" type="password" name="pass" placeholder="Password" tabindex="16"/>
                </div>
                <div class="mdl-cell mdl-cell--4-col">
                    <label>Confirmar: </label>
                    <input style="width: 90%;" type="password" name="confirmar" placeholder="Confirmar Password" class="input-large" tabindex="17"/>
                </div>
            </div>

            <div class="form-inline">
                <button tabindex="18" class="btn btn-large btn-block btn-primary" type="submit">
                    <i class="icon-plus-sign icon-white"> </i> Enviar
                </button>
            </div>
        </form>
    </div>
</div>

<?php }} ?>