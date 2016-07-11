<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
        <link rel="stylesheet" href="../css/Style2.css" >
        <script type="text/javascript" src="../js/validaciones.js" charset="utf-8"></script>
	<title>Registro</title>

    </head>
    <!-- URL de prueba http://jsfiddle.net/33hmj/ -->
    <script src="js/md5/md5.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <body>
        <form id="acceso" action="index.php" method="post"></form>
            <fieldset>
            <legend>Formulario de Registro</legend>
                <TABLE WIDTH=321 CELLPADDING=7 CELLSPACING=0 STYLE="page-break-before: always">
	<COL WIDTH=136>
	<COL WIDTH=155>
	<TR VALIGN=TOP>
		<TD WIDTH=136 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>Rut</P>
		</TD>
		<TD WIDTH=155 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P><input type="text" name="rut" id="rut"/>
			</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=136 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>Nombre</P>
		</TD>
		<TD WIDTH=155 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P><input type="text" name="nombre" id="nombre"/>
			</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=136 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>Apellido Paterno</P>
		</TD>
		<TD WIDTH=155 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P><input type="text" name="aPaterno" id="aPaterno"/>
			</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=136 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>Apellido Materno</P>
		</TD>
		<TD WIDTH=155 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P><input type="text" name="aMaterno" id="aMaterno"/>
			</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=136 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>Contraseña</P>
		</TD>
		<TD WIDTH=155 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                    <P><input type="password" name="clave" id="clave"/>
			</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=136 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>Repetir Contraseña</P>
		</TD>
		<TD WIDTH=155 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                    <P><input type="password" name="repClave" id="repClave"/>
			</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=136 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P><BR>
			</P>
		</TD>
		<TD WIDTH=155 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P><input type="button" name="Registrar" value ="Registrar" onclick="Validar()">
			</P>
		</TD>
	</TR>
</TABLE>
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
