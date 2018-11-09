<?php
class encuesta3Controller extends Controller
{
    private $_encuesta;
    private $_contador;
    private $_id_usuario; 
    public function __construct() {
        parent::__construct();
        $this->_encuesta = $this->loadModel('encuesta3');
        $this->_id_usuario = Session::get('id_usuario');
        if(($this->_encuesta->getNumEncuesta3($this->_id_usuario))==false)
        {$this->_NumEncuesta=0;}
        else{
        $this->_NumEncuesta = ($this->_encuesta->getNumEncuesta3($this->_id_usuario));}
    }
    
    public function index()
    {
        //print_r($this->_view->getLayoutPositions());
        //exit;
        $this->_view->assign('titulo', 'MMSE');
        //$this->_view->assign('widget', $this->_view->widget('menu', 'getMenu'));
        $this->_view->setLinkPlugin(array('encuesta3/bower_components/polymer/polymer'));
        $this->_view->setLinkPlugin(array('encuesta3/elements/speech-input'));
        $this->_view->setJs(array('jquery.preguntas3'));
        $this->_view->setJs(array('jquery.virtualpaginate'));
        $this->_view->setJs(array('jquery.ini'));
        $this->_view->renderizar('index', 'encuesta3');
    }
    public function mmse()
    {
         $this->redireccionar('encuesta4');
    }
    /*Pregunta 1*/

    public function pregunta1()
    {
        //$this->_acl->acceso('nuevo_post'); lista de acceso
        $cont = 0;
        if($this->getInt('guardar') == 1){
            $this->_view->assign('datos', $_POST);
            /*orden 1*/
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
            $mes = strtolower($this->getPostParam('11'));
            if($this->getPostParam('11') == $a[date("n")] || $this->getPostParam('11')==date("m"))
            {
                $cont++;
            }
            /*orden 2*/
            //date("d")= Día del mes con 2 dígitos, y con ceros iniciales, de 01 a 31
            $fecha=(string)$this->getPostParam('12');
            if($fecha == date("d"))
            {
                $cont++;
            }
            /*orden 3*/
            //date ("Y") =  Año actual con 4 dígitos, ej 2013 date("y")= Año actual con 2 dígitos, ej 13
            if($this->getPostParam('13') == date("Y") || $this->getPostParam('13') == date("y"))
            {
                $cont++;
            }
            /*Pregunta 4 dia de la semana*/
            $d[1] = "lunes";
            $d[2] = "martes";
            $d[3] = "miercoles";
            $d[4] = "jueves";
            $d[5] = "viernes";
            $d[6] = "sabado";
            $d[7] = "domingo";
            $diasemana = strtolower($this->getPostParam('14'));
            if($diasemana == $d[date('N')])
            {
                $cont++;
            }
            $this->_encuesta->insertarEncuesta3( $this->_NumEncuesta,1,$cont,$this->_id_usuario);
            $this->redireccionar('encuesta3');
        }
        $this->_view->renderizar('index', 'encuesta3');
    }

    /*Pregunta 2*/

    public function pregunta2()
    {
        $cont=0;
        /*Lista 1*/
        $l1[0] = "árbol";
        $l1[1] = "mesa";
        $l1[2] = "avión";

        if($this->getInt('guardar') == 1)
        {
            $this->_view->assign('datos', $_POST);
            $lista1 =  $this->getPostParam('text1');
            $cadena1 =explode(" ",$lista1);
            $tamanho1 = count($cadena1);
            $i=0;
            $j=0;
            while($i<$tamanho1)
            {
                while($j<$tamanho1) {
                    if (strcmp($cadena1[$i], $l1[$j]) == 0) {
                        $cont++;
                    }
                    $j++;
                }
                $j=0;
                $i++;
            }
            $this->_encuesta->insertarEncuesta3( $this->_NumEncuesta,2,$cont,$this->_id_usuario);
            $this->redireccionar('encuesta3');
        }
        $this->_view->renderizar('index', 'encuesta3');
    }

    /*Pregunta 3*/

    public function pregunta3()
    {
        $cont=0;
        $m[0] = "9";
        $m[1] = "7";
        $m[2] = "5";
        $m[3] = "3";
        $m[4] = "1";
        if($this->getInt('guardar')==1)
        {
            $lista =   $this->getPostParam('text2');
            $cadena =explode(" ",$lista);
            $tamanho = count($cadena);
            $i=0;
            while($i<$tamanho)
            {
                    if(strcmp($cadena[$i],$m[$i])==0)
                    {
                        $cont++;
                    }
                $i++;
            }
            $this->_encuesta->insertarEncuesta3( $this->_NumEncuesta,3,$cont,$this->_id_usuario);
            $this->redireccionar('encuesta3');
        }
        $this->_view->renderizar('index', 'encuesta3');
    }

    /*Pregunta 4*/

    public function pregunta4()
    {
        $cont=0;
        if($this->getInt('guardar') == 1)
        {
            $this->_view->assign('datos', $_POST);
            $cont =  $this->getPostParam('puzzleresp');
            $this->_encuesta->insertarEncuesta3( $this->_NumEncuesta,4,$cont,$this->_id_usuario);
            $this->redireccionar('encuesta3');
        }
        $this->_view->renderizar('index', 'encuesta3');
    }
    /*Pregunta 5*/
    public function pregunta5()
    {
        $cont=0;
        /*Lista 1*/
        $l1[0] = "árbol";
        $l1[1] = "mesa";
        $l1[2] = "avión";

        if($this->getInt('guardar') == 1)
        {
            $this->_view->assign('datos', $_POST);
            $lista1 =  $this->getPostParam('text1');
            $cadena1 =explode(" ",$lista1);
            $tamanho1 = count($cadena1);
            $i=0;
            $j=0;
            while($i<$tamanho1)
            {
                while($j<$tamanho1) {
                    if (strcmp($cadena1[$i], $l1[$j]) == 0) {
                        $cont++;
                    }
                    $j++;
                }
                $j=0;
                $i++;
            }
            $this->_encuesta->insertarEncuesta3( $this->_NumEncuesta,5,$cont,$this->_id_usuario);
            $this->redireccionar('encuesta3');
        }
        $this->_view->renderizar('index', 'encuesta3');
    }
}