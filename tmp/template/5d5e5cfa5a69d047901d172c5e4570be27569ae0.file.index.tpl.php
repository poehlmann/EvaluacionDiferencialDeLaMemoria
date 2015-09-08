<?php /* Smarty version Smarty-3.1.8, created on 2015-06-16 02:19:46
         compiled from "C:\Xampp\htdocs\mvc\views\encuesta2\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2980355288c7113d151-50405778%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d5e5cfa5a69d047901d172c5e4570be27569ae0' => 
    array (
      0 => 'C:\\Xampp\\htdocs\\mvc\\views\\encuesta2\\index.tpl',
      1 => 1434413984,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2980355288c7113d151-50405778',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55288c71140fd4_54956415',
  'variables' => 
  array (
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55288c71140fd4_54956415')) {function content_55288c71140fd4_54956415($_smarty_tpl) {?><h3>Escala de Reserva Cognitiva - EQUILAM</h3>
<div style=" border: groove 10px;  ; padding: 5px; background-color: rgba(131, 197, 205, 0); border-radius: 19px;max-width: 100%;">
		<form id="form1" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
encuesta2/equilam" enctype="multipart/form-data">
			<h5>La escala de reserva cognitiva pretende medir c&oacute;mo de activa es su vida.<br>
				A continuaci&oacute;n se presentan una serie de actividades referidas a esta etapa de su vida:</h5>
			<table class="table table-bordered" style="width: 90%;">
				<tr>
					<td>
						Pregunta: Con que frecuencia realizo cada una de las siguientes actividades?
					</td>
				</tr>
				<tr>
					<td>
						Ejemplo: Controlar mis asuntos personales
					</td>
					<td>
						<div class="btn-group" data-toggle="buttons">
						  <label class="btn btn-primary ">
						    <input type="radio" name="option1" value=1 autocomplete="off" > Si
						  </label>
						  <label class="btn btn-primary">
						    <input type="radio" name="option1"  value=2 autocomplete="off"> A veces
						  </label>
						  <label class="btn btn-primary">
						    <input type="radio" name="option1"  value=3 autocomplete="off"> No
						  </label>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						1. Controlo mis asuntos personales (ej. Tomar mis medicinas, ir a la cida con el m&eacute;dico, qu&eacute; ropa vestir cada d&iacute;a, reservas en hoteles, etc.)
					</td>
					<td>
						<div class="btn-group" data-toggle="buttons">
						  <label class="btn btn-primary ">
						    <input type="radio" name="option2" value=1 autocomplete="off" > Si
						  </label>
						  <label class="btn btn-primary">
						    <input type="radio" name="option2"  value=2 autocomplete="off"> A veces
						  </label>
						  <label class="btn btn-primary">
						    <input type="radio" name="option2"  value=3 autocomplete="off"> No
						  </label>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						2. Controlo los asuntos econ&oacute;micos de mi hogar (ej. Recibos, hipoteca, inversiones, etc.)
					</td>
					<td>
					<div class="btn-group" data-toggle="buttons">
						  <label class="btn btn-primary ">
						    <input type="radio" name="option3"value=1 autocomplete="off" > Si
						  </label>
						  <label class="btn btn-primary">
						    <input type="radio" name="option3"  value=2 autocomplete="off"> A veces
						  </label>
						  <label class="btn btn-primary">
						    <input type="radio" name="option3"  value=3 autocomplete="off"> No
						  </label>
					</div>
					</td>
				</tr>
				<tr>
					<td>
						3. Realizo tareas dom&eacute;sticas (ej. Hacer la comida, limpiar el polvo, ordenar la casa, poner la lavadora, hacer la compra, etc.)
					</td>
					<td>
					<div class="btn-group" data-toggle="buttons">
						  <label class="btn btn-primary ">
						    <input type="radio" name="option4" value=1 autocomplete="off" > Si
						  </label>
						  <label class="btn btn-primary">
						    <input type="radio" name="option4" value=2 autocomplete="off"> A veces
						  </label>
						  <label class="btn btn-primary">
						    <input type="radio" name="option4"  value=3 autocomplete="off"> No
						  </label>
					</div>
					</td>
				</tr>
				<tr>
					<td>
						4. Utilizo las nuevas tecnolog&iacute;as de forma b&aacute;sica (ej. Contestar al tel&eacute;fono o al celular, prender la televisi&oacute;n, cambiar los canales, etc.)
					</td>
					<td>
					<div class="btn-group" data-toggle="buttons">
						  <label class="btn btn-primary ">
						    <input type="radio" name="option5" value=1 autocomplete="off" > Si
						  </label>
						  <label class="btn btn-primary">
						    <input type="radio" name="option5" value=2 autocomplete="off"> A veces
						  </label>
						  <label class="btn btn-primary">
						    <input type="radio" name="option5"  value=3 autocomplete="off"> No
						  </label>
					</div>
					</td>
				</tr>
				<tr>
					<td>
						5. Realizo cursos, talleres o similares (ej. De inform&aacute;tica, de idiomas, etc.)
					</td>
					<td>
					<div class="btn-group" data-toggle="buttons">
						  <label class="btn btn-primary ">
						    <input type="radio" name="option6"  value=1 autocomplete="off" > Si
						  </label>
						  <label class="btn btn-primary">
						    <input type="radio" name="option6" value=2 autocomplete="off"> A veces
						  </label>
						  <label class="btn btn-primary">
						    <input type="radio" name="option6"  value=3 autocomplete="off"> No
						  </label>
					</div>
					</td>
				</tr>
				<tr>
					<td>
						6. Hago uso de otro idioma o dialecto
					</td>
					<td>
					<div class="btn-group" data-toggle="buttons">
						  <label class="btn btn-primary ">
						    <input type="radio" name="option7" value=1 autocomplete="off" > Si
						  </label>
						  <label class="btn btn-primary">
						    <input type="radio" name="option7" value=2 autocomplete="off"> A veces
						  </label>
						  <label class="btn btn-primary">
						    <input type="radio" name="option7" value=3 autocomplete="off"> No
						  </label>
					</div>
					</td>
				</tr>
				<tr>
					<td>
						7. Estoy informado/a (ej. Escucho la radio, veo noticias por televisi&oacute;n, leo el peri&oacute;dico, etc.)
					</td>
					<td>
					<div class="btn-group" data-toggle="buttons">
						  <label class="btn btn-primary ">
						    <input type="radio" name="option8" value=1 autocomplete="off" > Si
						  </label>
						  <label class="btn btn-primary">
						    <input type="radio" name="option8" value=2 autocomplete="off"> A veces
						  </label>
						  <label class="btn btn-primary">
						    <input type="radio" name="option8"  value=3 autocomplete="off"> No
						  </label>
					</div>
					</td>
				</tr>
				<tr>
					<td>
						8. Utilizo las nuevas tecnolog&iacute;as del momento y hago uso de ellas de una forma m&aacute;s compleja (ej. Uso el tel&eacute;fono celular para escribir mensajes; navegar por Internet, reservas de pasajes/hoteles online, etc.)
					</td>
					<td>
					<div class="btn-group" data-toggle="buttons">
						  <label class="btn btn-primary ">
						    <input type="radio" name="option9"  value=1 autocomplete="off" > Si
						  </label>
						  <label class="btn btn-primary">
						    <input type="radio" name="option9" value=2 autocomplete="off"> A veces
						  </label>
						  <label class="btn btn-primary">
						    <input type="radio" name="option9"  value=3 autocomplete="off"> No
						  </label>
					</div>
					</td>
				</tr>
				<tr>
					<td>
						9. Leo como afici&oacute;n (ej. Peri&oacute;dicos, revistas, libros)
					</td>
					<td>
					<div class="btn-group" data-toggle="buttons">
						  <label class="btn btn-primary ">
						    <input type="radio" name="option10"  value=1 autocomplete="off" > Si
						  </label>
						  <label class="btn btn-primary">
						    <input type="radio" name="option10"  value=2 autocomplete="off"> A veces
						  </label>
						  <label class="btn btn-primary">
						    <input type="radio" name="option10" value=3 autocomplete="off"> No
						  </label>
					</div>
					</td>
				</tr>
				<tr>
					<td>
						10. Me gusta realizar pasatiempos (ej. Crucigramas, sopa de letras, cruzadas, etc.) y/o juegos de mesa (ej. Cartas, damas, domin&oacute;, ajedrez, etc.)
					</td>
					<td>
					<div class="btn-group" data-toggle="buttons">
						  <label class="btn btn-primary ">
						    <input type="radio" name="option11"  value=1 autocomplete="off" > Si
						  </label>
						  <label class="btn btn-primary">
						    <input type="radio" name="option11"  value=2 autocomplete="off"> A veces
						  </label>
						  <label class="btn btn-primary">
						    <input type="radio" name="option11"  value=3 autocomplete="off"> No
						  </label>
					</div>
					</td>
				</tr>
				<tr>
					<td>
						11. Escribo como afici&oacute;n (ej. Cartas, diario personal, poes&iacute;a, etc.)
					</td>
					<td>
					<div class="btn-group" data-toggle="buttons">
						  <label class="btn btn-primary ">
						    <input type="radio" name="option12"  value=1 autocomplete="off" > Si
						  </label>
						  <label class="btn btn-primary">
						    <input type="radio" name="option12"  value=2 autocomplete="off"> A veces
						  </label>
						  <label class="btn btn-primary">
						    <input type="radio" name="option12"  value=3 autocomplete="off"> No
						  </label>
					</div>
					</td>
				</tr>
				<tr>
					<td>
						12. Escucho m&uacute;sica o veo la televisi&oacute;n (ej. M&uacute;sica cl&aacute;sica o de la &eacute;poca, noticias, concursos, entrevistas, etc.)
					</td>
					<td>
					<div class="btn-group" data-toggle="buttons">
						  <label class="btn btn-primary ">
						    <input type="radio" name="option13" value=1 autocomplete="off" > Si
						  </label>
						  <label class="btn btn-primary">
						    <input type="radio" name="option13"  value=2 autocomplete="off"> A veces
						  </label>
						  <label class="btn btn-primary">
						    <input type="radio" name="option13"  value=3 autocomplete="off"> No
						  </label>
					</div>
					</td>
				</tr>
				<tr>
					<td>
						13. Toco alg&uacute;n instrumento musical (ej. Guitarra, flauta, etc.)
					</td>
					<td>
					<div class="btn-group" data-toggle="buttons">
						  <label class="btn btn-primary ">
						    <input type="radio" name="option14"  value=1 autocomplete="off" > Si
						  </label>
						  <label class="btn btn-primary">
						    <input type="radio" name="option14"  value=2 autocomplete="off"> A veces
						  </label>
						  <label class="btn btn-primary">
						    <input type="radio" name="option14" value=3 autocomplete="off"> No
						  </label>
					</div>
					</td>
				</tr>
				<tr>
					<td>
						14. Colecciono objetos (ej. Sellos, monedas, postales, etc.)
					</td>
					<td>
					<div class="btn-group" data-toggle="buttons">
						  <label class="btn btn-primary ">
						    <input type="radio" name="option15"  value=1 autocomplete="off" > Si
						  </label>
						  <label class="btn btn-primary">
						    <input type="radio" name="option15"  value=2 autocomplete="off"> A veces
						  </label>
						  <label class="btn btn-primary">
						    <input type="radio" name="option15"  value=3 autocomplete="off"> No
						  </label>
					</div>
					</td>
				</tr>
				<tr>
					<td>
						15. Viajo o realizo excursiones de forma activa (ej. Visitando monumentos, mostrando int&eacute;res por la cultura del lugar y las costumbres, etc.)
					</td>
					<td>
					<div class="btn-group" data-toggle="buttons">
						  <label class="btn btn-primary ">
						    <input type="radio" name="option16" value=1 autocomplete="off" > Si
						  </label>
						  <label class="btn btn-primary">
						    <input type="radio" name="option16"  value=2 autocomplete="off"> A veces
						  </label>
						  <label class="btn btn-primary">
						    <input type="radio" name="option16"  value=3 autocomplete="off"> No
						  </label>
					</div>
					</td>
				</tr>
				<tr>
					<td>
						16. Asisto a alg&uacute;n evento cultural (ej. Exposiciones, teatro, cine, visita a museos, conciertos, etc.)
					</td>
					<td>
					<div class="btn-group" data-toggle="buttons">
						  <label class="btn btn-primary ">
						    <input type="radio" name="option17" value=1 autocomplete="off" > Si
						  </label>
						  <label class="btn btn-primary">
						    <input type="radio" name="option17"  value=2 autocomplete="off"> A veces
						  </label>
						  <label class="btn btn-primary">
						    <input type="radio" name="option17"  value=3 autocomplete="off"> No
						  </label>
					</div>
					</td>
				</tr>
				<tr>
					<td>
						17. Realizo manualidades y/o jardiner&iacute;a (ej. Trabajos de carpinter&iacute;a, costura, poda de plantas, etc.)
					</td>
					<td>
					<div class="btn-group" data-toggle="buttons">
						  <label class="btn btn-primary ">
						    <input type="radio" name="option18"  value=1 autocomplete="off" > Si
						  </label>
						  <label class="btn btn-primary">
						    <input type="radio" name="option18"  value=2 autocomplete="off"> A veces
						  </label>
						  <label class="btn btn-primary">
						    <input type="radio" name="option18"  value=3 autocomplete="off"> No
						  </label>
					</div>
					</td>
				</tr>
				<tr>
					<td>
						18. Cocino como afici&oacute;n (ej. Realizar nuevas recetas, probar otras formas de cocinar los alimentos, etc.)
					</td>
					<td>
					<div class="btn-group" data-toggle="buttons">
						  <label class="btn btn-primary ">
						    <input type="radio" name="option19"  value=1 autocomplete="off" > Si
						  </label>
						  <label class="btn btn-primary">
						    <input type="radio" name="option19"  value=2 autocomplete="off"> A veces
						  </label>
						  <label class="btn btn-primary">
						    <input type="radio" name="option19"  value=3 autocomplete="off"> No
						  </label>
					</div>
					</td>
				</tr>
				<tr>
					<td>
						19. Me gusta pintar y/o tomar fotos (ej.Ppintar cuadros, hacer fotos de los sitios que he visitado, realizar reportajes, retoques digitales, etc.)
					</td>
					<td>
					<div class="btn-group" data-toggle="buttons">
						  <label class="btn btn-primary ">
						    <input type="radio" name="option20"  value=1 autocomplete="off" > Si
						  </label>
						  <label class="btn btn-primary">
						    <input type="radio" name="option20"  value=2 autocomplete="off"> A veces
						  </label>
						  <label class="btn btn-primary">
						    <input type="radio" name="option20"  value=3 autocomplete="off"> No
						  </label>
					</div>
					</td>
				</tr>
				<tr>
					<td>
						20. Voy de compras de forma activa (ej. Comparando precios, probando nuevos productos, memorizando la lista de la compra, etc.)
					</td>
					<td>
					<div class="btn-group" data-toggle="buttons">
						  <label class="btn btn-primary ">
						    <input type="radio" name="option21" value=1 autocomplete="off" > Si
						  </label>
						  <label class="btn btn-primary">
						    <input type="radio" name="option21"  value=2 autocomplete="off"> A veces
						  </label>
						  <label class="btn btn-primary">
						    <input type="radio" name="option21"  value=3 autocomplete="off"> No
						  </label>
					</div>
					</td>
				</tr>
				<tr>
					<td>
						21. Realizo alguna actividad f&iacute;sica (ej. Tai chi, correr, f&uacute;tbol, caminar, etc.)
					</td>
					<td>
					<div class="btn-group" data-toggle="buttons">
						  <label class="btn btn-primary ">
						    <input type="radio" name="option22"  value=1 autocomplete="off" > Si
						  </label>
						  <label class="btn btn-primary">
						    <input type="radio" name="option22"  value=2 autocomplete="off"> A veces
						  </label>
						  <label class="btn btn-primary">
						    <input type="radio" name="option22"  value=3 autocomplete="off"> No
						  </label>
					</div>
					</td>
				</tr>
				<tr>
					<td>
						22. Visito y/o soy visitado/a por familiares, amigos, vecinos, etc. (ej. Reuniones sociales, comidas familares, etc.)
					</td>
					<td>
					<div class="btn-group" data-toggle="buttons">
						  <label class="btn btn-primary ">
						    <input type="radio" name="option23"  value=1 autocomplete="off" > Si
						  </label>
						  <label class="btn btn-primary">
						    <input type="radio" name="option23"  value=2 autocomplete="off"> A veces
						  </label>
						  <label class="btn btn-primary">
						    <input type="radio" name="option23"  value=3 autocomplete="off"> No
						  </label>
					</div>
					</td>
				</tr>
				<tr>
					<td>
						23. Realizo actividades religiosas, de convivencia, de voluntariado, etc.
					</td>
					<td>
					<div class="btn-group" data-toggle="buttons">
						  <label class="btn btn-primary ">
						    <input type="radio" name="option24" value=1 autocomplete="off" > Si
						  </label>
						  <label class="btn btn-primary">
						    <input type="radio" name="option24" value=2 autocomplete="off"> A veces
						  </label>
						  <label class="btn btn-primary">
						    <input type="radio" name="option24"  value=3 autocomplete="off"> No
						  </label>
					</div>
					</td>
				</tr>
				<tr>
					<td>
						24. Me relaciono con personas de otras generaciones
					</td>
					<td>
					<div class="btn-group" data-toggle="buttons">
						  <label class="btn btn-primary ">
						    <input type="radio" name="option25"  value=1 autocomplete="off" > Si
						  </label>
						  <label class="btn btn-primary">
						    <input type="radio" name="option25"  value=2 autocomplete="off"> A veces
						  </label>
						  <label class="btn btn-primary">
						    <input type="radio" name="option25"  value=3 autocomplete="off"> No
						  </label>
					</div>
					</td>
				</tr>
			</table>
			<hr>
		 <p><button class="btn btn-success"><i class="icon-folder-open icon-white"> </i> Guardar</button></p>
		 <hr>
	</form>

</div><?php }} ?>