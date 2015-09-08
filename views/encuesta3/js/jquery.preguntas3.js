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
var hover1 = createsoundbite('http://localhost:8080/mvc/views/encuesta3/audio/1.mp3');
var hover2 = createsoundbite('http://localhost:8080/mvc/views/encuesta3/audio/2.mp3');
var hover21 = createsoundbite('http://localhost:8080/mvc/views/encuesta3/audio/21.mp3');
var hover3 = createsoundbite('http://localhost:8080/mvc/views/encuesta3/audio/3.mp3');
var hover31 = createsoundbite('http://localhost:8080/mvc/views/encuesta3/audio/31.mp3');
var hover4 = createsoundbite('http://localhost:8080/mvc/views/encuesta3/audio/4.mp3');
var hover41 = createsoundbite('http://localhost:8080/mvc/views/encuesta3/audio/41.mp3');
var hover42 = createsoundbite('http://localhost:8080/mvc/views/encuesta3/audio/42.mp3');
var hover43 = createsoundbite('http://localhost:8080/mvc/views/encuesta3/audio/43.mp3');
var hover5 = createsoundbite('http://localhost:8080/mvc/views/encuesta3/audio/5.mp3');
var hover6 = createsoundbite('http://localhost:8080/mvc/views/encuesta3/audio/6.mp3');


//Nótese que se pueden añadir ficheros con otras extensiones como respaldo
//var click1 = createsoundbite('https://googledrive.com/host/0B3b6MFUtZc42dzVwTEdJM1JwZHc/click.mp3','http://k006.kiwi6.com/hotlink/dki95s7ty3/click.ogg');
//var click2 = createsoundbite('https://googledrive.com/host/0B3b6MFUtZc42dzVwTEdJM1JwZHc/clock.mp3');

/************************************************************************************************************/
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
        alert("Tu navegador no soporta correctamente las funciones Drag & Drop de HTML5. Prueba con otro navegador.");
    }

}
/***********************************************************************************************************************/