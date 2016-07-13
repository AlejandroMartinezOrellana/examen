<?php

class usuario{
	public $idUsuario;
	function get_idUsuario(){
		return $this->idUsuario;
	}

	function set_idUsuario($idUsuario){
		$this->idUsuario =$idUsuario;
	}

	public $username;
	function get_username(){
		return $this->username;
	}

	function set_username($username){
		$this->username= $username;
	}


	public $password;
	function get_password(){
		return $this->password;
	}

	function set_password($password){
		$this->password= $password;
	}

	

}
?>