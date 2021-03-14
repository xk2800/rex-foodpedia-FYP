<?php
//WORKING: Xavier

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | REX Foodipedia</title>

<!--FONTS.CSS STARTS-->
    <link rel="stylesheet" href="css/fonts.css">
<!--FONTS.CSS END-->

<!--THIS IS FONT AWESOME JAVASCRIPT START-->
    <script src="https://kit.fontawesome.com/.js" crossorigin="anonymous"></script>
<!--THIS IS FONT AWESOME JAVASCRIPT END-->

<!--THIS IS BOOTSTRAP CSS PART START-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<!--THIS IS BOOTSTRAP CSS PART END-->

<!--          CSS  START             -->
    <style>
        body{
            background-color: #e7ded2;
        }

        html, body {
            overflow-x: hidden;
        }

        .about-us{
            background-color: #cccccc;
            height: 250px;
            background-position: center;
            background-repeat: no-repeat;
            background-size:cover;
            position: relative;
            text-align: center;;
        }

        .about-text{
            text-align: center;
            position: absolute;
            top:50%;
            left:50%;
            transform:translate(-50%,-50%);
            color:orange;
            font-weight:bold;
        }

        #desc{
            /*margin-left:28%;*/
        }

        .col input{
            display: block;
        }

        .parallax-one {
            padding-top: 200px; 
            padding-left: 50px; 
            padding-right: 50px; 
            padding-bottom: 200px; 
            overflow: hidden; 
            position: relative; 
            width: 100%;
            background-image: url("img/food1.jpg"); 
            background-attachment: fixed; 
            background-size: cover; 
            -moz-background-size: cover; 
            -webkit-background-size: cover; 
            background-repeat: no-repeat; 
            background-position: top center;
            z-index:2;
        }

        .submit-text{
            font-weight: bold;
            font-size: 39px;
        }

        .over-img-txt{
            font-family: 'Lexend Deca', sans-serif;
            font-size: 3em;
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -150%);
            margin-top: 60px;
        }

        .submit-text{
            font-family: 'Lexend Deca', sans-serif;
        }

        #desc{
            font-family: 'Oswald', sans-serif;
        }

        #sendingbtn{
            background-color:#a3d2ca;
            font-family: 'Bangers', cursive;
            font-size: 25px;
        }

        .contact-form input, .contact-form textarea{
            width: 100%
        }

        .contact-form textarea{
            height: 150px
        }

        @media only screen and (max-width: 600px){
            .submit-text{
                font-size: 37px;
            }
        }

    </style>
<!--          CSS   END              -->

</head>
<body>
    <!-- PHP-->
<?php
    include("nav.php");
?>
<!--PHP-->
   
        <!-- <div class="about-us" style="background-image: url(img/food1.jpg);">
                <h1 class="about-text">CONTACT US</h1>
        </div> -->
    
    <div class="parallax-one main">
        <span class="over-img-txt">
            <span class="contact-us-text">Contact Us</span>
        </span>
    </div>

        
    <div class="container">
        <div class="row">

            <div class="col-sm-6">  <!--style="float: left; width: 50%;"-->
                    <br><br><br>
                    <h2 class="submit-text">Submit your questions to us!</h2>
                    <br><br>
                    <span id="text-section">
                        <h4 id="desc">Address: <br><br> Multimedia University, <br>Persiaran Multimedia, <br>63100 Cyberjaya, Selangor, <br>Malaysia</p></h4>
                        
                        <h5 id="desc"><br><br><a href="mailto: noreply.rexfoodipedia@gmail.com"><u>Email Us</u></a></h5>
                        <h5 id="desc"><a href="tel:1-300-800-668"> <u>Call Us</u></a></h5>
                    </span>
                </div>

            <div class="col-sm-6" id="form-section"> <!-- style="text-align: center; float: right; width: 50%; margin-top: 5%;"-->
            <br><br><br><br>
                <form method="POST" class="contact-form">
                    
                    <input name="name" type="text" placeholder="Your name"/> <!--  style="width: 60%;height: 30px; float:left;"-->
                    <br><br>
                    <input name="email" type="email" placeholder="Your email"> <!--  style="width:60%;height:30px;float:left;" -->
                    <br><br>
                    <input name="subject" type="text" placeholder="Subject">
                    <br><br>
                    <textarea name="comment" placeholder="Comment"></textarea> <!--  style="width:60%;height:150px;float:left;resize: none;" -->
                    <br><br><br><br><br><br><br>
                    <button type="submit" class="btn btn-light btn-md rounded-pill" id="sendingbtn" name="sendemail">Submit</button>
                </form>
            
            </div>
            
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    

</body>
</html>

<?php

        include ('db-connect.php');

        // Import PHPMailer classes into the global namespace
        // These must be at the top of your script, not inside a function
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\SMTP;
        use PHPMailer\PHPMailer\Exception;

        require 'Mailer/vendor/autoload.php';

    if(isset($_POST["sendemail"])){

        $nameFrom   = $_POST["name"];
        $emailFrom  = $_POST["email"];
        $subject    = $_POST["subject"];
        $content    = $_POST["comment"];

        $mail = new PHPMailer(true);
            
                try {
                    //Server settings
                    $mail->SMTPDebug = 0;         //change to 0 for no debug message, 1 for debug message     
                    $mail->isSMTP();                                            // Send using SMTP
                    $mail->Host       = 'smtp.gmail.com';                      // Set the SMTP server to send through
                    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                    $mail->Username   = 'noreply.rexfoodipedia@gmail.com';                     // SMTP username
                    $mail->Password   = 'srzbcsrqcghavujd';                              // SMTP password
                    $mail->SMTPSecure = "tls";         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
            
                    //Recipients
                    $mail->Sender=('noreply.rexfoodipedia@gmail.com');
                    $mail->setFrom('noreply.rexfoodipedia@gmail.com', 'Name: '.$nameFrom.'; Email: '.$emailFrom, FALSE);
                    $mail->addAddress('noreply.rexfoodipedia@gmail.com');     // Add a recipient
                        
                    // Content
                    $mail->isHTML(true);                                  // Set email format to HTML
                    $mail->Subject = $subject;
                    $mail->Body    = $content;
                    $mail->AltBody = $content;
            
                    $mail->send();
                    echo 'Message has been sent';
                } catch (Exception $e) {
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }
            
                die();
    }




?>