<!DOCTYPE html>
<?php
    include "db-connect.php";
    //session_start();

?>
<html>
    <head><title>Your Receipt | REX Foodipedia</title>
    <link rel="icon" type="image/png" href= "img/logo/logo.png">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<!--INCLUDE START HERE-->
    <link rel="icon" type="image/png" href= "image/MYRUN 1.png">

<!--THIS IS FONT AWESOME JAVASCRIPT START-->
    <script src="https://kit.fontawesome.com/daa253e478.js" crossorigin="anonymous"></script>
<!--THIS IS FONT AWESOME JAVASCRIPT END-->

<!--THIS IS BOOTSTRAP CSS PART START-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<!--THIS IS BOOTSTRAP CSS PART END-->

<!--FONTS.CSS-->
    <link rel="stylesheet" href="css/fonts.css">

    <link rel="stylesheet" href="css/receipt.css">

</head>
<body>

    <?php



        $time = time();
        $actual_time = date('Y-m-d H:i:s', $time);

        //$email              = $_SESSION['email'];
        $email = "xavierkhew00@gmail.com";
        echo $email;


        // $check_receipt_id = mysqli_query($connect, "SELECT * from transaction ORDER BY receipt_id DESC");
        // $call_receipt_id = mysqli_fetch_assoc($check_receipt_id);

        // $receipt_id_check = $call_receipt_id ["receipt_id"];
        // $number = $receipt_id_check+1;
        // $number = sprintf('%07d',$number);
        $numbers="0000704";
        //echo "<br>";
        //print $number;

        //grabbing total from db
        $result = mysqli_query($connect, "SELECT * from transaction WHERE receipt_id='$numbers' AND email = '$email'");
        $row = mysqli_fetch_assoc($result);

        //$add_transaction_id = mysqli_query($connect, "INSERT INTO transaction(receipt_id) VALUES ('$number') WHERE email='$email'");
        //$add_transaction_id = mysqli_query($connect, "UPDATE transaction SET receipt_id='$numbers' WHERE email='$email' AND date='$actual_time'");

        /*if($add_transaction_id){
            echo "SET";
        }*/
        //$output = $row ["receipt_id"];
        //echo $output;

        //$del_pass_address   = $_SESSION['del_address'];
        //echo $del_pass_address;

        $company_info = "REX Foodipedia";

        //echo $row["subtotal"];
        /*font$tax = 0.06 * $row["subtotal"];
        $grand_total = $tax + $row["subtotal"];
        echo "RM ".$grand_total;*/

        //session carry
        //$delivery_type = $_SESSION['delivery_type'];
        //echo $delivery_type;


        $delivery_type      = $row["send_type"];
        $del_pass_address   = $row["address"];
    ?>

    <div class="container">
        <br><br>
    <div class="paper">
        <br>
        <img src="img/logo/logo.png" alt="REX Foodipedia Logo" id="logo">
        <p id="hori-line"><hr></p>
        <p id="receipt title"><b>RECEIPT</b></p>
        <p id="send-type"><b><?php echo $delivery_type ?></b></p>
<!-- **production changes to be made here -->
        <p id="receipt_id"><b>Receipt Number:</b> <?php echo $numbers;?></p>
        <p id="date"><b>Date:</b>
    <?php
                                        $date_db = $row ["date"];
                                        $output_date = date('M d, Y', strtotime(str_replace('-','/', $date_db)));
                                        echo $output_date;
    ?>
        </p>
        <p id="hori-line"><hr></p>
        <p id="company-info"><b>From:</b> <?php echo $company_info ?></p>
        <p id="cust-address">
    <?php
            if($delivery_type == 'Self Pick Up'){
                echo "<b>Self Pick Up</b>";
            }else if($delivery_type == 'Delivery'){
                echo "<b>Delivery Address:</b>".$del_pass_address;
            }else{

            }
    ?>
            </p>

        <span class="items">

            <?php
