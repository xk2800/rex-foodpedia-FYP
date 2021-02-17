<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Product | REX Foodipedia</title>

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
    
    include "navbar.html";
?>

    <iframe width="100%" height="100%" src="del-prod_iframe.php" frameborder="0" class="page"></iframe>

</body>
</html>