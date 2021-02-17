<!DOCTYPE html>

<?php
    include "../db-connect.php"; 
    //session_start();
?>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Check Order | REX Foodipedia</title>

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
        include("navbar.html");
    ?>
   
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-10 col-md-offset-1">
                <table class="table table-hover" style="margin-top: 5rem;">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th class="text-center">Order by</th>
                            <th class="text-center">Time</th>
                            <th class="text-center">Quantity</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Total</th>
                            <th class="text-center">Status</th>
                        </tr>
                    </thead>
                            <?php
                                $staff_username = $_SESSION['staffuname'];

                                $check_order_query = mysqli_query($connect, "SELECT * FROM order_rec");
                                $numrow = mysqli_num_rows($check_order_query);
                            ?>  
                    <tbody>  
                            <?php
                                if($numrow != 0)
                                {
                                    while($row = mysqli_fetch_assoc($check_order_query))
                                    {
                                        $db_id = $row['id'];
                                        $db_email = $row['email'];
                                        $db_date = $row['date'];
                                        $db_dish_name = $row['dish_name'];
                                        $db_dish_price = $row['dish_price'];
                                        $db_dish_id = $row['dish_id'];
                                        $db_order_status = $row['order_status'];
                                        $db_delivery_status = $row['delivery_status'];
                                        $db_qty = $row['dish_qty'];
                            ?>

                        <tr>
                            <td class="col-sm-8 col-md-6">
                            <div class="media">
                                <a class="thumbnail pull-left" href="#"> 
                                    <img src="../img/food1.jpg" style="width: 72px; height: 72px;">
                                </a>
                                <div class="media-body">
                                    <h5><a href="#">#<?php echo $db_id;?></a></h5>
                                    <h6>Description: <br> <?php echo $db_dish_name;?></h6>
                                </div>
                            </div>
                            </td>

                            <td>
                            <strong><?php echo $db_email;?></strong>
                            </td>

                            <td>
                                <strong><?php echo $db_date;?></strong>
                            </td>

                            <td>
                                <strong>
                                <?php echo $db_qty;?>
                                </strong>
                            </td>
                            
                            <td class="col-sm-1 col-md-1 text-center">
                                <strong><?php echo $db_dish_price;?></strong>
                            </td>
                            
                            <td class="col-sm-1 col-md-1 text-center">
                                <strong>
                                <?php 
                                    $total = $db_qty * $db_dish_price;
                                    echo number_format((float)$total,2,'.','');
                                ?>
                                </strong>
                            </td>

                            <td class="col-sm-1 col-md-1 text-center">
                            <?php echo $db_delivery_status == 0 ? '<span class="text-warning"> <strong>Delivery</strong> </span>' : '<span class="text-success"><strong> Delivered </strong></span>';?>
                            </td>
                            
                            <!-- <td class="col-md-1">
                            <button type="button" class="btn">
                                <span class="glyphicon glyphicon-edit"><i class="fas fa-edit"></i></span> 
                            </button>
                            </td> -->
                        </tr>

                        <?php 
                            }
                        }
                        ?>

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