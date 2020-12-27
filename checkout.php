<!DOCTYPE html>
<?php

    

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

<!--FONTS.CSS-->
    <link rel="stylesheet" href="css/fonts.css">

    <link rel="stylesheet" href="css/checkout.css">

</head>
<body>

    <div class="container">

        <div class="row">

            <div class="col-lg-8 col-md-7">
                <div class="delivery-details">


                </div>

                <div class="personal-details">

                </div>

                <div class="payment-details">
                    <span class="step">Step 3</span>
                    <span id="payment-title">Payment</span><br>
                    <!--span class="rad"><input type="radio" class="full-time" value="Cash on Delivery" name="job" required > Cash on Delivery (COD)</span><br>
                    <span class="rad"><input type="radio" class="internship" value="Credit / Debit Card" name="job"> Credit / Debit Card</span><br>
                    <span class="rad"><input type="radio" class="Freelance" value="Online Banking" name="job"> Online Banking</span><br>
                    -->

                    <div class="col-xl-10 pb-5">
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
                </div>
            </div>

            <div class="col-lg-4 col-md-5">

                <span style="box-shadow:0 4px 16px 0 black; width: 50px;">text hererrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr</span>
            </div>
        </div>

    </div>



<!--THIS IS BOOTSTRAP JAVASRIPT PART START-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<!--THIS IS BOOTSTRAP JAVASCRIPT PART END-->

</body>
</html>