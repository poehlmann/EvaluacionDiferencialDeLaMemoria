<?php

class registroModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function verificarUsuario($usuario)
    {
        $id = $this->_db->query(
            "select id, codigo from tblusuario where usuario = '$usuario'"
        );

        return $id->fetch();
    }

    public function verificarEmail($email)
    {
        $id = $this->_db->query(
            "select id from tblpersona where email = '$email'"
        );

        if ($id->fetch()) {
            return true;
        }

        return false;
    }

    public function registrarUsuario($codigo, $usuario, $password)
    {
        $random = rand(1782598471, 9999999999);
        //"(null, :usuario, :password, :email, 4, 0 , :fechanac, now(), :codigo)"
        $this->_db->prepare(
            "insert into tblusuario values" .
            "(:id, :usuario, :password, 4, 0 , now(),:codigo)"
        )
            ->execute(array(
                ':id' => $codigo,
                ':usuario' => $usuario,
                ':password' => Hash::getHash('sha1', $password, HASH_KEY),
                ':codigo' => $random
            ));
    }

    public function registrarPersona($codigo,$nombre,$apellido,$fechanac,$email,$edad,$idioma_materno,$estado_civil,$numero_hijos,$profesion,$ocupacion,$selectLugarNac,$Con_quien_vive,$otro_idioma,$enfermedades,$memoria)
    {
        $this->_db->prepare(
            "insert into tblpersona values" .
            "(:id,:nombre,:apellido,:fechanac,:email,:edad,:idiomamaterno,:estadocivil,:numerohijos,:profesion,:ocupacion,:selectLugarNac,:Conquienvive,:otroidioma,:enfermedades,:memoria)"

//            "(:id,:nombre,:apellido,:fechanac,:email,:edad,:idiomamaterno,:estadocivil,:numerohijos,:profesion,:ocupacion,:selectLugarNac,:Conquienvive,:otroidioma,:enfermedades,:memoria)"
        )
            ->execute(array(
                ':id' => $codigo,
                ':nombre' => $nombre,
                ':apellido' => $apellido,
                ':fechanac' => $fechanac,
                ':email' => $email,
                ':edad' => $edad,
                ':idiomamaterno' => $idioma_materno,
                ':estadocivil' => $estado_civil,
                ':numerohijos' => $numero_hijos,
                ':profesion' => $profesion,
                ':ocupacion' => $ocupacion,
                ':selectLugarNac' => $selectLugarNac,
                ':Conquienvive' => $Con_quien_vive,
                ':otroidioma' => $otro_idioma,
                ':enfermedades' => $enfermedades,
                ':memoria' => $memoria
            ));
    }

    public function getUsuario($id, $codigo)
    {
        $usuario = $this->_db->query(
            "select * from tblusuario where id = '$id' and codigo = '$codigo'"
        );

        return $usuario->fetch();
    }

    public function activarUsuario($id, $codigo)
    {
        $this->_db->query(
            "update tblusuario set role = 3,estado = 1 where id = '$id' and codigo = '$codigo'"
        );
    }
}
