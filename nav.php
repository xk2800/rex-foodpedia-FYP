<?php
    //include "db-connect.php";
    ob_start();

    //error_reporting(E_ERROR | E_PARSE);

    /*if(isset($_SESSION['google_id']) /*||  $_SESSION["email"] == true*){

        //echo $id = $_SESSION['google_id']; 
        $google = $_SESSION['google_id'];
        $convert_google_id = mysqli_query($connect, "SELECT email FROM user_acc WHERE google_id='$id'");
        $output_change = mysqli_fetch_assoc($convert_google_id);
        
        //echo $output_change["email"];

        if ($converted_google_output = $output_change["email"]){
            $_SESSION['email'] = $output_change["email"];
        }else if($var_email_login = $_SESSION['email']){
            $_SESSION['email'];
        }


        if(!empty($_SESSION['email'])){
            //echo "has session";
        }else{
            //echo "no session";
        }
    }*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar | REX Foodipedia</title>

    <link rel="stylesheet" href="css/nav.css">

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <style>
        .sticky{
            position: fixed;
            top: 0;
            width: 100%;
            padding-top: -100%;
        }
        /*#nav{
            width: 100%;
            position: sticky;
            /*top: -70px;
            /*display: block;
            transition: top 0.3s;
            z-index: 9999;
        }*/
        img{
            width: 60px;
            height: 60px;
        }
        /*.nav-link{
          /*padding-left: .5em !important;
          padding-right: .5em !important;
        }*/
        #navbar{
            background-color: #5eaaa8;
        }
        body{
            background-color: #e8ded2;
        }
    </style>
</head>
<body>
    
    <nav class="sticky-top navbar navbar-expand-lg navbar-dark" id="navbar">
            <a class="navbar-brand" href="index.php">
                <img class="logo horizontal-logo" src="img/logo/logo.png" alt="REX Foodipedia logo">
            </a>
            <!-- Button for mobile -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto w-100 justify-content-end">
                    <li class="nav-item active">
                        <a class="nav-link text-center" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link text-center" href="how-to-use">How To Use</a>
                    </li>
    <?php
                if(!empty($_SESSION['email'])){
                    echo '<li class="nav-item active">';
                        echo '<a class="nav-link text-center" href="menu">Menu</a>';
                    echo '</li>';
                }
    ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            About Us
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                            <a class="dropdown-item" href="contact-us.php">Contact Us</a>
                            <a class="dropdown-item" href="about-us.php">Our Background</a>
                            <!--div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a-->
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user"></i>
                            Account
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
    <?php
                if(!empty($_SESSION['email'])){
                            echo '<a class="dropdown-item" href="order-history">My Orders</a>';
                            echo '<a class="dropdown-item" href="user-profile">Profile</a>';
                }
    ?>
                            <!-- <a class="dropdown-item" href="loyalty-points">Loyalty Points</a> -->
                            <a class="dropdown-item" href="user-rating.php">Feedback to Us</a>
                            <!--div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a-->
                        </div>
                    </li>
    <?php
                    if(!empty($_SESSION['email'])){
                        echo '<li class="nav-item active">';
                            echo '<a class="nav-link text-center" href="shopping-cart.php"><i class="fas fa-shopping-cart"></i> Cart</a>';
                        echo '</li>';
                    }else{
                        echo "";
                    }

    ?>
    <?php
                //if($activesessh = 'yes'){
                if(!empty($_SESSION['email'])){
                    
                    echo '<li class="nav-item active">';
                        echo '<a class="nav-link text-center" href="logout">Logout</a>';
                    echo '</li>';
    
                }else{
    
                    echo '<li class="nav-item active">';
                        echo '<a class="nav-link text-center" href="user-login.php">Login/Register</a>';
                    echo '</li>';
    
                }
    ?>
                    
                </ul>
            </div>
        <!--/div-->
    </nav>

      <script>
        window.onscroll = function() {myFunction()};
        
        var navbar = document.getElementById("navbar");
        var sticky = 0;
        
        function myFunction() {
          if (window.pageYOffset >= sticky) {
            navbar.classList.remove("sticky")
          } else {
            navbar.classList.add("sticky");
          }
        }
        </script>
    
    <!-- Bootstrap CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>