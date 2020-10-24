<?php
    session_start();
    include("db-connect.php");

    /**
     * using if else statement for homepage
     */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" href= "img/logo/logo.png">

    <!--title>Home | REX Foodipedia</title-->

<?php

    //$_SESSION['logged-in'];

    /**
     * <p class="menu"><a href="index.html">Home</a></p> 
     *    <p class="menu"><a href="Product1.html">Products</a> </p> 
     * 
     *  <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true): ?>
     *   
     * <p class="menu"><a href="logout.php">Logout</a></p>
     * 
     *   <?php else: ?>
     * 
     *   <p class="menu"><a href="login.html">Login</a></p> 
     * 
     *   <?php endif; ?>
     * 
     * 
     * <?php if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){?>
     *      <title> Welcome <?php echo $_SESSION['uname']?> | REX Foodpedia</title>
     * <?php } else { ?>
     *      <title>Home | REX Foodipedia</title>
     * <?php } ?>
     * 
     */
    
?>
<?php if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){?>
                <title> Welcome <?php echo $_SESSION['uname']?> | REX Foodpedia</title>
         <?php } else { ?>
                <title>Home | REX Foodipedia</title>
         <?php } ?>

<!--FONTS.CSS-->
    <link rel="stylesheet" href="css/fonts.css">

<!--Bootstrap CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
<!--Font Awesome CDN-->
    <script src="https://kit.fontawesome.com/daa253e478.js" crossorigin="anonymous"></script>

<!--Scroll Effect CDN https://michalsnik.github.io/aos/-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!--Disable Right Click-->
    <script src="js/index/disableMouseRightClick.js">
        var options = {

        // Set this false to deactivate alert
        enableAlert: true, 
        // Customize this to change alert text
        alertText: "Mouse right click is disabled!" 

        }
    </script>

<!--EXTERNAL HTML-->
<link rel="stylesheet" href="css/homepage.css">

</head>
<body>
    

<div id="overlay">
<!--LEVEL 1-->
<?php
    include ("navbar.html")
?>
<!--LEVEL 1 END-->

<!--LEVEL 2-->
    <span class="main"><img src="img/food1(home).jpg"></span>
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
            deleteSpeed: 5,
            });
        </script>
    </div>
<!--ORDER NOT BTN-->
    <button type="submit" name="orderbtn" class="orderbtn from-center">ORDER NOW</button>
    <!--div class="orderbtn from-center">ORDER NOW</div-->
    </span>
<!--LEVEL 2 END-->

<!--LEVEL 3-->

<!--LEVEL 3 END-->
<div id="overlay">
<!--LEVEL 4-->
<!--Main Bootstrap container-->
    <br><br><br>
    <div class="container">
        <!--OUR STORY-->
        <div data-aos="fade-right">
            <div class="slides"><p>Our Story<br>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
        </div>
        <!--HOW TO USE-->
        <div data-aos="fade-left">
            <div class="slides"><p>How to Use<br>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
        </div>
        <!--FAQ-->
        <div data-aos="fade-right">
            <div class="slides"><p>FAQ<br>
            <?php
                //include("basic-faq.html");
                include("test.html");
            ?>
            </div>
        </div>
    </div>
<!--Main Bootstrap end-->
<!--LEVEL 4 END-->

<!--LEVEL 5-->
<?php
    include ("footer.html")
?>
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
</div>

</body>
</html>