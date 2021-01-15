<!DOCTYPE html>
<?php
    include "db-connect.php";
    session_start();
?>
<html>
    <head>
        
        <title>Order History | REX Foodipedia</title>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
<!--INCLUDE START HERE-->
    <link rel="icon" type="image/png" href= "img/logo/logo.png">

<!--THIS IS FONT AWESOME JAVASCRIPT START-->
    <script src="https://kit.fontawesome.com/daa253e478.js" crossorigin="anonymous"></script>
<!--THIS IS FONT AWESOME JAVASCRIPT END-->

<!--THIS IS BOOTSTRAP CSS PART START-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<!--THIS IS BOOTSTRAP CSS PART END-->

<!--FONTS.CSS-->
    <link rel="stylesheet" href="css/fonts.css">

    <link rel="stylesheet" href="css/order-history.css">


</head>
<body>

<?php
        include("nav.html");
?>

    <section id="orders">
        <div class="container"><div class="container"><div class="container"><div class="container"><div class="container"><div class="container"><div class="container"><div class="container"><div class="container"><div class="container"><div class="container"><div class="container"><div class="container"><div class="container"><div class="container"><div class="container"><div class="container"><div class="container"><div class="container"><div class="container"><div class="container"><div class="container"><div class="container"><div class="container">
            
        <div class="profile">
            <p id="title">Active Orders</p>

                <p id="order-status">You have no active orders.</p>

            <p id="title">Past Orders</p>

                <div id="order-list-item">
                    
                    <?php
                                        $order_history = mysqli_query($connect, "SELECT * from order_rec WHERE email='xavierkhew00@gmail.com' GROUP BY trans_id"); //where email='$email'

                                        while($history_output = mysqli_fetch_assoc($order_history)){
                        
                                        $delivery_type = $history_output ["delivery_type"];
                                        
                                        //0 = self pick-up      //1 = delivery
                                        if($delivery_type == "0"){
                                            echo "<br>";
                                            echo "Delivery by REX Foodipedia";
                                            echo "<br>";

                                        } else if($delivery_type == "1"){
                                            echo "<br>";
                                            echo "Pick up by customer";
                                            echo "<br>";
                                        }
                                        
                                        echo $history_output ["trans_id"];

                                        $test = $history_output ["trans_id"];
                    ?>
                                        <!-- Food Amount & Name-->
                    <?php

                                            $chicken_fried_rice = mysqli_query($connect, "SELECT * from order_rec WHERE email='xavierkhew00@gmail.com' AND trans_id = '$test'");
                                            while($qqq = mysqli_fetch_assoc($chicken_fried_rice)){


                                                $dish_qty = $qqq ["dish_qty"];
                                                $dish_name = $qqq ["dish_name"];



                                                // Declare an array and initialize it 
                                                $Array = array(" $dish_qty", ""  ); 
                                                
                                                // Display the array elements 
                                                //echo($Array); 
                                                
                                                // Use implode() function to join 
                                                // comma in the array 
                                                $List = implode('x ', $Array); 
                                                
                                                // Display the comma separated list 
                                                echo ($List); 

                                                //echo $dish_name;


                                                // Declare an array and initialize it 
                                                $Array2 = array(" $dish_name", "" ); 
                                                
                                                // Display the array elements 
                                                //echo ($Array2); 
                                                
                                                // Use implode() function to join 
                                                // comma in the array 
                                                $List2 = implode(', ', $Array2); 
                                                
                                                // Display the comma separated list 
                                                echo ($List2); 
                                                


                                            }
                                        }
                    ?>
                </div>
        </div>
    </section>

    </div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div>

<!--THIS IS BOOTSTRAP JAVASRIPT PART START-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<!--THIS IS BOOTSTRAP JAVASCRIPT PART END-->

</body>
</html>