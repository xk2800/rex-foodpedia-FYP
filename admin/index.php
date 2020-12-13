<?php
//FULLY WORKING

    include "../db-connect.php";
    
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
        
        <!-- jQuery CDN -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <link rel="stylesheet" href="../css/admin-landing.css" />
        <link rel="stylesheet" href="../css/index-admin.css" />

        <script>
            function others(val){
            var element=document.getElementById('stafff');
            var doc = document.getElementById('adminn');
            if(val=='staff'){
                element.style.display='block';
                doc.style.display='none';

            }else if(val=='admin'){

                element.style.display='none';

                    if(val=='admin'){
                        doc.style.display='block';
                    }else{
                        doc.style.display='none';
                    }

                
            }
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
                    <select name="uni-name" id="uni-name" onchange='others(this.value);' required></p>
                                                                <option style='display:none;'>Select Staff/Admin</option>
                                                                <option value="staff">Staff</option>
                                                                <option value="admin">Admin</option>
                                                                </select>
                                                                <br><br>
                    
                    <div class="stafff" id="stafff" style='display:none;'>
                        <p class="user">Username &nbsp;: &emsp;<input type="text" name="staffuname" class="in" id="uname" onChange="sanitizeInputs()"/></p>
                        <p class="pass">Password &nbsp; : &emsp;<input type="password" name="staffpwd" class="in" id="pwd" onChange="sanitizeInputs()"/></p>
                        <p><a href="admin-reset.php" class="reset">Forgot your password?</a></p>   
                        
                        <button type="submit" name="loginbtn">Login</button>
                        <button type="submit" name="cancelbtn">Cancel</button>
                    </div>

                    <div class="stafff" id="adminn" style='display:none;'>
                        <p class="user">Admin Username &nbsp;: &emsp;<input type="text" name="adminuname" class="in" id="uname" onChange="sanitizeInputs()"/></p>
                        <p class="pass">Admin Password &nbsp; : &emsp;<input type="password" name="adminpwd" class="in" id="pwd" onChange="sanitizeInputs()"/></p>
                        <p><a href="admin-reset.php" class="reset">Forgot your password?</a></p>   
                        
                        <button type="submit" name="loginbtn">Login</button>
                        <button type="submit" name="cancelbtn">Cancel</button>
                    </div>

                    <!--div class="stafff" id="stafff">
                        <p class="user">Username &nbsp;: &emsp;<input type="text" name="staffuname" class="in" id="uname" onChange="sanitizeInputs()"/></p>
                        <p class="pass">Password &nbsp; : &emsp;<input type="password" name="staffpwd" class="in" id="pwd" onChange="sanitizeInputs()"/></p>
                        <p><a href="admin-reset.php" class="reset">Forgot your password?</a></p>   
                        
                        <button type="submit" name="loginbtn">Login</button>
                        <button type="submit" name="cancelbtn">Cancel</button>
                    </div-->
                </form>
            </div>

    <!--FOOTER START-->
    <div class="footer">
        <p>&#9400; <script>document.write(new Date().getFullYear())</script> REX Foodipedia Copyright
            <div id="access">Restricted Access For Admins Only</div></p>
    </div>
    <!--FOOTER END-->

    <!-- BOOTSTRAP -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    
</body>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script>
    function sanitizeInputs() {
  var str = $("#uname").val();
  str = str.replace(/[^a-zA-Z 0-9 .*$%&]/gim, "");
  str = str.trim();
  $("#uname").val(str);

  str = $("#pwd").val();
  str = str.replace(/[^a-zA-Z 0-9 !@#$%^&*()-+=.]/gim, "");
  str = str.trim();
  $("#pwd").val(str);
}
</script>
</html>

<?php

/**
 *  !!! IF INPUT EMPTY  !!!
 */
$fullUrl ="http:// $_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    if(strpos($fullUrl, "input=empty") == true){
        echo '<script>document.getElementById("error").innerHTML = "You did not fill in all fields<br><br>"</script>';
        
    }

/**
 * !!! VALIDATE !!!
 * */

if(isset($_POST["loginbtn"])){

    //admin
    $admin_uname    = $_POST['adminuname'];
    $admin_pwd      = $_POST['adminpwd'];

    //staff
    $staff_uname    = $_POST['staffuname'];
    $staff_pwd      = $_POST['staffpwd'];

    //hashing
    //$pwdd   = md5($admin_pwd);
    $pwdd   = md5($staff_pwd);

    //salt variable
    $salt = "!2y$10*GJIZkOgbCNwTH5ji^JZ0mGev36Cj&2EKuRdLp#HP.crF.VQy751493147";

    //salt added password variable
    $saltedpwd = $salt.$pwdd;

    /**
     * !!! SQL VALIDATE !!!
     * */
    

    $staff_result = mysqli_query($connect, "SELECT * from staff_acc WHERE username = '$staff_uname' AND pwd = '$saltedpwd'AND staff_isDelete = 0");

    if(empty($staff_uname) || empty($staff_pwd)){
        header("location: index?input=empty");
        die();
    } else{

        if(mysqli_num_rows($staff_result)>0){
            header("location: dashboard.php");
            //echo "test";
        }else{
            header("location: index?incorrect+credentials");
        }
    }

    $admin_result = mysqli_query($connect, "SELECT * from admin_acc WHERE username = '$admin_uname' AND pwd = '$saltedpwd'AND admin_isDelete = 0");

    if(empty($admin_uname) || empty($admin_pwd)){
        header("location: index?input=empty");
        die();
    } else{

        if(mysqli_num_rows($admin_result)>0){
            header("location: dashboard.php");
            //echo "test";
        }else{
            header("location: index?incorrect+credentials");
        }
    }

    
}

?>