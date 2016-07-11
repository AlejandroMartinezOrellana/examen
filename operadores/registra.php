<?php
   require_once '../clases/Usuario.php';
   $model_usuario = new ModelUsuario();
    if($_SERVER['REQUEST_METHOD']=='POST'){
    	$nombre = $_POST['nombre'];
		$correo = $_POST['correo'];
		$clave = $_POST['clave'];
		$clave2 = $_POST['clave2'];
		$valido = TRUE;
		if(! preg_match('/([A-Z a-z ñáéíóú]{2,60})$/', $nombre)){
			$valido = $valido && FALSE;
		}
		if(! preg_match('/[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/', $correo)){
			$valido = $valido && FALSE;
		}if(strlen($clave)>7){
			
		  if($clave!=$clave2){
		  	$valido = $valido && FALSE;
		  }	
		}

		if($model_usuario->validarUsuario($correo)){
			 $valido = $valido && FALSE;
		}
		
		if($valido){
			if($model_usuario->registroUsuario($nombre, $correo, $clave)){
				header('Status: 301 Moved permantly', false, 301);
			    header('Location:/CertificaDev/clases/xxxx.php');
			    exit();
			  }
			
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