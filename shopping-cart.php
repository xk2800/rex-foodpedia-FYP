<!DOCTYPE html>
<?php
    include("db-connect.php");
    $email = $_SESSION["email"];
    //session_start();
?>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Shopping Cart | REX Foodipedia</title>

        <!--FONTS.CSS STARTS-->
            <link rel="preload" href="css/fonts.css" as="style">
        <!--FONTS.CSS END-->

        <!--THIS IS FONT AWESOME JAVASCRIPT START-->
            <script src="https://kit.fontawesome.com/daa253e478.js" crossorigin="anonymous"></script>
        <!--THIS IS FONT AWESOME JAVASCRIPT END-->

        <!--THIS IS BOOTSTRAP CSS PART START-->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!--THIS IS BOOTSTRAP CSS PART END-->

        <!--External CSS Start-->
            <!--<link rel="stylesheet" href="user-menus.css">-->
        <!--External CSS End-->    

    <style>
        body{
            margin-top: 10rem;
            }

        .media-body{
            margin-left:20px;
        }
        
        .lower-button button{
            width: 100%;
        }

        #continue-shopping{
            width:auto;
        }

    </style>

</head>

<body style="background-color: #e7ded2;">

    <!-- PHP-->
    <?php
        include("nav.html");
    ?>
    
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-10 col-md-offset-1">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th class="text-center">Price(RM)</th>
                            <th class="text-center">Total</th>
                            <th> </th>
                        </tr>
                    </thead>

                    <?php
                        $shopping_cart_query = mysqli_query($connect, "SELECT dish_name,dish_price,dish_id,dish_qty,id FROM cart WHERE email = '$email' ");
                        $shopping_subtotal = "SELECT  SUM(dish_total) as subtotal FROM cart WHERE email ='$email'";
                        
                        $numrow = mysqli_num_rows($shopping_cart_query);
                        
                    ?>

                    <tbody>
                   
                        <?php
                            if($numrow != 0) {
                                    while($row = mysqli_fetch_assoc($shopping_cart_query)) 
                                    {
                                        $db_dish_name = $row['dish_name'];
                                        $db_dish_price = $row['dish_price'];
                                        $db_dish_id = $row['dish_id'];
                                        $db_dish_qty = $row['dish_qty'];
                                        // $subtotal = $row['SUM(dish_total)'];
                                        $shipping_fee = 5;
                        ?>
                                    <tr>            
                                        <td class="col-sm-8 col-md-6">
                                            <div class="media">
                                                <a class="thumbnail pull-left" href="#"> 
                                                    <img src="img/food1.jpg" style="width: 72px; height: 72px;">
                                                </a>
                                                    <div class="media-body">
                                                        <!-- <a href="product-details.php?id=<?php echo $row['id']?>"> </a>-->
                                                        <h3><?php echo $db_dish_name;?></h3>
                                                    </div>
                                            </div>
                                        </td>
            
                                        <td class="col-sm-1 col-md-1" style="text-align: center">
                                        <input type="text" class="form-control" id="quantity" value="<?php echo $db_dish_qty;?>"> 
                                        </td>
                                                    
                                        <td class="col-sm-1 col-md-1 text-center">
                                            <strong>
                                                <?php echo $db_dish_price;?>
                                            </strong>
                                        </td>

                                        <td class="col-sm-1 col-md-1"><strong>
                                            <?php
                                                $dish_total = $db_dish_qty * $db_dish_price;
                                                echo "RM".number_format((float)$dish_total,2,'.','');
                                            ?>
                                        </strong></td>
                                                    
                                        <td class="col-sm-1 col-md-1">
                                            <a onclick="return confirm('Delete this product from cart?')" href="shopping-cart-delete.php?id=<?php echo $row['id'];?>">
                                                <button type="button" class="btn btn-danger">
                                                    <span class="glyphicon glyphicon-remove"><i class="fas fa-trash"></i></span> 
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                            <?php           
                                    }  
                                }
                            ?>   



                            <?php
                                $query_subtotal = mysqli_query($connect, $shopping_subtotal);
                                while($row = mysqli_fetch_assoc($query_subtotal))
                                {
                                    $subtotal = $row['subtotal'];
                                }
                            ?>

                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td>   </td>
                            <td><h4>Total</h4></td>
                            <td class="text-right"><h3><strong>
                            <?php
                             
                             
                            $total = 0;
                            $total = $total +$subtotal;
                                echo "RM".number_format((float)$total,2,'.','');
                            ?>
                            </strong></h3></td>
                        </tr>

                        <tr>
                            <td>
                            <a href="menu.php" style="text-decoration:none;">
                                <button type="button" class="btn btn-default" id="continue-shopping">
                                    <i class="fas fa-shopping-cart"> Continue Shopping</i>
                                </button>   
                            </a>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                            <a href="pickup-checkout.php">
                                <button type="button" class="btn btn-success" id="checkout">
                                    <span>Checkout</span>
                                </button></td>
                            </a>
                        </tr>
                    </tbody>
                </table>
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