<html 
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
        <link rel="stylesheet" href="../css/Style2.css" >
        <script type="text/javascript" src="../js/validaciones.js" charset="utf-8"></script>
	<title>ejemplo</title>

    </head>

    <body>
       <form method="post" action="">
<label for="rut">Ingresa tu RUT para validar</label>
<input name="rut" value="" type="text" />
<input type="submit" value="probar" />
</form>
<div>
<?php 
require '../validacion/rut.php';
if($_POST['rut']){
    if(RutValidate($_POST['rut'])==true){
        echo "El rut ".$_POST['rut']." es correcto";
    }else{
         echo "El rut ".$_POST['rut']." no es incorrecto";
    }
}

?>

</html>