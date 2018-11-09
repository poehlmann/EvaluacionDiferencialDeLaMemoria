/*pregunta 2
Función en PHP para sacar País, Estado/Provincia y Ciudad de la IP del visitante de nuestra web.
*/
/*
function iploc($ip) {
  $html = file_get_contents("http://ipinfodb.com/ip_locator.php?ip=".$ip);
  preg_match("/<li>Country : (.*?) <img/",$html,$data);
  $d['pais'] = $data[1];
  preg_match("/<li>State\/Province : (.*?)<\/li>/",$html,$data);
  $d['state'] = $data[1];
  preg_match("/<li>City : (.*?)<\/li>/",$html,$data);
  $d['city'] = $data[1];
  return ($d);
}
function getRealIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP']))
        return $_SERVER['HTTP_CLIENT_IP'];
 
    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
 
    return $_SERVER['REMOTE_ADDR'];
}
*/
/*************************************************************************************************************/
//pantalla completa
/*
$(document).ready(function() {
    element = document.documentElement;
        if(element.requestFullscreen) {
            element.requestFullscreen();
        } else if(element.mozRequestFullScreen) {
            element.mozRequestFullScreen();
        } else if(element.webkitRequestFullscreen) {
            element.webkitRequestFullscreen();
        } else if(element.msRequestFullscreen) {
            element.msRequestFullscreen();
        }
});
*/
/*
$(function(){
    function  launchFullscreen(element){
        if(element.requestFullscreen) {
            element.requestFullscreen();
        } else if(element.mozRequestFullScreen) {
            element.mozRequestFullScreen();
        } else if(element.webkitRequestFullscreen) {
            element.webkitRequestFullscreen();
        } else if(element.msRequestFullscreen) {
            element.msRequestFullscreen();
        }
    }
    $(launchFullscreen(element));
    $("#pantallacompleta").click(miFuncion);
});
*/

//addEventListener("click", function() {
//    var
//        el = document.documentElement
//        , rfs =
//            el.requestFullScreen
//            || el.webkitRequestFullScreen
//            || el.mozRequestFullScreen
//        ;
//    rfs.call(el);
//});
//
//function launchFullscreen(element) {
//    if(element.requestFullscreen) {
//        element.requestFullscreen();
//    } else if(element.mozRequestFullScreen) {
//        element.mozRequestFullScreen();
//    } else if(element.webkitRequestFullscreen) {
//        element.webkitRequestFullscreen();
//    } else if(element.msRequestFullscreen) {
//        element.msRequestFullscreen();
//    }
//}
//
//function exitFullscreen() {
//    if(document.exitFullscreen) {
//        document.exitFullscreen();
//    } else if(document.mozCancelFullScreen) {
//        document.mozCancelFullScreen();
//    } else if(document.webkitExitFullscreen) {
//        document.webkitExitFullscreen();
//    }
//}

/**************************************************************************************************************/
/************************************************************************************************************/
/*Pregunta 10 checkbox*/
 document.getElementById("findChecked").onclick = function() {

          var selected = document.querySelectorAll("*:checked");
          var result = "";

          for (var i = 0; i < selected.length; i++) {
            result += (selected[i].name + " ");
          }

          document.getElementById("checkedResult").innerHTML = result;

          var miVariable = result;
          document.cookie ="variable="+miVariable+'; expires=Thu, 2 Aug 2021 20:47:11 UTC; path=/';


};
/************************************************************************************************************/
function show_aux9() {
    setTimeout(function() {
        document.getElementById("button9-2").style.display='block';
    },12000)
}
function show_aux10() {
    setTimeout(function() {
        document.getElementById("button10-2").style.display='block';
    },12000)
}
//Funcion para esconder la imagen
function show(){ 
//create an object reference to the div containing images 
var oImageDiv=document.getElementById('myimageDiv');
//set display to inline if currently none, otherwise to none 
oImageDiv.style.display=(oImageDiv.style.display=='none')?'inline':'none'
}

function show2(){ 
//create an object reference to the div containing images 
var oImageDiv2=document.getElementById('myimageDiv2');
//set display to inline if currently none, otherwise to none 
oImageDiv2.style.display=(oImageDiv2.style.display=='none')?'inline':'none'
}

