<?php
class encuesta2Controller extends Controller
{
    private $_encuesta2;
    private $_id_usuario; 
    public function __construct() {
        parent::__construct();
        $this->_encuesta2 = $this->loadModel('encuesta2');
        $this->_id_usuario = Session::get('id_usuario');
    }
    
    public function index()
    {
        //print_r($this->_view->getLayoutPositions());
        //exit;
        $this->_view->assign('titulo', 'EQUILAM');
        //$this->_view->assign('widget', $this->_view->widget('menu', 'getMenu'));
        $this->_view->renderizar('index', 'encuesta2');
    }
    public function equilam()
    {
        $cont=0;
        for ($i=1;$i<=25;$i++ )
        {
            $cont=$cont+$this->getPostParam("option$i");
        }
        $this->_encuesta2->insertarEncuesta2($cont,$this->_id_usuario);
        $this->redireccionar('encuesta3');
    }
}
?>