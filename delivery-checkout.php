<!DOCTYPE html>
<?php

    include "db-connect.php";
    ob_start();

?>
<html>

<head>
    <title>Delivery Checkout | REX Foodipedia</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--INCLUDE START HERE-->
    <link rel="icon" type="image/png" href= "img/logo/logo.png">

    <!--THIS IS FONT AWESOME JAVASCRIPT START-->
    <script src="https://kit.fontawesome.com/daa253e478.js" crossorigin="anonymous"></script>
    <!--THIS IS FONT AWESOME JAVASCRIPT END-->

    <!--THIS IS BOOTSTRAP CSS PART START-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!--THIS IS BOOTSTRAP CSS PART END-->

    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>

    <!-- jQuery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!--FONTS.CSS-->
    <link rel="stylesheet" href="css/fonts.css">

    <link rel="stylesheet" href="css/checkout.css">

    <script>
        /*$('.radio-group .radio').click(function(){
    $(this).parent().find('.radio').removeClass('selected');
    $(this).addClass('selected');
    var val = $(this).attr('data-value');
    //alert(val);
    $(this).parent().find('input').val(val);
});
*/
        function others(val) {
            var element = document.QuerySelector('#other');
            if (val == 'others') {
                element.style.display = 'block';

            } else {
                element.style.display = 'none';
            }

            document.QuerySelector
        }

        function others(val) {
            var element = document.getElementById('other')
            var elements = document.getElementById('others');
            if (val == 'others' || val != 'checkOB') {
                element.style.display = 'block';
                elements.style.display = 'block';

            } else if (val == 'checkOB') {
                element.style.display = 'none';
            }
        }

        function payment_drop() {
            if ((document.getElementById('radioCard').checked == true) || (document.getElementById('radioCOD')
                    .unchecked == false) || (document.getElementById('radioOB').unchecked == false)) {

                //show card payment options
                document.getElementById('card').style.display = 'block';
                document.getElementById('cash').style.display = 'none';
                document.getElementById('online_banking').style.display = 'none';

                document.getElementById("pay_method").innerHTML = 'Online Card Payment';

            } else if ((document.getElementById('radioCard').unchecked == false) || (document.getElementById('radioCOD')
                    .checked == true) || (document.getElementById('radioOB').unchecked == false)) {

                //show COD payment options
                document.getElementById('cash').style.display = 'block';
                document.getElementById('card').style.display = 'none';
                document.getElementById('online_banking').style.display = 'none';

                document.getElementById("pay_method").innerHTML = 'Cash On Delivery';

            } else if ((document.getElementById('radioCard').unchecked == false) || (document.getElementById('radioCOD')
                    .unchecked == false) || (document.getElementById('radioOB').checked == true)) {

                //show online banking payment options
                document.getElementById('card').style.display = 'none';
                document.getElementById('cash').style.display = 'none';
                document.getElementById('online_banking').style.display = 'block';

                document.getElementById("pay_method").innerHTML = 'Online Banking';

            } else{
                document.getElementById("pay_method").innerHTML = 'No Payment Method Selected';
            }
        }

        $('#email_value').focus(function() {
            $(this).blur();
        });
    </script>


</head>

<body>

<?php
        include("nav.html");
        $email = "xavierkhew00@gmail.com";
        //$email = $_SESSION["email"];
