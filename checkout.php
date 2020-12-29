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


function others(val){
            var element=document.getElementById('other');
            if(val=='Credit / Debit Card'){
                element.style.display='block';

            }else{
                element.style.display='none';
            }
        }
</script>


</head>
<body>

<?php
        $email = $_SESSION["email"];
?>

    <div class="container">

        <div class="row">

            <div class="col-lg-8 col-md-9 col-sm-10">
                <div class="delivery-details">
                    <div class="container">
                        
                        <br>
                        <span id="step"><p>Step 1</span>
                        <span id="payment-title">Delivery Details</span></p><br>
                            <div class="container">
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
                                        <span id="title">Delivery Address:</span>
                                        <br>
                                        <a href="" id="addinfo">+ Add Address</a>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            
                                            <div class="radio-toolbar">
                                                <span class="onlinebanking_payment">
                                                    <input type="radio" id="homeaddress" name="payment-type" value="<?php echo $row ["user_address"]?>">
                                                    <label for="homeaddress" class="col-lg-10 col-md-12">
                                                        <a href="register" id="editbtn">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                                        </svg>
                                                        </a>

                                                        <a href="register" id="removebtn">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                        </svg>
                                                        </a>
                                                        <br>
                                                        <span id="address"><?php echo $row ["user_address"]?></span>
                                                        <br>
                                                        <span id="add-info">Note to rider: <?php echo $row ["add_info"]?></span>
                                                    </label> 
                                                </span>


                                                <span class="onlinebanking_payment">
                                                    <input type="radio" id="workaddress" name="payment-type" value="<?php echo $rows ["user_address"]?>">
                                                    <label for="workaddress" class="col-lg-10 col-md-12">
                                                        <a href="register" id="editbtn">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                                        </svg>
                                                        </a>

                                                        <a href="register" id="removebtn">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                        </svg>
                                                        </a>
                                                        <br>
                                                        <span id="address"><?php echo $rows ["user_address"]?></span>
                                                        <br>
                                                        <span id="add-info">Note to rider: <?php echo $rows ["add_info"]?></span>
                                                    </label> 
                                                </span>
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
                            <span id="step"><p>Step 2</span>
                            <span id="payment-title">Personal Details</span>
                            <br>
                            <a href="" id="addinfo">+ Edit Personal Info</a>
                            <br>
                            <div class="container">
                                <span id="name">Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $u_i_o ["name"]?></span><br>
                                <span id="email">Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $u_i_o ["email"]?></span><br>
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
                            <span id="step"><p>Step 3</span>
                            <span id="payment-title">Payment</span></p><br>
                            <!--col-lg-12 col-md-2 -->
                            <div class="container">
                                <div class="col-lg-11 col-md-12 col-sm-12">
                                
                                    <div class="radio-toolbar">
                                        <span class="COD_payment">
                                            <input type="radio" id="radioCOD" name="payment" value="Cash on Delivery (COD)">
                                            <label for="radioCOD" class="col-lg-12 col-md-10 col-sm-10">
                                                <i class="fa fa-money alignicon" aria-hidden="true"></i>
                                                <!--br-->
                                                Cash on Delivery (COD)
                                            </label>
                                        </span>

                                        <span class="card_payment">
                                            <input type="radio" id="radioCard" name="payment" value="Credit / Debit Card" onchange='others(this.value);'>
                                            <label for="radioCard" class="col-lg-12 col-md-10 col-sm-10">
                                                <div class="alignicon">
                                                    <i class="fa fa-cc-amex" aria-hidden="true"></i>
                                                    <i class="fa fa-cc-mastercard" aria-hidden="true"></i>
                                                    <i class="fa fa-cc-visa" aria-hidden="true"></i>
                                                </div>
                                                Credit / Debit Card
                                            </label>
                                            <input type="text" name="other" id="other" style='display:none;'/>

                                        </span>

                                        <span class="onlinebanking_payment">
                                            <input type="radio" id="radioOB" name="payment" value="Online Banking">
                                            <label for="radioOB" class="col-lg-12 col-md-10 col-sm-10">
                                                <i class="fa fa-university alignicon" aria-hidden="true"></i>
                                                Online Banking
                                            </label> 
                                        </span>

                                    </div>
                                
                                </div>

                        <!-- PAYMENT BUTTON -->
                            <span id="voucher">Do you have a voucher?</span>
                            <span id="t&c">By making this purchase, you agree to our Terms and conditions</span><br><br>

                            <!--p><button type="submit" name="makepaymentbtn" id="pay">MAKE PAYMENT & PLACE ORDER</button></p-->
                            <p><button type="button" class="btn btn-secondary btn-lg btn-block" id="pay">MAKE PAYMENT & PLACE ORDER</button></p>

                            <span id="t&c">
                                I agree and I demand that you execute the ordered service before the end of the revocation period.<br>
                                I am aware that after the complete fulfillment of the service, I lose my right to recission.
                            </span>

                                </form>
                            </div>
                    </div>
                    <br>
                </div>
            </div>

<!-- col-lg-8 col-md-10 col-sm-10-->
            <div class="order-list col-lg-4 col-md-10 col-sm-10">


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