<?php 
include "../clases/usuario.php";
include "conexion.php";

class usuarioDatos{
	function insertarUsuario($username,$password){
		$cnn = new conexion();
		$con = $cnn->conectar();

		$usuario = new usuario();
		$usuario->username=$username;
		$usuario->password=$password;
		mysqli_select_db($con,"scripts");
		$sql = "INSERT INTO Usuario(username,password) VALUES('".$usuario->username."', '".$usuario->password."') ";
			
		if(mysqli_query($con,$sql)){
			return true;
		}else{
			return false;
		}

		mysqli_close($con);		
	}

	function validar($username,$password){
		$cnn = new conexion();
		$con = $cnn->conectar();

		$usuario = new usuario();
		$usuario->username=$username;
		$usuario->password=$password;
		mysqli_select_db($con,"scripts");
		$sql = " SELECT * FROM USUARIO WHERE username='".$usuario->username."' AND password='".$usuario->password."'";

		$consulta = mysqli_query($con,$sql);
		$fila = mysqli_fetch_array($consulta);
		if($fila>0){
			if($fila["username"] == $usuario->username && $fila["password"] == $usuario->password){
				return true;
			}			
		}else{
			return false;
		}

	}


	function eliminarUsuario($username,$password){
		$cnn = new conexion();
		$con = $cnn->conectar();

		$usuario = new usuario();
		$usuario->username=$username;
		$usuario->password=$password;
		mysqli_select_db($con,"scripts");
		$sql = " DELETE FROM USUARIO WHERE username='".$usuario->username."' AND password='".$usuario->password."'";
			
		if(mysqli_query($con,$sql)){
			return true;
		}else{
			return false;
		}

		mysqli_close($con);		
	}



	function actualizaUsuario($username,$password){
		$cnn = new conexion();
		$con = $cnn->conectar();

		$usuario = new usuario();
		$usuario->username=$username;
		$usuario->password=$password;
		mysqli_select_db($con,"scripts");
		$sql = " UPDATE  USUARIO SET password='".$usuario->password."' WHERE username='".$usuario->username."'";
			
		if(mysqli_query($con,$sql)){
			return true;
		}else{
			return false;
		}

		mysqli_close($con);		
	}
}





?>