function show3(){ 
//create an object reference to the div containing images 
var oImageDiv2=document.getElementById('myimageDiv3');
//set display to inline if currently none, otherwise to none 
oImageDiv2.style.display=(oImageDiv2.style.display=='none')?'inline':'none'
}
/************************************************************************************************************/
//funcion para el audio
var html5_audiotypes={ 
 "mp3": "audio/mpeg",
 "mp4": "audio/mp4",
 "ogg": "audio/ogg",
 "wav": "audio/wav"
};
function createsoundbite(sound){
 var html5audio=document.createElement('audio');
 if (html5audio.canPlayType){ //Comprobar soporte para audio HTML5
  for (var i=0; i<arguments.length; i++){
   var sourceel=document.createElement('source');
   sourceel.setAttribute('src', arguments[i]);
   if (arguments[i].match(/\.(\w+)$/i))
    sourceel.setAttribute('type', html5_audiotypes[RegExp.$1]);
   html5audio.appendChild(sourceel)
  }
  html5audio.load();
  html5audio.playclip=function(){
   html5audio.pause();
   html5audio.currentTime=0;
   html5audio.play();
  };
  return html5audio
 }
 else{
  return {playclip:function(){throw new Error('Su navegador no soporta audio HTML5')}}
 }
}
//Inicializar sonidos
var hover1 = createsoundbite('./views/encuesta/audio/1.mp3');
var hover2 = createsoundbite('./views/encuesta/audio/2.mp3');
var hover3 = createsoundbite('./views/encuesta/audio/3.mp3');
var hover4 = createsoundbite('./views/encuesta/audio/4.mp3');
var hover5 = createsoundbite('./views/encuesta/audio/5.mp3');
var hover6 = createsoundbite('./views/encuesta/audio/6.mp3');
var hover7 = createsoundbite('./views/encuesta/audio/7.mp3');
var hover71 = createsoundbite('./views/encuesta/audio/7Lista1.mp3');
var hover72 = createsoundbite('./views/encuesta/audio/7Lista2.mp3');
var hover8 = createsoundbite('./views/encuesta/audio/8.mp3');
var hover8Grupo = createsoundbite('./views/encuesta/audio/8Grupo.mp3');
var hover9 = createsoundbite('./views/encuesta/audio/9.mp3');
var hover91 = createsoundbite('./views/encuesta/audio/9-1.mp3');
var hover92 = createsoundbite('./views/encuesta/audio/9-2.mp3');
var hover10 = createsoundbite('./views/encuesta/audio/10.mp3');
var hover11 = createsoundbite('./views/encuesta/audio/11.mp3');
var hover11A1 = createsoundbite('./views/encuesta/audio/11A1.mp3');
var hover11A2= createsoundbite('./views/encuesta/audio/11A2.mp3');
var hover11A3 = createsoundbite('./views/encuesta/audio/11A3.mp3');
var hover11B1 = createsoundbite('./views/encuesta/audio/11B1.mp3');
var hover11B2 = createsoundbite('./views/encuesta/audio/11B2.mp3');
var hover11B3 = createsoundbite('./views/encuesta/audio/11B3.mp3');
var hover12 = createsoundbite('./views/encuesta/audio/12.mp3');
var hover121 = createsoundbite('./views/encuesta/audio/12-1.mp3');
var hover122 = createsoundbite('./views/encuesta/audio/12-2.mp3');
var hover123 = createsoundbite('./views/encuesta/audio/12-3.mp3');
var hover124 = createsoundbite('./views/encuesta/audio/12-4.mp3');
var hover125 = createsoundbite('./views/encuesta/audio/12-5.mp3');
var hover126 = createsoundbite('./views/encuesta/audio/12-6.mp3');
var hover127 = createsoundbite('./views/encuesta/audio/12-7.mp3');
var hover128 = createsoundbite('./views/encuesta/audio/12-8.mp3');
var hover129 = createsoundbite('./views/encuesta/audio/12-9.mp3');
var hover1210 = createsoundbite('./views/encuesta/audio/12-10.mp3');
var hover13 = createsoundbite('./views/encuesta/audio/13.mp3');
var hover14 = createsoundbite('./views/encuesta/audio/14.mp3');
var hover142 = createsoundbite('./views/encuesta/audio/14-2.mp3');
var hover143 = createsoundbite('./views/encuesta/audio/14-3.mp3');
var hover15 = createsoundbite('./views/encuesta/audio/15.mp3');
var hover152 = createsoundbite('./views/encuesta/audio/15-2.mp3');
var hover16 = createsoundbite('./views/encuesta/audio/16.mp3');
var hover17 = createsoundbite('./views/encuesta/audio/17.mp3');
var hover171 = createsoundbite('./views/encuesta/audio/17-1.mp3');
var hover172 = createsoundbite('./views/encuesta/audio/17-2.mp3');
var hover173 = createsoundbite('./views/encuesta/audio/17-3.mp3');
var hover174 = createsoundbite('./views/encuesta/audio/17-4.mp3');
// var hover18 = createsoundbite('./views/encuesta/audio/18.mp3');
var hover19 = createsoundbite('./views/encuesta/audio/19.mp3');
var hover20 = createsoundbite('./views/encuesta/audio/20.mp3');
var hover21 = createsoundbite('./views/encuesta/audio/21.mp3');
var hover211 = createsoundbite('./views/encuesta/audio/21-1.mp3');
var hover212 = createsoundbite('./views/encuesta/audio/21-2.mp3');
var hover213 = createsoundbite('./views/encuesta/audio/21-3.mp3');
var hover214 = createsoundbite('./views/encuesta/audio/21-4.mp3');
var hover215 = createsoundbite('./views/encuesta/audio/21-5.mp3');
var hover216 = createsoundbite('./views/encuesta/audio/21-6.mp3');
var hover217 = createsoundbite('./views/encuesta/audio/21-7.mp3');
var hover218 = createsoundbite('./views/encuesta/audio/21-8.mp3');
var hover219 = createsoundbite('./views/encuesta/audio/21-9.mp3');
var hover2110 = createsoundbite('./views/encuesta/audio/21-10.mp3');
var hover2111 = createsoundbite('./views/encuesta/audio/21-11.mp3');
var hover2112 = createsoundbite('./views/encuesta/audio/21-12.mp3');
var hover22 = createsoundbite('./views/encuesta/audio/22.mp3');
var hover23 = createsoundbite('./views/encuesta/audio/23.mp3');
var hover231 = createsoundbite('./views/encuesta/audio/23-1.mp3');
var hover232 = createsoundbite('./views/encuesta/audio/23-2.mp3');
var hover24 = createsoundbite('./views/encuesta/audio/24.mp3');
var hover25 = createsoundbite('./views/encuesta/audio/25.mp3');
var hover251 = createsoundbite('./views/encuesta/audio/25-1.mp3');
var hover252 = createsoundbite('./views/encuesta/audio/25-2.mp3');
var hover26 = createsoundbite('./views/encuesta/audio/26.mp3');
var hover27 = createsoundbite('./views/encuesta/audio/27.mp3');
var hover28 = createsoundbite('./views/encuesta/audio/28.mp3');
var hover281 = createsoundbite('./views/encuesta/audio/28-1.mp3');
var hover29 = createsoundbite('./views/encuesta/audio/29.mp3');
var hover291 = createsoundbite('./views/encuesta/audio/29-1.mp3');
var hover30 = createsoundbite('./views/encuesta/audio/30.mp3');
var hover31 = createsoundbite('./views/encuesta/audio/31.mp3');
var hover32 = createsoundbite('./views/encuesta/audio/32.mp3');
var hover321 = createsoundbite('./views/encuesta/audio/32-1.mp3');
var hover322 = createsoundbite('./views/encuesta/audio/32-2.mp3');
var hover323 = createsoundbite('./views/encuesta/audio/32-3.mp3');

