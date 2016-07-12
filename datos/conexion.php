<?php 
class conexion{
	function conectar(){

		return mysqli_connect("localhost","root","");
	}

}

$cnn = new conexion();



// Comprueba que aplicación este conectandose a servidor 
//if($cnn->conectar()){
//	echo "conectado C:";
//}else{
//	echo "desconectado :(";
//}

?>