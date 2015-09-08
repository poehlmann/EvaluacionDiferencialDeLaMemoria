<?php

class postModel extends Model
{
    public function __construct() {
        parent::__construct();
    }
    
    public function getPosts()/*Obtiene personas registradas*/
    {
        $post = $this->_db->query("select * from tblusuario");
        return $post->fetchall();
    }

        public function getMedicos()/*Obtiene todos los medicos registrados*/
    {
        $post = $this->_db->query("select * from tblusuario where role=2");
        return $post->fetchall();
    }
        public function getPacientes()
    {
        $post = $this->_db->query("select * from tblusuario where role=3");
        return $post->fetchall();
    }
    public function getDatosPaciente($id)
    {
        $id = (int) $id;
        $post = $this->_db->query("select * from tblusuario where id = $id");
        return $post->fetchall();
    }
    
    public function getPost($id)
    {
        $id = (int) $id;
        $post = $this->_db->query("select * from tblusuario where id = $id");
        return $post->fetch();
    }
    
     public function getPaises()
    {
        $paises = $this->_db->query(
                "select * from tblpaises"
                );
        return $paises->fetchAll();
    }
    
    public function getCiudades($pais)
    {
        $ciudades = $this->_db->query(
                "select * from tblciudades where pais={$pais} "
                );
                
        
        $ciudades->setFetchMode(PDO::FETCH_ASSOC);
        return $ciudades->fetchAll();
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
                "select id from tblusuario where email = '$email'"
                );
        
        if($id->fetch()){
            return true;
        }
        
        return false;
    }

    public function insertarPost($nombre,$apellido,$usuario,$pass,$email,$fechanac,$tipousuario)
    {
        $random = rand(1782598471, 9999999999);
        $this->_db->prepare("INSERT INTO tblusuario VALUES (null,:nombre,:apellido,:usuario,:pass,:email,:rol,1,:fechanac,now(),:codigo)")
                ->execute(
                        array(
                           ':nombre' => $nombre,
                           ':apellido' => $apellido,
                           ':usuario' => $usuario,
                           ':pass' => Hash::getHash('sha1', $pass, HASH_KEY),
                           ':email' => $email,
                           ':rol' => $tipousuario,
                           ':fechanac' => $fechanac,
                           ':codigo' => $random
                        ));
    }
    public function editarPost($id,$nombre,$apellido,$usuario,$email,$fechanac)
    {
        $id = (int) $id;
        $this->_db->prepare("UPDATE tblusuario SET  nombre=:nombre,apellido=:apellido,usuario=:usuario,email=:email,fechanac=:fechanac WHERE id = :id")
                ->execute(
                        array(
                           ':id' => $id,
                           ':nombre' => $nombre,
                           ':apellido' => $apellido,
                           ':usuario' => $usuario,
                           ':fechanac' => $fechanac,
                           ':email' => $email
                        ));
    }


    
    public function eliminarPost($id)
    {
        $id = (int) $id;
        $this->_db->query("DELETE FROM tblusuario WHERE id = $id");
    }
    
    public function insertarPrueba($nombre)
    {
        $this->_db->prepare("INSERT INTO tblpersona VALUES (null, :nombre)")
                ->execute(
                        array(
                           ':nombre' => $nombre
                        ));
    }
	
    public function getPrueba($condicion = "")
    {
        $post = $this->_db->query(
                "select `r`.*, `p`.`pais`, `c`.`ciudad` from `tblpersona` `r`, `tblpaises` `p`, `tblciudades` `c`" .
                "where `r`.`id_pais` = `p`.`id` and `r`.`id_ciudad` = `c`.`id` $condicion order by id asc");
        return $post->fetchAll();
    }
    
}

?>