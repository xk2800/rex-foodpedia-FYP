<?php
    include("../db-connect.php");
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
                    <p class="user">Username &nbsp;: &emsp;<input type="text" name="uname" size="20" maxlength="55" class="in" id="uname" onChange="sanitizeInputs()"/></p>
                    <p class="pass">Password &nbsp; : &emsp;<input type="password" name="pwd" size="20" class="in" id="pwd" onChange="sanitizeInputs()"/></p>
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
/*if(isset($_POST["loginbtn"]))
{
    $uname = $_POST["uname"];
    $pwd = $_POST["pwd"];
    
    //md5 encryption
    $pwd = md5($pwd);

    //salt
    /*$salt = "!2y$10*GJIZkOgbCNwTH5ji^JZ0mGev36Cj&2EKuRdLp#HP.crF.VQy751493147";

    //salt added
    $saltedpwd = $salt.$pwdhashed;*/

        //echo $saltedpwd;

    //$_SESSION['uname'] = $uname;

    //Password hashing
    
    /*$insert = ("INSERT INTO test(username, password) VALUES ('$uname', '$pwd')");

    if(mysqli_query($connect, $insert)){
        echo "Register success";
    }else{
        echo "no working";
    }*/
    
    
    
    
    
    /**
     * !!! SQL VALIDATE !!!
     * */

    /*$result = mysqli_query($connect ,"SELECT * from staff WHERE username = '$uname' AND pwd = '$pwd'");

    

    if(empty($uname) || empty($pwd)){
        header('location: index.php?login=empty');
        exit();
    }
    else{
        if(mysqli_num_rows($result) > 0)
        {
            header('location:admin-landing');
        } 
        else
        {
            echo '<script>document.getElementById("error").innerHTML = "Invalid Credentials! Try again.<br><br>"</script>';
        }
    }*/
//}

if(isset($_POST["loginbtn"])){
    $uname = $_POST['uname'];
    $pword = $_POST['pwd'];
    
    
    /*$check_dup_username = "SELECT * FROM accounts WHERE username = '$uname'";
    $res = mysqli_query($connect, $check_dup_username);
    //$count = mysqli_num_rows($res);

    if(mysqli_num_rows($res) > 0){
        echo "Username already exist";
        return false;
    }*/



    /*if($pword != $cpword){
      $error = "Your passwords do not match";
    } else{*/
      

      //$mysqli = NEW MySQLi ('localhost', 'root', '', 'rex-foodipedia');

      //generate vkey
      //$vkey = md5(time().$uname);

      //insert acc info into db
      $pwordd = md5($pword);
      //salt
    $salt = "!2y$10*GJIZkOgbCNwTH5ji^JZ0mGev36Cj&2EKuRdLp#HP.crF.VQy751493147";

    //salt added password variable
    $saltedpwd = $salt.$pwordd;

      $insert = $mysqli->query("INSERT INTO test(username, password) VALUES ('$uname', '$saltedpwd')");
    
      if($insert){
        //echo "Success";

        //send email
        echo "Valid";
        //include('sendverify.php');

        //echo '<script>document.getElementById("error").innerHTML = "Verification email has been sent.<br><br>"</script>';
        //header('location: thankyou.php');

      } else{
        echo $mysqli->error;
      }
      


    
    
    
    
    

    

  }

?>

