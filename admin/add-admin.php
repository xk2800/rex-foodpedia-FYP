<?php
    //session_start();
    include("../db-connect.php");
    //echo $_SESSION['adminuname'];

    /*if(!isset($_SESSION['adminuname'])){
        header("Location:../admin");
    }*/
?>
<!DOCTYPE html>
<html>
<head>
    <title>ADMIN LOGIN PAGE | REX Foodipedia ADMIN</title>
    
    <link rel="icon" type="image/png" href= "../img/logo/logo.png">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Bootstrap CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <!--Font Awesome CDN-->
    <script src="https://kit.fontawesome.com/daa253e478.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../css/admin-landing.css" />
    <link rel="stylesheet" href="../css/index-admin.css" />

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

<?php
    include ('navbar.php');

    if(isset($_REQUEST["access"])){
        $name = $_REQUEST["access"];

        $result = mysqli_query($connect, "SELECT username from admin_acc WHERE hashed = '$name'");
        $admin_username1 = mysqli_fetch_assoc($result);
        
    }

    echo $admin_username1["username"];

    $admin_username = $admin_username1["username"];

    echo "<br>";

    echo $admin_username;


    if(!isset($_REQUEST["access"])){
        //header("Location:index");
    }
?>
    
    
        <!-- <div id="outside">
            <span><img class="logo" src="../img/logo/logo.png"/></span></div>
        <div id="bottom"></div> -->

    <div class="container">

        <p class="panel">Register Admin for REX Foodipedia admin account</p>
        <div class="gap"></div>

        <div class="box">
        <form name="add-account" method="POST">

            <span class="label">Name:</span><br>
            <span class="input"><input type="text" name="name"></span>
            <br><br>

            <span class="label">Admin's Staff ID Number:</span><br>
            <span class="input"><input type="text" name="staff_id"></span>
            <br><br>

            <span class="label">Username:</span><br>
            <span class="input"><input type="text" name="username"></span>
            <br><br>

            <span class="label">Email:</span><br>
            <span class="input"><input type="text" name="email"></span>
            <br><br>

            <span class="label">Password:</span><br>
            <span class="input"><input type="text" name="password"></span>
            <br><br>

            <span class="role-radio"><br>
                    <span class="rad-role">I am looking for</span><br>
                    <span class="rad"><input type="radio" class="staff" value="staff" name="role" required > Staff</span><br>
                    <span class="rad"><input type="radio" class="admin" value="admin" name="role"> Admin</span><br>
            </span>

            <br><br>
            <button type="submit" name="regbtn">Register Staff</button>
            <button type="submit" name="cancelbtn" href="dashboard.php">Cancel</button>

        </form>
        </div>
        <br><br>
    </div>
    <!--FOOTER START-->
    <!--div class="footer">
        <p>&#9400; <script>document.write(new Date().getFullYear())</script> REX Foodipedia Copyright
            <div id="access">Restricted Access For Admins Only</div></p>
    </div-->
    <!--FOOTER END-->
        <style>
            #re a:link, #re a:visited
            {
            text-decoration: none;
            color: red;
            }
        </style>

    <!-- BOOTSTRAP -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    
</body>
</html>

<?php

    if(isset($_POST["regbtn"])){

        $name       = $_POST["name"];
        $uname      = $_POST["username"];
        $staff_id   = $_POST["staff_id"];
        $email      = $_POST["email"];
        $pwd        = $_POST["password"];
        $role       = $_POST["role"];

        $pwdd = md5($pwd);

        $salt="!2y$10*GJIZkOgbCNwTH5ji^JZ0mGev36Cj&2EKuRdLp#HP.crF.VQy751493147";

        $saltedpwd = $salt.$pwdd;

        if($role == 'admin'){
            echo "admin"; //for test

            $query_admin = $mysqli->query("INSERT INTO admin_acc(fname, staff_id, username, pwd, email) VALUES ('$name', '$staff_id', '$uname', '$saltedpwd', '$email')");

            if($query_admin){
                echo " Admin Registered";
            }else{
                echo $mysqli->error;
            }

        } else if($role == 'staff'){
            echo "staff"; //for test

            $query_staff = $mysqli->query("INSERT INTO staff_acc(fname, staff_id, username, pwd, email) VALUES ('$name', '$staff_id', '$uname', '$saltedpwd', '$email')");

            if($query_staff){
                echo "Registered";
            }else{
                echo $mysqli->error;
            }
        }

        //echo $role;

        
    }

    if(isset($_POST["cancelbtn"])){

    }

/**
 *  !!! IF INPUT EMPTY  !!!
 */
$fullUrl ="http:// $_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    /*if(strpos($fullUrl, "login=empty") == true){
        echo '<script>document.getElementById("error").innerHTML = "You did not fill in all fields<br><br>"</script>'
        
        /*("<p class="msg">You did not fill in all fields</p>"); //add css for color
    }*/

?>

