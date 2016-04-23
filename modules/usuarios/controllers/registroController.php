<?php

class registroController extends Controller
{
    private $_registro;

    public function __construct()
    {
        parent::__construct();

        $this->_registro = $this->loadModel('registro');
        $this->_registropersona = $this->loadModel('persona');
        $this->_view->setTemplate('twb');
        $this->_view->setWidgetOptions('menu-top', array('top', 'top', true));
        $this->_codigo = rand(1, 99999999999999999999);
    }

    /**
     * @throws Exception
     * @throws phpmailerException
     */
    public function index()
    {

        if (Session::get('autenticado')) {
            $this->redireccionar();
        }

        $this->_view->assign('titulo', 'Registro');

        if ($this->getInt('enviar') == 1) {
            $this->_view->assign('datos', $_POST);

            if (!$this->getSql('nombre')) {
                $this->_view->assign('_error', 'Debe introducir su nombre');
                $this->_view->renderizar('index', 'registro');
                exit;
            }

            if (!$this->getPostParam('apellido')) {
                $this->_view->assign('_error', 'Debe introducir su apellido');
                $this->_view->renderizar('index', 'registro');
                exit;
            }

            if (!$this->getAlphaNum('usuario')) {
                $this->_view->assign('_error', 'Debe introducir su nombre usuario');
                $this->_view->renderizar('index', 'registro');
                exit;
            }

            if ($this->_registro->verificarUsuario($this->getAlphaNum('usuario'))) {
                $this->_view->assign('_error', 'El usuario ' . $this->getAlphaNum('usuario') . ' ya existe');
                $this->_view->renderizar('index', 'registro');
                exit;
            }

            if (!$this->validarEmail($this->getPostParam('email'))) {
                $this->_view->assign('_error', 'La direccion de email es inv&aacute;lida');
                $this->_view->renderizar('index', 'registro');
                exit;
            }

            if ($this->_registro->verificarEmail($this->getPostParam('email'))) {
                $this->_view->assign('_error', 'Esta direccion de correo ya esta registrada');
                $this->_view->renderizar('index', 'registro');
                exit;
            }

            if (!$this->getAlphaNum('fechanac')) {
                $this->_view->assign('_error', 'Debe introducir su fecha de nacimiento');
                $this->_view->renderizar('index', 'registro');
                exit;
            }

            if (!$this->getSql('pass')) {
                $this->_view->assign('_error', 'Debe introducir su password');
                $this->_view->renderizar('index', 'registro');
                exit;
            }

            if ($this->getPostParam('pass') != $this->getPostParam('confirmar')) {
                $this->_view->assign('_error', 'Los passwords no coinciden');
                $this->_view->renderizar('index', 'registro');
                exit;
            }

            if (!$this->getAlphaNum("edad")) {
                $this->_view->assign('_error', 'Ingrese su edad');
                $this->_view->renderizar('index', 'registro');
            }

            if (($this->getAlphaNum("edad") > 105) || ($this->getAlphaNum("edad") < 5)) {
                $this->_view->assign('_error', 'Ingrese una edad valida');
                $this->_view->renderizar('index', 'registro');
            }

            if (!$this->getAlphaNum("selectLugarNac")) {
                $this->_view->assign('_error', 'Seleccione su lugar de nacimiento');
                $this->_view->renderizar('index', 'registro');
            }

            if (!$this->getAlphaNum("Profesion")) {
                $this->_view->assign('_error', 'Seleccione su profesion');
                $this->_view->renderizar('index', 'registro');
            }

            if (!$this->getAlphaNum("ocupacion")) {
                $this->_view->assign('_error', 'Seleccione su ocupacion');
                $this->_view->renderizar('index', 'registro');
            }

            if (!$this->getAlphaNum("estado_civil")) {
                $this->_view->assign('_error', 'Seleccione su estado civil');
                $this->_view->renderizar('index', 'registro');
            }

            if (!$this->getAlphaNum("idioma_materno")) {
                $this->_view->assign('_error', 'Seleccione su idioma materno');
                $this->_view->renderizar('index', 'registro');
            }

            $this->getLibrary('class.phpmailer');
            $mail = new PHPMailer();

            $this->_registro->registrarUsuario(
                $this->_codigo,
                $this->getAlphaNum('usuario'),
                $this->getSql('pass')
            );

            $this->_registro->registrarPersona(
                $this->_codigo,
                $this->getPostParam('nombre'),
                $this->getPostParam('apellido'),
                $this->getPostParam('fechanac'),
                $this->getPostParam('email'),
                $this->getPostParam('edad'),
                $this->getPostParam('idioma_materno'),
                $this->getPostParam('estado_civil'),
                $this->getPostParam('Numero_hijos'),
                $this->getPostParam('Profesion'),
                $this->getPostParam('ocupacion'),
                $this->getPostParam('selectLugarNac'),
                $this->getPostParam('Conquienvive'),
                $this->getPostParam('otro_idioma'),
                $this->getPostParam('enfermedades'),
                $this->getPostParam('memoria')
            );


            $usuario = $this->_registro->verificarUsuario($this->getAlphaNum('usuario'));

            if (!$usuario) {
                $this->_view->assign('_error', 'Error al registrar el usuario');
                $this->_view->renderizar('index', 'registro');
                exit;
            }

            $mail->From = 'Laboratorio Neuropsicológico Virtual - NEUROLAP';
            $mail->FromName = 'Registro - Usuario Nuevo';
            $mail->Subject = 'Activacion de cuenta de usuario';
            $mail->Body = 'Hola <strong>' . $this->getSql('nombre') . '</strong>,' .
                '<p>Se ha registrado en nuestra pagina de servicio neuropsicologico para activar ' .
                'su cuenta haga clic sobre el siguiente enlace:<br>' .
                '<a href="' . BASE_URL . 'usuarios/registro/activar/' .
                $usuario['id'] . '/' . $usuario['codigo'] . '">' .
                BASE_URL . 'registro/activar/' .
                $usuario['id'] . '/' . $usuario['codigo'] . '</a>';

            $mail->AltBody = 'Su servidor de correo no soporta html';
            $mail->AddAddress($this->getPostParam('email'));

            if (!$mail->Send()) {
                $this->_view->assign('_mensaje', "Error al enviar el mensaje a su correo: " . $mail->ErrorInfo);
            } else {
                $this->_view->assign('datos', false);
                $this->_view->assign('_mensaje', 'Registro Completado, revise su email para activar su cuenta');
            }

        }

        $this->_view->renderizar('index', 'registro');
    }


