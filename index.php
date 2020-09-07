<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" href= "img/logo/logo.jpg">

    <title>Home | REX Foodipedia</title>

    <!--Bootstrap CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <!--Font Awesome CDN-->
    <script src="https://kit.fontawesome.com/daa253e478.js" crossorigin="anonymous"></script>

    <!--Scroll Effect CDN https://michalsnik.github.io/aos/-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


    <style>
        #all{
            background-color: #e8ded2;
        }
        .logo img{
            width: 10%;
            height: 10%;
        }
        .main img{
            width: 100%;
            height: 401px;
        }
        #typewriter{
            color: white;
            font-size: 40px;
        }
        .hungry{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-150%, -50%);
        }
        .typewriter{
            position: absolute;
            top: 50%;
            left: 80%;
            transform: translate(-100%, -50%);
            /*position: fixed;*/
        }
    </style>
</head>
<body>

<div id="all">

<!--LEVEL 1-->
<!--TOP nav bar start-->
    
    <nav class="navbar navbar-expand-sm navi">
        <!--LOGO-->
        <a class="navbar-brand" href="index"> <span class="logo" id="logo"><img src="img/logo/logo.jpg"></span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="right-end">
        <!--CART-->
        <span class="navbar-item">
            <span class="cart" id="cart"><i class="fas fa-shopping-cart"></i></span>
        </span>
        <!--USERNAME-->
        <span class="navbar-item">&nbsp;&nbsp;&nbsp;&nbsp;
            <i class="fas fa-user"></i>
            !Username!
        </span>
        </div>
    </nav>
<!--TOP nav bar end-->
<!--LEVEL 1 END-->

<!--LEVEL 2-->
    <span class="main"><img src="img/test/food1.jpg"></span>
    <span class="over-img-txt">
        <span class="hungry">Hungry?</span>
        
    <!--TYPING EFFECT-->
    <div class="typewriter">
        <div id="typewriter"></div>
        <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
        <script>
            const instance = new Typewriter('#typewriter', {
            strings: ['Order Now', 'Get food from us'],
            autoStart: true,
            loop: true,
            });
        </script>
    </div>
    </span>
<!--LEVEL 2 END-->

<!--LEVEL 3-->
<?php
    include ("navbar.html")
?>
<!--LEVEL 3 END-->

<!--LEVEL 4-->
<!--Main Bootstrap container-->
    <div class="container">
        <!--OUR STORY-->
        <div data-aos="fade-right">
            <div class="story"><p>Our Story<br>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
        </div>
        <!--HOW TO USE-->
        <div data-aos="fade-left">
            <div class="story"><p>How to Use<br>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
        </div>
        <!--FAQ-->
        <div data-aos="fade-right">
            <div class="story"><p>FAQ<br>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
        </div>
    </div>
<!--Main Bootstrap end-->
<!--LEVEL 4 END-->

<!--LEVEL 5-->
<!--Footer Start-->
    <!--Logo + Address-->
    <div class="logo"><img src="img/logo/logo.jpg"></div>
    <div class="address"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</p></div>

    <!--sitemap-->
    <span class="main"><p>About</p></span>

    <span class="supp">
        <p>Our Story<br>
        test</p>
    </span>

    <!--Footer End-->
<!--LEVEL 5 END-->
</div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    
    <!--Scroll Effect CDN https://michalsnik.github.io/aos/-->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>