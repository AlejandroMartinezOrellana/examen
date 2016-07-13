<?php 
class conexion{
	function conectar(){

		return mysqli_connect("localhost","root","");
	}

}

$cnn = new conexion();




?>