//Nótese que se pueden añadir ficheros con otras extensiones como respaldo
//var click1 = createsoundbite('https://googledrive.com/host/0B3b6MFUtZc42dzVwTEdJM1JwZHc/click.mp3','http://k006.kiwi6.com/hotlink/dki95s7ty3/click.ogg');
//var click2 = createsoundbite('https://googledrive.com/host/0B3b6MFUtZc42dzVwTEdJM1JwZHc/clock.mp3');

/************************************************************************************************************/
/*Pregunta 9 y 10*/
function showHide(){ 
setTimeout(function() {
        $(".content").fadeOut(100);
    },12000);
  
  setTimeout(function() {
        $(".content").fadeIn(100);
    },100);
}
function showHide2(){ 
setTimeout(function() {
        $(".content2").fadeOut(100);
    },12000);
  
  setTimeout(function() {
        $(".content2").fadeIn(100);
    },100);
} 
function showHide3(){ 
setTimeout(function() {
        $(".content2").fadeOut(100);
    },12000);
  
  setTimeout(function() {
        $(".content2").fadeIn(100);
    },100);
}
/*Pregunta 13*/
function showHide4(){
    /*Imagen 1*/
    setTimeout(function() {
        $(".content3").fadeIn(100);
    },1000);
    setTimeout(function() {
        $(".content3").fadeOut(100);
    },5000);
    /*Imagen 2*/
    setTimeout(function() {
        $(".content4").fadeIn(100);
    },6000);
    setTimeout(function() {
        $(".content4").fadeOut(100);
    },10000);
    /*Imagen 3*/
    setTimeout(function() {
        $(".content5").fadeIn(100);
    },11000);
    setTimeout(function() {
        $(".content5").fadeOut(100);
    },15000);
    /*Imagen 4*/
    setTimeout(function() {
        $(".content6").fadeIn(100);
    },16000);
    setTimeout(function() {
        $(".content6").fadeOut(100);
    },20000);
    /*TextBox Respuesta*/
    setTimeout(function() {
        $(".content7").fadeIn(100);
    },21000);
    /*Imagen Correcta*/
    setTimeout(function() {
        $("#button132").fadeIn(100);
    },23000);
}
function showHide5(){
    /*Imagen 1*/
    setTimeout(function() {
        $(".content8").fadeIn(100);
    },1000);
    setTimeout(function() {
        $(".content8").fadeOut(100);
    },5000);
    /*Imagen 2*/
    setTimeout(function() {
        $(".content9").fadeIn(100);
    },6000);
    setTimeout(function() {
        $(".content9").fadeOut(100);
    },10000);
    /*Imagen 3*/
    setTimeout(function() {
        $(".content10").fadeIn(100);
    },11000);
    setTimeout(function() {
        $(".content10").fadeOut(100);
    },15000);
    /*Imagen 4*/
    setTimeout(function() {
        $(".content11").fadeIn(100);
    },16000);
    setTimeout(function() {
        $(".content11").fadeOut(100);
    },20000);
    /*TextBox Respuesta*/
    setTimeout(function() {
        $(".content12").fadeIn(100);
    },21000);
    /*Imagen Correcta*/
    setTimeout(function() {
        $("#button133").fadeIn(100);
    },23000);
}
function showHide6(){
    /*Imagen 1*/
    setTimeout(function() {
        $(".content13").fadeIn(100);
    },1000);
    setTimeout(function() {
        $(".content13").fadeOut(100);
    },5000);
    /*Imagen 2*/
    setTimeout(function() {
        $(".content14").fadeIn(100);
    },6000);
    setTimeout(function() {
        $(".content14").fadeOut(100);
    },10000);
    /*Imagen 3*/
    setTimeout(function() {
        $(".content15").fadeIn(100);
    },11000);
    setTimeout(function() {
        $(".content15").fadeOut(100);
    },15000);
    /*Imagen 4*/
    setTimeout(function() {
        $(".content16").fadeIn(100);
    },16000);
    setTimeout(function() {
        $(".content16").fadeOut(100);
    },20000);
    /*TextBox Respuesta*/
    setTimeout(function() {
        $(".content17").fadeIn(100);
    },21000);
    /*Imagen Correcta*/

}
/************************************************************************************************************/
/*Pregunta 11*/
    var contador=0;
    var contuserinput=0;
    var contuserinput2=0;
    var userInput=0;
    function incrementar()
    {
      contador++;
      //alert('El contador ahora vale :' + contador);
      document.querySelector('.results').innerHTML = contador;
      userInput = document.getElementById("respu").value = contador;
    }
    function activate()
    {
        setTimeout(userinput1, 12000);
    }
    function userinput1()
    {
        if(contuserinput==0) {
            if (hover11A1.ended) {
                if (userInput == 1) {
                    //alert("si cumplio sigue con la lista 1");
                    var hasta1 = document.getElementById('button70');
                    hasta1.style.display = (hasta1.style.display == 'none') ? 'inline' : 'none'
                }
                else {
                    contador=0;
                    alert("Vuelva a intentarlo");
                    var desde1 = document.getElementById('button72');
                    desde1.style.display = (desde1.style.display == 'none') ? 'inline' : 'none'
                }
                userInput = 0;
            }
        }
        if(contuserinput==1) {
            if (hover11A2.ended) {
                if (userInput == 2) {
                    //alert("si cumplio sigue con la lista 1");
                    var hasta2 = document.getElementById('button71');
                    hasta2.style.display = (hasta2.style.display == 'none') ? 'inline' : 'none'
                }
                else {
                    contador=0;
                    alert("Vuelva a intentarlo");
                    var desde2 = document.getElementById('button72');
                    desde2.style.display = (desde2.style.display == 'none') ? 'inline' : 'none'
                }
                userInput = 0;
            }
        }
        if(contuserinput==2) {
            if (hover11A3.ended) {
                if (userInput == 3) {
                    alert("Felicidades");
                }
                else {
                    contador=0;
                    alert("Vuelva a intentarlo");
                    var desde3 = document.getElementById('button72');
                    desde3.style.display = (desde3.style.display == 'none') ? 'inline' : 'none'
                }
                userInput = 0;
            }
        }
        contuserinput++;
    }
    function activate2()
    {
        setTimeout(userinput2, 12000);
    }
    function userinput2()
    {
        if(contuserinput2==0) {
            if (hover11B1.ended) {
                if (userInput == 1) {
                    //alert("si cumplio sigue con la lista 2");
                    var hasta1 = document.getElementById('button73');
                    hasta1.style.display = (hasta1.style.display == 'none') ? 'inline' : 'none'
                }
                else {
                    contador=0;
                    alert("Se acabo");
                }
                userInput = 0;
            }
        }
        if(contuserinput2==1) {
            if (hover11B2.ended) {
                if (userInput == 2) {
                    //alert("si cumplio sigue con la lista 2");
                    var hasta2 = document.getElementById('button74');
                    hasta2.style.display = (hasta2.style.display == 'none') ? 'inline' : 'none'
                }
                else {
                    contador=0;
                    alert("Se acabo");
                }
                userInput = 0;
            }
        }
        if(contuserinput2==2) {
            if (hover11B3.ended) {
                if (userInput == 3) {
                    alert("Felicidades");
                }
                else {
                    contador=0;
                    alert("Se acabo");
                }
                userInput = 0;
            }
        }
        contuserinput2++;
    }
