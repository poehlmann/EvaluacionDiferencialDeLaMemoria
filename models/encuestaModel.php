<?php

class encuestaModel extends Model
{
    public function __construct()
    {
        parent::__construct();
       
    }

    public function insertarEncuesta($numEncu,$preg,$resp,$id_usuario)
    {
        $id= $this->_db->query("select count(*) from tblencuestaedm  where pregunta=$preg and id_usuario=$id_usuario");
        $id_evaluacion = $id->fetch(PDO::FETCH_COLUMN);
        if($preg==1)
        {
            $this->_db->prepare("INSERT INTO tblencuestas VALUES (null, :id_evaluacion, :numEnc, :numEnc , :numEnc , :id_usuario)")
                ->execute(
                    array(
                        ':id_evaluacion'=>$id_evaluacion,
                        ':numEnc' =>$numEncu,
                        ':id_usuario' => $id_usuario
                    ));
        }

        $this->_db->prepare("INSERT INTO tblencuestaedm VALUES (null,:numEnc,:preg, :resp , :id_usuario,now())")
                ->execute(
                        array(
                           ':numEnc'=>$id_evaluacion,
                           ':preg' => $preg,
                           ':resp' => $resp,
                           ':id_usuario' => $id_usuario
                        ));
    }

    public function ObtenerResultados($NumeroPregunta)
    {
        $NumeroPregunta = (int) $NumeroPregunta;
        $post = $this->_db->query("select idrespuesta from tblencuestaedm where pregunta=$NumeroPregunta");
        return $post->fetch(PDO::FETCH_COLUMN);
    }

    public function getNombre($id)
    {
        $id = (int) $id;
        $post = $this->_db->query("select nombre from tblusuario where id = $id");
        return $post->fetch(PDO::FETCH_COLUMN);
    }

    public function getApellido($id)
    {
        $id = (int) $id;
        $post = $this->_db->query("select apellido from tblusuario where id = $id");
        return $post->fetch(PDO::FETCH_COLUMN);
    }

      public function getFechaNac($id)
    {
        $id = (int) $id;
        $post = $this->_db->query("select fechanac from tblusuario where id = $id");
        return $post->fetch(PDO::FETCH_COLUMN);
    }
    public function verificarAnimal($animal)
    {
        $total = $this->_db->query("SELECT count(*) FROM tbllistaanimales WHERE animal LIKE '%$animal%'");
        $resultado = $total->fetch();
        $count = $resultado[0];
        if($count==0)
        {
            return 0;
        }
        else
        {
            return 1;
        }
    }

    public function getNumEncuesta($id)
    {
        $num =$this->_db->query("select count(id_evaluacion) as cant from tblencuestaedm where id_usuario = $id");
        return $num->fetch(PDO::FETCH_COLUMN);
    }

    public function VerificarCompleEdm($id)
    {
        $num =$this->_db->query("select * from tblencuestaedm where id_usuario = $id and pregunta=34");
        $encontro = $num->fetch();
        if($encontro==false)
        {
            return false;
        }
        else
        {
            return true;
        }
    }
}
