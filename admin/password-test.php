<?php

include "connect-test.php";

//echo password_hash("password", PASSWORD_DEFAULT);

//verify password
/*$passwor = 'password';

$stmt = $connect->query("SELECT password FROM test WHERE username = 'xavier'");
$stmt->fetch();
if(password_verify($password, $passwor)){

    echo "Password correct";
}else{

    echo "Password incorrect";

}*/

/*$start = microtime(true);

echo password_hash($password, 
PASSWORD_DEFAULT,['cost'=>12]); //cost value can change, it will affect load time

$end = microtime(true);

echo "<br/>";

echo round($end - $start, 2)." seconds.";
*/
?>

<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>ADMIN LOGIN PAGE | REX Foodipedia ADMIN</title>
        
        <link rel="icon" type="image/png" href= "../img/logo/logo.png">

        <link rel="stylesheet" href="../css/admin-landing.css" />
        <link rel="stylesheet" href="../css/index-admin.css" />
        <meta charset="UTF-8"/>
        <script>
            function sanitizeInputs() {
                var str = $("#uname").val();
                str = str.replace(/[^a-zA-Z 0-9,]/gim, "");
                str = str.trim();
                $("#uname").val(str);

                str = $("#pwd").val();
                str = str.replace(/[^a-zA-Z 0-9]/gim, "");
                str = str.trim();
                $("#pwd").val(str);
            }
        </script>
</head>
<body>
    
    <div id="outside">
        <span><img class="logo" src="../img/logo/logo.png"/></span></div>
    <div id="bottom"></div>

        <p class="panel">REX Foodipedia Admin Login Panel</p>
        <div class="gap"></div>

            <div class="box">
                <form name="login-admin" method="post">
                    <span id="error"></span>
                    <p class="user">Username &nbsp;: &emsp;<input type="text" name="mail" size="20" maxlength="55" class="in" id="uname" onChange="sanitizeInputs()"/></p>
                    <p class="pass">Password &nbsp; : &emsp;<input type="password" name="pass" size="20" class="in" id="pwd" onChange="sanitizeInputs()"/></p>
                    <p><a href="admin-reset.php" class="reset">Forgot your password?</a></p>   
                    <button type="submit" name="loginbtn" width="10px" height="5px">Login</button>     
                </form>
            </div>

<!--FOOTER START-->
<div class="footer">
    <p>&#9400; 2020 REX Foodipedia Copyright
        <div id="access">Restricted Access For Admins Only</div></p>
</div>
<!--FOOTER END-->
        <style>
            #re a:link, #re a:visited
            {
            text-decoration: none;
            color: red;
            }
        </style>

</body>
</html>

<?php

/**
 *  !!! IF INPUT EMPTY  !!!
 */
$fullUrl ="http:// $_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    if(strpos($fullUrl, "login=empty") == true){
        echo '<script>document.getElementById("error").innerHTML = "You did not fill in all fields<br><br>"</script>'
        
        /*("<p class="msg">You did not fill in all fields</p>")*/; //add css for color
    }

/**
 * !!! VALIDATE !!!
 * */

if($_POST["loginbtn"]){

    $uname = $_POST['uname'];
    $pwd = $_POST['pwd'];

    
    $pwdd = md5($pwd);

    //salt variable
    $salt = "!2y$10*GJIZkOgbCNwTH5ji^JZ0mGev36Cj&2EKuRdLp#HP.crF.VQy751493147";

    //salt added password variable
    $saltedpwd = $salt.$pwdd;

    /**
     * !!! SQL VALIDATE !!!
     * */
    $result = mysqli_query($connect, "SELECT * FROM staff WHERE username = '$uname' AND pwd = '$saltedpwd'");

    if(mysqli_num_rows($result)>0){
        
        header("location: landing-page");   //!! CHANGE HERE WHEN ADMIN LANDING PAGE DONE

    }else{

        echo '<script>document.getElementById("error").innerHTML = "Invalid Credentials! Try again.<br><br>"</script>';
    }

}

?>