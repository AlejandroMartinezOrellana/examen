<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
        <link rel="stylesheet" href="../css/estiloestandar.css" >
        <script type="text/javascript" src="../js/validaciones.js" charset="utf-8"></script>
	<title>Login</title>

    </head>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <body>
        <form id="acceso" action="index.php" method="post">
            <fieldset>
                <br>
                </br>
                <legend>Personal information</legend>
                    <br>
                    </br>
                Usuario:
                <br>
                    <input type="text" name="usuario" id="usuario">
                </br>
                Clave:
                <br>
                    <p>
                        <input type="text" name="clave" id="clave">
                
                        <div id="mensaje">
                             <input type="button" name="enviar" value ="Enviar" onclick="Validar()">
                        </div>
                    </p>
                </br>
            </fieldset>
        </form>      
    </body>
    
    <script> 
        function Validar(){
        var clave;
        var dato=$("#clave").val();
        clave=CryptoJS.MD5(dato).toString();
        
        
          $.ajax({
                    url:'ValidaAcceso.php',
                    type:'POST',
                    data:"usuario="+$("#usuario").val()+"&clave="+clave,
                    success:function(datos){
                      if (datos=='true') 
                          $("#acceso").submit();
                      else
                           $("#mensaje").html("Usuario o clave erroneo");
                    }
                });
        
        }
    </script> 
</html>
