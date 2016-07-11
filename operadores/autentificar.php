<?php
   require_once '../clases/Usuario.php';
   $model_usuario = new ModelUsuario();
    if($_SERVER['REQUEST_METHOD']=='POST'){
    	$correo = $_POST['authcorreo'];
		$contrasena1 = $_POST['authpassword'];
		$passbd = $model_usuario->autentificar($correo);
		if($contrasena1==$passbd){
			session_start();
			$datos_usuario = $model_usuario->listarInfoUsuario($correo);
			$_SESSION['usuario']=$datos_usuario;
			header('Status: 301 Moved permantly', false, 301);
		    header('Location:/CertificaDev/clases/Usuario.php');
		    exit();
		}else{
			header('Status: 301 Moved permantly', false, 301);
		    header('Location:/CertificaDev/menu.php');
		    exit();
		}
		
    }else{
    	header('Status: 301 Moved permantly', false, 301);
		header('Location:/CertificaDev/menu.php');
		exit();
    }
?>