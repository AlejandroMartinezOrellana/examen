<?php 
include "conexion.php";

function crearTablas(){
	$cnn = new conexion();
	$con = $cnn->conectar();
	mysqli_select_db($con,"solostock");
}












?>