//** */                <!-- production changes to be made here -->
                    $items_sql = mysqli_query($connect, "SELECT * from order_rec WHERE email = '$email' AND trans_id='$numbers'");
                    //$items = mysqli_fetch_assoc($result1);

                    //$price_result = mysqli_fetch_assoc($price_sql);
            ?>
            <table class="table justify-content-center" id="items-table">
                <thead>
                    <tr>
                    <th id="item-title">
                            Item
                        </th>
                        <th id="qty-title">
                            Quantity
                        </th>
                        <th id="unit-price-title">
                            Unit Price
                        </th>
                        <th id="price-title">
                            Price
                        </th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    while(($items = mysqli_fetch_assoc($items_sql)) /*|| ($price_result = mysqli_fetch_assoc($price_sql))*/){
                ?>
                        <tr id="items-display">
                            <th id="item"><?php echo $items ["dish_name"]?></th>
                            <th id="quantity"><?php echo $items ["dish_qty"]?></th>
                            <th id="unit-price">RM <?php echo $items ["dish_price"]?></th>
                            <?php
                                $price = $items ["dish_price"] * $items ["dish_qty"];
                            ?>
                            <th id="price">RM <?php echo $price ?></th>
                        </tr>
            <?php
                    }
            ?>
                </tbody>
            </table>

        </span>

        <p id="hori-line"><hr></p>

            <span class="payment-breakdown">
                <table id="default-text">
                    <tr>
                        <th id="subtotal">Subtotal</th>
                        <th id="db-subtotal">RM
            <?php
                                    $subtotal = $row ["subtotal"];
                                    echo number_format((float)$subtotal, 2, '.', '');
            ?>
                        </th>
                    </tr>
                    <!-- <tr>
                        <td id="discount">- Discount</td>
                        <td id="db-discount">RM
            <?php
                                    /*$discount = $row ["discount"];
                                    echo number_format((float)$discount, 2, '.', '');*/
            ?></td>
                    </tr>
                    <tr>
                        <td id="voucher">- Voucher
                                            <?php //echo $row ["voucher"];
                                                /*if(!$row ["voucher_code"]){


                                                } else{
                                                    echo "<br>";
                                                    echo "Voucher Code: ";
                                                }*/
                                            ?>
                        </td>
                        <td id="db-voucher"><?php //echo $row ["voucher"];
                                               /* if(!$row ["voucher_code"]){
                                                    echo "RM 0";

                                                } else{
                                                    echo "RM ".$row ["voucher"];
                                                    echo "<br>";
                                                    echo $row ["voucher_code"];
                                                }*/
                                            ?>
                        </td>
                    </tr> -->
                    <tr>
                        <td id="tax">+Service Tax (6%)</td>
            <?php
                                        $pretax = $subtotal /((6/100)+1);
                                        $tax = $subtotal - $pretax;
            ?>
                        <td id="db-tax">RM <?php echo number_format((float)$tax, 2, '.', '') ?></td>
                    </tr>
                    <tr>
                        <th id="total">Total</th>
            <?php
                                        $total_to_pay = $subtotal;
            ?>
                        <th id="db-total">RM <?php echo $total_to_pay ?></th>
                    </tr>
                    <tr>
                        <th id="payment-type">Payment method: <?php

                                                                if(($row ["payment_method"]) == '0'){
                                                                    echo "Cash On Demand(COD)";

                                                                }else if(($row ["payment_method"]) == '1'){
                                                                    echo "Credit/Debit Card";

                                                                }else if(($row ["payment_method"]) == '2'){
                                                                    echo "Online Banking";

                                                                }else{
                                                                    echo "No Payment Found In System";
                                                                }

                                                            ?>
                        </th>
                    </tr>
                </table>

            </span>
        <br>
    </div>

    <br><br><br>

    </div>


<!--THIS IS BOOTSTRAP JAVASRIPT PART START-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<!--THIS IS BOOTSTRAP JAVASCRIPT PART END-->

</body>
</html>