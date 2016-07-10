<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<!-- URL de prueba http://jsfiddle.net/33hmj/ -->
<script src="js/md5/md5.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<body>
    <form id="acceso" action="index.php" method="post">
    <fieldset>
        <legend>Formulario de Postulación</legend>
        <table width="589" cellpadding="7" cellspacing="0" style="page-break-before: always">
            <col width="132">
            <col width="133">
            <col width="133">
            <col width="17">
            <col width="101">
            <tr valign="TOP">
                <td width="132" style="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in;
                    padding-left: 0.08in; padding-right: 0.08in">
                    <p>
                        Rut</p>
                </td>
                <td width="133" style="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in;
                    padding-left: 0.08in; padding-right: 0.08in">
                    <p>
                        <br>
                    </p>
                </td>
                <td width="133" style="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in;
                    padding-left: 0.08in; padding-right: 0.08in">
                    <p>
                        Dirección</p>
                </td>
                <td colspan="2" width="132" style="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in;
                    padding-left: 0.08in; padding-right: 0.08in">
                    <p>
                        <br>
                    </p>
                </td>
            </tr>
            <tr valign="TOP">
                <td width="132" style="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in;
                    padding-left: 0.08in; padding-right: 0.08in">
                    <p>
                        Nombre</p>
                </td>
                <td width="133" style="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in;
                    padding-left: 0.08in; padding-right: 0.08in">
                    <p>
                        <br>
                    </p>
                </td>
                <td width="133" style="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in;
                    padding-left: 0.08in; padding-right: 0.08in">
                    <p>
                        Comuna</p>
                </td>
                <td colspan="2" width="132" style="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in;
                    padding-left: 0.08in; padding-right: 0.08in">
                    <p>
                        <br>
                    </p>
                </td>
            </tr>
            <tr valign="TOP">
                <td width="132" style="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in;
                    padding-left: 0.08in; padding-right: 0.08in">
                    <p>
                        Apellido Paterno</p>
                </td>
                <td width="133" style="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in;
                    padding-left: 0.08in; padding-right: 0.08in">
                    <p>
                        <br>
                    </p>
                </td>
                <td width="133" style="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in;
                    padding-left: 0.08in; padding-right: 0.08in">
                    <p>
                        Educación</p>
                </td>
                <td colspan="2" width="132" style="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in;
                    padding-left: 0.08in; padding-right: 0.08in">
                    <p>
                        <br>
                    </p>
                </td>
            </tr>
            <tr valign="TOP">
                <td width="132" style="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in;
                    padding-left: 0.08in; padding-right: 0.08in">
                    <p>
                        Apellido Materno</p>
                </td>
                <td width="133" style="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in;
                    padding-left: 0.08in; padding-right: 0.08in">
                    <p>
                        <br>
                    </p>
                </td>
                <td colspan="3" width="279" style="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in;
                    padding-left: 0.08in; padding-right: 0.08in">
                    <p>
                        <br>
                    </p>
                </td>
            </tr>
            <tr valign="TOP">
                <td width="132" style="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in;
                    padding-left: 0.08in; padding-right: 0.08in">
                    <p>
                        Fecha Nacimiento</p>
                </td>
                <td width="133" style="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in;
                    padding-left: 0.08in; padding-right: 0.08in">
                    <p>
                        <br>
                    </p>
                </td>
                <td colspan="2" width="164" style="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in;
                    padding-left: 0.08in; padding-right: 0.08in">
                    <p>
                        Ingrese cantidad de años</p>
                </td>
                <td width="101" style="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in;
                    padding-left: 0.08in; padding-right: 0.08in">
                    <p>
                        <br>
                    </p>
                </td>
            </tr>
            <tr valign="TOP">
                <td width="132" style="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in;
                    padding-left: 0.08in; padding-right: 0.08in">
                    <p>
                        Sexo</p>
                </td>
                <td width="133" style="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in;
                    padding-left: 0.08in; padding-right: 0.08in">
                    <p>
                        <br>
                    </p>
                </td>
                <td rowspan="3" colspan="3" width="279" style="border: 1px solid #00000a; padding-top: 0in;
                    padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                    <fieldset>
                        <legend>Modalidad y Curso al que postula</legend>
                        <table width="279" cellpadding="7" cellspacing="0">
                            <col width="125">
                            <col width="125">
                            <tr valign="TOP">
                                <td width="125" style="border: 1px solid #00000a; padding: 0in 0.08in">
                                    <p align="CENTER">
                                        Modalidad</p>
                                </td>
                                <td width="125" style="border: 1px solid #00000a; padding: 0in 0.08in">
                                    <p align="CENTER">
                                        <br>
                                    </p>
                                </td>
                            </tr>
                            <tr valign="TOP">
                                <td width="125" style="border: 1px solid #00000a; padding: 0in 0.08in">
                                    <p align="CENTER">
                                        Curso</p>
                                </td>
                                <td width="125" style="border: 1px solid #00000a; padding: 0in 0.08in">
                                    <p align="CENTER">
                                        <br>
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </fieldset>
                    <p style="margin-bottom: 0in">
                        <br>
                    </p>
                </td>
            </tr>
            <tr valign="TOP">
                <td width="132" style="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in;
                    padding-left: 0.08in; padding-right: 0.08in">
                    <p style="margin-bottom: 0in; line-height: 100%">
                        Teléfono</p>
                </td>
                <td width="133" style="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in;
                    padding-left: 0.08in; padding-right: 0.08in">
                    <p style="margin-bottom: 0in; line-height: 100%">
                        <br>
                    </p>
                </td>
            </tr>
            <tr valign="TOP">
                <td width="132" style="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in;
                    padding-left: 0.08in; padding-right: 0.08in">
                    <p style="margin-bottom: 0in; line-height: 100%">
                        Email</p>
                </td>
                <td width="133" style="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in;
                    padding-left: 0.08in; padding-right: 0.08in">
                    <p style="margin-bottom: 0in; line-height: 100%">
                        <br>
                    </p>
                </td>
            </tr>
            <tr>
                <td colspan="5" width="573" valign="TOP" style="border: 1px solid #00000a; padding-top: 0in;
                    padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                    <p style="margin-bottom: 0in; line-height: 100%">
                        <br>
                        <input type="button" name="enviar" value="Enviar" onclick="Validar()">
                        <br />
                    </p>
                </td>
            </tr>
        </table>
    </fieldset>
    </form>
</body>
</html>
