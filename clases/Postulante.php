<?php 

class Postulante{
	
	
	public $rut;
	function get_rut(){
		return $this->rut;
	}

	function set_rut($rut){
		$this->rut =$rut;
	}

	public $nombre;
	function get_nombre(){
		return $this->nombre;
	}

	function set_nombre($nombre){
		$this->nombre =$nombre;
	}

	public $apellido_paterno;
	function get_apellido_paterno(){
		return $this->apellido_paterno;
	}

	function set_apellido_paterno($apellido_paterno){
		$this->apellido_paterno =$apellido_paterno;
	}

	public $apellido_materno;
	function get_apellido_materno(){
		return $this->apellido_materno;
	}

	function set_apellido_materno($apellido_materno){
		$this->apellido_materno =$apellido_materno;
	}


	public $fecha_nacimiento;
	function get_fecha_nacimiento(){
		return $this->fecha_nacimiento;
	}

	function set_fecha_nacimiento($fecha_nacimiento){
        $this->fecha_nacimiento =$fecha_nacimiento;}
	
        public $sexo;
	function get_sexo(){
		return $this->sexo;
	}

	function set_sexo($sexo){
		$this->sexo =$sexo;
	}

	public $telefono;
	function get_telefono(){
		return $this->telefono;
	}

	function set_telefono($telefono){
		$this->telefono =$telefono;
	}

		public $email;
	function get_email(){
		return $this->email;
	}

	function set_email($email){
		$this->email =$email;
	}
        
        public $direccion;
	function get_direccion(){
		return $this->direccion;
	}

	function set_direccion($direccion){
		$this->direccion =$direccion;
	}    
        
         public $comuna;
	function get_comuna(){
		return $this->comuna;
	}

	function set_comuna($comuna){
		$this->comuna =$comuna;
	}    
        
        public $educacion;
	function get_educacion(){
		return $this->educacion;
	}

	function set_educacion($educacion){
		$this->educacion =$educacion;
	}    
        
         public $experiencia_progamacion;
	function get_experiencia_progamacion(){
		return $this->experiencia_progamacion;
	}

	function set_experiencia_progamacion($experiencia_progamacion){
		$this->experiencia_progamacion =$experiencia_progamacion;
	}    
                 public $años;
	function get_años(){
		return $this->años;
	}

	function set_años($AñosLAB){
		$this->años =$AñosLAB;
	}    
        
            public $modalidad;
	function get_modalidad(){
		return $this->modalidad;
	}

	function set_modalidad($modalidad){
		$this->modalidad =$modalidad;
	}    
        
               public $curso;
	function get_curso(){
		return $this->curso;
	}

	function set_curso($curso){
		$this->curso =$curso;
	}    
        
        
}
?>