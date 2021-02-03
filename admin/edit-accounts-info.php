<!DOCTYPE html>
<?php
/**
 * TODO: CSS FIX ***
 * TODO: FOOTER FIX ***
 * 
 *  * THIS IS USING BETTER COMMENTS *
 */
    session_start();
    include "../db-connect.php";
    ob_start();


    if(isset($_REQUEST["admin_username"]) && ($_REQUEST["account"])){
        $admin_username = $_REQUEST["admin_username"];
        $account_type   = $_REQUEST["account"];

        $admin_username_find = mysqli_query($connect, "SELECT * from admin_acc WHERE username = '$admin_username'");
        $admin_username_output = mysqli_fetch_assoc($admin_username_find);
        //echo $row ["name"];
        
        echo $admin_username_output['email'];

        //return true;
        
    }else if(isset($_REQUEST["staff_username"]) && ($_REQUEST["account"])){
        $staff_username = $_REQUEST["staff_username"];
        $account_type   = $_REQUEST["account"];

        $staff_username_find = mysqli_query($connect, "SELECT * from staff_acc WHERE username = '$staff_username'");
        $staff_username_output = mysqli_fetch_assoc($staff_username_find);
        //echo $row ["name"];

        echo $staff_username_output['staff_id'];

        //return true;
    }

    echo "<br>";
    echo $account_type;


    
    

?>
<html>
<head>
        <title>Edit <?php
            //echo $admin_username;
            if(isset($_REQUEST["admin_username"]) && ($_REQUEST["account"])){
                $admin_username = $_REQUEST["admin_username"];
                $account_type   = $_REQUEST["account"];
        
                echo $admin_username;
        
                //return true;
                
            }else if(isset($_REQUEST["staff_username"]) && ($_REQUEST["account"])){
                $staff_username = $_REQUEST["staff_username"];
                $account_type   = $_REQUEST["account"];
        
                echo $staff_username;
            }
        
        ?> | REX Foodipedia
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!--INCLUDE START HERE-->
        <link rel="icon" type="image/png" href= "img/logo/logo.png">

        <!--THIS IS FONT AWESOME JAVASCRIPT START-->
        <script src="https://kit.fontawesome.com/daa253e478.js" crossorigin="anonymous"></script>

        <!--THIS IS BOOTSTRAP CSS PART START-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <!--FONTS.CSS-->
        <link rel="stylesheet" href="css/fonts.css">

</head>
<body>

    <?php
            //include("navbar.html");
            //$admin_username = '123';

    ?>
        <div class="container">


        </div>

        <!--THIS IS BOOTSTRAP JAVASRIPT PART START-->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    </body>
</html>