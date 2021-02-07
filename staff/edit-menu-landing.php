<!DOCTYPE html>

<?php
<<<<<<< HEAD
    include "../db-connect.php";
    //session_start();
=======
    include "../db_connect.php";
    session_start();
>>>>>>> 0a26bc121fe262fb8dafe9810830a8d1a6e97c7d
?>
    <html>
        <head> 
            <title>Edit Menu | REX Foodipedia</title>

            <meta name="viewpoint" content="width=device-width, initial-scale=1">
            <meta name="viewpoint" content="width=device-width">
    
            <!--INCLUDE START HERE-->
            <link rel="icon" type="image/png" href= "image/MYRUN 1.png">

            <!--THIS IS FONT AWESOME JAVASCRIPT START-->
            <script src="https://kit.fontawesome.com/daa253e478.js" crossorigin="anonymous"></script>

            <!--THIS IS BOOTSTRAP CSS PART START-->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

            <!--FONTS.CSS-->
            <link rel="stylesheet" href="css/fonts.css">

            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

            <style>

                #form-title-edit {
                    text-align: center;
                    letter-spacing: 2px;
                    text-transform: uppercase;
                    background-color: #D1FBD6;
                }

                table {
                    background-color:white;
                    /*border-radius: 20px;*/
                    box-shadow:7px 7px 6px #888888;
                    margin-top: 6.3em;
                }

                #form-header-edit {
                    text-align: center;
                    /*font-style: italic;*/
                    letter-spacing: 2px;
                    font-family: Lato;
                    font-size:1em;
                }

                td {
                    text-align: center;
                }
                
            </style>

        </head>
        
        <body style="background-color: #E4F6E6">

            <?php
                include("navbar.html");
            ?>

            <div class="container">
                <table class="table table-hover" >
                    <thead>
                        <tr id="form-title-edit">
                            <th colspan="7" scope="col" height="auto">Edit Food Menu</th>
                        </tr>   
                        
                        <tr id="form-header-edit">
                            <th scope="col">#ID</th>
                            <th scope="col">Dish</th>
                            <th scope="col">Image</th>
                            <th scope="col">Desciption</th>
                            <th scope="col">Stock Quantity</th>
                            <th scope="col">Unit Price </th>
                            <th scopre="col">Action</th>
                        </tr>
                    </thead>

                    <?php 
                        //need to add session after this
                        $staff_username = $_SESSION['staffuname'];

                        $query_select_menu_landing = mysqli_query($connect, "SELECT * FROM menu WHERE username = '$staff_username' ");
                        $numrow = mysqli_num_rows($query_select_menu_landing);
    
                    ?>

                    <tbody style="font-size: 0.8em">
                        
                    <?php 
                        
                        while($row = mysqli_fetch_assoc($query_select_menu_landing)) {
                                
                            $db_dish_name = $row['dish_name'];
                            $db_dish_id = $row['dish_id'];
                            $db_dish_price = $row['price'];
                            $db_dish_desc = $row['description'];
                            $db_dish_qty = $row['stock_qty'];
                    ?>
                           <?php  
                            
                            if($numrow > 0) {
                           ?>     
                                <tr>
                                    <th scope="row"><?php echo $db_dish_id; ?></th>
                                    <td><?php echo $db_dish_name; ?></td>
                                    <td rowspan=""><img src="../img/dummy.jpg" alt="Girl in a jacket" style="width:20em; height:10em"></td>
                                    <td><?php echo $db_dish_desc; ?></td>
                                    <td><?php echo $db_dish_qty; ?></td>
                                    <td><?php echo $db_dish_price; ?></td>
                                    <td><a class="btn btn-primary" href="edit-menu-detail.php" role="button">Update</a></td>
                                </tr>   
                           <?php

                            } else {
                                echo "No data found inside database";
                            }
                           ?>
                    <?php

                            $row++ ;
                        }
                    ?>

                    </tbody>
                </table>
            </div>

            <!--THIS IS BOOTSTRAP JAVASRIPT PART START-->
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        </body>
</html>