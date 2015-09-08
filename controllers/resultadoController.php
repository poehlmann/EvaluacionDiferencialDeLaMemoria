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
        $this->_view->assign('pacientes',($this->_resultado->getNombre( $this->_id_usuario)));
        $this->_view->renderizar('index', 'resultado');
    }
    /**
     *
     */
    public function edm()
    {
        $this->_view->assign('titulo', 'Resultado EDM');
        $this->_view->assign('pacientes',($this->_resultado->getNombre( $this->_id_usuario)));
        $this->_view->assign('resultados',($this->_resultado->getAllResult( $this->_id_usuario)));
        $this->_view->renderizar('edm', 'edm');
    }

}