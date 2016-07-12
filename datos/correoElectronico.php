<?php
require '../PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output
$mail->SMTPDebug = 2;
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host ='smtp.gmail.com';  
// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'camila.vsquez@gmail.com';                 // SMTP username
$mail->Password = 'Amira4404';                           // SMTP password
$mail->SMTPSecure = 'TLS';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('camila.vsquez@gmail.com', 'Soporte Tecnico');


$mail->addCC('camila.vsquez@gmail.coml');



//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('c://temp//archivo.csv','archivo'.date("Ymd").'.csv');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Reporte de respaldos al día de hoy'.date("Ymd");
$mail->Body    = 'Estoy probando esta wea volá xD' ;
$mail->AltBody = 'Se adjunta archivo csv con los respaldos existentes';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

?>