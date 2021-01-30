<?php

/**
 * This example shows making an SMTP connection with authentication.
 */

//Import the PHPMailer class into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

require '../Mailer/vendor/autoload.php';

ob_start();
include('contentstest.php');
$content = ob_get_contents();
//Create a new PHPMailer instance
$mail = new PHPMailer();
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// SMTP::DEBUG_OFF = off (for production use)
// SMTP::DEBUG_CLIENT = client messages
// SMTP::DEBUG_SERVER = client and server messages
$mail->SMTPDebug = SMTP::DEBUG_SERVER;
//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 587;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication
$mail->Username = 'noreply.rexfoodipedia@gmail.com';
//Password to use for SMTP authentication
$mail->Password = 'srzbcsrqcghavujd';
//Set who the message is to be sent from
$mail->setFrom('food@gmail.com', 'rexy');
//Set an alternative reply-to address
$mail->addReplyTo('noreply.rexfoodipedia@gmail.com', 'rexy reply');
//Set who the message is to be sent to
$mail->addAddress('xavierkhew00@gmail.com', 'John Doe');
//Set the subject line
$mail->Subject = 'PHPMailer SMTP test';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body

$mail->msgHTML($content);

//$mail->msgHTML(file_get_contents('contentstest.php'), __DIR__);
//$mail->msgHTML(ob_get_contents('contentstest.php'), __DIR__);
//$mail->msgHTML($body);
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
//$mail->addAttachment('img/test.png');

//send the message, check for errors
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message sent!';
}