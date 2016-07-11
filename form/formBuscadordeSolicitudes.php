<html 
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
        <link rel="stylesheet" href="../css/estiloestandar.css.css" >
        <script type="text/javascript" src="../js/validaciones.js" charset="utf-8"></script>
	<title></title>
    </head>
<!-- URL de prueba http://jsfiddle.net/33hmj/ -->
<script src="js/md5/md5.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <body>
       <form id="acceso" action="index.php" method="post">
            <fieldset>
                <legend>Buscador de solicitudes</legend>
                    <br>
                    </br>
                <fieldset>
                    <legend>Buscador por rut</legend>
                        <P>RUT 
                            <input name="rut" value="" type="text" />
                            <input type="submit" value="Buscar" />
                        </p>          
                </fieldset>
                    <br>
                    </br>    
                <fieldset>  
                    <legend>Buscador por fecha</legend>
                        <p>
                            Desde
                            <input type="date">
                            Hasta
                            <input type="date">
                        </p>
                            <input type="submit" value="Buscar" />
                </fieldset>
            </fieldset>
       </form>   
    </body>
</html>