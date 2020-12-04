<!DOCTYPE html>
    <html lang="en">
        <head>
        
        <title>Login | REX Foodpedia</title>

        <meta name="viewpoint" content="width=device-width, initial-scale=1">
        <meta name="viewpoint" content="width=device-width">
        <!--SIGN-IN WITH GOOGLE META-->
        <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
    
        <!--INCLUDE START HERE-->
        <link rel="icon" type="image/png" href= "image/MYRUN 1.png">

        <!--FONTS.CSS-->
        <link rel="preload" href="css/fonts.css" as="style">

        <!--FONT AWESOME JAVASCRIPT-->
        <script src="https://kit.fontawesome.com/daa253e478.js" crossorigin="anonymous"></script>

        <!--BOOTSTRAP CSS-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <style>       
            #card-whole {
                margin: auto;
                margin-top: 150px;
                width: 150%;
                padding: 10px;
                padding-bottom: 35px;
                border-radius: 20px;
                height: auto;
                border-color: grey;
                border-width:2px;
            }
            
            #card-login-button {
                padding: 15px 90px;
                margin-bottom: 30px;
            }

            #card-input {
                padding: 30px 10px 25px 10px;
                width:95%
            }
            
            hr {
                background-color: #ccc;
                height: 0px;
                border:none;
            }
            
            #card-misc a{
                color: black;
                text-decoration: none;
                font-style: italic;
                letter-spacing: 1px;
            }

            #card-misc a:hover{
                color:red;
            }

        </style>
    
    </head>

    <body>
        
        <?php
            include("nav.html");
        ?>

        <div class = "container">
            <div class="card text-center" id="card-whole" style="width: 30rem;">
                <div class="card-body">    
                    <h5 class="card-title">Login</h5>

                    <div id="card-input">
                        <form>
                            <div class="form-group">
                                <input type="email" class="form-control" id="card-email" aria-describedby="emailHelp" placeholder="Enter email" 
                                       style="margin-bottom:40px; border-radius:10px; border-color:grey;">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="card-pass" placeholder="Password"
                                       style="border-radius:10px; border-color:grey;">
                            </div>
                        </form>
                    </div>
                    <div id="card-login-button">
                        <a href="https://www.youtube.com/?gl=US" class="btn btn-dark btn-block" >Login</a>
                    </div>
                    <div id="card-misc">
                        <a href="https://www.youtube.com/?gl=US" style="float:left;">Forgot passord ? </a> <a href="https://www.youtube.com/?gl=US" style="padding-left: 220px;"> Register</a>
                    </div>
                    <hr/>
                </div>
                <label style="padding:0px 0px 20px 0px;"><i><b>OR</b></i></label>

                <!--SIGN IN WITH GOOGLE API (need further setup https://developers.google.com/identity/sign-in/web/build-button // https://www.webslesson.info/2019/09/how-to-make-login-with-google-account-using-php.html) -->
                <center><div id="my-signin2"></div></center>
                    <script>
                        function onSuccess(googleUser) {
                            console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
                        }
                        function onFailure(error) {
                            console.log(error);
                        }
                        function renderButton() {
                            gapi.signin2.render('my-signin2', {
                                'scope': 'profile email',
                                'width': 240,
                                'height': 50,
                                'longtitle': true,
                                'theme': 'dark',
                                'onsuccess': onSuccess,
                                'onfailure': onFailure
                            });
                        }
                    </script>
                    <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
                </div>
                <!--SIGN IN WITH GOOGLE API END-->

    <!--THIS IS BOOTSTRAP JAVASRIPT PART START-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    
    </body>
</html>