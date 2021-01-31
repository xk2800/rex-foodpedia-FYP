<?php
 
 include "../db-connect.php";
 session_start();
 ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$admin_username = $_SESSION['adminuname'];
echo $admin_username;


    ?>
</body>
</html>