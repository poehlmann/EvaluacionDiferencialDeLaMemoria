<?php

class registroModel extends Model
{
    public function __construct() {
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
                "select id from tblusuario where email = '$email'"
                );
        
        if($id->fetch()){
            return true;
        }
        
        return false;
    }
    
    public function registrarUsuario($nombre, $usuario, $password, $email , $fechanac , $apellido)
    {
    	$random = rand(1782598471, 9999999999);
		
        $this->_db->prepare(
                "insert into tblusuario values" .
                "(null, :nombre,:apellido , :usuario, :password, :email, 4, 0 , :fechanac, now(), :codigo)"
                )
                ->execute(array(
                    ':nombre' => $nombre,
                    ':apellido' => $apellido,
                    ':usuario' => $usuario,
                    ':password' => Hash::getHash('sha1', $password, HASH_KEY),
                    ':email' => $email,
                    ':fechanac' => $fechanac,
                    ':codigo' => $random
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

?>
