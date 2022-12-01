<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/PHPMailer/src/Exception.php';
require 'phpmailer/PHPMailer/src/PHPMailer.php';
require 'phpmailer/PHPMailer/src/SMTP.php';

enviarEmail();

function enviarEmail(){
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 0;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'mail.fraremsac.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'contacto@fraremsac.com';                     //SMTP username
        $mail->Password   = 'confr@2022';                               //SMTP password
        $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('contacto@fraremsac.com', 'Fraremsac Web');
        // $mail->addAddress('freddymh07952019@gmail.com', 'Mailer');     //Add a recipient
        $mail->addAddress('contacto@fraremsac.com', 'Mailer');     //Add a recipient
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $asunto;
        $mail->Body    = 'Nombre: '.$nombre.'<br/> Correo: '.$email.'<br/>'.$celular.'<br/>'.$mensaje;
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 1;
    } catch (Exception $e) {
        echo "Correo no enviado. Mailer Error: {$mail->ErrorInfo}";
    }
}

?>