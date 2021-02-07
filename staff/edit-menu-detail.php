<!DOCTYPE html>

<?php
    include "../db-connect.php";
    //session_start();
?>
    <html>
        <head>
            <title>Edit Food Menu Details | REX Foodipedia</title>

            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
    
            <!--INCLUDE START HERE-->
            <link rel="icon" type="image/png" href= "image/MYRUN 1.png">

            <!--THIS IS FONT AWESOME JAVASCRIPT START-->
            <script src="https://kit.fontawesome.com/daa253e478.js" crossorigin="anonymous"></script>

            <!--THIS IS BOOTSTRAP CSS PART START-->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        
            <!--FONTS.CSS-->
            <link rel="stylesheet" href="css/fonts.css">

            <style>
                
                #card-whole-edit-menu {
                   margin: 120px 0px 60px 0px;
                   border-style: none;
                   position: relative;
                   box-shadow: 7px 7px 6px #888888;
                }

                #card-title-edit-menu {
                    text-align: center;
                    letter-spacing: 2px;
                    text-transform: uppercase;
                    background-color: #D1FBD6;
                    font-weight: bold;
                }

                label {
                    font-family: Lato;
                    letter-spacing: 1px;
                    padding-top:20px;
                }

                #card-input-edit-menu input[type="text"], #card-input-edit-menu input[type="number"] {
                    border: 0px black solid;
                    border-bottom-width: 1px;
                    border-bottom-color: #d4d9d5;
                    width: 50em;
                }

                #card-button-edit-menu {
                    letter-spacing: 1px;
                    font-size: 1.0em;
                    /*font-family: Oswald;*/
                    margin:50px 0px 30px 0px;
                }

            </style>    
        </head>

        <body style="background-color: #E4F6E6">
                
            <?php
                include("navbar.html");
            ?>

            <?php
                
                $staff_username = $_SESSION['staffuname'];

                $query_select_menu_detail = mysqli_query($connect, "SELECT * FROM menu WHERE username = '$staff_username' ");
                $row = mysqli_fetch_assoc($query_select_menu_detail);
            ?>    

            <div class="container">
                <div class="card" id="card-whole-edit-menu">
                    <h6 class="card-header" id="card-title-edit-menu">Edit Food Menu Details</h6>
                  
                    <div class="card-body"> 
                        <div id="card-input-edit-menu">
                            <form name="form_menu_detail" method="POST">

                                <div class="form-group">       
                                    <label for="card-dish-edit-menu">#ID</label>
                                    <input type="text" class="form-control" id="card-dish-edit-menu" name="dish_menu_detail" readonly value="<?php echo $row["dish_id"] ?>">
                                </div>
                                
                                <div class="form-group">       
                                    <label for="card-dish-edit-menu">Dish</label>
                                    <input type="text" class="form-control" id="card-dish-edit-menu" name="dish_menu_detail" required value="<?php echo $row["dish_name"] ?>">
                                </div>

                                <!--coming soon -->
                                <div class="form-group">
                                    <label for="card-dish-edit-menu">Image</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="card-dish-edit-menu" name="image_menu_detail">
                                        <label class="custom-file-label" for="card-dish-edit-menu">Choose file</label>
                                    </div>
                                </div>
                                
                                <!--https://www.w3schools.com/bootstrap4/bootstrap_forms_custom.asp-->
                                <script>
                                    // Add the following code if you want the name of the file appear on select
                                    $(".custom-file-input").on("change", function() {
                                        var fileName = $(this).val().split("\\").pop();
                                        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                                    });
                                </script>

                                <div class="form-group">
                                    <label for="card-desc-edit-menu">Description</label>
                                    <textarea class="form-control" id="card-desc-edit-menu" rows="3" name="desc_menu_detail" required value="<?php echo $row["description"] ?>"></textarea>
                                </div>

                                <div class="form-group">       
                                    <label for="card-stock-edit-menu">Stock Quantity</label>
                                    <input type="number" class="form-control" id="card-stock-edit-menu" name="qty_menu_detail" required value="<?php echo $row["stock_qty"] ?>">
                                </div>

                                <div class="form-group">       
                                    <label for="card-price-edit-menu">Unit Price</label>
                                    <input type="number" class="form-control" id="card-price-edit-menu" name="price_menu_detail" required value="<?php echo $row["price"] ?>">
                                </div>

                                <button type="submit" class="btn btn-primary btn-block" id="card-button-edit-menu" name="submit_menu_detail">Update</a>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

            <?php 

                if(isset($_POST['submit_menu_detail'])) {
                    
                    $var_dish_menu_detail = $_POST['dish_menu_detail'];
                    //$var_image_menu_detail = $_POST['image_menu_detail'];
                    $var_desc_menu_detail = $_POST['desc_menu_detail'];
                    $var_qty_menu_detail = $_POST['qty_menu_detail'];
                    $var_price_menu_detail = $_POST['price_menu_detail'];

                    if(!empty($var_dish_menu_detail) && !empty($var_desc_menu_detail) && !empty($var_qty_menu_detail) && !empty($var_price_menu_detail)) {
                        
                        //$session_dish_id = $_SESSION['dish_id'];
                        $session_dish_id = "F001";
                        
                        //harcode a temp dish_id session
                        $query_menu_detail = mysqli_query($connect, "UPDATE menu SET dish_name = '$var_dish_menu_detail', price = '$var_price_menu_detail', 
                                                                                     description = '$var_desc_menu_detail', stock_qty = '$var_qty_menu_detail' WHERE username = '$staff_username' AND dish_id = '$session_dish_id' "); 

                    } else {
                        echo "Please fill in all the inputs!";
                    }
                }

            ?>
                
            <!--THIS IS BOOTSTRAP JAVASRIPT PART START-->
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        </body>
</html>