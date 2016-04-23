<?php

class postController extends Controller
{
    private $_post;
    
    public function __construct() 
    {
        parent::__construct();
        $this->_post = $this->loadModel('post');
        $this->_map = $this->loadModel('map');
        $this->_codigo = rand(1, 99999999999999999999);
        //$this->_datopaciente= $this->loadModel('login');
    }
    
    public function index($pagina = false)
    {
    	/*
        for($i = 0; $i < 300; $i++){
                $model = $this->loadModel('post');
                $model->insertarPost('titulo ' . $i, 'cuerpo' . $i);
        }*/

        if(!$this->filtrarInt($pagina)){
           $pagina = false;
        }
        else{
           $pagina = (int) $pagina;
        }
		
    	
	    $paginador = new Paginador();
		
        $this->_view->assign('posts', $paginador->paginar($this->_post->getPosts(), $pagina));/*Todos los usuarios*/
	    $this->_view->assign('paginacion', $paginador->getView('prueba', 'post/index'));
        $this->_view->assign('titulo', 'Usuarios');
        $this->_view->renderizar('index', 'post');

    }

      public function medicos($pagina = false)
    {

        /*
        for($i = 0; $i < 300; $i++){
                $model = $this->loadModel('post');
                $model->insertarPost('titulo ' . $i, 'cuerpo' . $i);
        }*/
       // Session::accesoEstricto(array('admin'),false);

        if(!$this->filtrarInt($pagina)){
           $pagina = false;
        }
        else{
           $pagina = (int) $pagina;
        }
        
        
            $paginador = new Paginador();
            $this->_view->assign('posts', $paginador->paginar($this->_post->getMedicos(), $pagina));/*Todos los medicos*/
//            $this->_view->assign('map',$paginador->paginar($this->_map->getConexion()));
            $this->_view->assign('paginacion', $paginador->getView('prueba', 'post/medicos'));
//            $this->_view->assign('map', $paginador->getView('prueba', 'post/js/map_process'));
            $this->_view->assign('titulo', 'Medicos');
            $this->_view->renderizar('medicos', 'medicos');
    }
   
    public function pacientes($pagina = false)
    {
         //Session::accesoEstricto(array('usuario'),false);
        /*
        for($i = 0; $i < 300; $i++){
                $model = $this->loadModel('post');
                $model->insertarPost('titulo ' . $i, 'cuerpo' . $i);
        }*/

        if(!$this->filtrarInt($pagina)){
           $pagina = false;
        }
        else{
           $pagina = (int) $pagina;
        }
        

    $paginador = new Paginador();
        $this->_view->assign('posts', $paginador->paginar($this->_post->getPacientes(), $pagina));/*Todos los pacientes*/

        $this->_view->assign('paginacion', $paginador->getView('prueba', 'post/pacientes'));
        $this->_view->assign('titulo', 'Pacientes');
        $this->_view->renderizar('pacientes', 'pacientes');
    }

    public function datospaciente($pagina = false)
    {
         //Session::accesoEstricto(array('usuario'),false);
        /*
        for($i = 0; $i < 300; $i++){
                $model = $this->loadModel('post');
                $model->insertarPost('titulo ' . $i, 'cuerpo' . $i);
        }*/

        if(!$this->filtrarInt($pagina)){
           $pagina = false;
        }
        else{
           $pagina = (int) $pagina;
        }
        

        //$paginador = new Paginador();
        $this->_view->assign('posts', ($this->_post->getDatosPaciente(Session::get('id_usuario'))));/*paciente*/
        $this->_view->assign('rol',($this->_post->getRole(Session::get('id_usuario'))));
        $this->_view->assign('encuesta',($this->_post->getEncuesta(Session::get('id_usuario'))));
        //$this->_view->assign('paginacion', $paginador->getView('prueba', 'post/pacientes'));
        $this->_view->assign('titulo', 'Datos Paciente');
        $this->_view->renderizar('datospaciente', 'datospaciente');
    }


