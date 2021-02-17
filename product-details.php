<!DOCTYPE html>

<?php
    include("db-connect.php");
    //session_start();
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Product Details | REX Foodipedia</title>

    <!--FONTS.CSS STARTS-->
        <link rel="preload" href="css/fonts.css" as="style">
    <!--FONTS.CSS END-->

    <!--THIS IS FONT AWESOME JAVASCRIPT START-->
        <script src="https://kit.fontawesome.com/daa253e478.js" crossorigin="anonymous"></script>
    <!--THIS IS FONT AWESOME JAVASCRIPT END-->

    <!--THIS IS BOOTSTRAP CSS PART START-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--THIS IS BOOTSTRAP CSS PART END-->

    <!--JS with popper START-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <!--JS with popper END-->

    <!--CSS START-->
    <style>
        .container{
            margin-top: 100px;
        }

        textarea{
            width:100%;
            margin-top: -15px;
            margin-bottom: 0px;
            height:50px;
        }

        .price{
            font-weight:bold;
            font-size: large;
        }

        .halal{
            color: #00cc00;
        }

        .description{
            margin-top: 15px;
        }

        .cart{
            background: #FE980F;
            color: #FFFFFF;
            font-size: 15px;
            margin-left: 20px;
        }

        .product-name{
            font-size: xx-large;
        }

        .description{
            font-size: large;
            font-weight: bold;
        }

        #home .container{
            margin-top: 10px;
        }

        /* Item Grid Starts */
        #home .col {
            border-radius: 15px;
            padding: 15px;
            margin: 20px 20px 20px 20px;
        }

        #home .container img {
            border-radius: 10px;
            max-width: 100%;
            height: auto;   
        }

        /* Item Grid Ends */

        #home .container p{
            font-size: x-large;
            color: black;
            font-weight: bold;
            
        }

        #home .container hr{
            border: 1px solid black; 
            border-radius: 12px;
        }

        #home h4{
            font-weight: bold;
            font-size: x-large;
        }

        #home .row{
            margin-bottom: 15%;
        }
        </style>
    <!--CSS END-->

</head>

    <body style="background-color: #e7ded2; ">

<!-- PHP-->
    <?php
        include("nav.html");
    ?>
<!--PHP-->

    <?php
        $email = $_SESSION["email"];
        
        $product_details_query = mysqli_query($connect, "SELECT * from menu");
        $numrow = mysqli_num_rows($product_details_query);
    ?>

    <?php
        while($row = mysqli_fetch_assoc($product_details_query))
        {
            $db_dish_name = $row['dish_name'];
            $db_dish_price = $row['price'];
            $db_dish_id = $row['dish_id'];
            $db_dish_qty = $row['stock_qty'];
            $db_dish_description = $row['description'];
        }
    ?>
    
        <form name="product-details" method ="POST" >
        <div class="container">
            <div class="row"> 
                <div class="col-md-5">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-interval="false">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="img/food1.jpg" class="d-block w-100" alt="slides" style="height:auto;width: auto;">
                          </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-7">
                    <h4 class="product-name" name="dish-name"><?php echo $db_dish_name; ?></h4>
                    <p class="price" name="dish-price">RM <?php echo $db_dish_price; ?></p>
                    

                    <hr style="border:1px solid black; width:50%;">
                    <p><b>Prepared by:</b> Mamee Chef</p>
                    <p><b>Preparation time:</b> 15 Minutes</p>
                    <p><b>Permissible:</b> <b class="halal">Halal Certified!</b></p>
                    
                    
                    <p><b>Special Instruction</b></p>
                    <p>
                    <textarea placeholder="Allergy to peanut etc..." name="dish-special-instruction"></textarea>
                    </p>

                    <label>Quantity:</label>
                    <input type="text" value="1" style="width:5%;" name="dish-quantity">
                    <button type="submit" class="btn btn-default cart" name="add-to-cart">Add to cart</button>

                </div>

       

                <div>
                    <p class="description"><b>Description</b></p>
                    <p style="font-size: large;"><?php echo $db_dish_description;?></p>
                </div>

                <div id="home" class="tabcontent">
                    <div class="container" >
                    
                        <p>Other dishes</p>
                        <hr>
            
                        <div class="row">
            
                            <div class="col" >
                                <div class="panel">
                                    <a href="https://www.youtube.com/watch?v=-PItSeOJ1hQ">
                                        <img src="img/food1.jpg">
                                    </a>
                                
                                <div>
                                    <h4>Chicken Curry</h4>
                                <p class="other-definition" style="font-size:medium; ">Chicken curry is a dish originating from the Indian subcontinent.</p> 
                                </div>
                                </div>
                            </div>
            
                            <div class="col">
                                <div class="panel">
                                    <a href="https://www.youtube.com/watch?v=-PItSeOJ1hQ">
                                        <img src="img/food1.jpg">
                                    </a> 
                                
                                <div>
                                <h4>Rendang</h4>
                                <p class="other-definition" style="font-size:medium;">Rendang is an Indonesian spicy meat dish originating from the 
                                Minangkabau region in West Sumatra, Indonesia.</p>
                                
                                </div>
                                </div>
                            </div>
            
                            <div class="col">
                                <div class="panel">
                                    <a href="https://www.youtube.com/watch?v=-PItSeOJ1hQ">
                                        <img src="img/food1.jpg">
                                    </a>     
                                
                                <div>
                                    <h4>Nasi Lemak</h4>
                                <p class="other-definition" style="font-size:medium;">Nasi lemak is a Malay cuisine dish consisting of fragrant rice 
                                cooked in coconut milk and pandan leaf. </p>
                                  
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        </form>

        <?php 

            if(isset($_POST['add-to-cart'])){
                $var_email = $email;
                $var_dish_name = $db_dish_name;
                $var_dish_price = $db_dish_price;
                $var_dish_special_instruction = $_POST['dish-special-instruction'];
                $var_dish_quantity = $_POST['dish-quantity'];

                if(!empty($var_dish_quantity)){

                    $cart = mysqli_query($connect, "INSERT INTO cart(email,dish_name, dish_price, dish_qty) 
                    VALUES ('$var_email' ,'$var_dish_name' , '$var_dish_price', '$var_dish_quantity')");
                
                    echo "<script>
                            alert('Added to cart');
                            location.href = 'shopping-cart.php';
                        </script>";

                            if($cart)
                            {
                                echo "<script>
                                    alert('Error');
                                    location.href = 'shopping-cart.php';
                                    </script>";
                            }
                } else {
                    echo "<script> 
                            alert('Error');
                        </script>";
                }
            }
        ?>
        <!--THIS IS BOOTSTRAP JAVASRIPT PART START-->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <!--THIS IS BOOTSTRAP JAVASCRIPT PART END-->
    </body>
</html>