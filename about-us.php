<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | REX Foodipedia</title>

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
            background-color: #cccccc;
            height: 250px;
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

        <div class="parallax-one main">
        <span class="over-img-txt">
            <span class="contact-us-text">Our Background</span>
        </span>
    </div>

<div class="holder">
    <div class="row">

            <div class="about-us" style="float: left; width: 50%; background-image: url(img/aboutus/whoarewe1.jpg); background-position-y: 15%; ">
                    <h1 class="about-text">WHO ARE WE</h1>
            </div>
            <div style="text-align: center; float: right; width: 50%; margin-top: 5%;">
                <p><b>REX Foodipedia was created by 3 university students as one of their Final Year Project</b>
                <span class="creators">
                    <p>Project Leader: Xavier</p>
                    <p>Reynard</p>
                    <p>Elton</p>
                </p>
                </span>
            </div>

    </div>

    <div class="row">
            <div style="text-align: center; float:left; width: 50%; margin-top:5% ;">
                <!-- <p><b>Our main objectives is to build a website for the home-cook and give them a place to sell or promote their home-cook food, also to help in building a friendly community</b></p> -->
                <p><b>To enable users to purchase food online using our multi-platform website.</b></p>
                <p><b>To allow users to have a variety of delivery options.</b></p>
                <p><b>To provide viewing of prices feature that allow users to view the product's final price.</b></p>
            </div>

            <div class="about-us" style="float: right; width: 50%; background-image: url(img/aboutus/whatwedo1.png); background-position-y:40% ;">
                <h1 class="about-text">OBJECTIVES</h1>
            </div>
    </div>

    <div class="row">
            <div class="about-us" style="float: left; width: 50%; background-image: url(img/aboutus/howwedo.jpg); background-position-y: 35%;">
                    <h1 class="about-text">HOW WE DO IT</h1>
            </div>

            <div style="text-align: center; float: right; width: 50%; margin-top: 5%;">
                <p><b>We made a website that is user-friendly for the customer and the seller</b></p>
            </div>
    </div>
</div>
<?php
    include ("foot.html")
?>
</body>
</html>