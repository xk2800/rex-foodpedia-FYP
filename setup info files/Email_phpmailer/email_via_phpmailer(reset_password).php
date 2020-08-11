<?php

include ('connection.php');

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if(isset($_POST["submit"])){

    $emailTo = $_POST["email"];


    $code = uniqid(true);
    $query = mysqli_query($connect, "INSERT INTO resetpwd(code, email) VALUES('$code', '$emailTo')");
    if (!$query) {
        echo ("Error! Err_msg: query var unable to read.");
        exit();
    }


    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 1;         //change to 0 for no debug message, 1 for debug message     
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                      // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'noreply.rexfoodipedia@gmail.com';                     // SMTP username
        $mail->Password   = 'srzbcsrqcghavujd';                              // SMTP password
        $mail->SMTPSecure = "tls";         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->Sender=('noreply.rexfoodipedia@gmail.com');
        $mail->setFrom('noreply.rexfoodipedia@gmail.com', 'Rex Foodipedia Reset', FALSE);
        $mail->addAddress($emailTo);     // Add a recipient
        $mail->addReplyTo('noreply.rexfoodipedia@gmail.com', 'No-Reply');

        $url = "http://" .$_SERVER["HTTP_HOST"] . dirname($_SERVER["PHP_SELF"]) . "/resetPassword.php?code=$code";

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Reset Password Link';
        $mail->Body    = "<h1>You have requsted a password reset.</h1>
                            <p>Click <a href='$url'>here</a> to reset your password.</p>
                            <p></p><p>If you can't click the link then try here $url</p>";
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

    exit();
}

?>

<div>
            <h2>Reset password</h2>

            <p>An e-mail will be sent to you with instructions on how to reset your password.</p>
            <form method="post">
                <input type="text" name="email" placeholder="Enter your email">
                <button type="submit" name="submit">Get new password by email</button>

            </form>
        </div>











