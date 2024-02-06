<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'sandbox.smtp.mailtrap.io';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = '082c6e35cc51b3';                     //SMTP username
    $mail->Password   = '19cabefe7f97fc';                               //SMTP password           //Enable implicit TLS encryption
    $mail->Port       = 2525;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`


    //Recipients
    $mail->setFrom('admin@example.com', 'Gennaro Mutti');
    $mail->addAddress($email, $_POST['firstname'] . '' . $_POST['lastname']);     //Add a recipient          //Name is optional
    $mail->addReplyTo('admin@example.com', 'Information');

    //Attachments
    $mail->addAttachment($tutta_dir);         //Add attachments
       //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Grazie per esserti Registrato al nostro sito';
    $mail->Body    = '<h1>Welcome!<h1/><p>Ti aspettiamo, a presto<p/>';


    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>