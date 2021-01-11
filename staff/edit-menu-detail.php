<!DOCTYPE html>
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

            <div class="container">
                <div class="card" id="card-whole-edit-menu">
                    <h6 class="card-header" id="card-title-edit-menu">Edit Food Menu Details</h6>
                  
                    <div class="card-body"> 
                        <div id="card-input-edit-menu">
                            <form>
                                <div class="form-group">       
                                    <label for="card-id-edit-menu">#ID</label>
                                    <input type="text" class="form-control" id="card-id-edit-menu">
                                </div>

                                <div class="form-group">       
                                    <label for="card-dish-edit-menu">Dish</label>
                                    <input type="text" class="form-control" id="card-dish-edit-menu">
                                </div>

                                <div class="form-group">
                                    <label for="card-dish-edit-menu">Image</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="card-dish-edit-menu">
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
                                    <textarea class="form-control" id="card-desc-edit-menu" rows="3"></textarea>
                                </div>

                                <div class="form-group">       
                                    <label for="card-stock-edit-menu">Stock Quantity</label>
                                    <input type="number" class="form-control" id="card-stock-edit-menu">
                                </div>

                                <div class="form-group">       
                                    <label for="card-price-edit-menu">Unit Price</label>
                                    <input type="number" class="form-control" id="card-price-edit-menu">
                                </div>
                            </form>
                        </div>
                        
                        <a href="#" class="btn btn-primary btn-block" id="card-button-edit-menu">Update</a>
                    </div>
                </div> 
            </div>
                
            <!--THIS IS BOOTSTRAP JAVASRIPT PART START-->
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        </body>
</html>