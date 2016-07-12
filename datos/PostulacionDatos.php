<?php 
include "../clases/Postulante.php";
include "conexion.php";

class empresaDatos{
	function insertarEmpresa($nombre,$rut,$apellidoPat,$apellidoMat,$FechaNac,$Sexo,$Telefono,$Email,$Direccion,$Comuna,$Educacion,$ExpArea,$Modalidad,$Curso){
		$cnn = new conexion();
		$con = $cnn->conectar();

		$Postulante = new Postulante();
		$Postulante->nombre=$nombre;
		$Postulante->rut=$rut;
		$Postulante->apellido_paterno=$apellidoPat;
		$Postulante->apellido_materno = $apellidoMat;
		$Postulante->fecha_nacimiento =$FechaNac;
		$Postulante->sexo=$Sexo;
		$Postulante->telefono=$Telefono;
                $Postulante->E_Mail=$Email;
                $Postulante->direccion=$Direccion;
                $Postulante->comuna=$Comuna;
                $Postulante->educacion=$Educacion;
                $Postulante->experiencia_programacion=$ExpArea;
                $Postulante->modalidad=$Modalidad;
                $Postulante->curso=$Curso;
		mysqli_select_db($con,"scripts");// nombre de database
		$sql = "INSERT INTO empresa( rut_empresa, razon_social, tipo_empresa, email_empresa, direccion_empresa, id_region, nombre_empresa, descripcion_empresa, categoria_empresa) VALUES('".$empresa->rut_empresa."', '".$empresa->razon_social."','".$empresa->tipo_empresa."','".$empresa->email_empresa."','".$empresa->direccion_empresa."','".$empresa->id_region."','".$empresa->nombre_empresa."','".$empresa->descripcion_empresa."','".$empresa->categoria_empresa."')";
			
		if(mysqli_query($con,$sql)){
			return true;
		}else{
			return false;
		}

		mysqli_close($con);		
	}

	function validar($nombre_empresa,$rut_empresa){
		$cnn = new conexion();
		$con = $cnn->conectar();

		$empresa = new empresa();
		$empresa->nombre_empresa=$nombre_empresa;
		$empresa->rut_empresa=$rut_empresa;
		mysqli_select_db($con,"solostock");// nombre de database
		$sql = " SELECT * FROM EMPRESA WHERE nombre_empresa='".$empresa->nombre_empresa."' AND rut_empresa='".$empresa->rut_empresa."'";

		$consulta = mysqli_query($con,$sql);
		$fila = mysqli_fetch_array($consulta);
		if($fila>0){
			if($fila["nombre_empresa"] == $empresa->nombre_empresa && $fila["rut_empresa"] == $empresa->rut_empresa){
				return true;
			}			
		}else{
			return false;
		}

	}


	function eliminarEmpresa($nombre_empresa,$rut_empresa){
		$cnn = new conexion();
		$con = $cnn->conectar();

		$empresa = new empresa();
		$empresa->nombre_empresa=$nombre_empresa;
		$empresa->password=$rut_empresa;
		mysqli_select_db($con,"solostock");// nombre de database
		$sql = " DELETE FROM EMPRESA WHERE nombre_empresa='".$empresa->nombre_empresa."' AND rut_empresa='".$empresa->rut_empresa."'";
			
		if(mysqli_query($con,$sql)){
			return true;
		}else{
			return false;
		}

		mysqli_close($con);		
	}



	function actualizaEmpresa($nombre_empresa,$rut_empresa){
		$cnn = new conexion();
		$con = $cnn->conectar();

		$empresa = new empresa();
		$empresa->nombre_empresa=$nombre_empresa;
		$empresa->rut_empresa=$rut_empresa;
		mysqli_select_db($con,"solostock");// nombre de database
		$sql = " UPDATE  EMPRESA SET nombre_empresa='".$empresa->nombre_empresa."' WHERE rut_empresa='".$empresa->rut_empresa."'";
			
		if(mysqli_query($con,$sql)){
			return true;
		}else{
			return false;
		}

		mysqli_close($con);		
	}
}

//declaramos nuevo objeto

//$obj = new empresaDatos();
//if($obj->insertarEmpresa("Falabella S.A.","77.261.280-K","falabella@gmail.com","Gral Pedro Pablo Dartnell 1741","Unipersonal","13","Falabella","Hogar","")){
//	echo "se insertó empresa :D";
//}else{
//	echo "no pasó nah :/";
//}




?>