<!DOCTYPE html>
<?php
    include "db-connect.php";
    session_start();

?>
<html>
    <head><title>Your Receipt | REX Foodipedia</title>

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

        $result = mysqli_query($connect, "SELECT * from transaction WHERE email = 'xavierkhew00@gmail.com'");
        $row = mysqli_fetch_assoc($result);


        $company_info = "REX Foodipedia";

        //echo $row["subtotal"];
        $tax = 0.06 * $row["subtotal"];
        $grand_total = $tax + $row["subtotal"];
        echo "RM ".$grand_total;
    ?>

    <div class="container">
        <br><br>
    <div class="paper">
        <br>
        <img src="img/logo/logo.png" alt="REX Foodipedia Logo" id="logo">
        <p id="hori-line"><hr></p>
        <p id="receipt title"><b>RECEIPT</b></p>
        <p id="send-type"><b><?php echo $row ["send_type"]?></b></p>
        <p id="receipt_id"><b>Receipt Number:</b> <?php echo $row ["receipt_id"]?></p>
        <p id="date"><b>Date:</b> <?php echo $row ["date"]?></p>
        <p id="hori-line"><hr></p>
        <p id="company-info"><b>From:</b> <?php echo $company_info ?></p>
        <p id="cust-address"><b>Delivery Address:</b> <?php echo $row ["address"]?></p>

        <span class="items">

            <?php
                    $items_sql = mysqli_query($connect, "SELECT * from order_rec WHERE email = 'xavierkhew00@gmail.com'");
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
                        <th id="db-subtotal">RM <?php echo $row ["subtotal"]?></th>
                    </tr>
                    <tr>
                        <td id="discount">- Discount</td>
                        <td id="db-discount">RM <?php echo $row ["discount"]?></td>
                    </tr>
                    <tr>
                        <td id="voucher">- Voucher
                                            <?php //echo $row ["voucher"];
                                                if(!$row ["voucher_code"]){
                                                    

                                                } else{
                                                    echo "<br>";
                                                    echo "Voucher Code: ";
                                                }
                                            ?>
                        </td>
                        <td id="db-voucher"><?php //echo $row ["voucher"];
                                                if(!$row ["voucher_code"]){
                                                    echo "RM 0";

                                                } else{
                                                    echo "RM ".$row ["voucher"];
                                                    echo "<br>";
                                                    echo $row ["voucher_code"];
                                                }
                                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td id="tax">+Service Tax (6%)</td>
                        <td id="db-tax">RM <?php echo $tax ?></td>
                    </tr>
                    <tr>
                        <th id="total">Total</th>
                        <th id="db-total">RM <?php echo $row ["total"]?></th>
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