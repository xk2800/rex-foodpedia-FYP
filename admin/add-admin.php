<!DOCTYPE html>

<?php

    include "../db-connect.php"; 
    //session_start();
    ob_start();
    
    if(!isset($_REQUEST["access"])){
        header("Location:index");
    }

?>
    <html>
        <head>
            <title>Add Admin | REX Foodipedia ADMIN</title>

            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
    
            <!--INCLUDE START HERE-->
            <link rel="icon" type="image/png" href= "../img/logo/logo.png">

            <!--THIS IS FONT AWESOME JAVASCRIPT START-->
            <script src="https://kit.fontawesome.com/daa253e478.js" crossorigin="anonymous"></script>

            <!--THIS IS BOOTSTRAP CSS PART START-->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        
            <!--FONTS.CSS-->
            <link rel="stylesheet" href="css/fonts.css">

            <style>
                
                #card-whole-add-admin {
                   margin: 120px 0px 60px 0px;
                   border-style: none;
                   position: relative;
                }

                #card-title {
                    text-align: center;
                    letter-spacing: 2px;
                    text-transform: uppercase;
                    background-color: white;
                    font-weight: bold;
                }

                label {
                    font-family: Lato;
                    letter-spacing: 1px;
                    padding-top:20px;
                }

                #card-input-add-product input[type="text"], #card-input-edit-menu input[type="number"],input[type="email"],input[type="number"]{
                    border: 0px black solid;
                    border-bottom-width: 1px;
                    border-bottom-color: #d4d9d5;
                    width: 50em;
                }

                #card-button-edit-menu {
                    letter-spacing: 1px;
                    font-size: 1.0em;
                    /*font-family: Oswald;*/
                    margin:50px 0px 30px 0px;
                }

                /*Chrome, Safari, Edge, Opera */
                input::-webkit-outer-spin-button,input::-webkit-inner-spin-button {
                    -webkit-appearance: none;
                    margin: 0;
                }

                /* Firefox */
                input[type=number] {
                    -moz-appearance: textfield;
                }

            </style>    
        </head>

        <body>
                
            <?php
                include("navbar.php");

                if(isset($_REQUEST["access"])){
                    $name = $_REQUEST["access"];
            
                    $result = mysqli_query($connect, "SELECT username from admin_acc WHERE hashed = '$name'");
                    $admin_username1 = mysqli_fetch_assoc($result);
                    
                }
                        
                $admin_username = $admin_username1["username"];
            
            
            ?>

            <?php
                
                $query_select_menu_detail = mysqli_query($connect, "SELECT * FROM admin_acc WHERE username = '$admin_username' ");
                $row = mysqli_fetch_assoc($query_select_menu_detail);
            ?>    

            <div class="container">
                <div class="card" id="card-whole-add-admin">
                    <h6 class="card-header" id="card-title">Add Admin</h6>
                  
                    <div class="card-body"> 
                        <div id="card-input-add-product">
                            <form name="form-add-admin" method="POST">

                                <div class="form-group">       
                                    <label for="card-dish-edit-menu">Admin ID</label>
                                    <br>
                                    <input type="text" name="adminid" maxlength="6" size="6" style="width: 10%;" required>
                                </div>

                                <div class="form-group">
                                    <label for="name">Admin Name</label>
                                    <div class="custom-file">
                                        <input type="text" name="adminname" id="name" style="width: 80%;" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="phone">Username</label>
                                    <div class="custom-file">
                                        <input type="text" name="adminuname" style="width: 20%;" maxlength="10" id="phone" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="pwd">Password</label>
                                    <div class="custom-file">
                                        <input type="text" name="adminpassword" style="width: 20%;" maxlength="10" id="pwd" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="emails">Admin Email Address</label>
                                    <div class="custom-file">
                                        <input type="email" name="emails" id="emails" style="width: 80%;" required>
                                    </div>
                                </div>

<!--
                                <div class="form-group">
                                    <label for="merc-address">Merchant Address</label>
                                    <div class="custom-file">
                                        <input type="text" name="merc-address" id="merc-address" style="width: 100%;" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="rest-name">Restaurant Name</label>
                                    <div class="custom-file">
                                        <input type="text" name="rest-name" id="rest-name" style="width: 80%;" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="outlets">Number of Outlets</label>
                                    <div class="custom-file">
                                        <input type="number" name="outlets" id="outlets" style="width: 7%;" required>
                                    </div>
                                </div>
-->
<button type="submit" class="btn btn-primary btn-block" id="card-button-edit-menu" name="submit-add-admin">Add admin</button>
                            </form>
                        </div>
                        
                        
                    </div>
                </div> 
            </div>

            <?php 

                if(isset($_POST['submit-add-admin'])) {
                    
                    //$var_dish_menu_detail = $_POST['dish_menu_detail'];
                    //$var_image_menu_detail = $_POST['image_menu_detail'];

                    $var_adminid = $_POST["adminid"];
                    $var_adminname = $_POST["adminname"];
                    $var_adminuname = $_POST["adminuname"];
                    $var_adminpassword = $_POST["adminpassword"];
                    $var_adminemail = $_POST["emails"];

                    $md_var_adminpassword = md5($var_adminpassword);

                    $md_username = md5($var_adminuname);

                    //salt variable
                    $salt = "!2y$10*GJIZkOgbCNwTH5ji^JZ0mGev36Cj&2EKuRdLp#HP.crF.VQy751493147";

                    //salt added passowrd variable
                    $salted_var_adminpassword = $salt.$md_var_adminpassword;

                    if(!empty($var_adminid) && !empty($var_adminname) && !empty($var_adminuname) && !empty($var_adminpassword) && !empty($var_adminemail)) {

                        $query_add_admin = mysqli_query($connect, "INSERT INTO admin_acc(fname, staff_id, username, pwd, email, hashed) 
                        VALUES ('$var_adminname','$var_adminid','$var_adminuname','$salted_var_adminpassword','$var_adminemail', '$md_username')");

                                header("location: dashboard?access=".$name);

                    } else {
                        echo "Please fill in all the inputs!";
                    }
                }

            ?>
                
            <!--THIS IS BOOTSTRAP JAVASRIPT PART START-->
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        </body>
</html>