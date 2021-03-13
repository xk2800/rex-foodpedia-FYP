<html>
<head>

    <title>Reset Account Password | REX Foodipedia</title>
    
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href= "img/logo/logo.png">

    <!-- CSS for all sections in this page -->
    <link rel="stylesheet" href="css/font.css">
    
    <!-- CSS for all sections in this page -->
    <link rel="stylesheet" href="css/resetemailpage.css">
</head>
<body>

    <div class="container">
        <br><br><br>
        <img src="../img/logo/LOGO standard.png" alt="REX Foodipedia Logo">
        <br><br>
        <h1>Reset Account Password</h1>
        <br>
        <div id="error" style="color: yellow;"></div>
    </div>
<?php
include ('db-connect.php');

    if (!isset($_GET["code"])) {
        //echo ("Page can't be found! Err_msg: Can't get code");
        echo '<script>document.getElementById("error").innerHTML = "Page unable to be found! <br>Err_msg: Unable to get code<br><br>"</script>';
        exit();

    }

    $code = $_GET["code"];
    $getEmailQuery = mysqli_query($connect, "SELECT email FROM resetpwduser WHERE code='$code'");
    if(mysqli_num_rows($getEmailQuery) == 0){
        //echo ("Page can't be found! Err_msg: No code found in database.");
        echo "<script>document.getElementById('error').innerHTML = 'Page unable to be found! <br>Err_msg: No code found in database.<br><br>'</script>";
        exit();
    }

    $connects = mysqli_connect("3.0.146.123", "removal", "VIfYFM0xj6LSTRUe", "TCD-resume");


    if (isset($_POST["password"])) {
        $pw = $_POST["password"];
        $pwdd = md5($pw);                     //encrypt password
        
        $row = mysqli_fetch_array($getEmailQuery);
        $email = $row["email"];

        //salty
        $salty = "t5)%@PH--6Eh%ZRC7HEgk+K,*<,nB73YeDJC`ZL!Ru%vQ#U]c<Fp::5bs:4<37N>+t73(:MpynRv3Ps8bm";

        //salty pwd
        $saltypwd = $salty.$pwdd;

        $query = mysqli_query($connect, "UPDATE acc SET password='$saltypwd' WHERE email='$email'");

        if ($query) {
            $query = mysqli_query($connects, "DELETE FROM resetpwduser WHERE code='$code'");
            
            //if($remove){
                //echo ("Password has been updated!");
                echo '<script>document.getElementById("error").innerHTML = "Password has been updated!<br><br>"</script>';
            //}else{
            exit();
            //}
        } else {
            //echo ("Password update failed! Err_msg: Unable to delete code & update password.");
            echo '<script>document.getElementById("error").innerHTML = "Password update failed! <br>Err_msg: Unable to delete code & update password.<br><br>"</script>';
        }
    } 
?>


    <div class="container">
    <div id="error" style="color: #39FF14;"></div>
        <form method="post">
            <p id="info">Enter your new password:</p>
                <input type="password" name="password" placeholder="New password">
                <br><br>
                <input type="submit" name="submit" value="Update Password">
        </form>
    </div>

    <!-- Bootstrap CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
</body>
</html>
