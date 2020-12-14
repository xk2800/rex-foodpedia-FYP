 <?php
require 'db_connection.php';

if(isset($_SESSION['login_id'])){
    header('Location: home.php');
    exit;
}

require 'google/vendor/autoload.php';

// Creating new google client instance
$client = new Google_Client();

// Enter your Client ID
$client->setClientId('981967059646-u56d1fku9i52fb53rb9o7t6deav37ddq.apps.googleusercontent.com');
// Enter your Client Secrect
$client->setClientSecret('_TTBH-saxhTlvSHZVt-COrHw');
// Enter the Redirect URL
$client->setRedirectUri('http://localhost/hddocs/rex-Foodipedia-FYP/user-login.php');

// Adding those scopes which we want to get (email & profile Information)
$client->addScope("email");
$client->addScope("profile");


if(isset($_GET['code'])){

    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);

    if(!isset($token["error"])){

        $client->setAccessToken($token['access_token']);

        // getting profile information
        $google_oauth = new Google_Service_Oauth2($client);
        $google_account_info = $google_oauth->userinfo->get();
    
        // Storing data into database
        $id = mysqli_real_escape_string($db_connection, $google_account_info->id);
        $full_name = mysqli_real_escape_string($db_connection, trim($google_account_info->name));
        $email = mysqli_real_escape_string($db_connection, $google_account_info->email);
        $profile_pic = mysqli_real_escape_string($db_connection, $google_account_info->picture);

        // checking user already exists or not
        $get_user = mysqli_query($db_connection, "SELECT `google_id` FROM `user_acc` WHERE `google_id`='$id'");
        if(mysqli_num_rows($get_user) > 0){

            $_SESSION['login_id'] = $id; 
            header('Location: home.php');
            exit;

        }
        else{

            // if user not exists we will insert the user
            $insert = mysqli_query($db_connection, "INSERT INTO `user_acc`(`google_id`,`name`,`email`,`profile_image`) VALUES('$id','$full_name','$email','$profile_pic')");

            if($insert){
                $_SESSION['login_id'] = $id; 
                header('Location: home.php');
                exit;
            }
            else{
                echo "Sign up failed!(Something went wrong).";
            }

        }

    }
    else{
        header('Location: login.php');
        exit;
    }
}
 
    // Google Login Url = $client->createAuthUrl(); 
?>

    

<?php// endif; ?>
<!DOCTYPE html>
    <html lang="en">
        <head>
        
        <title>Login | REX Foodipedia</title>

        <meta name="viewpoint" content="width=device-width, initial-scale=1">
        <meta name="viewpoint" content="width=device-width">
        <!--SIGN-IN WITH GOOGLE META-->
    
        <!--INCLUDE START HERE-->
        <link rel="icon" type="image/png" href= "image/MYRUN 1.png">

        <!--FONT AWESOME JAVASCRIPT-->
        <script src="https://kit.fontawesome.com/daa253e478.js" crossorigin="anonymous"></script>

        <!--BOOTSTRAP CSS-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <style> 
