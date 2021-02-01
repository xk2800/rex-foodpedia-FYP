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

        echo "<br>";

        echo "<br>";echo "<br>";
        $email = "xavierkhew00@gmail.com";
        $getorder   = mysqli_query($connect, "SELECT * from cart WHERE email = '$email'");
        $test_logic = 0;
        while($test_out = mysqli_fetch_assoc($getorder)){

            
            $trying = $test_out['dish_price'];
            echo "<br>";
            $test_logic += $trying;

            
        }
        echo $test_logic;
        echo "<br>";
        echo "<br>";

        $run_test = mysqli_query($connect, "SELECT * FROM cart WHERE email='$email'");

        while($run_test_out = mysqli_fetch_assoc($run_test)){

            $email      = $run_test_out['email'];
            $dish_name  = $run_test_out['dish_name'];
            $dish_price = $run_test_out['dish_price'];
            $dish_id    = $run_test_out['dish_id'];
            $dish_qty   = $run_test_out['dish_qty'];
            $send_type  = '1';
            $order_stats= '1';


            $insert_test = $mysqli->query("INSERT INTO order_rec(email, dish_name, dish_price, dish_id, dish_qty)
            VALUES ('$email', '$dish_name', '$dish_price', '$dish_id', '$dish_qty')");

            $delete_test = mysqli_query($connects, "DELETE FROM cart_test WHERE email='$email'");
    
            if($insert_test && $delete_test){
                echo "insert done";
            }else{
                echo "insert fail";
            }
            
        }
        
    
        echo "<br>";
        echo "<br>";


        if($run_test){
            echo "test done";
        }else{
            echo "Fail";
        }


?>
</body>
</html>