?>

    <br><br>
    <div class="container">

        <div class="row">

            <div class="col-lg-8 col-md-9 col-sm-10">
                <div class="delivery-details">
                    <div class="container">

                        <br>
                        <span id="step">
                            <p>Step 1
                        </span>
                        <span id="payment-title">Delivery Details</span></p><br>
                        <div class="container">
                            <form method="POST">
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
                                            $result = mysqli_query($connect, "SELECT * from address WHERE label='Home' AND email='$email'");
                                            $row = mysqli_fetch_assoc($result);

                                            $results = mysqli_query($connect, "SELECT * from address WHERE label='Office' AND email='$email'");
                                            $rows = mysqli_fetch_assoc($results);

                    ?>
                                    <span id="title">Delivery Address:</span>
                                    <br>
                                    <a href="" id="addinfo">+ Add Address</a>
                                <div class="col-lg-12 col-md-12 col-sm-12">

                                    <div class="radio-toolbar">
                    <?php               if($row){
                    ?>
                                            <span class="onlinebanking_payment">
                                                <input type="radio" id="homeaddress" name="address-selection"
                                                    value="<?php echo $row ["user_address"]?>">
                                                <label for="homeaddress" class="col-lg-10 col-md-12">
                                                    <a href="register" id="editbtn">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                            <path
                                                                d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                                        </svg>
                                                    </a>

                                                    <a href="register" id="removebtn">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                            <path
                                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                            <path fill-rule="evenodd"
                                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                                        </svg>
                                                    </a>
                                                    <br>
                                                    <span id="address"><?php echo $row ["user_address"]?></span>
                                                    <br>
                                                    <span id="add-info">Note to rider: <?php echo $row ["add_info"]?></span>
                                                </label>
                                            </span>
                    <?php               }else{
                    ?>
                                            <p><span id="error">No Home Address Found</span></p>
                    <?php
                                        }
                    ?>

                        <?php           if($rows){
                        ?>
                                            <span class="onlinebanking_payment">
                                                <input type="radio" id="workaddress" name="address-selection"
                                                    value="<?php echo $rows ["user_address"]?>">
                                                <label for="workaddress" class="col-lg-10 col-md-12">
                                                    <a href="register" id="editbtn">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                            <path
                                                                d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                                        </svg>
                                                    </a>

                                                    <a href="register" id="removebtn">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                            <path
                                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                            <path fill-rule="evenodd"
                                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                                        </svg>
                                                    </a>
                                                    <br>
                            <?php
                                                        if($rows){
                            ?>
                                                            <span id="address"><?php echo $rows ["user_address"]?></span>
                                                            <br>
                                                            <span id="add-info">Note to rider:
                                                                <?php echo $rows ["add_info"]?></span>
                            <?php
                                                        }else{
                            ?>
                                                            <span id="error">No Address Found</span>
                            <?php
                                                        }
                            ?>
                                                </label>
                                            </span>
                            <?php           } else{
                            ?>
                                                <p><span id="error">No Office Address Found</span></p>
                            <?php           }
                            ?>
                                    </div>
                                </div>
                                </p>
                        </div>
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
                        <span id="step">
                            <p>Step 2
                        </span>
                        <span id="payment-title">Personal Details</span>
                        <br>
                        <a href="" id="addinfo">+ Edit Personal Info</a>
                        <br>
                        <div class="container">
                            <span
                                id="name">Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                                <?php echo $u_i_o ["name"]?></span><br>
                            <span
                                id="email">Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                                <input type="text" name="user_email" id="email_value" value="<?php echo $u_i_o ["email"]?>" readonly>
                                </span><br>
                            <span id="phone_number">Contact Number: <?php echo $u_i_o ["phone_number"]?></span>
                        </div>
                        </p>
                    </div>
                    <br>
                </div>


                <br>

                <div class="payment-details">

                    <br>
                    <div class="container">
                        <span id="step">
                            <p>Step 3
                        </span>
                        <span id="payment-title">Payment</span></p><br>
                        <!--col-lg-12 col-md-2 -->
                        <div class="container">
                            <div class="col-lg-11 col-md-12 col-sm-12">

                                <div class="radio-toolbar">
                                    <span class="COD_payment">
                                        <input type="radio" id="radioCOD" name="payment" value="Cash On Delivery"
                                            onclick="javascript:payment_drop();">
                                        <label for="radioCOD" class="col-lg-12 col-md-10 col-sm-10">
                                            <i class="fa fa-money alignicon" aria-hidden="true"></i>
                                            <!--br-->
                                            Cash on Delivery (COD)
                                        </label>
                                    </span>

                                    <span class="card_payment">
                                        <input type="radio" id="radioCard" name="payment" value="Credit / Debit Card"
                                            onclick="javascript:payment_drop();">
                                        <label for="radioCard" class="col-lg-12 col-md-10 col-sm-10">
                                            <div class="alignicon">
                                                <i class="fa fa-cc-amex" aria-hidden="true"></i>
                                                <i class="fa fa-cc-mastercard" aria-hidden="true"></i>
                                                <i class="fa fa-cc-visa" aria-hidden="true"></i>
                                            </div>
                                            Credit / Debit Card
                                        </label>
                                    </span>

                                    <span class="onlinebanking_payment">
                                        <input type="radio" id="radioOB" name="payment" value="Online Banking"
                                            onclick="javascript:payment_drop();">
                                        <label for="radioOB" class="col-lg-12 col-md-10 col-sm-10">
                                            <i class="fa fa-university alignicon" aria-hidden="true"></i>
                                            Online Banking
                                        </label>
                                    </span>

                                    <input type="text" name="other" id="other" style='display:none;' />
                                    <input type="text" name="other" id="others" style='display:none;' />

                                    <!-- <form method="post" id="others"> -->
                                        <!-- <input type="radio" name="other" id="other" style='display:none;' value="">
                                        <input type="text" name="other" id="other" style='display:none;' /> -->
                                    <!-- </form> -->

                                </div>
                    <?php
                                        $card_info = mysqli_query($connect, "SELECT * from card_info WHERE email='$email'"); //where email='$email'
                                        

                    ?>

                                <!-- JS appear msg -->
                                <div class="container">
                                    <div id="cash" style='display:none;'>
                                        <p id="title">PAY BY CASH ON DELIVERY</p>
                                        <p>Simply pay the rider, when he delivers the food to your doorstep.</p>
                                    </div>
                                    <div id="card" style="display:none">
                    <?php
                                        while($card_out = mysqli_fetch_assoc($card_info)){
                                            
                    ?>
                                            <input type='radio' id='card_option' name="cardnum"
                                                value='<?php echo $card_out ["card_num"]?>'>
                        <?php
                                                    if($card_out["card_type"] == "MasterCard"){
                                                        echo '&emsp;<i class="fa fa-cc-mastercard" aria-hidden="true"></i>';

                                                    } else if($card_out["card_type"] == "Visa"){
                                                        echo '&emsp;<i class="fa fa-cc-visa" aria-hidden="true"></i>';

                                                    } else if($card_out["card_type"] == "Amex"){
                                                        echo '&emsp;<i class="fa fa-cc-amex" aria-hidden="true"></i>';

                                                    } else{
                                                        echo '&emsp;Card selected invalid type';
                                                    }


                                                    $number =  $card_out ["card_num"]; //https://stackoverflow.com/questions/45588890/displaying-last-4-digit-credit-card/45588941
                                                    $masked =  str_pad(substr($number, -4), strlen($number), '*', STR_PAD_LEFT);
                                                    //echo $masked;
                        ?>
                                            <?php echo $masked;?>&emsp;
                                            <?php echo $card_out ["name_on_card"]?>,
                                            <?php echo $card_out ["exp_date"]?>
                                            <br><br>
                    <?php
                                        }
                    ?>
                                        <!-- What can we do to accommodate you?  <input type='text' id='acc' name='acc'> -->
                                    </div>
                                    <div id="online_banking" style="display:none">
                                        <p id="title">PAY WITH ONLINE BANKING</p>
                                        <p>Pay with Online Banking:
                                            You will not be redirected to secure payment page as we do not have a
                                            payment system. After you click, you will
                                            be redirected back to REX Foodipedia again.</p>
                                    </div>

                                </div>
                            </div>

                            <br>
                            <span id="voucher">Do you have a voucher?</span><br>
                            <span id="t&c">By making this purchase, you agree to our Terms and conditions</span><br><br>
                            
                            <!-- PAYMENT BUTTON -->
                            <!--p><button type="submit" name="makepaymentbtn" id="pay">MAKE PAYMENT & PLACE ORDER</button></p-->
                            <p><button type="submit" class="btn btn-secondary btn-lg btn-block" name="make_paymentbtn" id="pay">MAKE PAYMENT & PLACE ORDER</button></p>
                            
                            <!-- <button type="submit" name="submitbtn" class="btn btn-secondary btn-lg btn-block">Submit</button> -->
                            <!-- <button type="submit" name="testingbtn" class="btn btn-secondary btn-lg btn-block">Submit</button> -->

                            <span id="t&c">
                                I agree and I demand that you execute the ordered service before the end of the
                                revocation period.<br>
                                I am aware that after the complete fulfillment of the service, I lose my right to
                                recission.
                            </span>

                            </form>
                        </div>
                    </div>
                    <br>
                </div>
            </div>