/************************************************************************************************************/
/*Pregunta 23*/
function controlarAnimalesYF(controlar)
{
    if(controlar==1) {
        setTimeout(terminarAnimales, 60000);
    }
    if(controlar==2){
        setTimeout(terminarF, 60000);
    }
}
function terminarAnimales()
{
    var ocultar1 = document.getElementById("cell1");
    var ocultar2 = document.getElementById("cell2");
    ocultar1.style.display = (ocultar1.style.display == 'block') ? 'none' : 'inline';
    ocultar2.style.display = (ocultar2.style.display == 'none') ? 'block' : 'inline';
    alert("se acabo");
}
function terminarF()
{
    var ocultar = document.getElementById("cell2");
    ocultar.style.display = (ocultar.style.display == 'block') ? 'none' : 'inline';
    alert("se acabo");
}
/************************************************************************************************************/
/*Pregunta 12*/
var contevaluar=80;
var contresp=0;
var conterrorres=0;
var item = ["reloj", "libro", "camisa","lápiz","cuchara","cuadro","termómetro","vaso","cepillo","correa"];
var aumentartiempo=0;
function activarevaluacion()
{
    setTimeout(evaluar, 12000+aumentartiempo);
    aumentartiempo = aumentartiempo + 500;
}
function PintarCasillasCorrectas(contevaluar)
{
    for (var i = 0; i <= contevaluar - 80; i++)
    {
        celda = document.getElementById("celda"+ contevaluar +""+ i);
        celda.style.backgroundColor = "green";
    }
}
function PntarCasillasIncorrectas(contevaluar)
{
    for (var i = 0; i <= contevaluar - 80; i++)
    {
        celda = document.getElementById("celda"+ contevaluar +""+ i);
        celda.style.backgroundColor = "red";
    }
}
function evaluar()
{
    var ok=true;
    var lista1 =  document.getElementById('text'+contevaluar).value;
    var j = 0;

    while((j <= contevaluar - 80)&&(ok!=false)){
        if ((lista1.search(item[j])) != -1) {
            //alert("bien");
            ok = true;
        } else {
            //alert("mal");
            ok = false
        }
        j++;
    }
    var ocultarspeech = document.getElementById("div" + contevaluar);
    if(ok) {
        contresp++;
        ocultarspeech.style.display = (ocultarspeech.style.display == 'block') ? 'none' : 'inline';
        PintarCasillasCorrectas(contevaluar);
        contevaluar++;
        var apareceraudio = document.getElementById("button" + contevaluar);
        apareceraudio.style.display = (apareceraudio.style.display == 'none') ? 'inline' : 'block';
        document.querySelector('.filaresp').innerHTML = contresp;
        document.getElementById("filaresp").value = contresp;
    }else{
        conterrorres++;
        if(conterrorres==3){
            alert("Se acabo");
            ocultarspeech.style.display = (ocultarspeech.style.display == 'block') ? 'none' : 'inline';
            PntarCasillasIncorrectas(contevaluar);
        }else {
            alert("Vuelva a intentarlo");
        }
    }
}
/************************************************************************************************************/
/*Pregunta 13*/

