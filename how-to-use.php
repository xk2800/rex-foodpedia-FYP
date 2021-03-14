<?php
    include("db-connect.php");
    $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How To Use | REX Foodipedia</title>

<!--FONTS.CSS STARTS-->
    <link rel="stylesheet" href="css/fonts.css">
<!--FONTS.CSS END-->

<!--THIS IS FONT AWESOME JAVASCRIPT START-->
    <script src="https://kit.fontawesome.com/daa253e478.js" crossorigin="anonymous"></script>
<!--THIS IS FONT AWESOME JAVASCRIPT END-->

<!--THIS IS BOOTSTRAP CSS PART START-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<!--THIS IS BOOTSTRAP CSS PART END-->

<!--          CSS  START             -->
    <style>

        .holder{
            margin: 0 25px 0 25px;
        }
        body{
            background-color: #e7ded2;
        }

        .about-us{
            margin-top: 80px;
            background-color: #cccccc;
            height: 30em;
            background-position: center;
            background-repeat: no-repeat;
            background-size:cover;
            position: relative;
            text-align: center;;
        }

        .about-text{
            text-align: center;
            position: absolute;
            top:50%;
            left:50%;
            transform:translate(-50%,-50%);
            color: #FFFF;
            font-weight:bold;
            font-family: 'Lexend Deca', sans-serif;
        }

        .over-img-txt{
            font-family: 'Lexend Deca', sans-serif;
            font-size: 3em;
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -150%);
            margin-top: 60px;
        }

        .parallax-one {
            padding-top: 200px;
            padding-left: 50px;
            padding-right: 50px;
            padding-bottom: 200px;
            overflow: hidden;
            position: relative;
            width: 100%;
            background-image: url("img/food1.jpg");
            background-attachment: fixed;
            background-size: cover;
            -moz-background-size: cover;
            -webkit-background-size: cover;
            background-repeat: no-repeat;
            background-position: top center;
            z-index:2;
        }

        .creators{
            text-align: left;
        }


    </style>
<!--          CSS   END              -->

</head>
<body>
    <!-- PHP-->
    <?php
        include("nav.php");
    ?>
<!--PHP-->

        <!-- <div class="about-us" style="background-image: url(img/food1.jpg);">
                <h1 class="about-text">ABOUT US</h1>
        </div> -->

    <div class="parallax-one main" >
        <span class="over-img-txt" style="margin-top:3em;">
            <span class="contact-us-text">How To Use ?</span>
            <br/>
            <small style="font-size: 0.4em; font-style: italic;">Place your order in just 8 simple steps !</small>
        </span>
    </div>

    <div class="holder">
        
        <div class="row">
            <div class="about-us" style="float: left; width: 50%; background-image: url(img/how-to-use/main.png); background-position-y: 15%; "></div>
            <div style="text-align: center; float: right; width: 50%; margin-top: 20em;">
                <p><b>STEP 1 :</b>
                <span class="creators">
                    <p>Welcome page or known as REX Foodiepedia landing page, is the page that you will first to see once the website is launched
                       successfully. </p>
                </p>
                </span>
            </div>
        </div>

        <div class="row">
                <div style="text-align: center; float:left; width: 50%; margin-top: 20em;">
                <p><b>STEP 2 :</b>
                <span class="creators">
                    <p>You should then click "Login" from the navigation bar to log into your existing account If you are a new user of our system,
                       you should register an user account by clicking "No account yet ? Create one". </p>
                </p>
                </span>
                </div>
                <div class="about-us" style="float: right; width: 50%; background-image: url(img/how-to-use/2.png); background-position-y:40% ;"></div>
        </div>

        <div class="row">
                <div class="about-us" style="float: left; width: 50%; background-image: url(img/how-to-use/3.png); background-position-y: 35%;"></div>
                <div style="text-align: center; float: right; width: 50%; margin-top: 20em;">
                    <p><b>STEP 3 :</b>
                    <span class="creators">
                        <p>Once you have successfully logged into our system, you will be redirect back to the system landing page. Click on the "Order Now"
                           and it will redirect you to the food menu page.
                        </p>
                    </p>
                    </span>
                </div>
        </div>

        <div class="row">
                <div style="text-align: center; float:left; width: 50%; margin-top: 20em;">
                    <p><b>STEP 4 :</b>
                    <span class="creators">
                        <p>Click on the desire appetite that you would like to place as an order, and it will direct you to the corresponding food menu's detail page.</p>
                    </p>
                    </span>
                </div>
                <div class="about-us" style="float: right; width: 50%; background-image: url(img/how-to-use/4.png); background-position-y:40% ;"></div>
        </div>

        <div class="row">
                <div class="about-us" style="float: left; width: 50%; background-image: url(img/how-to-use/5.png); background-position-y: 35%;"></div>
                <div style="text-align: center; float: right; width: 50%; margin-top: 20em;">
                    <p><b>STEP 5 :</b>
                    <span class="creators">
                        <p>After that, the order that you have placed will be added into the shopping cart. Next, you will be direct to your shopping cart.
                           From there, you can either click on the "Continue Shopping" or proceed to check out the order.
                        </p>
                    </p>
                    </span>
                </div>
        </div>

        <div class="row">
                <div style="text-align: center; float:left; width: 50%; margin-top: 20em;">
                <p><b>STEP 6 :</b>
                    <span class="creators">
                        <p>When either of the option "Self Pick Up" or "Delivery" is clicked, the checkout page will be shown for you to make the payment.
                           You will need to ensure your personal details are correct, and choose the desired payment method, before checkout the order.
                        </p>
                    </p>
                    </span>
                </div>
                <div class="about-us" style="float: right; width: 50%; background-image: url(img/how-to-use/6.png); background-position-y:40% ;"></div>
        </div>

        <div class="row">
                <div class="about-us" style="float: left; width: 50%; background-image: url(img/how-to-use/7.png); background-position-y: 35%;"></div>
                <div style="text-align: center; float: right; width: 50%; margin-top: 20em;">
                <p><b>STEP 7 :</b>
                    <span class="creators">
                        <p>Once the order is placed, you will then required to enter the TAC code and click "Submit" as for the final confirmation of the order you have placed</p>
                    </p>
                    </span>
                </div>
        </div>

        <div class="row">
                <div style="text-align: center; float:left; width: 50%; margin-top: 20em;">
                <p><b>STEP 8 :</b>
                    <span class="creators">
                        <p>Once you the order has been successfully placed, a reciept will be shown to you.
                        </p>
                    </p>
                    </span>
                </div>

                <div class="about-us" style="float: right; width: 50%; background-image: url(img/how-to-use/8.png); background-position-y:40% ; margin-bottom: 100px;"></div>
        </div>

        <?php
            include ("foot.html")
        ?>

    </div>    
</body>
</html>