<!-- white payment total summary section -->
            <!-- col-lg-8 col-md-10 col-sm-10-->
            <div class="order-list col-lg-4 col-md-10 col-sm-10" id="order-list">


                    <?php
                                        $countlogic   = mysqli_query($connect, "SELECT * from cart WHERE email = '$email'");
                                        $total_price = 0;
                                        while($countlogic_out = mysqli_fetch_assoc($countlogic)){

                                            
                                            $dish_price = $countlogic_out['dish_price'];
                                            $total_price += $dish_price;
                                            //echo $total_price;
                                            
                                        }

                                        $checking   = mysqli_query($connect, "SELECT * from transaction WHERE email = '$email'");
                                        $payit      = mysqli_fetch_assoc($checking);
                    ?>
                <span id="rest">Your order from REX Foodipedia</span>
                <br>
                <span id="order">
                    <p>food</p>
                </span>

                <span class="payment-breakdown">
                    <table id="default-text">
                        <tr>
                            <th id="subtotal">Subtotal</th>
                    <?php
                        //$subtotal = $payit ["subtotal"];
                    ?>
                            <th id="db-subtotal" class="db-rows">RM
                                <?php echo number_format((float)$total_price, 2, '.', '') ?></th>
                        </tr>
                        <!-- <tr>
                            <td id="discount">- Discount</td>
                            <td id="db-discount" class="db-rows">RM 
                    <?php 

                                                if($payit ["discount"]){
                                                    $discount = $payit ["discount"];
                                                    echo number_format((float)$discount, 2, '.', '');

                                                }else{
                                                    $nill = 0;
                                                    echo number_format((float)$nill, 2, '.', '');
                                                }
                            
                    ?>
                            </td>
                        </tr>
                        <!-tr>
                            <td id="voucher">- Voucher <br>
                    <?php
                                                    /*if( $payit ["voucher_code"]){
                                                        echo "Voucher code: ".$payit ["voucher_code"];
                                                    } else{
                                                        echo "No Voucher Code Found";
                                                    }*/
                    ?>
                            </td-->

                            <!--td id="db-voucher" class="db-rows">RM
                    <?php
                                                    if( $payit ["voucher_code"]){
                                                        echo number_format((float)$payit ["voucher"], 2, '.', '');
                                                    } else{
                                                        echo "0";
                                                    }
                    ?>
                            </td->
                            <td>
                        </tr>
                        <tr>
                            <p id="hori-line">
                                <hr>
                            </p>
                        </tr> -->
                        <hr>
                        <tr>
                    <?php
                    //fix this algo, need to take total price 
                                        //$tax = $subtotal * 6/100;
                                        
                                        //discount tax amount
                                        /*$pretax_discount    = $discount /((6/100)+1);
                                        $tax_discount       = $discount - $pretax_discount;*/

                                        //tax amount of subtotal
                                        $pretax             = $total_price /((6/100)+1);
                                        $tax                = $total_price - $pretax/* - $tax_discount*/;
                                        //$tax = ($subtotal * (100/6));

                    ?>
                            <td id="tax">+Service Tax(6%)</td>
                            <td id="db-tax" class="db-rows">RM <?php echo number_format((float)$tax, 2, '.', '') ?></td>
                        </tr>
                        <tr>
                    <?php
                                        //$total_taxed = $tax + $subtotal;
                                        $total_to_pay = $total_price /*- $discount*/;
                    ?>
                            <th id="total">Total</th>
                            <th id="db-total" class="db-rows">RM
                                <?php echo number_format((float)$total_to_pay, 2, '.', '') ?></th>
                        </tr>
                        <tr>
                            <th id="payment-type">Payment method:
                                <span id="pay_method"></span>
                            </th>
                        </tr>
                    </table>

                </span>

            </div>
        </div>

    </div>
    <br><br>

    <!--div class="personal-details">

