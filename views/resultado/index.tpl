{if isset($pacientes) && count($pacientes)}
<div style="max-width: 100%; border: groove 10px;  ; padding: 5px; background-color: rgba(131, 197, 205, 0); border-radius: 19px;">
		<h2> Resultados </h2>
            <table class="table table-bordered">
                {foreach item=datos from=$pacientes}
                <tr>
                    <td>Nombre del Usuario:<label for="opcion1"><span id="paciente" class="input-xlarge uneditable-input">{$datos}</span></td>
                    <td> Resultados EDM: <a href="{$_layoutParams.root}resultado/edm">EDM</a> </td>
                </tr>
                {/foreach}
                <tr>
                    <td>Nombre del Profesional Asignado:<label for="opcion2"><span id="doctor" class="input-xlarge uneditable-input">Dra. Carol Osinaga</span></td>
                    <td> Resultados MMSE: <a href="edm.tpl">MMSE</a> </td>
                </tr>
                <tr>
                    <td>Fecha de Evaluacion:<label for="opcion3"></label><span id="fecha" class="input-xlarge uneditable-input">{date("m/d/Y")}</span></td>
                    <td> Escala de Reserva Cognitiva: <a href="edm.tpl">EQUILAM</a> </td>
                </tr>
                <tr>
                    <td></td>
                    <td> Escala de Deterioro Global de Reisberg: <a href="edm.tpl">GDS</a> </td>
                </tr>
                <tr>
                    <th colspan="2" align="center">Muchas Gracias por haber utilizado nuestros servicios</th>
                </tr>

            </table>
</div>
{/if}