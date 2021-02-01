<!DOCTYPE html>
<?php
    include "../db-connect.php";
    session_start();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $result = mysqli_query($connect, "SELECT * from transaction WHERE email = 'xavierkhew00@gmail.com' ORDER BY receipt_id DESC");
        $row = mysqli_fetch_assoc($result);

        $output = $row ["receipt_id"];
        echo $output;

        /*$output1 = $output+1;

        echo "<br>New output".$output1;

        $invID = str_pad($invID, 4, '0', STR_PAD_LEFT);

        echo "<br>New outputssss".$invID+$output1;
*/

        $number = $output+1;
        $number = sprintf('%07d',$number);
        echo "<br>F";
        print $number;

?>
</body>
</html>