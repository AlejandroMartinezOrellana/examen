function validarnombre() {
	var nombre = document.getElementById("nombre").value;
    var patrondenombre = /([a-z ñáéíóú]{2,60})$/;
    if ((nombre.match(patrondenombre)) && (nombre.toString()!='')) {
        document.getElementById("errnombre").innerHTML='';
         return true;
    } else {
		document.getElementById("errnombre").innerHTML='(*)';
		 return false;
      } 
    }
    
function validarcorreo() {
	var correo = document.getElementById("correo").value;
    var patrondecorreo = /[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
    if ((correo.match(patrondecorreo)) && (correo.toString()!='')) {
        document.getElementById("errcorreo").innerHTML='';
         return true;
    } else {
		document.getElementById("errcorreo").innerHTML='(*)';
         return false;
      } 
    }
function validarcontrasena() {
	 var contrasena = document.getElementById("password").value;
    if ((contrasena.length > 7) && (contrasena.toString()!='')) {
        document.getElementById("errcontrasena1").innerHTML='';
        return true;
    } else {
		document.getElementById("errcontrasena1").innerHTML='(*)';
        return false;
      } 
    }

function validarcontrasenas() {
   var contrasena1 = document.getElementById("password").value;
   var contrasena2 = document.getElementById("password2").value;
    if (contrasena1.toString()==contrasena2.toString()) {
        document.getElementById("errcontrasena2").innerHTML='';
        return true;
    } else {
		document.getElementById("errcontrasena2").innerHTML='(*)';
        return false;
      } 
    }
 //validar autentificacion 
function validarcorreoauth() {
	var correo = document.getElementById("correoauth").value;
    var patrondecorreo = /[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
    if ((correo.match(patrondecorreo)) && (correo.toString()!='')) {
        document.getElementById("errcorreo_auth").innerHTML='';
        return true;
    } else {
		document.getElementById("errcorreo_auth").innerHTML='(*)';
        return false;
      } 
    }
    
function validarcontrasenaauth() {
	var contrasena = document.getElementById("passwordauth").value;
    if ((contrasena.length > 7) && (contrasena.value!='')) {
        document.getElementById("errcontrasena_auth").innerHTML='';
        return true;
    } else {
		document.getElementById("errcontrasena_auth").innerHTML='(*)';
        return false;
      } 
    }
    
function validarFormauth(){
	var formulario_auth;
	formulario_auth = validarcorreoauth();
	if(formulario_auth == true){
	formulario_auth = validarcontrasenaauth();
	}
	return formulario_auth; 
}
function validarFormulario(){
	
	var formulario = false;
	formulario = validarnombre();
	if(formulario){
	  formulario = validarcorreo();
	  if(formulario){
	  	formulario = validarcontrasena();
	  	 if(formulario){
	  	 	formulario = validarcontrasenas();
	  	 }
	  }
	}
	return formulario; 
	
	//return true; consola javascript source
}
