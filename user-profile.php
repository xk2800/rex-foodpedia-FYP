<!DOCTYPE html>
    <html>
        <head>
            <title>Profile | REX Foodipedia</title>

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
        </head>

        <body>            
            
            <?php
                include("nav.html");
            ?>

            <div class="container">
                <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                    <div class="card-header">
                        Account Details
                    </div>
                    <div class="card-body">
                        <form>
                            <div id="card-input-profile"> 
                            
                                    <div class="form-group col-md-6 pl-5 pb-3">
                                        <label for="card-email-register">Email Address</label>
                                        <input type="email" class="form-control" id="card-email-profile" placeholder="example@gmail.com">
                                    </div>
                                
                        
                                <div class="form-row">
                                    <div class="form-group col-md-3 pl-5 pb-3">
                                        <label for="card-firstname-profile">First Name</label>
                                        <input type="text" class="form-control" id="card-firstname-profile" placeholder="John">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="card-lastname-profile">Last Name</label>
                                        <input type="text" class="form-control" id="card-lastname-profile" placeholder="Doe">
                                    </div>
                                </div>

                                <!--<div class="form-group col-md-4 pl-5 ">
                                <label for="card-lastname-profile">Last Name</label>
                                        <input type="text" class="form-control" id="card-lastname-profile" placeholder="Doe">
                                </div>-->
                                <div class="form-group col-md-4 ml-4 pb-3">
                                <label for="card-contact-register">Contact Number  </label>
                                <input type="tel" class="form-control" id="card-contact-register" placeholder="+60123456789">
                            </div>
                            </div>

                            <div id="card-register-button">
                                <a href="https://www.youtube.com/?gl=US" class="btn btn-primary btn-block">Save Details</a>
                            </div>
                        </form>
                    </div>
                </div>    
            </div>

            <!--THIS IS BOOTSTRAP JAVASRIPT PART START-->
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        </body>
</html>