<div style="max-width: 100%; border: groove 10px;padding: 5px; background-color: rgba(131, 197, 205, 0); border-radius: 19px;">
    <a href="{$_layoutParams.root}resultado"><button>Regresar</button></a>
    <form id="form1" method="post" action="{$_layoutParams.root}resultado/" enctype="multipart/form-data">
        <h2> Resultados
        {foreach item=datos from=$pacientes}
           {strtoupper($datos)}
        {/foreach}
        </h2>
        <input type="image" style="width: 100%" onclick='return false;' src="{$_layoutParams.root}views/resultado/reportefinal.png">
        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <td style="width: 156px;height: 24px;"></td>
                    {assign var=i value=1}
                        {foreach item=resul from=$resultados}
                             {if $i==20}
                                 {if $resul[0]==4 || $resul[0]==3}
                                     <td  style="width: 16px; background-color: red"></td>
                                 {/if}
                                 {if $resul[0]==2}
                                     <td  style="width: 16px; background-color: yellow"></td>
                                 {/if}
                                 {if $resul[0]==1}
                                     <td  style="width: 16px; background-color: green"></td>
                                 {/if}
                             {else}
                                 {if $resul[0]==4 || $resul[0]==3}
                                    <td  style="width: 8px; background-color: red"></td>
                                {/if}
                                 {if $resul[0]==2}
                                    <td style="width: 8px; background-color: yellow"></td>
                                {/if}
                                 {if $resul[0]==1}
                                    <td style="width: 8px; background-color: green"></td>
                                {/if}
                             {/if}
                            {assign var=i value=$i+1}
                        {/foreach}
                </tr>
            </table>
        </div>
    </form>
</div>