/*
    1.-escuhar el audio y aparecera un boton de iniciar
    2.-el boton de iniciar habilitara el la primera imagen despuej de 3 seg
    3.-iran apareciendo las imagenes consecutivamente durante cada 3 segundos
    4.-tiene que aparecer la imagen correcta a la derecha y
    5.- luego aparece una caja de texto donde debe ingresar la opcion de la imagen correcta que aparecio anteriormente


*/


/************************************************************************************************************/
// vim:set spell spl=en fo=wan1croql tw=80 ts=2 sw=2 sts=2 sta et ai cin fenc=utf-8 ff=unix:
/*Pregunta 18*/

/*Todas las preguntas--es para deshabilitar en caso de que no pueda responder la pregunta*/
function deshabilitar1() {
    document.getElementById("opcion1").disabled = true;
  }
function deshabilitar2() {
    document.getElementById("opcion2").disabled = true;
  }
  function deshabilitar3() {
    document.getElementById("opcion3").disabled = true;
  }
  function deshabilitar4() {
    document.getElementById("opcion4").disabled = true;
  }
  function deshabilitar5() {
    document.getElementById("opcion5").disabled = true;
  }
  function deshabilitar6() {
    document.getElementById("opcion6").disabled = true;
  }
function deshabilitar7() {
    document.getElementById("opcion7").disabled = true;
  }
  function deshabilitar8() {
    document.getElementById("opcion8").disabled = true;
  }
  function deshabilitar9() {
    document.getElementById("opcion9").disabled = true;
  }
  function deshabilitar10() {
    document.getElementById("opcion10").disabled = true;
  }
    function deshabilitar11() {
    document.getElementById("opcion11").disabled = true;
  }
  function deshabilitar12() {
    document.getElementById("opcion12").disabled = true;
  }
  function deshabilitar13() {
    document.getElementById("opcion13").disabled = true;
  }
    function deshabilitar14() {
    document.getElementById("opcion14").disabled = true;
  }
  function deshabilitar15() {
    document.getElementById("opcion15").disabled = true;
    document.getElementById("opcion16").disabled = true;
    document.getElementById("opcion17").disabled = true;
  }
function deshabilitar16() {
    document.getElementById("opcion18").disabled = true;
  }
  function deshabilitar17() {
    document.getElementById("opcion19").disabled = true;
    document.getElementById("opcion20").disabled = true;
    document.getElementById("opcion21").disabled = true;
  }
  function deshabilitar18() {
    document.getElementById("opcion22").disabled = true;
    document.getElementById("opcion23").disabled = true;
    document.getElementById("opcion24").disabled = true;
  }
  function deshabilitar19() {
    document.getElementById("opcion25").disabled = true;
  }
    function deshabilitar20() {
    document.getElementById("opcion26").disabled = true;
    document.getElementById("opcion27").disabled = true;
    document.getElementById("opcion28").disabled = true;
  }
    function deshabilitar21() {
    document.getElementById("opcion29").disabled = true;
  }
  function deshabilitar22() {
    document.getElementById("opcion30").disabled = true;
  }
  function deshabilitar23() {
    document.getElementById("opcion31").disabled = true;
  }
  function deshabilitar24() {
    document.getElementById("opcion32").disabled = true;
  }
  function deshabilitar25() {
    document.getElementById("opcion33").disabled = true;
  }
  function deshabilitar26() {
    document.getElementById("opcion34").disabled = true;
  }
  function deshabilitar27() {
    document.getElementById("opcion35").disabled = true;
  }
  function deshabilitar28() {
    document.getElementById("opcion36").disabled = true;
  }
  function deshabilitar29() {
    document.getElementById("opcion37").disabled = true;
  }
    function deshabilitar30() {
    document.getElementById("opcion38").disabled = true;
  }
     function deshabilitar31() {
    document.getElementById("opcion39").disabled = true;
  }
   function deshabilitar32() {
    document.getElementById("opcion40").disabled = true;
  }
