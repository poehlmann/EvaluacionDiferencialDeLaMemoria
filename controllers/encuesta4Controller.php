<?php
class encuesta4Controller extends Controller
{
    private $_encuesta;
    private $_contador;
    private $_id_usuario; 
    public function __construct() {
        parent::__construct();
        //$this->_encuesta = $this->loadModel('encuesta');
        //$this->_id_usuario = Session::get('id_usuario');
    }
    
    public function index()
    {
        //print_r($this->_view->getLayoutPositions());
        //exit;
        $this->_view->assign('titulo', 'GDS');
        //$this->_view->assign('widget', $this->_view->widget('menu', 'getMenu'));
        $this->_view->renderizar('index', 'encuesta4');
    }
    public function gds()
    {
        $this->redireccionar('resultado');
    }
}
?>