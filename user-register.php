<!DOCTYPE html>
  
<?php
    include("db-connect.php");
    //include("db_connection.php");
    //session_start();
?>

    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Register | REX Foodipedia</title>

            <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">

            <!--FONTS.CSS-->
            <link rel="preload" href="css/fonts.css" as="style">

            <!--THIS IS FONT AWESOME JAVASCRIPT START-->
            <script src="https://kit.fontawesome.com/daa253e478.js" crossorigin="anonymous"></script>

            <!--THIS IS BOOTSTRAP CSS PART START-->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
            
            <style>

                h5 {
                    padding-bottom: 10px; 
                    font-family: Lato;
                    text-transform: uppercase;
                    letter-spacing: 1px;
                }

                ::placeholder {
                    font-style: italic;
                }
                
                #card-whole-register {
                    margin: auto;
                    margin-top: 70px;
                    margin-bottom: 50px;
                    padding: 0px 10px 0px 20px;
                    /*border-radius: 20px;*/
                    height: 34rem;
                    /*background-color: #F8F7F5;*/
                }

                #card-input-register {
                    padding: 30px 10px 25px 10px;
                    width: 95%;
                }

                #card-input-register input[type="email"], #card-input-register input[type="password"],
                #card-input-register input[type="tel"], #card-input-register input[type="text"] {
                    border: 0px black solid;
                    border-bottom-width: 1px;
                    border-bottom-color: #d4d9d5;
                    background-color: transparent;
                    padding-bottom: 40px;
                
                }

                #card-register-button, label {
                    padding: 8px 0px 10px 5px;
                    /*font-style: italic;*/
                    letter-spacing: 1px;
                    font-size: 1.0em;
                    font-family: Oswald;
                }

            </style>
        
        </head>

        <body style="background-color: #e8ded2";>
            
            <?php
                include("nav.html");
            ?>

            <div class="container">
                <div class="card shadow-lg p-3 mb-5 bg-white rounded" id="card-whole-register" style="width: 50rem;">
                    <div class="card-body">
                    <h5 class="card-title"><center>Register</center></h5>

                    <form name="register-form" method="POST" onsubmit="return alert('Register successfully');">
                        <div id="card-input-register"> 
                            <div class="form-group">
                                <i class="fa fa-envelope-open" aria-hidden="true"></i>
                                &ensp;
                                <label for="card-email-register">Email Address : </label>
                                <input type="email" class="form-control" id="card-email-register" placeholder="example@gmail.com" name="email" required>
                            </div>
                        
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <i class="fa fa-key" aria-hidden="true"></i>
                                    &ensp;
                                    <label for="card-pass-register">Password : </label>
                                    <input type="password" class="form-control" id="card-pass-register" placeholder="Enter a password" name="pass" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <i class="fa fa-key" aria-hidden="true"></i>
                                    &ensp;
                                    <label for="card-con-pass-register">Confirm Password : </label>
                                    <input type="password" class="form-control" id="card-con-pass-register" placeholder="Re-enter the password" name="cfrmpass" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                &ensp;
                                <label for="card-contact-register">Contact Number : </label>
                                <input type="tel" class="form-control" id="card-contact-register" placeholder="+60123456789" name="contact">
                            </div>

                        <div id="card-register-button">
                            <button type="submit" class="btn btn-primary btn-block" name="signupbtn">Sign Up</button>
                        </div>
                    </form>
            </div>    
         

            <!--THIS IS BOOTSTRAP JAVASRIPT PART START-->
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        </body>

        <?php 
            
            if(isset($_POST["signupbtn"])) {
                
                $var_email = $_POST["email"];
                $var_password = $_POST["pass"];
                $var_cfrmpassword = $_POST["cfrmpass"];
                $var_contact = $_POST["contact"];

                //$salted_pass = password_hash($var_password, PASSWORD_BCRYPT);
                $salted_pass = md5($var_password);

                if($var_password != $var_cfrmpassword) {
                     echo " <script> 
                                alert('Password you have entered is not matched with Confirm Password, Please try again !'); 
                            </script> "; 
                } else {
                    
                    $query_user_register = mysqli_query($connect,"INSERT INTO user_acc(email, password, phone_number) VALUES ('$var_email', '$salted_pass', '$var_contact')");
                   
                        echo " <script> 
                                    location.href = 'user-login.php';
                                </script> ";
                }
            }
        ?>
</html>