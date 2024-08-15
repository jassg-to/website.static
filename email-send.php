<?php

ob_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output (Just enable it for development purpose)
    $mail->isSMTP();                                            //Send using SMTP
    $mail->CharSet = 'UTF-8';                                   //UTF-8 Charset
    $mail->Host       = 'srv112.prodns.com.br';                 //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'form.sender@vibryt.com.br';             //SMTP username
    $mail->Password   = 'N^!@r88T&6WXtXdroU';                         //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('info@joannadeangelis.ca', 'Website Contact');   //Email sender
    $mail->addAddress('info@joannadeangelis.ca', 'Website Contact');                    //Email destination

    //Content
    $mail->isHTML(true);
    $mail->Subject =  'Website Contact';
    $mail->Body    = <<<EOT
    <b>Name:</b>    {$_POST['nome']} <br>
    <b>E-mail:</b>   {$_POST['email']} <br>
    <b>Phone:</b>   {$_POST['telefone']} <br>
    <b>Message::</b>   {$_POST['comment']} <br>
    EOT;

    $mail->send();
    
    header('Location: contact.php?envio=1');
} catch (Exception $e) {
    header('Location: contact.php?envio=2');

    // Visualize error messages on console
    // echo "<script>console.log('Message could not be sent. Mailer Error: '.$mail->ErrorInfo)</script>";
}
?>