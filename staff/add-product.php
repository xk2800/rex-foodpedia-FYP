<!DOCTYPE html>

<?php
    include "../db-connect.php"; 
    //session_start();
?>
    <html>
        <head>
            <title>Add Products | REX Foodipedia</title>

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
                
                #card-whole-add-product {
                   margin: 120px 0px 60px 0px;
                   border-style: none;
                   position: relative;
                   box-shadow: 7px 7px 6px #888888;
                }

                #card-title {
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

                #card-input-add-product input[type="text"], #card-input-edit-menu input[type="number"] {
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

                /*Chrome, Safari, Edge, Opera */
                input::-webkit-outer-spin-button,input::-webkit-inner-spin-button {
                    -webkit-appearance: none;
                    margin: 0;
                }

                /* Firefox */
                input[type=number] {
                    -moz-appearance: textfield;
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
                <div class="card" id="card-whole-add-product">
                    <h6 class="card-header" id="card-title">Add Products</h6>
                  
                    <div class="card-body"> 
                        <div id="card-input-add-product">
                            <form name="form-add-product" method="POST">

                                <div class="form-group">       
                                    <label for="ID">#ID</label>
                                    <input type="text" class="form-control" id="ID" style="width:80%" name="dish-id">
                                </div>

                                <div class="form-group">       
                                    <label for="dish">Dish</label>
                                    <input type="text" class="form-control" id="dish" style="width:80%" name="dish-name">
                                </div>

<!--COMING SOON-->
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image">
                                        <label class="custom-file-label" for="image">Choose file</label>
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
                                    <label for="desc">Description</label>
                                    <textarea class="form-control" id="desc" name="description" rows="3"></textarea>
                                </div>

                                <div class="form-group">       
                                    <label for="quantity">Stock Quantity</label>
                                    <input type="number" class="form-control" id="quantity" name="qty" >
                                </div>

                                <div class="form-group">       
                                    <label for="unit-price">Unit Price</label>
                                    <input type="text" class="form-control" id="unit-price" name="price">
                                </div>

                                <button type="submit" class="btn btn-primary btn-block" id="card-button-add-menu" name="submit-add-product">Add</button>
                            </form>
                        </div>
                    </div>
                </div> 
            </div>

            <?php 

                if(isset($_POST['submit-add-product'])) {
                    
                    //$var_dish_menu_detail = $_POST['dish_menu_detail'];
                    //$var_image_menu_detail = $_POST['image_menu_detail'];
                    
                    $var_name_menu_detail = $_POST["dish-name"];
                    $var_id_menu_detail = $_POST["dish-id"];
                    $var_desc_menu_detail = $_POST["description"];
                    $var_qty_menu_detail = $_POST['qty'];
                    $var_price_menu_detail = $_POST['price'];

                    if(!empty($var_name_menu_detail) && !empty($var_id_menu_detail) && !empty($var_desc_menu_detail) && !empty($var_qty_menu_detail) && !empty($var_price_menu_detail)) {

                        $query_menu_detail = mysqli_query($connect, "INSERT INTO menu(dish_name, dish_id, price, description, stock_qty) 
                        VALUES ('$var_name_menu_detail','$var_id_menu_detail','$var_price_menu_detail','$var_desc_menu_detail','$var_qty_menu_detail')");

                        echo "<script>
                                    alert('Product Added');
                                    location.href = 'user-login.php';
                                </script>";

                                if($query_menu_detail){
                                    echo "<script>
                                            location.href = '../menu.php;
                                            </script>";
                                }

                    } else {
                        echo "<script> alert('Please fill in all the inputs!'); </script>";
                    }
                }

            ?>
                
            <!--THIS IS BOOTSTRAP JAVASRIPT PART START-->
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        </body>
</html>