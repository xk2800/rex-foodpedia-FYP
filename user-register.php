<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Register | REX Foodipedia</title>

            <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">

            <!--FONTS.CSS-->
            <link rel="preload" href="css/fonts.css" as="style">

            <!--THIS IS FONT AWESOME JAVASCRIPT START-->
            <script src="https://kit.fontawesome.com/daa253e478.js" crossorigin="anonymous"></script>

            <!--THIS IS BOOTSTRAP CSS PART START-->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        </head>

        <body>
            
            <?php
                include("nav.html");
            ?>

            <div class="container">
                <div class="card" style="width: 30rem;">
                    <div class="card-body">
                    <h5 class="card-title">Register</h5>
                    <form>
                        <div class="form-group">
                            <label for="card-email-register">Email Address</label>
                            <input type="text" class="form-control" id="card-email-register" placeholder="example@gmail.com">
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="card-pass-register">Password</label>
                                <input type="email" class="form-control" id="card-pass-register" placeholder="Enter a password">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="card-con-pass-register">Confirm Password</label>
                                <input type="password" class="form-control" id="card-con-pass-register" placeholder="Re-enter the password">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="card-contact-register">Contact Number</label>
                            <input type="tel" class="form-control" id="card-contact-register" placeholder="+60123456789">
                        </div>

                        <div class="form-group">
                            <label for="card-address-register">Address</label>
                            <input type="text" class="form-control" id="card-address-register" placeholder="1234 Main St">
                        </div>

                        <div class="form-group">
                            <label for="card-address-2-register">Address 2</label>
                            <input type="text" class="form-control" id="card-address-2-register" placeholder="Apartment, studio, or floor">
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="card-city-register">City</label>
                                <input type="text" class="form-control" id="card-city-register">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="card-state-register">State</label>
                                <select id="card-state-register" class="form-control">
                                    <option selected>Choose...</option>
                                        <option>...</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="card-zip-register">Zip</label>
                                    <input type="text" class="form-control" id="card-zip-register">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </form>
                </div>
            </div>

                

            <!--THIS IS BOOTSTRAP JAVASRIPT PART START-->
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        </body>
</html>