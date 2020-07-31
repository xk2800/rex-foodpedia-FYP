<?

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
    if(isset($_GET['vkey'])){
        //process verification
        $vkey = $_GET["vkey"];
        $mysqli = NEW MySQLi ('localhost', 'root', '', 'myrun');

        $resultSet = $mysqli->query("SELECT verified, vkey FROM accounts WHERE verified = 0 AND vkey = '$vkey' LIMIT 1");

        if($resultSet->num_rows == 1){
            //validate email
            $update = $mysqli->query("UPDATE ACCOUNTS SET verified = 1 WHERE vkey = '$vkey' LIMIT 1");
            
            if($update){
                echo ("Your account has been verified. You may login.");
            }else{
                echo $mysqli->error;
            }
        }else{
            echo ("This account is invalid or already has been verified.");
        }
    }else{
        die("Something went wrong. Err_msg: vkey error.");
    }


?>
</body>
</html>