     public function getCiudades()
    {
        if($this->getInt('pais'))
        echo json_encode($this->_post->getCiudades($this->getInt('pais')));
    }

    public function nuevo()
    {
          
        //$this->_acl->acceso('nuevo_post');
        //si queremos restringir completo lo colocamos en el constructor
        //y si queremos en algun metodo en especifico lo hacemos dentro
        //como lo voy a hacer en este ejemplo

        //mandando en accesoEstricto me bloquea al administrador
        //Session::accesoEstricto(array('usuario'),false);
        $this->_acl->acceso('nuevo_post');
        $this->_view->assign('titulo', 'Datos Nuevo Usuario');
        $this->_view->setJsPlugin(array('jquery.validate'));
        $this->_view->setJs(array('nuevo'));
        $tipousuario = substr($_SERVER['REQUEST_URI'], -1,1);

        if($this->getInt('guardar') == 1){
            $this->_view->assign('datos',$_POST);

             if(!$this->getSql('nombre')){
                $this->_view->assign('_error', 'Debe introducir su nombre');
                $this->_view->renderizar('index', 'post/nuevo');
                exit;
            }

            if(!$this->getPostParam('apellido')){
                $this->_view->assign('_error', 'Debe introducir su apellido');
                $this->_view->renderizar('index', 'post/nuevo');
                exit;
            }
            
            if(!$this->getAlphaNum('usuario')){
                $this->_view->assign('_error', 'Debe introducir su nombre usuario');
                $this->_view->renderizar('index', 'post/nuevo');
                exit;
            }
            
            if($this->_post->verificarUsuario($this->getAlphaNum('usuario'))){
                $this->_view->assign('_error', 'El usuario ' . $this->getAlphaNum('usuario') . ' ya existe');
                $this->_view->renderizar('index', 'post/nuevo');
                exit;
            }
            
            if(!$this->validarEmail($this->getPostParam('email'))){
                $this->_view->assign('_error', 'La direccion de email es inv&aacute;lida');
                $this->_view->renderizar('index', 'post/nuevo');
                exit;
            }
            
            if($this->_post->verificarEmail($this->getPostParam('email'))){
                $this->_view->assign('_error', 'Esta direccion de correo ya esta registrada');
                $this->_view->renderizar('index', 'post/nuevo');
                exit;
            }

            if(!$this->getPostParam('fechanac')){
                $this->_view->assign('_error', 'Debe introducir su fecha de nacimiento');
                $this->_view->renderizar('index', 'post/nuevo');
                exit;
            }
            
            if(!$this->getSql('pass')){
                $this->_view->assign('_error', 'Debe introducir su password');
                $this->_view->renderizar('index', 'post/nuevo');
                exit;
            }
            
            if($this->getPostParam('pass') != $this->getPostParam('confirmar')){
                $this->_view->assign('_error', 'Los passwords no coinciden');
                $this->_view->renderizar('index', 'post/nuevo');
                exit;
            }
            $this->_post->insertarPost(
                $this->_codigo,
                    $this->getAlphaNum('usuario'),
                    $this->getSql('pass'),
                    $tipousuario
                    );
            $this->_post->insertarPostPersona( $this->_codigo,
                                                $this->getSql('nombre'),
                                                $this->getPostParam('apellido'),
                                                $this->getPostParam('fechanac'),
                                                $this->getPostParam('email')
                                            );
            $usuario = $this->_post->verificarUsuario($this->getAlphaNum('usuario'));
            
            if(!$usuario){
                $this->_view->assign('_error', 'Error al registrar el usuario');
                $this->_view->renderizar('index', 'post');
                exit;
            }       
            $this->redireccionar('index');
        }
        $this->_view->renderizar('nuevo', 'post');
    }
    
