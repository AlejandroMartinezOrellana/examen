<?php
    require_once '../clases/Usuario.php';
	$model_usuario = new ModelUsuario();
	 if($_SERVER['REQUEST_METHOD']=='GET'){
	 	$id_u = $_GET['id_u'];
		
		if($model_usuario->eliminarUsuario($id_u)){
			header('Status: 301 Moved permantly', false, 301);
		    header('Location:/CertificaDev/xxxxx.php');
		    exit();
		}else{
			header('Status: 301 Moved permantly', false, 301);
		    header('Location:/CertificaDev/xxxx.php');
		    exit();
		}
		
	 }else{
	 	header('Status: 301 Moved permantly', false, 301);
		header('Location:/CertificaDev/inicio.php');
		exit();
	 }
	
?>