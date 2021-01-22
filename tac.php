<!DOCTYPE html>
<?php

    session_start();
    include "db-connect.php";
    //ob_start();
    $_SESSION["cardnum"];


?>
<html>

<head>
    <title>MOCK TAC | REX Foodipedia</title>

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

    <link rel="stylesheet" href="css/tac.css">

</head>

<body>

<?php
        include("nav.html");

        $cardnum        = $_SESSION["cardnum"];
        $pay_transfer   = $_SESSION['pay_total'];
        //$cardnum = $_SESSION['cardnum'];
        //$email = "xavierkhew00@gmail.com";
        $email = $_SESSION["email"];

        //$test = $_POST['cardnum'];
        //$test = $_REQUEST['cardnum'];
        
        $time = time();
        $time_output = date('d M Y', str_replace('-','/', $time));

        $number =  $cardnum; //https://stackoverflow.com/questions/45588890/displaying-last-4-digit-credit-card/45588941
        $masked =  str_pad(substr($number, -4), strlen($number), '*', STR_PAD_LEFT);
        
        //take from acc table = $row
        $result = mysqli_query($connect, "SELECT * from user_acc WHERE email = '$email'");
        $row = mysqli_fetch_assoc($result);

        /*$card_result = mysqli_query($connect, "SELECT * from user_acc WHERE email = '$email'");
        $card_output = mysqli_fetch_assoc($card_result);*/
?>

    <br><br>
    <div class="container d-flex flex-column align-items-center">
        <span id="bold-text" class="mock"><p>MOCK TAC PAGE</p></span>
        <div class="row">
            <img src="img/fake_bank.png" alt="Bank Image">
            <img src="img/mastercard_45px.png" alt="MasterCard Logo">
        </div>

        <div id="top-command" class="box">
            <span id="bold-text"><p>Complete this purchase</p></span>
            <p>Enter the <span id="bold-text">One-Time Passcode</span> that <span id="bold-text">was not</span> to your registered mobile <span id="bold-text"><?php echo "+6".$row["phone_number"]; ?></span></p>
        </div>

        <div id="bottom-command" class="box">
            <div class="parent">
                <div class="div1" id="labels">Merchant Name</div>
                <div class="div2">: <span id="name-space"><input type="text" id="inputs" value="REX Foodipedia"></span></div>
                <div class="div3" id="labels"><br>Amount</div>
                <div class="div4"><br>: <span id="name-space"><input type="text" id="inputs" value="<?php echo "RM".number_format((float)$pay_transfer, 2, '.', ''); ?>"></span></div>
                <div class="div5" id="labels"><br>Date</div>
                <div class="div6"><br>: <span id="name-space"><input type="text" id="inputs" value="<?php echo $time_output; ?>"></span></div>
                <div class="div7" id="labels"><br>Bank Card Number</div>
                <div class="div8"><br>: <span id="name-space"><input type="text" id="inputs" value="<?php echo $masked ?>"></span></div>
                <div class="div9" id="labels"><br>TAC Code</div>
                <div class="div10"><br>: <span id="name-space"><input type="text" id="inputs" placeholder="Enter 123456" name="tac_code"></span></div>
                <div class="div11"></div>
                <div class="div12"> Enter <code>123456</code> above</div>
            </div>
            <div class="row align-items-center" id="payment-buttons">
                <br><br><br><br>
                <p><button type="submit" class="primarybtn" name="submit_tacbtn" id="pay">Submit</button></p>
                <p><button type="submit" class="outlinebtn" name="resend_tacbtn" id="pay">Resend TAC</button></p>
                <p><button type="submit" class="outlinebtn" name="cancel_tacbtn" id="pay">Cancel</button></p>
            </div>
        </div>
        
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

    echo $actual_time."<br>";
    echo $pay_transfer."<br>";
    echo $cardnum;


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

