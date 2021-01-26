<!DOCTYPE html>
    <html>
        <head>
            <title>Add Staff | REX Foodipedia</title>

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
                
                #card-whole-add-staff {
                   margin: 120px 0px 60px 0px;
                   border-style: none;
                   position: relative;
                }

                #card-title {
                    text-align: center;
                    letter-spacing: 2px;
                    text-transform: uppercase;
                    background-color: white;
                    font-weight: bold;
                }

                label {
                    font-family: Lato;
                    letter-spacing: 1px;
                    padding-top:20px;
                }

                #card-input-add-product input[type="text"], #card-input-edit-menu input[type="number"],input[type="email"],input[type="number"]{
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

        <body style="background-color: #4C5C68;">
                
            <?php
                include("navbar.html");
            ?>

            <div class="container">
                <div class="card" id="card-whole-add-staff">
                    <h6 class="card-header" id="card-title">Add Staff</h6>
                  
                    <div class="card-body"> 
                        <div id="card-input-add-product">
                            <form>

                                <div class="form-group">       
                                    <label for="card-dish-edit-menu">Staff IC</label>
                                    <br>
                                    <input type="text" name="ic1" maxlength="6" size="6" style="width: 10%;" required>-
                                    <input type="text" name="ic2" maxlength="2" size="2" style="width: 4%;" required>-
                                    <input type="text" name="ic3" maxlength="4" size="4" style="width: 6%;" required>
                                </div>

                                <div class="form-group">
                                    <label for="name">Staff Name</label>
                                    <div class="custom-file">
                                        <input type="text" name="Name" id="name" style="width: 80%;" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="phone">Staff Phone Number</label>
                                    <div class="custom-file">
                                        <input type="text" name="phone-num" style="width: 20%;" maxlength="10" id="phone" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="emails">Staff Email Address</label>
                                    <div class="custom-file">
                                        <input type="email" name="emails" id="emails" style="width: 80%;" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="merc-address">Merchant Address</label>
                                    <div class="custom-file">
                                        <input type="text" name="merc-address" id="merc-address" style="width: 100%;" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="rest-name">Restaurant Name</label>
                                    <div class="custom-file">
                                        <input type="text" name="rest-name" id="rest-name" style="width: 80%;" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="outlets">Number of Outlets</label>
                                    <div class="custom-file">
                                        <input type="number" name="outlets" id="outlets" style="width: 7%;" required>
                                    </div>
                                </div>

                            </form>
                        </div>
                        
                        <a href="#" class="btn btn-primary btn-block" id="card-button-edit-menu">Add Staff</a>
                    </div>
                </div> 
            </div>
                
            <!--THIS IS BOOTSTRAP JAVASRIPT PART START-->
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        </body>
</html>