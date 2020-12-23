<!DOCTYPE html>

<?php 

/**
  *TODO: change the <a> to <button> for the form*
  */

?>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
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

            <style>

                #card-whole-profile {
                    margin-top: 8em;
                    width: 45rem;
                    position: relative;
                    background-color: #e8ded2;
                    border-style: none;
                    letter-spacing: 1px;
                }

                #card-input-title {
                    font-family: Lato;
                    letter-spacing: 2px;
                    text-decoration:none;
                    /*text-align:center;*/
                    text-transform: uppercase;
                }

                #card-input-profile input[type="email"], #card-input-profile input[type="text"],
                #card-input-profile input[type="tel"], #card-input-profile input[type="password"] {
                    border: 0px black solid;
                    border-bottom-width: 1px;
                    border-bottom-color: #a8a7a7;
                    background-color: transparent;
                }

                #card-profile-button a {
                    border-radius: 0px;
                    float:right;
                    margin-top: 40px;
                }

                 .card .card-header {
                   /* background-color:transparent;*/
                    padding: 20px 0px 20px 15px;
                }

            </style>
        </head>

        <body style="background-color: #e8ded2";>            
            
            <?php
                include("nav.html");
            ?>

            <div class="container">
                <div class="card p-3 mb-5 rounded mx-auto" id="card-whole-profile">
                    <div class="card-header" id="card-input-title">
                        Account Details
                    </div>
                    <div class="card-body" >
                        <form>
                            <div id="card-input-profile"> 
                            
                                    <div class="form-group pl-5 pb-3">
                                        <i class="fa fa-envelope-open" aria-hidden="true"></i>
                                        &ensp;
                                        <label for="card-email-register">Email Address</label>
                                        <input type="email" class="form-control" id="card-email-profile">
                                    </div>
                                
                        
                                <div class="form-row">
                                    <div class="form-group col-md-5 pl-5 pb-3">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        &ensp;
                                        <label for="card-firstname-profile">First Name</label>
                                        <input type="text" class="form-control" id="card-firstname-profile">
                                    </div>
                                    <div class="form-group col-md-5">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        &ensp;
                                        <label for="card-lastname-profile">Last Name</label>
                                        <input type="text" class="form-control" id="card-lastname-profile">
                                    </div>
                                </div>

                                <div class="form-group col-md-5 ml-4 pb-3">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    &ensp;
                                    <label for="card-contact-register">Contact Number  </label>
                                    <input type="tel" class="form-control" id="card-contact-register">
                                </div>
                            </div>

                            <div id="card-profile-button">
                                <div class="text-center">
                                    <center><a href="https://www.youtube.com/?gl=US" class="btn btn-dark btn-block w-25 p-1">Save Details</a></center>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card p-3 mb-5 rounded mx-auto" id="card-whole-profile">
                    <div class="card-header" id="card-input-title">
                        Manage Payment Method
                    </div>
                    <div class="card-body">
                        <form>
                            <div id="card-input-profile">  
                                <div class="form-group pl-5 pb-3">
                                    <i class="fa fa-university" aria-hidden="true"></i>
                                    &ensp;
                                    <label for="card-payment-type-profile">Payment Method </label>
                                    <div class="form-row">
                                        <div class="radio">
                                            <label><input type="radio" name="optradio" checked>&ensp;Visa</label>
                                        </div>
                                        <div class="radio pl-5">
                                            <label><input type="radio" name="optradio">&ensp;MasterCard</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group pl-5 pb-3 w-75">
                                    <i class="fa fa-credit-card" aria-hidden="true"></i>
                                    &nbsp;
                                    <label for="card-payment-profile">Card Number</label>
                                    <input type="tel" class="form-control" id="card-payment-profile">
                                </div>
                            </div>
                            
                            <div id="card-profile-button">
                                <div class="text-center">
                                    <center><a href="https://www.youtube.com/?gl=US" class="btn btn-dark btn-block w-25 p-1">Save Payment<br/>Method Details</a></center>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card p-3 mb-5 rounded mx-auto" id="card-whole-profile">
                    <div class="card-header" id="card-input-title">
                        Manage Password
                    </div>
                    <div class="card-body">
                        <form>
                            <div id="card-input-profile"> 
                                <div class="form-row">
                                    <div class="form-group col-md-5 pl-5 pb-3 w-75">
                                        <i class="fa fa-key" aria-hidden="true"></i>
                                        &nbsp;
                                        <label for="card-password-profile">Current Password</label>
                                        <input type="password" class="form-control" id="card-password-profile">
                                    </div>
                                    <div class="form-group col-md-5 w-75">
                                        <i class="fa fa-key" aria-hidden="true"></i>
                                        &nbsp;
                                        <label for="card-conpassword-profile">New Password</label>
                                        <input type="password" class="form-control" id="card-conpassword-profile">
                                    </div>
                                </div>
                            </div>
                            
                            <div id="card-profile-button">
                                <div class="text-center">
                                    <center><a href="https://www.youtube.com/?gl=US" class="btn btn-dark btn-block w-25 p-1">Change Password</a></center>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
                <div class="card p-3 mb-5 rounded mx-auto" id="card-whole-profile">
                    <div class="card-header" id="card-input-title">
                        Manage Shipment Address
                    </div>
                    <div class="card-body">
                        <form>
                            <div id="card-input-profile"> 
                                    <div class="form-group pl-5 pb-3 w-100">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        &nbsp;
                                        <label for="card-address1-profile">Address 1</label>
                                        <input type="text" class="form-control" id="card-address1-profile">
                                    </div>
                                    <div class="form-group pl-5 pb-3 w-100">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        &nbsp;
                                        <label for="card-address2-profile">Address 2</label>
                                        <input type="text" class="form-control" id="card-address2-profile">
                                    </div>
                            </div>
                            
                            <div id="card-profile-button">
                                <div class="text-center">
                                    <center><a href="https://www.youtube.com/?gl=US" class="btn btn-dark btn-block w-25 p-1">Change Address</a></center>
                                </div>
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