/************************************************************************************************************/
/*Pregunta 32*/
/**
 * Función que se ejecuta al arrastrar el elemento.
 **/
function start(e) {
    e.dataTransfer.effecAllowed = 'move'; // Define el efecto como mover (Es el por defecto)
    e.dataTransfer.setData("Text", e.target.id); // Coje el elemento que se va a mover
    e.target.style.opacity = '0.4';
}

/**
 * Función que se ejecuta se termina de arrastrar el elemento.
 **/
function end(e){
    e.target.style.opacity = ''; // Restaura la opacidad del elemento
    e.dataTransfer.clearData("Data");
}

/**
 * Función que se ejecuta cuando un elemento arrastrable entra en el elemento desde del que se llama.
 **/
function enter(e) {
    return true;
}

/**
 * Función que se ejecuta cuando un elemento arrastrable esta sobre el elemento desde del que se llama.
 * Devuelve false si el objeto se puede soltar en ese elemento y true en caso contrario.
 **/
function over(e) {
    if ((e.target.className == "contenedorPieza") || (e.target.id == "contenedorPiezas"))
        return false;
    else
        return true;
}

/**
 * Función que se ejecuta cuando un elemento arrastrable se suelta sobre el elemento desde del que se llama.
 **/
function drop(e){
    e.preventDefault(); // Evita que se ejecute la accion por defecto del elemento soltado.
    var elementoArrastrado = e.dataTransfer.getData("Text");
    e.target.appendChild(document.getElementById(elementoArrastrado)); // Coloca el elemento soltado sobre el elemento desde el que se llamo esta funcion
    comprobarPuzzle();
}

function comprobarPuzzle(){
    var cont=0;
    if((document.getElementById('pieza1').parentNode.id=='uno') &&
        (document.getElementById('pieza2').parentNode.id=='dos') &&
        (document.getElementById('pieza3').parentNode.id=='tres'))
    {
        alert('Felicidades,ha completado correctamente.');
    }
    if(document.getElementById('pieza1').parentNode.id=='uno')
    {
        cont++;
    }
    if(document.getElementById('pieza2').parentNode.id=='dos')
    {
        cont++;
    }
    if(document.getElementById('pieza3').parentNode.id=='tres')
    {
        cont++;
    }
    document.querySelector('.puzzleresp').innerHTML = cont;
    document.getElementById("puzzleresp").value = cont;
}

/**
 * Muestra un mensaje de advertencia si el navegador no soporta Drag & Drop. (En Windows no lo soportan ni IE ni Safari)
 **/
function comprobarnavegador() {
    if(
        (navigator.userAgent.toLowerCase().indexOf('msie ') > -1) ||
        ((navigator.userAgent.toLowerCase().indexOf('safari') > -1) && (navigator.userAgent.toLowerCase().indexOf('chrome') == -1)))
    {
        alert("Tu navegador no soporta correctamente las funciones de la pregunta. Prueba con otro navegador.");
    }

}
/*******************************************************************************************************************/
/*Pregunta 25*/
$(function(){
//Nos aseguramos que estén definidas
//algunas funciones básicas
    window.URL = window.URL || window.webkitURL;
    navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia ||
    function() {
        alert('Su navegador no soporta navigator.getUserMedia().');
    };

//Este objeto guardará algunos datos sobre la cámara
    window.datosVideo = {
        'StreamVideo': null,
        'url': null
    };

    jQuery('#botonIniciar').on('click', function(e) {

        //Pedimos al navegador que nos da acceso a
        //algún dispositivo de video (la webcam)
        navigator.getUserMedia({
            'audio': false,
            'video': true
        }, function(streamVideo) {
            datosVideo.StreamVideo = streamVideo;
            datosVideo.url = window.URL.createObjectURL(streamVideo);
            jQuery('#camara').attr('src', datosVideo.url);

        }, function() {
            alert('No fue posible obtener acceso a la cámara.');
        });

    });

    jQuery('#botonDetener').on('click', function(e) {

        if (datosVideo.StreamVideo) {
            datosVideo.StreamVideo.stop();
            window.URL.revokeObjectURL(datosVideo.url);
        }

    });
    function ponerfoto(){
        var oCamara, oFoto, oContexto, w, h;

        oCamara = jQuery('#camara');
        oFoto = jQuery('#foto1');
        w = oCamara.width();
        h = oCamara.height();
        oFoto.attr({
            'width': w,
            'height': h
        });
        oContexto = oFoto[0].getContext('2d');
        oContexto.drawImage(oCamara[0], 0, 0, w, h);
        setTimeout(ponerfoto2, 2000);
    }

    function ponerfoto2(){
        var oCamara, oFoto, oContexto, w, h;

        oCamara = jQuery('#camara');
        oFoto = jQuery('#foto2');
        w = oCamara.width();
        h = oCamara.height();
        oFoto.attr({
            'width': w,
            'height': h
        });
        oContexto = oFoto[0].getContext('2d');
        oContexto.drawImage(oCamara[0], 0, 0, w, h);
        setTimeout(compararFotos,500);
    }
    function onComplete(data){
        var diffImage = new Image();
        diffImage.src = data.getImageDataUrl();

        if(data.misMatchPercentage == 0){
            $('#thesame').show();
            $('#diff-results').hide();
        } else {
            $('#mismatch').text(data.misMatchPercentage);
            $("#porcentaje").val(data.misMatchPercentage);
            if(!data.isSameDimensions){
                $('#differentdimensions').show();
            } else {
                $('#differentdimensions').hide();
            }
            $('#diff-results').show();
            $('#thesame').hide();
        }
    }
    function compararFotos()
    {
        /************/
        var canvas1 = document.getElementById("foto1");
        var ctx=canvas1.getContext("2d");
        //draw a red box
        ctx.fillStyle="#FF0000";
        ctx.fillRect(10,10,30,30);
        var url1 = canvas1.toDataURL();
        /************************/
        var canvas2 = document.getElementById("foto2");
        var ctx2=canvas2.getContext("2d");
        //draw a red box
        ctx2.fillStyle="#FF0000";
        ctx2.fillRect(10,10,30,30);
        var url2 = canvas2.toDataURL();
        /************************/
        var file1=url1;
        var file2=url2;
        var diff = resemble(file1).compareTo(file2).ignoreColors().onComplete(function(data){
            console.log(data);
            onComplete(data);
        });
    }
    jQuery('#botonFoto').on('click', function(e) {
        ponerfoto();
    });
});

