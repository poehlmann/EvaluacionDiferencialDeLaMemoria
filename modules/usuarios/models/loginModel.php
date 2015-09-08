<?php

class loginModel extends Model
{
    public function __construct() {
        parent::__construct();
    }
    
    public function getUsuario($usuario, $password)
    {
        $datos = $this->_db->query(
                "select * from tblusuario " .
                "where usuario = '$usuario' " .
                "and pass = '" . Hash::getHash('sha1', $password, HASH_KEY) ."'"
                );
        
        return $datos->fetch();
    }
    public function registrarInicioSesionUsuario($rol,$usuario,$id)
    {
        $this->_db->prepare(
            "insert into tblhistorial_ingreso values" .
            "(null, :usuario,:tipo_usuario ,now(), :id_usuario)"
        )
            ->execute(array(
                ':usuario' => $usuario,
                ':id_usuario' => $id,
                ':tipo_usuario' => $rol
            ));
    }
}