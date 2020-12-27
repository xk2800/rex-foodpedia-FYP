<!DOCTYPE html>
<?php

    include "db-connect.php";
    session_start();

?>
<html>
    <head><title>Checkout | REX Foodipedia</title>

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

<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>

<!--FONTS.CSS-->
    <link rel="stylesheet" href="css/fonts.css">

    <link rel="stylesheet" href="css/checkout.css">


</head>
<body>

    <div class="container">

        <div class="row">

            <div class="col-md-8 col-sm-2 ">
                <div class="delivery-details">
                    <div class="container">
                        <br>
                        <span id="step"><p>Step 1</span>
                        <span id="payment-title">Delivery Details</span></p><br>
                        <form method="post">
                            <p>
                                <span id="title">Contactless Delivery</span><br>
                                To keep you safe, the rider will place your order at your door
                                <select name="contect" id="contect">
                                    <option value="Contactless" default>Contactless</option>
                                    <option value="Non-Contactless">Non-Contactless</option>
                                </select>
                            </p>
                            <p>
                                <span id="title">Delivery time:</span>
                                ASAP
                            </p>

                            <p>

                            <?php
                                    $result = mysqli_query($connect, "SELECT * from address WHERE label='Home'");
                                    $row = mysqli_fetch_assoc($result);

                                    $results = mysqli_query($connect, "SELECT * from address WHERE label='Office'");
                                    $rows = mysqli_fetch_assoc($results);
                            ?>
                                <span id="title">Delivery Address</span><br>
                                <div class="col-lg-8 col-md-2">
                                    <input class="checkbox-budget" type="radio" name="payment-type" id="budget-1" value="Cash on Delivery">
                                    <label class="for-checkbox-budget col-lg-10 col-md-2" for="budget-1">
                                        <span id="address"><?php echo $row ["user_address"]?></span>
                                        <span id="add-info">Note to rider: <?php echo $row ["add_info"]?></span>
                                    </label>
                                
                                    <input class="checkbox-budget" type="radio" name="payment-type" id="budget-2" value="Credit / Debit Card">
                                    <label class="for-checkbox-budget col-lg-12 col-md-2" for="budget-2">
                                        <span id="address"><?php echo $rows ["user_address"]?></span>
                                        <span id="add-info">Note to rider: <?php echo $rows ["add_info"]?></span>                                    </label>
                                    </label>
                                </div>
                            </p>

                    <br>
                    </div>
                </div>

                <br>


                <div class="personal-details">

                    <br>
                    <div class="container">
                        <span id="step"><p>Step 2</span>
                        <span id="payment-title">Personal Details</span><br>

                        <span id="name">Xavier</span><br>
                        <span id="email">xavoer@mail.com</span><br>
                        <span id="phone_number">010</span>

                        </p>
                    </div>
                    <br>
                </div>


                <br>


                <div class="payment-details">

                <br>
                    <div class="container">
                        <span id="step"><p>Step 3</span>
                        <span id="payment-title">Payment</span></p><br>

                        <div class="col-lg-8 col-md-2">
                            <input class="checkbox-budget" type="radio" name="payment-type" id="budget-1" value="Cash on Delivery">
                            <label class="for-checkbox-budget" for="budget-1">
                                <span data-hover="Cash on Delivery (COD)">Cash on Delivery (COD)</span>
                            </label>
                        
                            <input class="checkbox-budget" type="radio" name="payment-type" id="budget-2" value="Credit / Debit Card">
                            <label class="for-checkbox-budget" for="budget-2">
                                <span data-hover="Credit / Debit Card">Credit / Debit Card</span>
                            </label>
                            
                            <input class="checkbox-budget" type="radio" name="payment-type" id="budget-3" value="Online Banking">
                            <label class="for-checkbox-budget" for="budget-3">
                                <span data-hover="Online Banking">Online Banking</span>
                            </label>
                        </div>

                    <!-- PAYMENT BUTTON -->
                        <span id="voucher">Do you have a voucher?</span>
                        <span id="t&c">By making this purchase, you agree to our Terms and conditions</span><br><br>

                        <p><button type="submit" name="makepaymentbtn" id="payment">MAKE PAYMENT & PLACE ORDER</button></p>

                        <span id="t&c">
                            I agree and I demand that you execute the ordered service before the end of the revocation period.<br>
                            I am aware that after the complete fulfillment of the service, I lose my right to recission.
                        </span>

                        </form>
                    </div>
                    <br>
                </div>
            </div>

            <div class="order-list col-lg-4 col-md-2">


                <span id="rest">Your order from REX Foodipedia</span>
                <br>
                <span id="order"><p>food</p></span>
                
                <span class="payment-breakdown">
                    <table id="default-text">
                        <tr>
                            <th id="subtotal">Subtotal</th>
                            <th id="db-subtotal">RM SUBTOTAL</th>
                        </tr>
                        <tr>
                            <td id="discount">- Discount</td>
                            <td id="db-discount">RM DISCOUNT</td>
                        </tr>
                        <tr>
                            <td id="voucher">- Voucher</td>
                            <td id="db-voucher">RM VOUCHER</td>
                        </tr>
                        <tr>
                            <p id="hori-line"><hr></p>
                        </tr>
                        <tr>
                            <td id="tax">+Service Tax(6%)</td>
                            <td id="db-tax">RM SERVICE TAX</td>
                        </tr>
                        <tr>
                            <th id="total">Total</th>
                            <th id="db-total">RM TOTAL</th>
                        </tr>
                        <tr>
                            <th id="payment-type">Payment method: PAYMENT METHOD</th>
                        </tr>
                    </table>

                </span>
            
            
            </div>
        </div>

    </div>
    <br><br>



<!--THIS IS BOOTSTRAP JAVASRIPT PART START-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<!--THIS IS BOOTSTRAP JAVASCRIPT PART END-->

</body>
</html>

<?php
   /* if(isset($_POST["insert"])){
        $gender  = $_POST['hidden_contact'];

        echo "<script>document.getElementById('error').innerHTML = ''</script>";
        echo $gender;


    }*/


?>

<?php
    /*if(isset($_POST["insert"])){
        $gender  = $_POST['checkfield'];

        echo "<script>document.getElementById('error').innerHTML = ''</script>";
        echo $gender;


    }*/


?>