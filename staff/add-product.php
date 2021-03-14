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
                include("navbar.php");
            ?>

            <?php
                
                $staff_username = $_SESSION['staffuname'];

                $query_add_product = mysqli_query($connect, "SELECT * FROM menu WHERE username = '$staff_username' ");
                $row = mysqli_fetch_assoc($query_add_product);
            ?>    

            <div class="container">

                <div class="card" id="card-whole-add-product">
                    <h6 class="card-header" id="card-title">Add Products</h6>
                  
                    <div class="card-body"> 
                        <div id="card-input-add-product">
                            <form name="form-add-product" method="POST" enctype="multipart/form-data" > 

                                <div class="form-group">       
                                    <label for="ID">#ID</label>
                                    <input type="text" class="form-control" id="ID" style="width:80%" name="dish_id">
                                </div>

                                <div class="form-group">       
                                    <label for="dish">Dish</label>
                                    <input type="text" class="form-control" id="dish" style="width:80%" name="dish_name">
                                </div>

                                <div class="form-group" style="margin-left: 15px;">
                                        <label for="card-dish-add-product">Image</label>
                                        <div class="custom-file">  
                                            <div class="row">
                                                <div class="col">
                                                    <input type="file" class="custom-file-input" id="card-dish-add-product" name="file">
                                                    <label class="custom-file-label" for="card-dish-add-product">Choose file</label>
                                                </div>
                                            </div>
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
                                    <label for="cuisine">Types of Cuisine</label>
                                    <select type="text" class="form-control" id="cuisine" name="cuisine">
                                        <option value="Malaysian">Malaysian Cuisine</option>
                                        <option value="Japanese">Japanese Cuisine</option>
                                        <option value="Korean">Korean Cuisine</option>
                                        <option value="Thailand">Thailand Cuisine</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="perm">Permissible?</label>
                                    <select type="text" class="form-control" id="perm" name="permissible" value="Select">
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>

                                <div class="form-group">       
                                    <label for="prep">Preparation Time (minute)</label>
                                    <input type="number" class="form-control" id="prep" name="preparationTime" >
                                </div>

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
                                    <input type="text" class="form-control" id="unit-price" name="price" style="width:80%">
                                </div>

                                <button type="submit" class="btn btn-primary btn-block" id="card-button-add-menu" name="submit_add_button">Add</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

            <?php 

                if(isset($_POST['submit_add_button'])) {

                    
                    $fileName = $_FILES['file']['name'];
                    $fileTmpName = $_FILES['file']['tmp_name'];
                    $fileSize = $_FILES['file']['size'];
                    $fileType = $_FILES['file']['type'];
                    $fileError = $_FILES['file']['error'];
                
                    $fileExt = explode('.', $fileName);
                    $fileActualExt = strtolower(end($fileExt));
                
                    $allowed = array('jpg', 'jpeg', 'png', 'svg');
                
                    if(in_array($fileActualExt, $allowed)) {
                
                        if($fileError === 0) {
                
                            $fileNameNew = uniqid('', true).".".$fileActualExt;
                
                            echo $fileTmpName;
                
                            echo "File uploaded";
                
                        } else {
                
                            echo "There was an error uploading your file";
                        }
                
                    } else {
                
                        echo "You cannot upload files of this type!";
                
                    }
                
                    if (is_file( __DIR__ .'../cloudinary/vendor/autoload.php') && is_readable( __DIR__ .'../cloudinary/vendor/autoload.php')) {
                        require_once __DIR__ .'../cloudinary/vendor/autoload.php';
                
                    } else {
                
                        // Fallback to legacy autoloader
                        require_once '../cloudinary/vendor/autoload.php';
                        require_once '../cloudinary/vendor/cloudinary/cloudinary_php/src/Helpers.php';
                    }
                
                    //api settings from cloudinary
                    \Cloudinary::config(array(
                        'cloud_name' => 'rexfoodipediafyp',
                        'api_key' => '692999355687826',
                        'api_secret' => 'WIQ5w6E77zf2yOhmgGtr_6dE6AQ'
                    ));
                
                    $sample_paths = array (
                
                        'pizza' => getcwd() . DIRECTORY_SEPARATOR . 'pizza.jpg',
                        'lake' => getcwd() . DIRECTORY_SEPARATOR . 'lake.jpg',
                        'couple' => $fileTmpName,
                    );
                
                
                    $default_upload_options = array('tags' => 'basic_sample');
                    $eager_params = array('width' => 200, 'height' => 150, 'crop' => 'scale');
                    $files = array();
                        
                    global $files, $sample_paths, $default_upload_options, $eager_params;
                
                    echo "uploading";
                
                    # In the two following examples, the file is fetched from a remote URL and stored in Cloudinary.
                    # This allows you to apply the same transformations, and serve those using Cloudinary's CDN layer.
                    $files['remote'] = \Cloudinary\Uploader::upload (
                        
                        $sample_paths['couple'],
                        $default_upload_options
                    );
                
                    $url_cloud = cloudinary_url($files['remote']['public_id']);
                
                    //$sql = mysqli_query($connect, "INSERT INTO menu(cloudinary_link) VALUE ('$url_cloud')");
                
                    $var_username = $staff_username;
                    $var_name_menu_detail = $_POST['dish_name'];
                    $var_id_menu_detail = $_POST['dish_id'];
                    $var_desc_menu_detail = $_POST['description'];
                    $var_qty_menu_detail = $_POST['qty'];
                    $var_price_menu_detail = $_POST['price'];
                    $var_permissible = $_POST['permissible'];
                    $var_cuisine = $_POST['cuisine'];
                    $var_preparationTime = $_POST['preparationTime'];


                    $check_dish_name = "SELECT * FROM menu WHERE dish_id = $var_id_menu_detail";
                    $res = mysqli_query($connect,$check_dish_name);

                            if(mysqli_num_rows($res) > 0)
                            {
                                echo "<script> alert('Dish ID Already Taken,Please Enter Another One'); </script>";
                                exit();
                            }
                            else
                            {                      
                            $query_menu_detail = mysqli_query($connect, "INSERT INTO menu(username, cloudinary_link, dish_name, dish_id, price, description, stock_qty, permissible, cuisine, preparationTime) 
                            VALUES ('$var_username', '$url_cloud', '$var_name_menu_detail','$var_id_menu_detail','$var_price_menu_detail','$var_desc_menu_detail','$var_qty_menu_detail','$var_permissible','$var_cuisine','$var_preparationTime')");    
                           
                                echo "<script> alert('Product Added'); 
                                location.href = 'dashboard.php';
                                </script>";
                            
                            }
        
                } else {
                    echo "<script> alert('Please fill in all the inputs!'); </script>";
                }

            ?>
                
            <!--THIS IS BOOTSTRAP JAVASRIPT PART START-->
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        </body>
</html>