<?php
                    /*$user_info = mysqli_query($connect, "SELECT * from user_acc"); //where email='$email'
                    $u_i_o = mysqli_fetch_assoc($user_info);*/
?>
<br>

<form method="post">

<select name="contect" id="contect">
                                        <option value="Contactless" default>Contactless</option>
                                        <option value="Non-Contactless">Non-Contactless</option>
                                    </select>
<div class="container">
    <span id="step">
        <p>Step 2
    </span>
    <span id="payment-title">Personal Details</span>
    <br>
    <a href="" id="addinfo">+ Edit Personal Info</a>
    <br>
    <div class="container">
        <span
            id="name">Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
            <?php //echo $u_i_o ["name"]?></span><br>
        <span
            id="email">Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
            <input type="text" name="testing" id="email_value" value="<?php //echo $u_i_o ["email"]?>" readonly>
            </span><br>
        <span id="phone_number">Contact Number: <?php //echo $u_i_o ["phone_number"]?></span>
    </div>
    </p>
</div>
<br>                            <button type="submit" name="testingbtn" class="btn btn-secondary btn-lg btn-block">Submit</button>

</div><br><br><br><br>
</form-->

    <!--THIS IS BOOTSTRAP JAVASRIPT PART START-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <!--THIS IS BOOTSTRAP JAVASCRIPT PART END-->

</body>
</html>

