<?php
include ('connection.php');

    if (!isset($_GET["code"])) {
        echo ("Page can't be found! Err_msg: Can't get code");
        exit();

    }

    $code = $_GET["code"];
    $getEmailQuery = mysqli_query($connect, "SELECT email FROM resetpwd WHERE code='$code'");
    if(mysqli_num_rows($getEmailQuery) == 0){
        echo ("Page can't be found! Err_msg: No code found in database.");
        exit();
    }


    if (isset($_POST["password"])) {
        $pw = $_POST["password"];
        $pw = md5($pw);                     //encrypt password
        
        $row = mysqli_fetch_array($getEmailQuery);
        $email = $row["email"];

        $query = mysqli_query($connect, "UPDATE accounts SET password='$pw' WHERE email='$email'");

        if ($query) {
            $query = mysqli_query($connect, "DELETE FROM resetpwd WHERE code='$code'");
            echo ("Password has been updated!");
            exit();
        } else {
            echo ("Password update failed! Err_msg: Unable to delete code & update password.");
        }
    }
?>

<form method="post">
    <input type="password" name="password" placeholder="Enter new password">
    <br>
    <input type="submit" name="submit" value="Update Password">
</form>