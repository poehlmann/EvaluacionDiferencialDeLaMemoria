<?php
class resultadoController extends Controller
{
    private $_resultado;
    private $_id_usuario; 
    public function __construct() {
        parent::__construct();
        $this->_resultado = $this->loadModel('resultado');
        $this->_id_usuario = Session::get('id_usuario');
    }
    
    public function index()
    {
        //print_r($this->_view->getLayoutPositions());
        //exit;
        $this->_view->assign('titulo', 'Resultados');
        $this->_view->setJs(array('jquery.resultado'));
        //$this->_view->assign('widget', $this->_view->widget('menu', 'getMenu'));
        //$this->_view->assign('pacientes', ($this->_resultado->getPosts()));/*Todos los usuarios*/
        $this->_view->assign('pacientes',($this->_resultado->getNombre(Session::get('id_usuario'))));
        $this->_view->renderizar('index', 'resultado');
    }
    /**
     *
     */
    public function edm()
    {
        $this->_view->assign('titulo', 'Resultado EDM');
        $this->_view->renderizar('edm', 'edm');
    }
    public function ArmarTablaResultado()
    {
        $color=3;
            //$this->_resultado->ObtenerResultados(14);
        //for ($i = 1; $i <= 34 $i++)
        {
            if($color==3) {
                echo '<script>';
                echo 'celda = document . getElementById("1");';
                echo 'celda . style . backgroundColor = "green";';
                echo '</script>';
            }
            if($color==2) {
                echo '<script>';
                echo 'celda = document . getElementById("1");';
                echo 'celda . style . backgroundColor = "yellow";';
                echo '</script>';
            }
            if(($color==1)||($color==0)) {
                echo '<script>';
                echo 'celda = document . getElementById("1");';
                echo 'celda . style . backgroundColor = "red";';
                echo '</script>';
            }
        }
    }
}