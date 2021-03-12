<?php

    include "../db-connect.php";
    //session_start();
    ob_start();

    $_SESSION['adminuname'];

    if(!isset($_SESSION['adminuname'])){
        header("Location:index");
    }
?>
<!DOCTYPE html>
<?php
/**
 * TODO: CSS FIX ***
 * TODO: FOOTER FIX ***
 * 
 *  * THIS IS USING BETTER COMMENTS *
 */

?>
<html>
<head>
    <title>Welcome Admin Dashboard| REX Foodipedia</title>
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

<?php
    include("navbar.php");
?>



<?php
    $admin_username = $_SESSION['adminuname'];
    //echo $admin_username;

    //echo "<br>hello";
    $time_now = time();
    //current time
    $output_current_time = date('d/m/Y', $time_now);
    //echo $output_current_time;

?>

    <div class="container">

    <br><br>
        <h3>
            <p>Hello @<?php echo $admin_username ?>, today is <?php echo $output_current_time ?></p>

            <p>What would you like to carry out today?</p>
            <p>Section your options available in the navigation bar above.</p>
        </h3>


    </div>
<body>
    <!--THIS IS BOOTSTRAP JAVASRIPT PART START-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</body>
</html>