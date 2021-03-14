<?php
//WORKING - Xavier

    include ("../db-connect.php");

    if(!isset($_REQUEST["access"])){
        header("Location:../admin/index");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Product | REX Foodipedia</title>
    <link rel="icon" type="image/png" href= "../img/logo/logo.png">

    <style>
    *{
        font-size: 16px;
    }
    body, html{
            margin: 0; 
            padding: 0; 
            height: 100%; 
            overflow: hidden;
            background-color: #E4F6E6

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

    $staff_username = $staff_username1["username"];

?>

    <iframe width="100%" height="100%" src="del-prod_iframe.php" frameborder="0" class="page"></iframe>

</body>
</html>