/*******************************************************************************************************************/
/*Pregunta 18*/
var orden;
var intentos;
var puntaje;
var combinacionjugador = Array(5);
var j;
var activar=true;
var activado=false;
var espera=0;
/*
 $(document).ready(function(){
 $("p").hover(function(){
 $(this).css("background-color", "yellow");
 }, function(){
 $(this).css("background-color", "pink");
 });
 });

 $( "button.fade" ).hover(function() {
 $( this ).fadeOut( 100 );
 $( this ).fadeIn( 500 );
 });
 */
function fade(element) {
    var op = 1;  // initial opacity
    var timer = setInterval(function () {
        if (op <= 0.1){
            clearInterval(timer);
            element.style.display = 'none';
        }
        element.style.opacity = op;
        element.style.filter = 'alpha(opacity=' + op * 100 + ")";
        op -= op * 0.5;
    }, 50);
}
function unfade(element) {
    var op = 0.1;  // initial opacity
    element.style.display = 'block';
    var timer = setInterval(function () {
        if (op >= 1){
            clearInterval(timer);
        }
        element.style.opacity = op;
        element.style.filter = 'alpha(opacity=' + op * 10 + ")";
        op += op * 1;
        console.log("op",op);
    }, 1000);
}
function limpiararray()
{
    for(i=0;i<6;i++){
        combinacionjugador[i]=0;
    }
}
function presionado(id)
{
    if(activado) {
        espera++;
        document.getElementById("espera").innerHTML = "ESPERE!!!";
        document.getElementById("espera").style.color="red";
        if(espera==1) {
            setTimeout(function () {
                evaluarVideo(id);
            }, 3000);

            var elemento =
                document.getElementById(id);
            fade(elemento);
            setTimeout(function () {
                unfade(elemento);
            }, 3000);
        }
    }

}
function evaluarVideo(id){
    if((intentos<3)||(orden==7))
    {
        if (orden == 6)
        {
            combinacionjugador[j] = id;
            j++;
            if(j==3)
            {
                console.log(combinacionjugador[0]);
                console.log(combinacionjugador[1]);
                if (((combinacionjugador[0] == "CirculoPequenho")&&(combinacionjugador[1] == "CirculoGrande")&&(combinacionjugador[2]=="CuadradoPequenho"))||
                    ((combinacionjugador[1] == "CirculoPequenho")&&(combinacionjugador[0] == "CirculoGrande")&&(combinacionjugador[2]=="CuadradoPequenho"))||
                    ((combinacionjugador[2] == "CirculoPequenho")&&(combinacionjugador[1] == "CirculoGrande")&&(combinacionjugador[0]=="CuadradoPequenho"))||
                    ((combinacionjugador[2] == "CirculoPequenho")&&(combinacionjugador[0] == "CirculoGrande")&&(combinacionjugador[1]=="CuadradoPequenho"))||
                    ((combinacionjugador[1] == "CirculoPequenho")&&(combinacionjugador[2] == "CirculoGrande")&&(combinacionjugador[0]=="CuadradoPequenho"))||
                    ((combinacionjugador[0] == "CirculoPequenho")&&(combinacionjugador[2] == "CirculoGrande")&&(combinacionjugador[1]=="CuadradoPequenho")))
                {
                    orden++;
                    puntaje++;
                    document.getElementById("puntaje").innerHTML = "orden:"+orden+"\nintentos:"+intentos+"\npuntaje:"+puntaje;
                    j=0;
                    combinacion(orden);
                }
                else {
                    intentos++;
                    document.getElementById("puntaje").innerHTML = "orden:"+orden+"\nintentos:"+intentos+"\npuntaje:"+puntaje;
                    limpiararray();
                    j=0;
                }
            }

        }
        if (orden == 5)
        {
            combinacionjugador[j] = id;
            for (k = 0; k <= j; k++)
            {
                if (combinacionjugador[k] == "CirculoGrande")
                {
                    orden++;
                    puntaje++;
                    document.getElementById("puntaje").innerHTML = "orden:"+orden+"\nintentos:"+intentos+"\npuntaje:"+puntaje;
                    limpiararray();
                    j=0;
                    combinacion(orden);
                }
                else {
                    intentos++;
                    document.getElementById("puntaje").innerHTML = "orden:"+orden+"\nintentos:"+intentos+"\npuntaje:"+puntaje;
                    limpiararray();
                    j=0;
                }
            }
        }
        if (orden == 4)
        {
            combinacionjugador[j] = id;
            j++;
            if(j==2)
            {
                console.log(combinacionjugador[0]);
                console.log(combinacionjugador[1]);
                if ((combinacionjugador[0] == "CirculoPequenho")&&(combinacionjugador[1] == "CuadradoGrande"))
                {
                    orden++;
                    puntaje++;
                    document.getElementById("puntaje").innerHTML = "orden:"+orden+"\nintentos:"+intentos+"\npuntaje:"+puntaje;
                    j=0;
                    combinacion(orden);
                }
                else {
                    intentos++;
                    document.getElementById("puntaje").innerHTML = "orden:"+orden+"\nintentos:"+intentos+"\npuntaje:"+puntaje;
                    limpiararray();
                    j=0;
                }
            }

        }
        if (orden == 3)
        {
            combinacionjugador[j] = id;
            j++;
            if(j==2)
            {
                console.log(combinacionjugador[0]);
                console.log(combinacionjugador[1]);
                if (((combinacionjugador[0] == "CirculoPequenho")&&(combinacionjugador[1] == "CuadradoGrande"))||
                    ((combinacionjugador[1] == "CirculoPequenho")&&(combinacionjugador[0] == "CuadradoGrande")))
                {
                    orden++;
                    puntaje++;
                    document.getElementById("puntaje").innerHTML = "orden:"+orden+"\nintentos:"+intentos+"\npuntaje:"+puntaje;
                    j=0;
                    combinacion(orden);
                }
                else {
                    intentos++;
                    document.getElementById("puntaje").innerHTML = "orden:"+orden+"\nintentos:"+intentos+"\npuntaje:"+puntaje;
                    limpiararray();
                    j=0;
                }
            }

        }
        if (orden == 2)
        {
            combinacionjugador[j] = id;
            j++;
            if(j==2)
            {
                console.log(combinacionjugador[0]);
                console.log(combinacionjugador[1]);
                if (((combinacionjugador[0] == "CirculoPequenho")&&(combinacionjugador[1] == "CuadradoPequenho"))||
                    ((combinacionjugador[0] == "CuadradoPequenho")&&(combinacionjugador[1] == "CirculoPequenho")))
                {
                    orden++;
                    puntaje++;
                    document.getElementById("puntaje").innerHTML = "orden:"+orden+"\nintentos:"+intentos+"\npuntaje:"+puntaje;
                    j=0;
                    combinacion(orden);
                }
                else {
                    intentos++;
                    document.getElementById("puntaje").innerHTML = "orden:"+orden+"\nintentos:"+intentos+"\npuntaje:"+puntaje;
                    limpiararray();
                    j=0;
                }
            }

        }
        if (orden == 1)
        {
            combinacionjugador[j] = id;
            for (k = 0; k <= j; k++)
            {
                if (combinacionjugador[k] == "CuadradoPequenho")
                {
                    orden++;
                    puntaje++;
                    document.getElementById("puntaje").innerHTML = "orden:"+orden+"\nintentos:"+intentos+"\npuntaje:"+puntaje;
                    limpiararray();
                    j=0;
                    combinacion(orden);
                }
                else {
                    intentos++;
                    document.getElementById("puntaje").innerHTML = "orden:"+orden+"\nintentos:"+intentos+"\npuntaje:"+puntaje;
                    limpiararray();
                    j=0;
                }
            }
        }
    }
    else{
        activar=false;
        document.getElementById("orden").innerHTML ="";
        $("#tablecam").hide();
    }
    espera=0;
    document.getElementById("espera").innerHTML = "CONTINUE";
    document.getElementById("espera").style.color="blue";
}
function combinacion(orden){
    pintarorden(orden);
}
function iniciar()
{
    if(activar) {
        orden = 1;
        j = 0;
        intentos = 0;
        puntaje = 0;
        document.getElementById("puntaje").innerHTML = "orden:" + orden + "\nintentos:" + intentos + "\npuntaje:" + puntaje;
        combinacion(orden);
        activado=true;
    }else{
        document.getElementById("orden").innerHTML ="";
    }
}

function pintarorden(orden)
{
    if(orden==1){document.getElementById("orden").innerHTML = "1. Se&ntilde;ale el cuadrado peque&ntilde;o";}
    if(orden==2){
        document.getElementById("orden").innerHTML = "2. Se&ntilde;ale el circulo peque&ntilde;o y un cuadrado peque&ntilde;o";}
    if(orden==3){
        document.getElementById("orden").innerHTML = "3. Se&ntilde;ale el circulo peque&ntilde;o y un cuadrado grande";}
    if(orden==4){
        document.getElementById("orden").innerHTML = "4. Se&ntilde;ale el circulo peque&ntilde;o y luego los cuadrados grandes";}
    if(orden==5){
        document.getElementById("orden").innerHTML = "5. Se&ntilde;ale el circulo grande si hay un cuadrado peque&ntilde;o";}
    if(orden==6){
        document.getElementById("orden").innerHTML = "6. Ademas de se&ntilde;alar los circulos se&ntilde;ale el cuadrado peque&ntilde;o";}
}
/*******************************************************************************************************************/