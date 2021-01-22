<!DOCTYPE html>
<?php

    include "db-connect.php";
    session_start();
    ob_start();

?>
<html>

<head>
    <title>Delivery Checkout | REX Foodipedia</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--INCLUDE START HERE-->
    <link rel="icon" type="image/png" href= "img/logo/logo.png">

    <!--THIS IS FONT AWESOME JAVASCRIPT START-->
    <script src="https://kit.fontawesome.com/daa253e478.js" crossorigin="anonymous"></script>
    <!--THIS IS FONT AWESOME JAVASCRIPT END-->

    <!--THIS IS BOOTSTRAP CSS PART START-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!--THIS IS BOOTSTRAP CSS PART END-->

    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>

    <!-- jQuery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!--FONTS.CSS-->
    <link rel="stylesheet" href="css/fonts.css">

    <link rel="stylesheet" href="css/checkout.css">


</head>

<body>

<?php
        include("nav.html");
        $email = "xavierkhew00@gmail.com";
        //$email = $_SESSION["email"];
?>

    <br><br>
    <div class="container">

        
    </div>
    <br><br>


    <!--THIS IS BOOTSTRAP JAVASRIPT PART START-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <!--THIS IS BOOTSTRAP JAVASCRIPT PART END-->

</body>
</html>

<?php

    //time set
    date_default_timezone_set("Asia/Kuala_Lumpur");
    $time = time();
    $actual_time = date('Y-m-d H:i:s', $time);

    echo $actual_time;


echo "<br>".$email;

    if(isset($_POST["make_paymentbtn"])){
        
        $send_type  = "Delivery";

        $contact    = $_POST["contect"];
        $address    = $_POST["address-selection"];
        $pay        = ($_POST["payment"] == "Credit / Debit Card") ? $_POST['card-num']:$_POST['payment'];
        $email      = $_POST["user_email"];
        $input_time = $actual_time;


        echo $contact."<br>".$address."<br>".$pay."<br>".$email;

        //$query = "UPDATE resume SET phone_number='$p_number' , last_edit_by='user' , vetting='1' , file='$file' , job_type='$job', last_edit_time='$time', db_time='$db_info' WHERE email='$email'";
        
        if($pay == "Cash On Delivery"){
            $pay_out = '0';

        } else if ($pay == "Credit / Debit Car"){
            $pay_out = '1';
        
        } else if ($pay == "Online Banking"){
            $pay_out = '2';
        
        }else{
            $pay_out = '0';
        }

        $query = "UPDATE transaction SET contactornot='$contact', address='$address', payment_method='$pay_out', send_type='$send_type', payment_time='$input_time' WHERE email='$email'";
        
        if(mysqli_query($connect, $query)){
            echo "<br>success insert into db";
            //echo '<script>("Your account is verified")</script>'; //not needed if unwanted
            //session_start();
            $_SESSION['email'] = $email;
            header('location:resume');
        }else{
            echo "failed";
        }
        //header('location: test.php');
    }


?>

