<?php

class sesionclass{
	
	var $usuario;
	var $password;
	var $nombresesion;
	
	function crearsesion($nombresesion){
		session_start();
		$_SESSION[$nombresesion];
		
	}

	function __construct($usu=1, $pass=1, $sesion=1){
		$this->usuario=$usu;
		$this->password=$pass;
		$this->nombresesion=$sesion;
	}
	 

	function cerrarsesion(){
		session_start();
		session_destroy();
		if(ini_get("session.use_cookies")){
			$params=session_get_cookie_params();
			setcookie(session_name(), '', time()-42000, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
			return true;
		}else{
			return false;
		}
	}
	
	function comprobarsesion(){
		return session_status();
	}
}
?>