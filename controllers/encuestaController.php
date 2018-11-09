<?php
class encuestaController extends Controller
{
    private $_encuesta;
    private $_id_usuario;
    public function __construct() {
        parent::__construct();
        $this->_encuesta = $this->loadModel('encuesta');
        $this->_id_usuario = Session::get('id_usuario');
        if(($this->_encuesta->getNumEncuesta($this->_id_usuario))==false)$this->_NumEncuesta=0;
        $this->_NumEncuesta = ($this->_encuesta->getNumEncuesta($this->_id_usuario));
    }
    
    public function index()
    {
        //print_r($this->_view->getLayoutPositions());
        //exit;
        $this->_view->setJs(array('jquery.virtualpaginate'));
        $this->_view->setJs(array('jquery.ini'));
        $this->_view->setJs(array('jquery-latest.min'));
        $this->_view->setJs(array('jquery.preguntas'));
        $this->_view->setJs(array('main'));
//        $this->_view->setJs(array('jquery-1.8.3'));
        $this->_view->setLinkPlugin(array('encuesta/bower_components/polymer/polymer'));
        $this->_view->setLinkPlugin(array('encuesta/elements/speech-input'));
        $this->_view->assign('titulo', 'EDM');
        //$this->_view->assign('widget', $this->_view->widget('menu', 'getMenu'));
        $this->_view->renderizar('index', 'encuesta');
    }
    /*Pregunta 1*/
    public function pregunta1()
    {
        //$this->_acl->acceso('nuevo_post'); lista de acceso
        $cont = 0;
        
        if($this->getInt('guardar') == 1){
            $this->_view->assign('datos', $_POST);
            /*orden 1*/
            //date ("Y") =  Año actual con 4 dígitos, ej 2013 date("y")= Año actual con 2 dígitos, ej 13
            if($this->getPostParam('111') == date("Y") || $this->getPostParam('111') == date("y"))
            {
                $cont++;
            }
            /*orden 2*/
            //date("H")= Horario de 24 horas con ceros, de 01 a 23
            $hora = substr($this->getPostParam('112'),0,2);
            date_default_timezone_set("America/La_Paz");
            if($hora == date("H"))
            {
                $cont++;
            }
            /*orden 3*/
            //date("d")= Día del mes con 2 dígitos, y con ceros iniciales, de 01 a 31
            $fecha=(string)$this->getPostParam('113');
            if($fecha == date("d"))
            {
                $cont++;
            }
            /*orden 4*/
            //date("n")=Mes actual en digitos sin 0 inicial, de 1 a 12
            $a[1] = "enero"; 
            $a[2] = "febrero"; 
            $a[3] = "marzo"; 
            $a[4] = "abril"; 
            $a[5] = "mayo"; 
            $a[6] = "junio"; 
            $a[7] = "julio"; 
            $a[8] = "agosto";
            $a[9] = "septiembre";
            $a[10] = "octubre";
            $a[11] = "noviembre";
            $a[12] = "diciembre";
            $mes = strtolower($this->getPostParam('114'));
            if($mes == $a[date("n")] || $this->getPostParam('114')==date("m"))
            {
                $cont++;
            }
            /*orden 5*/
            $d[1] = "lunes"; 
            $d[2] = "martes"; 
            $d[3] = "miercoles"; 
            $d[4] = "jueves"; 
            $d[5] = "viernes"; 
            $d[6] = "sabado"; 
            $d[7] = "domingo"; 
            $diasemana = strtolower($this->getPostParam('115'));
            if($diasemana == $d[date('N')])
            {
                $cont++;
            }
            if($cont == 5)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,1,1,$this->_id_usuario);
            }
            if($cont < 5 && $cont > 2)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,1,2,$this->_id_usuario);
            }
            if($cont > 0 && $cont < 3)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,1,3,$this->_id_usuario);
            }
            if($cont==0)
            {
                 $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,1,4,$this->_id_usuario);
            }
             
             $this->redireccionar('encuesta');
             
        }       
       
        $this->_view->renderizar('index', 'encuesta');     
    }
    /*Pregunta 2*/
    public function pregunta2()
    {

            /*
        // Con esta línea obtenemos nuestra IP externa
            $extip = getenv("REMOTE_ADDR");
            // tambien podriamos usar esta para obtenera la ip externa
            // $extip = $_SERVER['REMOTE_ADDR'];
            $url = 'http://api.hostip.info/get_html.php?ip='.$extip;
            // Usamos Curl para obtener los resultados de la peticion a Hostip.info
            function getRemoteFile($url, $timeout = 10) {
              $ch = curl_init();
              curl_setopt ($ch, CURLOPT_URL, $url);
              curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
              curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
              $file_contents = curl_exec($ch);
              curl_close($ch);
              return ($file_contents) ? $file_contents : FALSE;
            }
            $info = getRemoteFile($url);
            // Extraemos el Pais
            preg_match("/Country: (.*)\n/", $info, $out);
            $paisdetectado=$out[1];
            // Extraemos la Ciudad
            preg_match("/City: (.*)\n/", $info, $out);
            $ciudaddetectado=$out[1];
            // Extraemos la IP externa
            preg_match("/IP: (.*)\n/", $info, $out);
            $ip=$out[1];
            */
            $cont=0;
            $lugar = strtolower($this->getPostParam('221'));
            $piso = strtolower($this->getPostParam('222'));
            $espacio = strtolower($this->getPostParam('223'));
            $ciudad = strtolower($this->getPostParam('224'));
            $pais = strtolower($this->getPostParam('225'));

        if($this->getInt('guardar') == 1)
        {
            $this->_view->assign('datos', $_POST);

                /*Pregunta 1*/
                if(($lugar=='av. rosario n 13')||($lugar=='av rosario n 13')||($lugar=='av rosario n13')||(($lugar=='av. rosario n13')))
                {
                    $cont++;
                }
                /*Pregunta 2*/
                if(($piso=='segundo')||($piso=='segundo piso')||($piso=='2'))
                {
                    $cont++;
                }
                /*Pregunta 3*/
                if(($espacio=='sala')||($espacio=='la sala')||($espacio=='en la sala'))
                {
                    $cont++;
                }
                /*Pregunta 4*/
                if(($ciudad == 'santa cruz')||($ciudad=="santa cruz de la sierra")||($ciudad=='sta cruz')||($ciudad == 'en santa cruz')||($ciudad=="en santa cruz de la sierra")||($ciudad=='en sta cruz'))
                {
                    $cont++;
                }
                /*Pregunta 5*/
                if(($pais == 'bolivia')||($pais=='en bolivia'))
                {
                    $cont++;
                }
        /*Contabiliza para saber si es verde, amarillo o rojo segun el puntaje obtenido*/

            if($cont==5)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,2,1,$this->_id_usuario);
            }
            if($cont <=4 && $cont>=3)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,2,2,$this->_id_usuario);
            }
            if($cont <=2 && $cont>=1)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,2,3,$this->_id_usuario);
            }
             if($cont==0)
            {
                 $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,2,4,$this->_id_usuario);
            }

            $this->redireccionar('encuesta');  
        }    
        
        $this->_view->renderizar('index', 'encuesta');     
    }
    /*Pregunta 3*/
    public function pregunta3()
    {
        /*Obtenemos el nombre asociado a ese id*/
        $nombre = $this->_encuesta->getNombre($this->_id_usuario);
        $nombreparam= strtolower($nombre);  
        /*Obtenemos el apellido asociado a ese id*/
        $apellido = $this->_encuesta->getApellido($this->_id_usuario);
        $apellidoparam= strtolower($apellido);
        /*Obtenemos la fecha de nacimiento asociado a ese id*/
        $fechanac = $this->_encuesta->getFechaNac($this->_id_usuario);
        $fechanacparam = substr($fechanac, 0 , 4);
        $edad = date ("Y") - $fechanacparam;

        /*Inicializamos el contador de puntaje para la pregunta*/  
        $cont = 0;
        
        if($this->getInt('guardar') == 1){
            $this->_view->assign('datos', $_POST);
            
            /*Pregunta 1*/
            if(strtolower($this->getPostParam('331')) == $nombreparam )
            {
                $cont++;
            }

            /*Pregunta 2*/
            
            if(strtolower($this->getPostParam('332')) == $apellidoparam )
            {
                $cont++;
            }
            
            /*Pregunta 3*/
            if($this->getPostParam('333') == $edad)
            {
                $cont++;
            }

            /*Contabiliza para saber si es verde, amarillo o rojo segun el puntaje obtenido*/

            if($cont == 3)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,3,1,$this->_id_usuario);
            }
            if($cont == 2)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,3,2,$this->_id_usuario);
            }
            if($cont == 1)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,3,3,$this->_id_usuario);
            }
             if($cont==0)
            {
                 $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,3,4,$this->_id_usuario);
            }

            $this->redireccionar('encuesta');
        }       
        
        $this->_view->renderizar('index', 'encuesta');
    }
    /*Pregunta 4*/
    public function pregunta4()
    {
        $cont=0;
        /*Guardo la fecha del datetimepicker y obtengo el mes y el dia */
        $fecha = $this->getPostParam('441');
        $mes = substr($fecha, 5 , 2);
        $dia = substr($fecha, -2,2);
        if($this->getInt('guardar') == 1)
        {
            $this->_view->assign('datos', $_POST);

                /*Pregunta 1*/
                if(($mes == 12 ) && ($dia == 25))
                {
                    $cont++;
                }
                /*Pregunta 2*/
                if($this->getPostParam('442')=='v')
                {
                    $cont++;
                }
                /*Pregunta 3*/
                if($this->getPostParam('443')==31)
                {
                    $cont++;
                }
                /*Pregunta 4*/
                if($this->getPostParam('444')=='v')
                {
                    $cont++;
                }
                /*Pregunta 5*/
                if($this->getPostParam('445')=='v')
                {
                    $cont++;
                }
                /*Pregunta 6*/
                if($this->getPostParam('446')==9)
                {
                    $cont++;
                }
                /*Pregunta 7*/
                if($this->getPostParam('447')=='v')
                {
                    $cont++;
                }

        /*Contabiliza para saber si es verde, amarillo o rojo segun el puntaje obtenido*/

            if($cont <= 7 && $cont>=6)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,4,1,$this->_id_usuario);
            }
            if($cont <=5 && $cont>=4)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,4,2,$this->_id_usuario);
            }
            if($cont <=3 && $cont>=1)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,4,3,$this->_id_usuario);
            }
             if($cont==0)
            {
                 $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,4,4,$this->_id_usuario);
            }

            $this->redireccionar('encuesta');  
        }    
        
        $this->_view->renderizar('index', 'encuesta');

    }
    /*Pregunta 5*/
    public function pregunta5()
    {
            $cont=0;
            /*vamos a guardar los meses*/
            $m[0] = "enero"; 
            $m[1] = "febrero"; 
            $m[2] = "marzo"; 
            $m[3] = "abril"; 
            $m[4] = "mayo"; 
            $m[5] = "junio"; 
            $m[6] = "julio";
            $m[7] = "agosto"; 
            $m[8] = "septiembre"; 
            $m[9] = "octubre"; 
            $m[10] = "noviembre"; 
            $m[11] = "diciembre"; 
            if($this->getInt('guardar') == 1)
            {
                $this->_view->assign('datos', $_POST);
                $meses =  $this->getPostParam('text1');
                $cadena =explode(" ",$meses);
                $tamanho = count($cadena); 
                $i=0;
                $j=0;
                while($i<$tamanho)
                {
                    if(strcmp($cadena[$i],$m[$i])==0)
                    {
                            $cont++;
                    }
                    $i++;
                }
                if($cont>=11 && $cont<=12)
                {
                    $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,6,1,$this->_id_usuario);
                }
                if($cont>=7 && $cont<=10)
                {
                    $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,6,2,$this->_id_usuario);
                }
                if($cont>=1 && $cont<=6)
                {
                    $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,6,3,$this->_id_usuario);
                }
                 if($cont==0)
                {
                     $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,6,4,$this->_id_usuario);
                }

                 $this->redireccionar('encuesta');  
            }

         $this->_view->renderizar('index', 'encuesta');
    }
    /*Pregunta 6*/
    public function pregunta6()
    {
            $cont=0;
            /*vamos a guardar los meses*/
                $m[11] = "enero"; 
                $m[10] = "febrero"; 
                $m[9] = "marzo"; 
                $m[8] = "abril"; 
                $m[7] = "mayo"; 
                $m[6] = "junio"; 
                $m[5] = "julio";
                $m[4] = "agosto"; 
                $m[3] = "septiembre"; 
                $m[2] = "octubre"; 
                $m[1] = "noviembre"; 
                $m[0] = "diciembre"; 
            if($this->getInt('guardar') == 1)
            {
                $this->_view->assign('datos', $_POST);
                $meses =  $this->getPostParam('text2');
                $cadena =explode(" ",$meses); 
                $tamanho = count($cadena); 
                $i=0;
                $j=0;
                while($i<$tamanho)
                {
                    if(strcmp($cadena[$i], $m[$i])==0)
                    {
                        $cont++;
                    }
                    $i++;
                }
                if($cont>=10 && $cont<=12)
                {
                    $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,5,1,$this->_id_usuario);
                }
                if($cont>=6 && $cont<=9)
                {
                    $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,5,2,$this->_id_usuario);
                }
                if($cont>=1 && $cont<=5)
                {
                    $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,5,3,$this->_id_usuario);
                }
                 if($cont==0)
                {
                     $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,5,4,$this->_id_usuario);
                }
                 $this->redireccionar('encuesta');  
             }
            $this->_view->renderizar('index', 'encuesta');

    }
    /*Pregunta 7*/
    public function pregunta7()
    {
          $cont=0;
            /*Lista 1*/
                $l1[0] = "gato"; 
                $l1[1] = "pera";
                $l1[2] = "mano";
            /*Lista 2*/ 
                $l2[0] = "vaca";
                $l2[1] = "codo";
                $l2[2] = "frutilla";
               
            if($this->getInt('guardar') == 1)
            {
                $this->_view->assign('datos', $_POST);
                $lista1 =  $this->getPostParam('text3');
                $lista2 =  $this->getPostParam('text4');
                $cadena1 =explode(" ",$lista1);
                $cadena2 =explode(" ",$lista2); 
                $tamanho1 = count($cadena1);
                $tamanho2 = count($cadena2); 
                $i=0;
                $j=0;
                while($i<$tamanho1)
                {
                    if(strcmp($cadena1[$i], $l1[$i])==0)
                    {
                        $cont++;
                    }
                    $i++;
                }
                while($j<$tamanho2)
                {
                    if(strcmp($cadena2[$j], $l2[$j])==0)
                    {
                        $cont++;
                    }
                    $j++;
                }
                if($cont>=5 && $cont<=6)
                {
                    $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,12,1,$this->_id_usuario);
                }
                if($cont>=3 && $cont<=4)
                {
                    $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,12,2,$this->_id_usuario);
                }
                if($cont>=1 && $cont<=2)
                {
                    $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,12,3,$this->_id_usuario);
                }
                 if($cont==0)
                {
                     $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,12,4,$this->_id_usuario);
                }
                 $this->redireccionar('encuesta');  
             }
            $this->_view->renderizar('index', 'encuesta');
    }
    /*Pregunta 8*/
    public function pregunta8()
    {
          $cont=0;
                $l[0] = "gato"; 
                $l[1] = "pera";
                $l[2] = "mano"; 
                $l[3] = "vaca";
                $l[4] = "codo";
                $l[5] = "frutilla";
               
            if($this->getInt('guardar') == 1)
            {
                $this->_view->assign('datos', $_POST);
                $lista1 =  $this->getPostParam('text5');
                $lista2 =  $this->getPostParam('text6');
                $lista3 =  $this->getPostParam('text7');
                
                $cadena1 =explode(" ",$lista1);
                $cadena2 =explode(" ",$lista2);
                $cadena3 =explode(" ",$lista3);
                
                $tamanho1 = count($cadena1);
                $tamanho2 = count($cadena2);
                $tamanho3 = count($cadena3);

                $i=0;
                $j=0;
                $k=0;

                while($i<$tamanho1)
                {
                    if(strcmp($cadena1[$i], $l[$i])==0)
                    {
                        $cont++;
                    }
                    $i++;
                }

                while($j<$tamanho2)
                {
                    if(strcmp($cadena2[$j], $l[$j])==0)
                    {
                        $cont++;
                    }
                    $j++;
                }

                while($k<$tamanho3)
                {
                    if(strcmp($cadena3[$k], $l[$k])==0)
                    {
                        $cont++;
                    }
                    $k++;
                }
                if($cont>=15 && $cont<=18)
                {
                    $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,10,1,$this->_id_usuario);
                }
                if($cont>=9 && $cont<=14)
                {
                    $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,10,2,$this->_id_usuario);
                }
                if($cont>=1 && $cont<=8)
                {
                    $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,10,3,$this->_id_usuario);
                }
                 if($cont==0)
                {
                     $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,10,4,$this->_id_usuario);
                }
                 $this->redireccionar('encuesta');  
             }
            $this->_view->renderizar('index', 'encuesta');
    }
    /*Pregunta 9*/
    public function pregunta9()
    {
            $cont=0;
            $m[0] = "gato"; 
            $m[1] = "pera";
            $m[2] = "mano"; 
            $m[3] = "vaca";
            $m[4] = "codo";
            $m[5] = "frutilla";

            if($this->getInt('guardar')==1)
            {
                $lista =   $this->getPostParam('text9');
                $lista2 =  $this->getPostParam('text10');
                $cadena =explode(" ",$lista);
                $tamanho = count($cadena);
                $cadena2 =explode(" ",$lista2);
                $tamanho2 = count($cadena2);
                $i=0;
                $j=0;
                while($i<$tamanho)
                {
                    while($j<6)
                    {
                        if(strcmp($cadena[$i],$m[$j])==0)
                        {

                            $cont++;
                        }
                        $j++;
                    }
                    $j=0;
                    $i++;
                }
                $i=0;
                $j=0;
                while($i<$tamanho2)
                {
                    while($j<6)
                    {
                        if(strcmp($cadena2[$i],$m[$j])==0)
                        {

                            $cont++;
                        }
                        $j++;
                    }
                    $j=0;
                    $i++;
                }
              if($cont>=10 && $cont<=12)
                {
                    $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,14,1,$this->_id_usuario);
                }
                if($cont>=6 && $cont<=9)
                {
                    $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,14,2,$this->_id_usuario);
                }
                if($cont>=1 && $cont<=5)
                {
                    $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,14,3,$this->_id_usuario);
                }
                 if($cont==0)
                {
                     $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,14,4,$this->_id_usuario);
                }
                 $this->redireccionar('encuesta');  
             }
            $this->_view->renderizar('index', 'encuesta');
    }
    /*Pregunta 10*/
    public function pregunta10()
    {
            if($this->getInt('guardar') == 1)
            {
                $miVariable =  $_COOKIE["variable"];
                $cadena1 =explode(" ",$miVariable);
                $tamanho1 = count($cadena1);
                $i=0;
                $cont=0;
                while($i<$tamanho1)
                {
                    if((strcmp($cadena1[$i], 'A10')==0)||(strcmp($cadena1[$i], 'B16')==0)||(strcmp($cadena1[$i], 'C1')==0)||(strcmp($cadena1[$i], 'C8')==0)||(strcmp($cadena1[$i], 'E7')==0)||(strcmp($cadena1[$i], 'G3')==0)||(strcmp($cadena1[$i], 'H12')==0)||(strcmp($cadena1[$i], 'J1')==0)||(strcmp($cadena1[$i], 'L2')==0)||(strcmp($cadena1[$i], 'N14')==0)||(strcmp($cadena1[$i], 'N16')==0)||(strcmp($cadena1[$i], 'O7')==0)||(strcmp($cadena1[$i], 'O12')==0)||(strcmp($cadena1[$i], 'P3')==0)||(strcmp($cadena1[$i], 'P10')==0))
                    {
                        $cont++;
                    }
                    $i++;
                }
                if($cont>=12 && $cont<=15)
                {
                    $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,8,1,$this->_id_usuario);
                }
                if($cont>=7 && $cont<=11)
                {
                    $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,8,2,$this->_id_usuario);
                }
                if($cont>=1 && $cont<=6)
                {
                    $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,8,3,$this->_id_usuario);
                }
                 if($cont==0)
                {
                     $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,8,4,$this->_id_usuario);
                }
                 $this->redireccionar('encuesta');  
             }
            $this->_view->renderizar('index', 'encuesta');
    }
    /*Pregunta 11*/
     public function pregunta11()
    {
            if($this->getInt('guardar') == 1)
            {
                $cont=  $this->getPostParam('respu');
                if($cont==3)
                {
                    $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,9,1,$this->_id_usuario);
                }
                if($cont==2)
                {
                    $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,9,2,$this->_id_usuario);
                }
                if($cont==1)
                {
                    $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,9,3,$this->_id_usuario);
                }
                 if($cont==0)
                {
                     $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,9,4,$this->_id_usuario);
                }
                 $this->redireccionar('encuesta');  
             }
            $this->_view->renderizar('index', 'encuesta');
    }
    /*Pregunta 12 NO REALIZADO*/ 
    public function pregunta12()
    {
        if($this->getInt('guardar') == 1)
        {
            $cont=  $this->getPostParam('filaresp');
            if($cont>=9 && $cont<=10)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,7,1,$this->_id_usuario);
            }
            if($cont>=6 && $cont<=8)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,7,2,$this->_id_usuario);
            }
            if($cont>=1 && $cont<=5)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,7,3,$this->_id_usuario);
            }
            if($cont==0)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,7,4,$this->_id_usuario);
            }
            $this->redireccionar('encuesta');
        }
        $this->_view->renderizar('index', 'encuesta');
    }
    /*Pregunta 13*/
    public function pregunta13()
    {
        if($this->getInt('guardar') == 1)
        {
            $cont=0;
            if($cont>=9 && $cont<=10)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,11,1,$this->_id_usuario);
            }
            if($cont>=6 && $cont<=8)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,11,2,$this->_id_usuario);
            }
            if($cont>=1 && $cont<=5)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,11,3,$this->_id_usuario);
            }
            if($cont==0)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,11,4,$this->_id_usuario);
            }
            $this->redireccionar('encuesta');
        }
        $this->_view->renderizar('index', 'encuesta');
    }
    /*Pregunta 14*/
    public function pregunta14()
    {
        $cont=0;
        $m[0] = "5";
        $m[1] = "15";
        $m[2] = "6";
        $m[3] = "8";
        $m[4] = "27";
        $m[5] = "11";
        $m[6] = "20";
        $m[7] = "30";

        if($this->getInt('guardar')==1)
        {
            $lista =   $this->getPostParam('text11');
            $cadena =explode(" ",$lista);
            $tamanho = count($cadena);
            $i=0;
            $j=0;
            while($i<$tamanho)
            {
                while($j<8)
                {
                    if(strcmp($cadena[$i],$m[$j])==0)
                    {

                        $cont++;
                    }
                    $j++;
                }
                $j=0;
                $i++;
            }
            if($cont>=7 && $cont<=8)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,13,1,$this->_id_usuario);
            }
            if($cont>=5 && $cont<=6)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,13,2,$this->_id_usuario);
            }
            if($cont>=1 && $cont<=4)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,13,3,$this->_id_usuario);
            }
            if($cont==0)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,13,4,$this->_id_usuario);
            }
            $this->redireccionar('encuesta');
        }
        $this->_view->renderizar('index', 'encuesta');
    }
    /*Pregunta 15*/
    public function pregunta15()
    {
        $cont=0;
        $m[0] = "20";
        $m[1] = "juan";
        $m[2] = "analía";
        $m[3] = "carlos";
        $m[4] = "susana";
        $m[5] = "ernesto";
        $m[6] = "federico";
        $m[7] = "alejandra";
        $m[8] = "marcela";

        if($this->getInt('guardar')==1)
        {
            $lista =   $this->getPostParam('text12');
            $cadena =explode(" ",$lista);
            $tamanho = count($cadena);
            $i=0;
            $j=0;
            while($i<$tamanho)
            {
                while($j<9)
                {
                    if(strcmp($cadena[$i],$m[$j])==0)
                    {

                        $cont++;
                    }
                    $j++;
                }
                $j=0;
                $i++;
            }
            if($cont>=6 && $cont<=8)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,15,1,$this->_id_usuario);
            }
            if($cont>=4 && $cont<=5)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,15,2,$this->_id_usuario);
            }
            if($cont>=1 && $cont<=3)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,15,3,$this->_id_usuario);
            }
            if($cont==0)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,15,4,$this->_id_usuario);
            }
            $this->redireccionar('encuesta');
        }
        $this->_view->renderizar('index', 'encuesta');
    }
    /*Pregunta 16*/
    public function pregunta16()
    {
        $cont=0;
        $m[0] = "chivo";
        $m[1] = "dedo";
        $m[2] = "reloj";
        $m[3] = "guitarra";
        $m[4] = "llave";
        $m[5] = "bicicleta";
        $m[6] = "trompeta";
        $m[7] = "víbora";
        $m[8] = "serpiente";

        if($this->getInt('guardar')==1)
        {
            $lista =   $this->getPostParam('text13');
            $cadena =explode(" ",$lista);
            $tamanho = count($cadena);
            $i=0;
            $j=0;
            while($i<$tamanho)
            {
                while($j<9)
                {
                    if(strcmp($cadena[$i],$m[$j])==0)
                    {

                        $cont++;
                    }
                    $j++;
                }
                $j=0;
                $i++;
            }
            if($cont>=6 && $cont<=8)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,16,1,$this->_id_usuario);
            }
            if($cont>=4 && $cont<=5)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,16,2,$this->_id_usuario);
            }
            if($cont>=1 && $cont<=3)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,16,3,$this->_id_usuario);
            }
            if($cont==0)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,16,4,$this->_id_usuario);
            }
            $this->redireccionar('encuesta');
        }
        $this->_view->renderizar('index', 'encuesta');
    }
    /*Pregunta 17*/
    public function pregunta17()
    {
        $cont=0;
        $m[0] = "sol";
        $m[1] = "ventana";
        $m[2] = "el niño llora";
        $m[3] = "el hombre camina por la calle";
        if($this->getInt('guardar')==1) {
            $lista[0] = $this->getPostParam('text14');
            $lista[1] = $this->getPostParam('text15');
            $lista[2] = $this->getPostParam('text16');
            $lista[3] = $this->getPostParam('text17');
            for ($i = 0; $i < 4;$i++)
            {
                $aux1= $lista[$i];
                $aux2=$m[$i];
                //print_r($lista[$i]);
                //print_r($m[$i]);
                if(strcmp($aux1,$aux2)==0)
                {
                     $cont++;
                }
            }
            if($cont==3 || $cont==4)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,17,1,$this->_id_usuario);
            }
            if($cont==2)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,17,2,$this->_id_usuario);
            }
            if($cont==1)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,17,3,$this->_id_usuario);
            }
            if($cont==0)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,17,4,$this->_id_usuario);
            }
            $this->redireccionar('encuesta');
        }
        $this->_view->renderizar('index', 'encuesta');
    }
    /*Pregunta 18*/
    public function pregunta18()
    {
        if($this->getInt('guardar') == 1)
        {
            $cont= 0;
            if($cont>=9 && $cont<=10)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,18,1,$this->_id_usuario);
            }
            if($cont>=6 && $cont<=8)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,18,2,$this->_id_usuario);
            }
            if($cont>=1 && $cont<=5)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,18,3,$this->_id_usuario);
            }
            if($cont==0)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,18,4,$this->_id_usuario);
            }
            $this->redireccionar('encuesta');
        }
        $this->_view->renderizar('index', 'encuesta');
    }
    /*Pregunta 19*/
    public function pregunta19()
    {
        $cont=0;
        $l[0] = "gato";
        $l[1] = "pera";
        $l[2] = "mano";
        $l[3] = "vaca";
        $l[4] = "codo";
        $l[5] = "frutilla";

        if($this->getInt('guardar') == 1)
        {
            $this->_view->assign('datos', $_POST);
            $lista1 =  $this->getPostParam('text18');

            $cadena1 =explode(" ",$lista1);

            $tamanho1 = count($cadena1);

            $i=0;

            while($i<$tamanho1)
            {
                if(strcmp($cadena1[$i], $l[$i])==0)
                {
                    $cont++;
                }
                $i++;
            }

            if($cont>=5 && $cont<=6)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,29,1,$this->_id_usuario);
            }
            if($cont>=3 && $cont<=4)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,29,2,$this->_id_usuario);
            }
            if($cont>=1 && $cont<=2)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,29,3,$this->_id_usuario);
            }
            if($cont==0)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,29,4,$this->_id_usuario);
            }
            $this->redireccionar('encuesta');
        }
        $this->_view->renderizar('index', 'encuesta');
    }
    /*Pregunta 20*/
    public function pregunta20()
    {
        $cont=0;
        $l[0] = "gato";
        $l[1] = "pera";
        $l[2] = "mano";
        $l[3] = "vaca";
        $l[4] = "codo";
        $l[5] = "frutilla";

        if($this->getInt('guardar') == 1)
        {
            $this->_view->assign('datos', $_POST);
            $lista1 =  $this->getPostParam('text19');

            $cadena1 =explode(" ",$lista1);

            $tamanho1 = count($cadena1);

            $i=0;

            while($i<$tamanho1)
            {
                if(strcmp($cadena1[$i], $l[$i])==0)
                {
                    $cont++;
                }
                $i++;
            }

            if($cont>=5 && $cont<=6)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,30,1,$this->_id_usuario);
            }
            if($cont>=3 && $cont<=4)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,30,2,$this->_id_usuario);
            }
            if($cont>=1 && $cont<=2)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,30,3,$this->_id_usuario);
            }
            if($cont==0)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,30,4,$this->_id_usuario);
            }
            $this->redireccionar('encuesta');
        }
        $this->_view->renderizar('index', 'encuesta');
    }
    /*Pregunta 21*/
    public function pregunta21()
    {
        $cont=0;
        if($this->getInt('guardar') == 1)
        {
            $this->_view->assign('datos', $_POST);
            for($i=1;$i<13;$i++)
            {
                $lista[$i] =  $this->getPostParam('21-'.$i);
            }
            $tamanho1 = count($lista);
            $i=1;
            while($i<=$tamanho1)
            {
                if($i==1 || $i==3 || $i==5 || $i==10 || $i==11 || $i==12) {
                    if ((strcmp($lista[$i], "v") == 0)) {
                        $cont++;
                    }
                }
                if($i==2 || $i==4 || $i==6 || $i==7 || $i==8 || $i==9){
                    if(strcmp($lista[$i],"f")==0){
                        $cont--;
                    }
                }
                $i++;
            }
            if($cont==5 || $cont==6)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,31,1,$this->_id_usuario);
            }
            if($cont==3 || $cont==4)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,31,2,$this->_id_usuario);
            }
            if($cont==1 || $cont==2 || $cont<0)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,31,3,$this->_id_usuario);
            }
            if($cont==0)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,31,4,$this->_id_usuario);
            }
            $this->redireccionar('encuesta');
        }
        $this->_view->renderizar('index', 'encuesta');
    }
    /*Pregunta 22*/
    public function pregunta22()
    {
        if($this->getInt('guardar') == 1)
        {
            $cont=  0;
            if($cont>=9 && $cont<=10)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,27,1,$this->_id_usuario);
            }
            if($cont>=6 && $cont<=8)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,27,2,$this->_id_usuario);
            }
            if($cont>=1 && $cont<=5)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,27,3,$this->_id_usuario);
            }
            if($cont==0)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,27,4,$this->_id_usuario);
            }
            $this->redireccionar('encuesta');
        }
        $this->_view->renderizar('index', 'encuesta');
    }
    /*Pregunta 23*/
    public function pregunta23()
    {
        $cont1=0;
        $cont2=0;
        $resp1='r';
        $resp2='r';
        if($this->getInt('guardar') == 1)
        {
            $this->_view->assign('datos', $_POST);
            $Animales =  $this->getPostParam('text20');
            $ConF =  $this->getPostParam('text21');
            $ListaAnimales =explode(" ",$Animales);
            $ListaConF =explode(" ",$ConF);
            $tamanho1 = count($ListaAnimales);
            $tamanho2 = count($ListaConF);
            $i=0;
            $j=0;
            while($i<$tamanho1)
            {
                if(($this->_encuesta->verificarAnimal($ListaAnimales[$i]))&&(!empty($ListaAnimales[$i])))
                {
                   $cont1++;
                }
                $i++;
            }
            /*Contabilizacion*/
            if($cont1>=16)
            {
                $resp1='v';
            }
            if($cont1>=8 && $cont1<=15)
            {
                $resp1='a';
            }
            if(($cont1>=1 && $cont1<=7)||($cont1==0))
            {
                $resp1='r';
            }
            /**/
            while($j<$tamanho2)
            {
                $letra = substr ($ListaConF[$j],0,1);
                if(($letra=='F')||($letra=='f'))
                {
                   $cont2++;
                }
                $j++;
            }
            /*Contabilizacion*/
            if($cont2>=12)
            {
                $resp2='v';
            }
            if($cont2>=7 && $cont2<=11)
            {
                $resp2='a';
            }
            if(($cont2>=1 && $cont2<=6) || ($cont2==0))
            {
                $resp2='r';
            }
            /**/
            if(($resp1=='v' && $resp2=='v')||($resp1=='a' && $resp2=='v'))
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,28,1,$this->_id_usuario);
            }
            if(($resp1=='a' && $resp2=='a')||($resp1=='r' && $resp2=='v')||($resp1=='r' && $resp2=='a'))
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,28,2,$this->_id_usuario);
            }
            if($resp1=='r' && $resp2=='r' && ($cont1!=0 || $cont2!=0))
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,28,3,$this->_id_usuario);
            }
            if($resp1=='r' && $resp2=='r' && $cont1==0 && $cont2==0)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,28,4,$this->_id_usuario);
            }
            $this->redireccionar('encuesta');
        }
        $this->_view->renderizar('index', 'encuesta');
    }
    /*Pregunta 24*/
    public function pregunta24()
    {
        $cont=0;
        $l[0] = "juan";
        $l[1] = "analía";
        $l[2] = "carlos";
        $l[3] = "susana";
        $l[4] = "ernesto";
        $l[5] = "federico";
        $l[6] = "alejandra";
        $l[7] = "marcela";

        if($this->getInt('guardar') == 1)
        {
            $this->_view->assign('datos', $_POST);
            $lista1 =  $this->getPostParam('text22');

            $cadena1 =explode(" ",$lista1);

            $tamanho1 = count($cadena1);

            $i=0;

            while($i<$tamanho1)
            {
                if(strcmp($cadena1[$i], $l[$i])==0)
                {
                    $cont++;
                }
                $i++;
            }

            if($cont>=6 && $cont<=8)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,19,1,$this->_id_usuario);
            }
            if($cont>=4 && $cont<=5)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,19,2,$this->_id_usuario);
            }
            if($cont>=1 && $cont<=3)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,19,3,$this->_id_usuario);
            }
            if($cont==0)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,19,4,$this->_id_usuario);
            }
            $this->redireccionar('encuesta');
        }
        $this->_view->renderizar('index', 'encuesta');
    }
    /*Pregunta 25*/
    public function pregunta25()
    {
        $cont=0;
        if($this->getInt('guardar') == 1)
        {
            $this->_view->assign('datos', $_POST);
            $lista =strtolower($this->getPostParam('text23'));
            $porcentaje=$this->getPostParam('porcentaje');
            if(strcmp($lista,"cierre los ojos")==0)
            {
                $cont++;
            }
            if(1.00<=$porcentaje && $porcentaje<=5.00)
            {
                $cont++;
            }
            if($cont==2)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,20,1,$this->_id_usuario);
            }
            if($cont==1)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,20,3,$this->_id_usuario);
            }
            if($cont==0)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,20,4,$this->_id_usuario);
            }
            $this->redireccionar('encuesta');
        }
        $this->_view->renderizar('index', 'encuesta');
    }
    /*Pregunta 26*/
    public function pregunta26()
    {
        if($this->getInt('guardar') == 1)
        {
            $cont=  0;
            if($cont>=9 && $cont<=10)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,21,1,$this->_id_usuario);
            }
            if($cont>=6 && $cont<=8)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,21,2,$this->_id_usuario);
            }
            if($cont>=1 && $cont<=5)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,21,3,$this->_id_usuario);
            }
            if($cont==0)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,21,4,$this->_id_usuario);
            }
            $this->redireccionar('encuesta');
        }
        $this->_view->renderizar('index', 'encuesta');
    }
    /*Pregunta 27*/
    public function pregunta27()
    {
        $cont=0;
        $l[0] = "las";
        $l[1] = "naranjas";
        $l[2] = "crecen";
        $l[3] = "en";
        $l[4] = "los";
        $l[5] = "árboles";

        if($this->getInt('guardar') == 1)
        {
            $this->_view->assign('datos', $_POST);
            $lista1 =strtolower($this->getPostParam('27'));
            $cadena1 =explode(" ",$lista1);
            $tamanho1 = count($cadena1);
            $i=0;
            while($i<$tamanho1)
            {
                if(strcmp($cadena1[$i], $l[$i])==0)
                {
                    $cont++;
                }
                $i++;
            }

            if($cont>=5 && $cont<=6)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,22,1,$this->_id_usuario);
            }
            if($cont>=3 && $cont<=4)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,22,2,$this->_id_usuario);
            }
            if($cont>=1 && $cont<=2)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,22,3,$this->_id_usuario);
            }
            if($cont==0)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,22,4,$this->_id_usuario);
            }
            $this->redireccionar('encuesta');
        }
        $this->_view->renderizar('index', 'encuesta');
    }
    /*Pregunta 28*/
    public function pregunta28()
    {
        $cont=0;
        $l[0] = "el";
        $l[1] = "perro";
        $l[2] = "camina";
        $l[3] = "por";
        $l[4] = "la";
        $l[5] = "calle";

        if($this->getInt('guardar') == 1)
        {
            $this->_view->assign('datos', $_POST);
            $lista1 =strtolower($this->getPostParam('28'));
            $cadena1 =explode(" ",$lista1);
            $tamanho1 = count($cadena1);
            $i=0;
            while($i<$tamanho1)
            {
                if(strcmp($cadena1[$i], $l[$i])==0)
                {
                    $cont++;
                }
                $i++;
            }

            if($cont>=5 && $cont<=6)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,23,1,$this->_id_usuario);
            }
            if($cont>=3 && $cont<=4)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,23,2,$this->_id_usuario);
            }
            if($cont>=1 && $cont<=2)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,23,3,$this->_id_usuario);
            }
            if($cont==0)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,23,4,$this->_id_usuario);
            }
            $this->redireccionar('encuesta');
        }
        $this->_view->renderizar('index', 'encuesta');
    }
    /*Pregunta 29*/
    public function pregunta29()
    {
        $cont=0;

        if($this->getInt('guardar') == 1)
        {
            $this->_view->assign('datos', $_POST);
            $fruta =  $this->getPostParam('291');
            $animal =  $this->getPostParam('292');
            $partedelcuerpo =  $this->getPostParam('293');

            if((strcmp($fruta,"fruta")==0)||(strcmp($fruta,"frutas")==0))
            {
                $cont++;
            }
            if((strcmp($animal,"animal")==0)||(strcmp($animal,"animales")==0))
            {
                $cont++;
            }
            if((strcasecmp($partedelcuerpo,"parte del rostro")==0)||(strcasecmp($partedelcuerpo,"partes del rostro")==0))
            {
                $cont++;
            }
            if($cont==3)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,24,1,$this->_id_usuario);
            }
            if($cont==2)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,24,2,$this->_id_usuario);
            }
            if($cont==1)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,24,3,$this->_id_usuario);
            }
            if($cont==0)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,24,4,$this->_id_usuario);
            }
            $this->redireccionar('encuesta');
        }
        $this->_view->renderizar('index', 'encuesta');
    }
    /*Pregunta 30*/
    public function pregunta30()
    {
        $cont=0;

        if($this->getInt('guardar') == 1)
        {
            $this->_view->assign('datos', $_POST);
            $suma =  $this->getPostParam('301');
            $resta =  $this->getPostParam('302');
            $multiplicacion=  $this->getPostParam('303');

            if($suma==28)
            {
                $cont++;
            }
            if($resta==8)
            {
                $cont++;
            }
            if($multiplicacion==30)
            {
                $cont++;
            }

            if($cont==3)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,25,1,$this->_id_usuario);
            }
            if($cont==2)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,25,2,$this->_id_usuario);
            }
            if($cont==1)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,25,3,$this->_id_usuario);
            }
            if($cont==0)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,25,4,$this->_id_usuario);
            }
            $this->redireccionar('encuesta');
        }
        $this->_view->renderizar('index', 'encuesta');
    }
    /*Pregunta 31*/
    public function pregunta31()
    {
        $cont=0;

        if($this->getInt('guardar') == 1)
        {
            $this->_view->assign('datos', $_POST);
            $problema1 =  $this->getPostParam('311');
            $problema2 =  $this->getPostParam('312');
            $problema3=  $this->getPostParam('313');

            if($problema1==7)
            {
                $cont++;
            }
            if($problema2==30)
            {
                $cont++;
            }
            if($problema3==7)
            {
                $cont++;
            }

            if($cont==3)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,26,1,$this->_id_usuario);
            }
            if($cont==2)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,26,2,$this->_id_usuario);
            }
            if($cont==1)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,26,3,$this->_id_usuario);
            }
            if($cont==0)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,26,4,$this->_id_usuario);
            }

            $this->redireccionar('encuesta');
        }
        $this->_view->renderizar('index', 'encuesta');
    }
    /*Pregunta 32*/
    public function pregunta32()
    {
        $cont=0;

        if($this->getInt('guardar') == 1)
        {
            $this->_view->assign('datos', $_POST);
            $cont =  $this->getPostParam('puzzleresp');

            if($cont==3)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,32,1,$this->_id_usuario);
            }
            if($cont==2)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,32,2,$this->_id_usuario);
            }
            if($cont==1)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,32,3,$this->_id_usuario);
            }
            if($cont==0)
            {
                $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,32,4,$this->_id_usuario);
            }
            $this->pregunta33();
            $this->redireccionar('encuesta');
        }
        $this->_view->renderizar('index', 'encuesta');
    }
    /*Pregunta 33*/
    public function pregunta33()
    {
        $cont=0;
        $Pregunta[0]=11;
        $Pregunta[1]=25;
        $Pregunta[2]=26;
        $Pregunta[3]=27;
        $Pregunta[4]=28;

        for($i=0 ; $i<5 ; $i++) {
            $resultado = $this->_encuesta->ObtenerResultados($Pregunta[$i]);
            if($resultado!=0){
                $cont = $cont + 2;
            }else{
                $cont = $cont + 1;
            }
        }
        if($cont>=9&&$cont<=10)
        {
            $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,33,1,$this->_id_usuario);
        }
        if($cont>=6&&$cont<=8)
        {
            $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,33,2,$this->_id_usuario);
        }
        if($cont>=1&&$cont<=5)
        {
            $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,33,3,$this->_id_usuario);
        }
        if($cont==0)
        {
            $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,33,4,$this->_id_usuario);
        }
        $this->redireccionar('encuesta');
        $this->_view->renderizar('index', 'encuesta');
    }
    public function pregunta34()
    {

            $this->_encuesta->insertarEncuesta( $this->_NumEncuesta,34,1,$this->_id_usuario);

        $this->redireccionar('encuesta');
        $this->_view->renderizar('index', 'encuesta');
    }
}