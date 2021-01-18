<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu | REX Foodipedia</title>

<!--FONTS.CSS STARTS-->
    <link rel="preload" href="css/fonts.css" as="style">
<!--FONTS.CSS END-->

<!--THIS IS FONT AWESOME JAVASCRIPT START-->
    <script src="https://kit.fontawesome.com/daa253e478.js" crossorigin="anonymous"></script>
<!--THIS IS FONT AWESOME JAVASCRIPT END-->

<!--THIS IS BOOTSTRAP CSS PART START-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<!--THIS IS BOOTSTRAP CSS PART END-->

<!--          CSS  START             -->
    <style>
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
            color:orange;
            font-weight:bold;
        }


    </style>
<!--          CSS   END              -->

</head>
<body>
    <!-- PHP-->
    <?php
        include("nav.html");
    ?>
<!--PHP-->
   
        <div class="about-us" style="background-image: url(img/food1.jpg);margin-top:50px;">
                <h1 class="about-text">ABOUT US</h1>
        </div>
   

   <div class="row">
        <div class="about-us" style="float: left; width: 50%; background-image: url(img/aboutus/whoarewe.jpg); background-position-y: 15%;">
                <h1 class="about-text">WHO ARE WE</h1>
        </div>
        <div style="text-align: center; float: right; width: 50%; margin-top: 5%;">
            <p><b>REXfoodipedia is created by 3 university students as one of their university project</b></p>
        </div>
        
   </div>
    
   <div class="row">
        <div style="text-align: center; float:left; width: 50%; margin-top:5% ;">
            <p><b>Our main objectives is to build a website for the home-cook and give them a place to sell or promote their home-cook food, also to help in building a friendly community</b></p>
        </div>

        <div class="about-us" style="float: right; width: 50%; background-image: url(img/aboutus/whatwedo.png); background-position-y:40% ;">
            <h1 class="about-text">OBJECTIVES</h1>
        </div>
   </div>
   
   <div class="row">
        <div class="about-us" style="float: left; width: 50%; background-image: url(img/aboutus/howwedo.png); background-position-y: 35%;">
                <h1 class="about-text">HOW WE DO</h1>
        </div>
        
        <div style="text-align: center; float: right; width: 50%; margin-top: 5%;">
            <p><b>We make a website that are user-friendly for the customer and the seller</b></p>
        </div>    
    </div>

</body>
</html>