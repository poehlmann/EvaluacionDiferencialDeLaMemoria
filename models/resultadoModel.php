<?php

class resultadoModel extends Model
{
    public function __construct()
    {
        parent::__construct();

    }
    public function ObtenerResultados($id)
    {
        $id = (int) $id;
        $post = $this->_db->query("select idrespuesta from tblencuesta where id=$id");
        return $post->fetch(PDO::FETCH_COLUMN);
    }
    public function getAllResult($id)/*Obtiene todos los resultados*/
    {
        $id = (int) $id;
        $post = $this->_db->query("select idrespuesta from tblencuestaedm where id_usuario=$id");
        $mostrar = $post->fetchAll();
        return $mostrar;
    }

    public function getNombre($id)
    {
        $id = (int) $id;
        $post = $this->_db->query("select nombre from tblpersona where id = $id");
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
    public function getPosts()/*Obtiene personas registradas*/
    {
        $post = $this->_db->query("select * from tblusuario");
        return $post->fetchall();
    }
}