<?php

    //time set
    date_default_timezone_set("Asia/Kuala_Lumpur");
    $time = time();
    $actual_time = date('Y-m-d H:i:s', $time);

    echo $actual_time;


echo "<br>".$email;

    if(isset($_POST["make_paymentbtn"])){
        
        $send_type  = "Delivery";

        $contact    = $_POST["contect"];
        $address    = $_POST["address-selection"];
        $pay        = ($_POST["payment"] == "Credit / Debit Card") ? $_POST['cardnum']:$_POST['payment'];
        $email      = $_POST["user_email"];
        $pay_total  = $total_to_pay;
        $input_time = $actual_time;


        echo $contact."<br>".$address."<br>".$pay."<br>".$email;

        //$query = "UPDATE resume SET phone_number='$p_number' , last_edit_by='user' , vetting='1' , file='$file' , job_type='$job', last_edit_time='$time', db_time='$db_info' WHERE email='$email'";
        
        if($pay == "Cash On Delivery"){
            $pay_out = '0';

        } else if ($pay == "Credit / Debit Car"){
            $pay_out = '1';
        
        } else if ($pay == "Online Banking"){
            $pay_out = '2';
        
        }else{
            $pay_out = '0';
        }

        //$query = "UPDATE transaction SET contactornot='$contact', address='$address', payment_method='$pay_out', send_type='$send_type', payment_time='$input_time' WHERE email='$email'";
        
        //if(mysqli_query($connect, $query)){
            //echo "<br>success insert into db";
            //echo '<script>("Your account is verified")</script>'; //not needed if unwanted
            //session_start();

            //Using POST
            //$test = $_POST['cardnum'];

            //Using GET, POST or COOKIE.
            //$var_value = $_REQUEST['varname'];
            $cardnum                    = $pay;
            $pay_transfer               = $pay_total;
            $del_address                = $address;
            $delivery_type              = 'delivery';
            $payment_type               = $pay_out;

            $_SESSION['cardnum']        = $cardnum;
            $_SESSION['pay_total']      = $pay_transfer;
            $_SESSION['del_address']    = $del_address;
            $_SESSION['delivery_type']  = $delivery_type;
            $_SESSION['payment_types']  = $payment_type;

            $_SESSION['email']          = $email;
            
            //header('location:tac');
        //}//else{
            //echo "failed";
        //}
        //header('location: test.php');

/* 
    TODO: add logic to move from cart to transaction n order_rec table 
*/
            $run_test = mysqli_query($connect, "SELECT * FROM cart WHERE email='$email'");
                    
            //loop for getting data from cart
            while($run_test_out = mysqli_fetch_assoc($run_test)){

                $email      = $run_test_out['email'];
                $dish_name  = $run_test_out['dish_name'];
                $dish_price = $run_test_out['dish_price'];
                $dish_id    = $run_test_out['dish_id'];
                $dish_qty   = $run_test_out['dish_qty'];
                $send_type  = 'Delivery';
                $order_stats= '1';

                //qty * unit price = product_total; -> product_total INTO transaction table, column subtotal

                //$dish_total_sql += $dish_price * $dish_qty;


                //must build purchase total logic here then push 

                //delete data(s) from cart table
                $delete_test = mysqli_query($connects, "DELETE FROM cart WHERE email='$email'");

            }
            //$dish_total_sql = $dish_total;

            //used to check latest receipt id 
            $check_receipt_id = mysqli_query($connect, "SELECT * from transaction ORDER BY receipt_id DESC");
            $call_receipt_id = mysqli_fetch_assoc($check_receipt_id);

            $receipt_id_check = $call_receipt_id ["receipt_id"];
            $number = $receipt_id_check+1;
            $number = sprintf('%07d',$number);
            echo $number;

            //add into order record table
            $insert_test = $mysqli->query("INSERT INTO order_rec(email, dish_name, dish_price, dish_id, dish_qty)
            VALUES ('$email', '$dish_name', '$dish_price', '$dish_id', '$dish_qty')");

            //add into transaction table
            $sql_insert_into_transaction = mysqli_query($connect, "INSERT INTO transaction
            (email, contactornot, send_type, date, address, subtotal, total, payment_method, payment_time) 
            VALUES ('$email', '$contact', '$send_type', '$input_time', '$address', '$pay_total', '$pay_total', '$pay_out', '$input_time')");

            echo $pay_total;

            if($insert_test && $delete_test && $sql_insert_into_transaction){
                header("location: tac");
                echo "insert done";
            }else{
                echo "insert fail";
            }


    }


?>

