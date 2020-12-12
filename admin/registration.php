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

        <p class="panel">Register staff for REX Foodipedia admin account</p>
        <div class="gap"></div>

            <div class="box">
            <form name="add-account" method="POST">

                <span class="label">Name:</span><br>
                <span class="input"><input type="text" name="name"></span>
                <br><br>

                <span class="label">Staff ID Number:</span><br>
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
                <button type="submit" name="cancelbtn" href="connect.php">Cancel</button>

            </form>
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

/**
 *  !!! IF INPUT EMPTY  !!!
 */
$fullUrl ="http:// $_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    /*if(strpos($fullUrl, "login=empty") == true){
        echo '<script>document.getElementById("error").innerHTML = "You did not fill in all fields<br><br>"</script>'
        
        /*("<p class="msg">You did not fill in all fields</p>"); //add css for color
    }*/

?>