/*FOR SIGN IN GOOGLE BTN*/
        #google-img{
            margin-top: -10px;
        }
        *, *:before, *:after {
            box-sizing: border-box;
        }
        #google-button{
            margin-left: 0px;
        }
        .g-sign-in-button {
            margin: 10px;
            display: inline-block;
            width: 240px;
            height: 50px;
            background-color: #4285f4;
            color: #fff;
            border-radius: 1px;
            box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.25);
            transition: background-color .218s, border-color .218s, box-shadow .218s;
        }

        .login-btn, .login-btn:hover{
            color: white;
            text-decoration: none;
        }

        .g-sign-in-button:hover {
            cursor: pointer;
            -webkit-box-shadow: 0 0 3px 3px rgba(66, 133, 244, 0.3);
            box-shadow: 0 0 3px 3px rgba(66, 133, 244, 0.3);
        }

        .g-sign-in-button:active {
            background-color: #3367D6;
            transition: background-color 0.2s;
        }

        .g-sign-in-button .content-wrapper {
            height: 100%;
            width: 100%;
            border: 1px solid transparent;
        }

        .g-sign-in-button img {
            width: 18px;
            height: 18px;
        }

        .g-sign-in-button .logo-wrapper {
            padding: 15px;
            background: #fff;
            width: 48px;
            height: 100%;
            border-radius: 1px;
            display: inline-block;
        }

        .g-sign-in-button .text-container {
            font-family: Roboto,arial,sans-serif;
            font-weight: 500;
            letter-spacing: .21px;
            font-size: 16px;
            line-height: 48px;
            vertical-align: top;
            border: none;
            display: inline-block;
            text-align: center;
            width: 180px;
        }


        h6 {
            overflow: hidden;
            text-align: center;
        }
        h6:before,
        h6:after {
            background-color: #000;
            content: "";
            display: inline-block;
            height: 1px;
            position: relative;
            vertical-align: middle;
            width: 50%;
        }
        h6:before {
            right: 0.5em;
            margin-left: -50%;
        }
        h6:after {
            left: 0.5em;
            margin-right: -50%;
        }

        #card-whole {
            margin: auto;
            margin-top: 65px;
            padding: 0px 0px 35px 10px;
            /*border-radius: 20px;*/
            /*background-color: #F8F7F5;*/
            height: 40em;
            /*width: 40rem;*/
        }
        
        #card-login-button {
            padding: 50px 90px;
            font-style: italic;
        }

        #card-input-login {
            padding: 30px 10px 25px 10px;
            width: 95%
        }
        
        hr {
            background-color: #ccc;
            height: 0px;
            border: none;
        }

        h5 {
            padding-bottom: 20px; 
            font-family: Lato;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        ::placeholder {
            font-style: italic;
        }
        
        #card-misc a, #card-misc2 a{
            color: black;
            text-decoration: none;
            font-style: italic;
            letter-spacing: 1px;
            font-size: 13px;
        }

        #card-misc a:hover, #card-misc2 a:hover{
            color: #F4AC9C;
        }
        
        #card-input-login input[type="email"],  #card-input-login input[type="password"] {
            border-radius: 10px; 
            border-color: #F1F0ED;
        }

        </style>
    
    </head>

    <body style="background-color: #e8ded2;">
        
        <?php
            include("nav.html");
        ?>

        <div class = "container">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded text-center" id="card-whole">
                <div class="card-body">    
                    <h5 class="card-title">Login</h5>

                    <div id="card-input-login">
                        <form>
                            <div class="form-group">
                                <input type="email" class="form-control" id="card-email-login" aria-describedby="emailHelp" placeholder="Enter email" style="margin-bottom: 40px;">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="card-pass-login" placeholder="Password" style="margin-bottom: 30px;">
                            </div>
                        </form>
                    </div>

                    <div id="card-misc">
                        <a href="#" style="float: left; padding-left: 20px;">Forgot password ?</a>
                    </div>

                    <div id="card-login-button">
                        <button type="submit" name="loginbtn" class="btn btn-dark btn-block">Login</button>
                    </div>

                    <div id="card-misc2">
                        <a href="https://www.youtube.com/?gl=US" style="text-align: center;">No account yet ? Create one</a>
                    </div>

                </div>
                <!--hr/-->
                <!--label style="padding: 0px 0px 20px 0px;"><i><b>OR</b></i></label-->
                <h6><span>OR</span></h6>

                <div id="google-button">
                    <div class='g-sign-in-button'>
                        <div class=content-wrapper>
                            <div class='logo-wrapper'>
                                <img id="google-img" src='https://developers.google.com/identity/images/g-logo.png'>
                            </div>
                            <span class='text-container'>
                                <span><a class="login-btn" href="<?php echo $client->createAuthUrl(); ?>">Sign in with Google</a></span>
                            </span>
                        </div>
                    </div>
                </div>
                <a class="login-btn" href="<?php echo $client->createAuthUrl(); ?>">Login with Google</a>

                <!--SIGN IN WITH GOOGLE API (need further setup https://developers.google.com/identity/sign-in/web/build-button // https://www.webslesson.info/2019/09/how-to-make-login-with-google-account-using-php.html) -->
                <center><div id="my-signin2" style="padding-bottom: 22px;"></div></center>

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
        </div>
        <!--THIS IS BOOTSTRAP JAVASRIPT PART START-->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    
    </body>
</html>


