<?php 
    session_start();
    require 'Usuario.php';
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    
    <body>
        <?php 
            require 'ValidaSesion.php';
        ?>
        
        <?php
            $oUsr=unserialize($_SESSION['oUsr']);
            echo "Cambiar clave a:".$oUsr->getNombre()." ".$oUsr->getApellido();
        ?>
    </body>
</html>