    public function activar($id, $codigo)
    {
        if (!$this->filtrarInt($id) || !$this->filtrarInt($codigo)) {
            $this->_view->assign('_error', 'Esta cuenta no existe');
            $this->_view->renderizar('activar', 'registro');
            exit;
        }

        $row = $this->_registro->getUsuario($this->filtrarInt($id), $this->filtrarInt($codigo));

        if (!$row) {
            $this->_view->assign('_error', 'Esta cuenta no existe');
            $this->_view->renderizar('activar', 'registro');
            exit;
        }

        if ($row['estado'] == 1) {
            $this->_view->assign('_error', 'Esta cuenta ya ha sido activada');
            $this->_view->renderizar('activar', 'registro');
            exit;
        }

        $this->_registro->activarUsuario(
            $row['id'],
            $row['codigo']
        );
        $row = $this->_registro->getUsuario(
            $this->filtrarInt($id),
            $this->filtrarInt($codigo)
        );

        if ($row['estado'] == 0) {
            $this->_view->assign('_error', 'Error al activar la cuenta, por favor intente mas tarde');
            $this->_view->renderizar('activar', 'registro');
            exit;
        }

        $this->_view->assign('_mensaje', 'Su cuenta ha sido activada');
        $this->_view->renderizar('activar', 'registro');
    }
}