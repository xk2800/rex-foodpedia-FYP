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

<?php
        $email = $_SESSION["email"];
?>

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
                                        <span class="icons">
                                            <a href="register">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                            </svg>
                                            </a>

                                            <a href="register">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                            </svg>
                                            </a>
                                        </span>
                                        <span id="address"><?php echo $row ["user_address"]?></span>
                                        <span id="add-info">Note to rider: <?php echo $row ["add_info"]?></span>
                                    </label>
                                
                                    <input class="checkbox-budget" type="radio" name="payment-type" id="budget-2" value="Credit / Debit Card">
                                    <label class="for-checkbox-budget col-lg-12 col-md-2" for="budget-2">
                                        <span class="icons">
                                            <a href="register">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                            </svg>
                                            </a>

                                            <a href="register">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                            </svg>
                                            </a>
                                        </span>
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
                
                <?php
                                    $user_info = mysqli_query($connect, "SELECT * from user_acc"); //where email='$email'
                                    $u_i_o = mysqli_fetch_assoc($user_info);
                ?>
                    <br>
                    <div class="container">
                        <span id="step"><p>Step 2</span>
                        <span id="payment-title">Personal Details</span><br>

                        <span id="name"><?php echo $u_i_o ["name"]?></span><br>
                        <span id="email"><?php echo $u_i_o ["email"]?></span><br>
                        <span id="phone_number"><?php echo $u_i_o ["phone_number"]?></span>

                        </p>
                    </div>
                    <br>
                </div>


                <br>
 <!--div class="alignRow">
                                    <div class="imageColumn">
                                        <img src="img/checkout/card-logo/amex.png" alt="Amex Logo" id="amex">
                                    </div>
                                    <div class="imageColumn">
                                        <img src="img/checkout/card-logo/mastercard.gif" alt="Mastercard Logo" id="mastercard">
                                    </div>
                                    <div class="imageColumn">
                                        <img src="img/checkout/card-logo/visa.jpg" alt="Visa Logo" id="visa">
                                    </div>
                                </div-->

                <div class="payment-details">

                <br>
                    <div class="container">
                        <span id="step"><p>Step 3</span>
                        <span id="payment-title">Payment</span></p><br>

                        <div class="col-lg-8 col-md-2">
                        <!--input class="checkbox-budget" type="radio" name="payment-type" id="budget-1" value="Cash on Delivery (COD)">
                            <label class="for-checkbox-budget" for="budget-1">
                                <img src="" alt="">
                                <span data-hover="Cash on Delivery (COD)">Cash on Delivery (COD)</span>
                            </label>
                        
                            <input class="checkbox-budget" type="radio" name="payment-type" id="budget-2" value="Credit / Debit Card">
                            <label class="for-checkbox-budget" for="budget-2">
                                <div class="alignRow">
                                    <div class="imageColumn">
                                        <img src="img/checkout/card-logo/amex.png" alt="Amex Logo" id="amex">
                                    </div>
                                    <div class="imageColumn">
                                        <img src="img/checkout/card-logo/mastercard.gif" alt="Mastercard Logo" id="mastercard">
                                    </div>
                                    <div class="imageColumn">
                                        <img src="img/checkout/card-logo/visa.jpg" alt="Visa Logo" id="visa">
                                    </div>
                                </div>
                                <span data-hover="Credit / Debit Card" >Credit / Debit Card</span>
                            </label>
                            
                            <input class="checkbox-budget" type="radio" name="payment-type" id="budget-3" value="Online Banking">
                            <label class="for-checkbox-budget" for="budget-3">
                                <span data-hover="Online Banking">Online Banking</span>
                            </label-->
                            <span class="COD" id="payment">
                                <input type="radio" value="Cash On Delivery (COD)" name="payment_type"> Cash On Delivery (COD)
                            </span>

                            <span class="c/dcard" id="payment">
                                <input type="radio" value="Credit / Debit Card" name="payment_type"> Credit / Debit Card
                            </span>

                            <span class="online_banking" id="payment">
                                <input type="radio" value="Online Banking" name="payment_type"> Online Banking
                            </span>
                        </div>

                    <!-- PAYMENT BUTTON -->
                        <span id="voucher">Do you have a voucher?</span>
                        <span id="t&c">By making this purchase, you agree to our Terms and conditions</span><br><br>

                        <p><button type="submit" name="makepaymentbtn" id="pay">MAKE PAYMENT & PLACE ORDER</button></p>

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