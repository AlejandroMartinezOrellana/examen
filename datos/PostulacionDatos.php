<?php 
include "../clases/Postulante.php";
include "conexion.php";

class PostulacionDatos{
	function insertarPostulacnte($nombre,$rut,$apellidoPat,$apellidoMat,$FechaNac,$Sexo,$Telefono,$Email,$Direccion,$Comuna,$Educacion,$ExpArea,$AñosLAB,$Modalidad,$Curso){
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
                $Postulante->años=$AñosLAB;
                $Postulante->modalidad=$Modalidad;
                $Postulante->curso=$Curso;
		mysqli_select_db($con,"scripts");// nombre de database
		$sql = "INSERT INTO FormularioPostulacion( nombre, rut, ApellidoPat, ApellidoMat, FechaNac, "
                        . "sexo, telefono, E_Mail, direccion,comuna,educacion,ExperienciaLab,AñosLab,modalidad,curso) "
                        . "VALUES('".$Postulante->nombre."', '".$Postulante->rut."','".
                        $Postulante->apellido_paterno."','".$Postulante->apellido_materno."','".$Postulante->fecha_nacimiento."','".
                        $Postulante->sexo."','".$Postulante->telefono."','".$Postulante->E_Mail."','".
                        $Postulante->direccion."','".$Postulante->comuna."','".$Postulante->educacion."','".$Postulante->experiencia_programacion."','"
                        .$Postulante->años."','".$Postulante->modalidad   ."','".$Postulante->curso."')";
			
		if(mysqli_query($con,$sql)){
			return true;
		}else{
			return false;
		}

		mysqli_close($con);		
	}

	function validar($nombre,$rut){
		$cnn = new conexion();
		$con = $cnn->conectar();

		$empresa = new Postulante();
		$empresa->nombre=$nombre;
		$empresa->rut=$rut;
		mysqli_select_db($con,"scripts");// 
		$sql = " SELECT * FROM FormularioPostulacion WHERE nombre='".$Postulante->nombre."' AND rut='".$Postulante->rut."'";

		$consulta = mysqli_query($con,$sql);
		$fila = mysqli_fetch_array($consulta);
		if($fila>0){
			if($fila["nombre"] == $Postulante->nombre && $fila["rut"] == $Postulante->rut){
				return true;
			}			
		}else{
			return false;
		}

	}


	function eliminarPostulante($nombre,$rut){
		$cnn = new conexion();
		$con = $cnn->conectar();

		$Postulante = new Postulante();
		$Postulante->nombre=$nombre;
		$Postulante->password=$rut;
		mysqli_select_db($con,"scripts");
		$sql = " DELETE FROM FormularioPostulacion  WHERE nombre='".$Postulante->nombre."' AND rut='".$Postulante->rut."'";
			
		if(mysqli_query($con,$sql)){
			return true;
		}else{
			return false;
		}

		mysqli_close($con);		
	}



	function actualizaPostulante($nombre,$rut){
		$cnn = new conexion();
		$con = $cnn->conectar();

		$Postulante = new Postulante();
		$Postulante->nombre=$nombre;
		$Postulante->rut=$rut;
		mysqli_select_db($con,"scripts");
		$sql = " UPDATE  FormularioPostulacion SET nombre='".$Postulante->nombre."' WHERE rut='".$Postulante->rut."'";
			
		if(mysqli_query($con,$sql)){
			return true;
		}else{
			return false;
		}

		mysqli_close($con);		
	}
}

?>