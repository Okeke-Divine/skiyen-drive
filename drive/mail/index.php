<?php

require 'class/class.phpmailer.php';
$mail = new PHPMailer;
$mail->IsSMTP(); //Sets Mailer to send message using SMTP
//$mail->SMTPDebug = 3;
$mail->Host = 'smtp.gmail.com';

$mail->Port = '465'; //Sets the default SMTP server port
$mail->SMTPAuth = true; //Sets SMTP authentication. Utilizes the Username and Password variables
$mail->Username = 'gmail'; //Sets SMTP username
$mail->Password = "password"; //Sets SMTP password
$mail->SMTPSecure = 'ssl'; //Sets connection prefix. Options are "", "ssl" or "tls"
$mail->From = 'gajanand.kgn@gmail.com'; //Sets the From email address for the message
$mail->FromName = "My Company Name"; //Sets the From name of the message
$mail->AddAddress('recipient@address.com', 'Hello John'); //Adds a "To" address
$mail->AddCC("recipient@address.com", "Jhon"); //Adds a "Cc" address
$mail->WordWrap = 50; //Sets word wrapping on the body of the message to a given number of characters
$mail->IsHTML(true); //Sets message type to HTML 
$mail->Subject = "Text Subject"; //Sets the Subject of the message
$mail->Body = "Text Message";

if ($mail->Send()) { //Send an Email. Return true on success or false on error
    $error = '<label class="text-success">Thank you for contacting us</label>';
} else {
    $error = '<label class="text-danger">There is an Error</label>';
// echo $mail->ErrorInfo;
}

echo $error;
?>