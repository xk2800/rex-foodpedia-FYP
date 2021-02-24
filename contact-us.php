<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | REX Foodipedia</title>

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

        #desc{
            margin-left:28%;
        }

        .col input{
            display: block;
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
   
        <div class="about-us" style="background-image: url(img/food1.jpg);">
                <h1 class="about-text">CONTACT US</h1>
        </div>
   

   <div class="row">

        <div class="col" style="float: left; width: 50%;">
                <br><br><br>
                <h1 class="text-center">Ask any question to us!</h1>
                <br><br>
                <h4 id="desc">Multimedia University, <br>Persiaran Multimedia, <br>63100 Cyberjaya, Selangor, <br>Malaysia</p></h4>
                
                <h5 id="desc"><br><br>Email :<a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=connect@mmu.edu.my"><u>connect@mmu.edu.my</u></a></h5>
                <h5 id="desc">Tel :<a href="tel:1-300-800-668"><u>1-300-800-668</u></a></h5>
            </div>

        <div class="col" style="text-align: center; float: right; width: 50%; margin-top: 5%;">
            
            <form>
                
                <input name="name" type="text" placeholder="Your name" style="width: 60%;height: 30px; float:left;"/>
                <br><br>
                <input name="email" type="email" placeholder="Your email" style="width:60%;height:30px;float:left;">
                <br><br>
                <textarea name="comment" placeholder="Comment" style="width:60%;height:150px;float:left;resize: none;"></textarea>
                <br><br><br><br><br><br><br>
                <input type="submit">
            </form>
        
        </div>
        
   </div>
   

</body>
</html>