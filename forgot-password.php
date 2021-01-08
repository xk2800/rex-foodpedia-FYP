<?php
include ('../db-con.php');

    if (!isset($_GET["code"])) {
        echo ("Page can't be found! Err_msg: Can't get code");
        exit();

    }

    $code = $_GET["code"];
    $getEmailQuery = mysqli_query($connect, "SELECT email FROM resetpwduser WHERE code='$code'");
    if(mysqli_num_rows($getEmailQuery) == 0){
        echo ("Page can't be found! Err_msg: No code found in database.");
        exit();
    }

    $connects = mysqli_connect("", "", "", "");


    if (isset($_POST["password"])) {
        $pw = $_POST["password"];
        $pwdd = md5($pw);                     //encrypt password
        
        $row = mysqli_fetch_array($getEmailQuery);
        $email = $row["email"];

        //salty
        $salty = "";

        //salty pwd
        $saltypwd = $salty.$pwdd;

        $query = mysqli_query($connect, "UPDATE acc SET password='$saltypwd' WHERE email='$email'");

        if ($query) {
            $query = mysqli_query($connects, "DELETE FROM resetpwduser WHERE code='$code'");
            echo ("Password has been updated!");
            exit();
        } else {
            echo ("Password update failed! Err_msg: Unable to delete code & update password.");
        }
    } 
?>
<!DOCTYPE html>
<html>
    <head><title>Forget Password | REX Foodpedia</title>

    <meta name="viewpoint" content="width=device-width, initial-scale=1">
    <meta name="viewpoint" content="width=device-width">
    
<!--INCLUDE START HERE-->
    <link rel="icon" type="image/png" href= "image/MYRUN 1.png">

<!--THIS IS FONT AWESOME JAVASCRIPT START-->
    <script src="https://kit.fontawesome.com/daa253e478.js" crossorigin="anonymous"></script>
<!--THIS IS FONT AWESOME JAVASCRIPT END-->

<!--THIS IS BOOTSTRAP CSS PART START-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<!--THIS IS BOOTSTRAP CSS PART END-->

<!--FONTS.CSS-->
<link rel="stylesheet" href="css/fonts.css">

</head>
<body>


    <div class="container">
        <form method="post">
            <input type="password" name="password" placeholder="Enter new password">
            <br>
            <input type="submit" name="submit" value="Update Password">
        </form>
    </div>


<!--THIS IS BOOTSTRAP JAVASRIPT PART START-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<!--THIS IS BOOTSTRAP JAVASCRIPT PART END-->

</body>
</html>