<!DOCTYPE html>
<?php
/**
 * TODO: CSS FIX ***
 * TODO: FOOTER FIX ***
 * 
 *  * THIS IS USING BETTER COMMENTS *
 * 
 * XAVIER
 */

    include "../db-connect.php";
    ob_start();

    if(!isset($_REQUEST["access"])){
        header("Location:../admin/index");
    }

?>
<html>
    <head><title>Check Orders & View Transactions | REX Foodipedia</title>

    <meta name="viewpoint" content="width=device-width, initial-scale=1">
    <meta name="viewpoint" content="width=device-width">
    
<!--INCLUDE START HERE-->
    <link rel="icon" type="image/png" href= "../img/logo/logo.png">

<!--THIS IS FONT AWESOME JAVASCRIPT START-->
    <script src="https://kit.fontawesome.com/daa253e478.js" crossorigin="anonymous"></script>
<!--THIS IS FONT AWESOME JAVASCRIPT END-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<!--FONTS.CSS-->
<link rel="stylesheet" href="css/fonts.css">

<style>
    *{
        font-size: 16px;
    }
    body, html{
            margin: 0; 
            padding: 0; 
            height: 100%; 
            overflow: hidden;
        }
        .page{
            position:absolute; 
            left: 0; 
            right: 0; 
            bottom: 0; 
            top: 35px;
            
        }
</style>


</head>
<body>

<?php
    
    include "navbar.php";
    if(isset($_REQUEST["access"])){
        $name = $_REQUEST["access"];

        $result = mysqli_query($connect, "SELECT username from staff_acc WHERE hashed = '$name'");
        $staff_username1 = mysqli_fetch_assoc($result);
        
    }
?>

    <iframe width="100%" height="100%" src="check-order-page.php" frameborder="0" class="page"></iframe>
    
</body>
</html>

