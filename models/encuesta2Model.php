<?php
class encuesta2Model extends Model
{
    public function __construct()
    {
        parent::__construct();

    }
    public function insertarEncuesta2($resp, $id_usuario)
    {
        $id_usuario = (int)$id_usuario;
        $num =$this->_db->query("select count(*) as cant from tblencuestaequilam where idusuario = $id_usuario");
        $cant = $num->fetch(PDO::FETCH_COLUMN);

        if($cant==false) $id_evaluacion=0;
        else  $id_evaluacion=$cant;

        $this->_db->prepare("INSERT INTO tblencuestaequilam VALUES (null,:id_evaluacion, :resp , :id_usuario,now())")
            ->execute(
                array(
                    ':id_evaluacion' => $id_evaluacion,
                    ':resp' => $resp,
                    ':id_usuario' => $id_usuario
                ));

        $this->_db->prepare("UPDATE tblencuestas
                             SET (idequilam=:idevaluacion)
                                  where id_usuario=:id_usuario)
                                  and idequilam= (select id_evaluacion from tblencuestaequilam where max(id) and id_usuario = $id_usuario)")
            ->execute(
                array(
                    ':id_evaluacion' => $id_evaluacion,
                    ':id_usuario' => $id_usuario
                ));
    }

    public function ObtenerResultados2($NumeroPregunta)
    {
        $NumeroPregunta = (int)$NumeroPregunta;
        $post = $this->_db->query("select idrespuesta from tblencuestaequilam where pregunta=$NumeroPregunta");
        return $post->fetch(PDO::FETCH_COLUMN);
    }

    public function obtenerResultadoUsuario($id_usuario)
    {
        $id_usuario = (int)$id_usuario;
        $post = $this->_db->query("select idrespuesta from tblencuestaequilam where idusuario=$id_usuario");
        return $post->fetch(PDO::FETCH_COLUMN);
    }

}