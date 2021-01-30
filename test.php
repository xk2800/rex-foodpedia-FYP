<?php
session_start();
session_regenerate_id(true);

//set default time zone
date_default_timezone_set("Asia/Kuala_Lumpur");

// change the information according to your database
$db_connection = mysqli_connect("13.212.90.225", "database", "DZUUuox3oDVC3s3A","rex-foodipedia");
// CHECK DATABASE CONNECTION
if(mysqli_connect_errno()){
    echo "Connection Failed".mysqli_connect_error();
    exit;
}

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
$client->setRedirectUri('https://rex-foodipedia-fyp.herokuapp.com/test.php');

// Adding those scopes which we want to get (email & profile Information)
$client->addScope("email");
$client->addScope("profile");


if(isset($_GET['code'])):

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
            header('Location: index.php');
            exit;

        }
        else{

            // if user not exists we will insert the user
            $insert = mysqli_query($db_connection, "INSERT INTO `user_acc`(`google_id`,`name`,`email`,`profile_image`) VALUES('$id','$full_name','$email','$profile_pic')");

            if($insert){
                $_SESSION['login_id'] = $id; 
                header('Location: index.php');
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
    
else: 
    // Google Login Url = $client->createAuthUrl(); 
?>
<a class="login-btn" href="<?php echo $client->createAuthUrl(); ?>">Sign in with Google</a>
<?php endif; ?>