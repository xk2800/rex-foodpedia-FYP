<?php
    session_start();
    include("../db-connect.php");

    /**
     * using if else statement for homepage
     */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" href= "img/logo/logo.png">

    <!--title>Home | REX Foodipedia</title-->

<?php

    //$_SESSION['logged-in'];

    /**
     * <p class="menu"><a href="index.html">Home</a></p> 
     *    <p class="menu"><a href="Product1.html">Products</a> </p> 
     * 
     *  <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true): ?>
     *   
     * <p class="menu"><a href="logout.php">Logout</a></p>
     * 
     *   <?php else: ?>
     * 
     *   <p class="menu"><a href="login.html">Login</a></p> 
     * 
     *   <?php endif; ?>
     * 
     * 
     * <?php if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){?>
     *      <title> Welcome <?php echo $_SESSION['uname']?> | REX Foodipedia</title>
     * <?php } else { ?>
     *      <title>Home | REX Foodipedia</title>
     * <?php } ?>
     * 
     */
    
?>
<?php if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){?>
                <title> Welcome <?php echo $_SESSION['uname']?> | REX Foodipedia</title>
         <?php } else { ?>
                <title>Home | REX Foodipedia</title>
         <?php } ?>

    
    <!--Bootstrap CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    

</head>
<body>
    
<div id="overlay">
<!--LEVEL 1-->
<?php
    include ("../navbar.html")
?>
<!--LEVEL 1 END-->

<div class = "container">

hfhfdfhdfdfdfdfdf
</div>
<!--LEVEL 2-->

    

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    
</div>


</body>
</html>