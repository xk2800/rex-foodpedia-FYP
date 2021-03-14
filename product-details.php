<!DOCTYPE html>

<?php
    include("db-connect.php");
    ob_start();
    $id = $_GET['id'];
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

        .vendor-list-item{
            display:inline-block;
            width:22%;
            margin:10px 10px 10px 10px;
        }
        </style>
    <!--CSS END-->

</head>

    <body style="background-color: #e7ded2; ">

<!-- PHP-->
    <?php
        include("nav.php");
    ?>
<!--PHP-->

    <?php
        $email = $_SESSION["email"];
        
        $product_details_query = mysqli_query($connect, "SELECT * FROM menu WHERE id = '$id'");
        $display_other_menu = mysqli_query($connect,"SELECT * FROM menu ORDER BY RAND() LIMIT 4");
        $numrowrandom = mysqli_num_rows($display_other_menu);
        $numrow = mysqli_num_rows($product_details_query);
    ?>

    <?php
        while($row = mysqli_fetch_assoc($product_details_query))
        {
            $db_id = $row['id'];
            $db_dish_name = $row['dish_name'];
            $db_dish_price = $row['price'];
            $db_dish_id = $row['dish_id'];
            $db_dish_qty = $row['stock_qty'];
            $db_dish_description = $row['description'];
            $db_dish_permissible = $row['permissible'];
            $db_dish_cuisine = $row['cuisine'];
            $db_dish_prep = $row['preparationTime'];
            $db_dish_img = $row['cloudinary_link'];
        }
    ?>
    
        <form name="product-details" method ="POST" >
        <div class="container">
            <div class="row"> 
                <div class="col-md-5">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-interval="false">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <!-- <img src="img/food1.jpg" class="d-block w-100" alt="slides" style="height:auto;width: auto;"> -->
                            <img src="<?php echo $db_dish_img ?>" alt="slides" class="d-block w-100" style="height:auto;width: auto;">
                          </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-7">
                    <h4 class="product-name" name="dish-name"><?php echo $row['dish_name'] ?></h4>
                    <p class="price" name="dish-price">RM <?php echo $db_dish_price; ?></p>
                    

                    <hr style="border:1px solid black; width:100%;">
                    <p><b>Types of Cuisine:</b><b class="text-primary"> <?php echo $db_dish_cuisine;?> Cuisine</b> </p>
                    <p><b>Preparation time:</b><b class="text-warning"> <?php echo $db_dish_prep; ?> Minutes</b></p>
                    <p><b>Permissible:</b><?php echo $db_dish_permissible == 'Yes' ? '<b class="text-success"> Halal Certified!</b>' : '<b class="text-danger"> Not Halal</b>'; ?></p>
                    
                    
                    <p><b>Special Instruction</b></p>
                    <p>
                    <textarea placeholder="Allergy to peanut etc..." name="dish-special-instruction"></textarea>
                    </p>

                    <label>Quantity:</label>
                    <input type="number" value="1" style="width:5%;" name="dish-quantity">
                    <button type="submit" class="btn btn-default cart" name="add-to-cart">Add to cart</button>

                </div>

       

                <div style="margin-left:25px; margin-bottom:30px;">
                    <p class="description"><b>Description</b></p>
                    <p style="font-size: large;"><?php echo $db_dish_description;?></p>
                </div>

                    <div id="home" class="tabcontent">
                        <div class="container">
                                        <p>Random Picks</p>
                                        <hr>
                    
                                        <!-- <div class="container" style="display:flex; background-color:blue;"> -->
                                    <div class="row">
                                                <ul class="vendor-list" style="width:100%;">
                                                    <?php 
                                                    if($numrow != 0)
                                                    {
                                                        while($row = mysqli_fetch_assoc($display_other_menu))
                                                        {
                                                            $random_name = $row['dish_name'];
                                                            $random_description = $row['description'];
                                                            $random_price = $row['price'];
                                                            $random_image = $row['cloudinary_link'];
                                                    ?>
                                                
                                                            
                                                                <li class="vendor-list-item">
                                                                
                                                                            <a href="product-details.php?id=<?php echo $row['id'];?>" style="text-decoration:none;">
                                                                                <!-- <img src="img/food1.jpg" style="width:100%"> -->
                                                                                <img src="<?php echo $random_image ?>" alt="" class="images" style="width:75%;height:50%;">
                                                                                <p style="font-size:22px"><b><?php echo $random_name ?></b></p>                
                                                                                <p style="font-size:18px; margin-top:-1em;"><b>RM <?php echo $random_price?></b></p>
                                                                            </a>
                                                                </li>
                                                    <?php
                                                            }
                                                        }
                                                    ?>
                                                </ul>          
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
                $var_dish_total = $var_dish_price * $var_dish_quantity;
                $image = $db_dish_img;

                if(!empty($var_dish_quantity)){

                    $cart = mysqli_query($connect, "INSERT INTO cart(email,dish_name, dish_price,dish_total, dish_qty, cloudinary_link) 
                    VALUES ('$var_email' ,'$var_dish_name' , '$var_dish_price','$var_dish_total','$var_dish_quantity', '$image')");

                            if($cart)
                            {
                                echo "<script>
                                    alert('Added to cart');
                                    location.href = 'shopping-cart.php';
                                    </script>";
                            }
                             else 
                             {
                            echo "<script> 
                                alert('Item can't add to cart');
                                </script>";
                            }
                }
                else
                {
                    echo    "<script>
                            alert('Enter quantity');
                            </script>
                            ";
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