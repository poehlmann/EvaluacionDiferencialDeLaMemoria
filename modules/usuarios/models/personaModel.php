<?php

class personaModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function registrarPersona($codigo, $nombre, $apellido, $fechanac, $email, $edad, $idioma_materno, $estado_civil, $numero_hijos, $profesion, $ocupacion, $selectLugarNac, $Con_quien_vive, $otro_idioma, $enfermedades, $memoria)
    {
        //"(null, :usuario, :password, :email, 4, 0 , :fechanac, now(), :codigo)"
        $this->_db->prepare(
            "insert into tblpersona values" .
            "(:id,:nombre,:apellido,:fechanac,:email,:edad,:idioma_materno,:estado_civil,:numero_hijos,:profesion,:ocupacion,:selectLugarNac,:Con_quien_vive,:otro_idioma,:enfermedades,:memoria)"
        )
            ->execute(array(
                ':id' => $codigo,
                ':nombre' => $nombre,
                ':apellido' => $apellido,
                ':fechanac' => $fechanac,
                ':email' => $email,
                ':edad' => $edad,
                ':idioma_materno' => $idioma_materno,
                ':estado_civil' => $estado_civil,
                ':numero_hijos' => $numero_hijos,
                ':profesion' => $profesion,
                ':ocupacion' => $ocupacion,
                ':selectLugarNac' => $selectLugarNac,
                ':Con_quien_vive' => $Con_quien_vive,
                ':otro_idioma' => $otro_idioma,
                ':enfermedades' => $enfermedades,
                ':memoria' => $memoria
            ));
    }
}