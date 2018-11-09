<?php
//REVISAR
class encuesta3Model extends Model
{
    public function __construct()
    {
        parent::__construct();

    }
    public function insertarEncuesta3($numEnc,$preg,$resp,$id_usuario)
    {
        $id_usuario = (int)$id_usuario;
        $id= $this->_db->query("select count(*) from tblencuestammse  where idpregunta=$preg and idusuario=$id_usuario");
        $id_evaluacion = $id->fetch(PDO::FETCH_COLUMN);

        if($id_evaluacion==false)
        {$id_evaluacion=0;}

        $this->_db->prepare("INSERT INTO tblencuestammse VALUES (0,:numEnc,:preg, :resp , :id_usuario,now())")
            ->execute(
                array(
                    ':numEnc'=>$id_evaluacion,
                    ':preg' => $preg,
                    ':resp' => $resp,
                    ':id_usuario' => $id_usuario
                ));

        $this->_db->prepare("UPDATE tblencuestas
                             SET (idmmse=:idevaluacion)
                                  where (id_usuario=:id_usuario)
                                  and idmmse= (select id_evaluacion from tblencuestammse where max(id) and idusuario = :id_usuario)")
            ->execute(
                array(
                    ':idevaluacion' => $id_evaluacion,
                    ':id_usuario' => $id_usuario
                ));
    }

    public function ObtenerResultados3($NumeroPregunta)
    {
        $NumeroPregunta = (int)$NumeroPregunta;
        $post = $this->_db->query("select idrespuesta from tblencuestaequilam where pregunta=$NumeroPregunta");
        return $post->fetch(PDO::FETCH_COLUMN);
    }
    public function getNumEncuesta3($id)
    {
        $num =$this->_db->query("select count(id_evaluacion) as cant from tblencuestammse where idusuario = $id");
        return $num->fetch(PDO::FETCH_COLUMN);
    }

}