    public function editar($id)
    {
        //Session::acceso('especial');
        $this->_acl->acceso('editar_post');

        if(!$this->filtrarInt($id)){
            $this->redireccionar('post/pacientes');
        }
        
        if(!$this->_post->getPost($this->filtrarInt($id))){
            $this->redireccionar('post/pacientes');
        }
        
        $this->_view->assign('titulo', 'Editar Post');
        $this->_view->setJs(array('nuevo'));
        
        if($this->getInt('enviar') == 1){
            $this->_view->assign('datos', $_POST);
            
            if(!$this->getTexto('nombre')){
                $this->_view->assign('_error','Debe introducir el nombre');
                $this->_view->renderizar('editar', 'post/editar');
                exit;
            }

            if(!$this->getTexto('apellido')){
                $this->_view->assign('_error', 'Debe introducir el apellido');
                $this->_view->renderizar('editar', 'post/editar');
                exit;
            }
            if(!$this->getTexto('usuario')){
                $this->_view->assign('_error', 'Debe introducir el usuario');
                $this->_view->renderizar('editar', 'post/editar');
                exit;
            }

             if(!$this->getTexto('email')){
                $this->_view->assign('_error','Debe introducir el email ');
                $this->_view->renderizar('editar', 'post/editar');
                exit;
            }

              if(!$this->getTexto('fechanac')){
                $this->_view->assign('_error','Debe introducir la fechanacimiento ');
                $this->_view->renderizar('editar', 'post/editar');
                exit;
            }

            
            $this->_post->editarPost(
                    $this->filtrarInt($id),
                    $this->getPostParam('nombre'),
                    $this->getPostParam('apellido'),
                    $this->getPostParam('usuario'),
                    $this->getPostParam('email'),
                    $this->getPostParam('fechanac')
                    );
            
            $this->redireccionar('index');
        }
        
        $this->_view->assign('datos', $this->_post->getPost($this->filtrarInt($id)));
        $this->_view->renderizar('editar', 'post');
    }
    
   public function eliminar($id)
    {
        $this->_acl->acceso('eliminar_post');
        
        if(!$this->filtrarInt($id)){
            $this->redireccionar('index');
        }
        
        if(!$this->_post->getPost($this->filtrarInt($id))){
            $this->redireccionar('index');
        }
        
        $this->_post->eliminarPost($this->filtrarInt($id));
        $this->redireccionar('index');
    }
    public function prueba($pagina = false)
    {
        /*
        for($i = 0; $i < 300; $i++){
            $model = $this->loadModel('post');
            $model->insertarPrueba('nombre ' . $i);
        }
        */
        
	$paginador = new Paginador();
		
        $ajaxModel = $this->loadModel('ajax');
        $this->_view->setJs(array('prueba'));
        $this->_view->assign('paises', $ajaxModel->getPaises());
        $this->_view->assign('posts', $paginador->paginar($this->_post->getPrueba()));
	$this->_view->assign('paginacion', $paginador->getView('paginacion_ajax'));
        $this->_view->assign('titulo', 'Post');
        $this->_view->renderizar('prueba', 'prueba');
   }
   
   public function pruebaAjax() //Buscador
   {
       $pagina = $this->getInt('pagina');
       $nombre = $this->getSql('nombre');
       $pais = $this->getInt('pais');
       $ciudad = $this->getInt('ciudad');
       $registros  = $this->getInt('registros');
       $condicion = "";
       
       if($nombre){
           $condicion .= " AND `nombre` liKe '$nombre%' ";
       }
       
       if($pais){
           $condicion .= " AND `id_pais` = $pais ";
       }
       
       if($ciudad){
           $condicion .= " AND `id_ciudad` = $ciudad ";
       }
       
        $paginador = new Paginador();

        $this->_view->setJs(array('prueba'));
        $this->_view->assign('posts', $paginador->paginar($this->_post->getPrueba($condicion), $pagina, $registros));
        $this->_view->assign('paginacion', $paginador->getView('paginacion_ajax'));
        $this->_view->renderizar('ajax/prueba', false, true);
   }

}

?>