<?php

class postModel extends Model
{
    public function __construct() {
        parent::__construct();
    }
    
    public function getPosts()/*Obtiene personas registradas*/
    {
        $post = $this->_db->query("select * from tblpersona");
        return $post->fetchall();
    }

        public function getMedicos()/*Obtiene todos los medicos registrados*/
    {
        $post = $this->_db->query("select * from tblusuario as usuario , tblpersona as persona where role=2 and usuario.id=persona.id");
        return $post->fetchall();
    }
        public function getPacientes()
    {
        $post = $this->_db->query("select * from tblusuario as usuario , tblpersona as persona where usuario.role=3 and persona.id=usuario.id");
        return $post->fetchall();
    }
    public function getDatosPaciente($id)
    {
        $id = (int) $id;
        $post = $this->_db->query("select * from tblpersona where id = $id");
        return $post->fetchall();
    }

    public function getRole($id){
        $id = (int) $id;
        $post = $this->_db->query("select role from tblusuario where id=$id");
        return $post->fetch();
    }

    public function getEncuesta($id){
        $id = (int) $id;
        $post = $this->_db->query("select id_evaluacion from tblusuario,tblencuestaedm where tblusuario.id=$id and tblencuestaedm.id_usuario=$id");
        return $post->fetch();
    }
    
    public function getPost($id)
    {
        $id = (int) $id;
        $post = $this->_db->query("select * from tblpersona where id = $id");
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
                "select id, codigo from tblusuario where usuario='$usuario'"
                );
        
        return $id->fetch();
    }
    
    public function verificarEmail($email)
    {
        $id = $this->_db->query(
                "select id from tblpersona where email = '$email'"
                );
        
        if($id->fetch()){
            return true;
        }
        
        return false;
    }

    public function insertarPost($codigo,$usuario,$pass,$tipousuario)
    {
        $random = rand(1782598471, 9999999999);
        $this->_db->prepare("INSERT INTO tblusuario VALUES (:id,:usuario,:pass,:rol,1,now(),:codigo)")
                ->execute(
                        array(
                           ':id' => $codigo ,
                           ':usuario' => $usuario,
                           ':pass' => Hash::getHash('sha1', $pass, HASH_KEY),
                           ':rol' => $tipousuario,
                           ':codigo' => $random
                        ));
    }

    public function insertarPostPersona($codigo,$nombre,$apellido,$fechanac,$email){
        $this->_db->prepare("INSERT INTO tblpersona VALUES (:id,:nombre,:apellido,:fechanac,:email)")
            ->execute(
                array(
                    ':id' => $codigo,
                    ':nombre' => $nombre,
                    ':apellido' => $apellido,
                    ':fechanac' => $fechanac,
                    ':email' => $email,
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
