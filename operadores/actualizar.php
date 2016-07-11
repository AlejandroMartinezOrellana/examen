<?php
       require_once '../clases/Usuario.php';
   $model_usuario = new ModelUsuario();
    if($_SERVER['REQUEST_METHOD']=='POST'){
    	$id_usuario = $_POST['id_usuario'];
    	$nombre = $_POST['nombre'];
        $clave = $_POST['clave'];
       		$correo = $_POST['correo'];
		$valido = TRUE;
			if($model_usuario->modificarUsuario($id_usuario, $nombre,$correo, $clave)){
				session_start();
				header('Status: 301 Moved permantly', false, 301);
			    header('Location:/CertificaDev/clases/xxxx.php');
			    exit();
			  }else{
	    	    header('Status: 301 Moved permantly', false, 301);
			    header('Location:/CertificaDev/clases/Usuario.php');
			    exit();
	          }
			
    }else{
    	header('Status: 301 Moved permantly', false, 301);
		header('Location:/CertificaDev/menu.php');
		exit();
    }
?>