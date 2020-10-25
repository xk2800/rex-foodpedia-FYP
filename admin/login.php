<?php
// Start the session
session_start();


?>

<!DOCTYPE HTML>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>

    <?php

    //1. define variables and set to empty values
    $email = $password = $hashed_password = $og_password = "";
    //2. Establish connection to database
    include "connect-test.php";

    //3. Get form data
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = test_input($_POST["email"]);
        $_SESSION["Email"] = $email;
        $password = test_input($_POST["password"]);
        $password_form = $password;
        //encrpting
        $password_form = hash("sha512", $password_form);
        //$double_hashed_password = password_hash($password_form, PASSWORD_DEFAULT);
        //var_dump($password);
        //echo "<br>";
        //var_dump($hashed_password);





        //4. Set db query
        $sql = "SELECT * FROM test WHERE username='$email'";
        //5. run query
        if ($conn->query($sql)) {
            //echo "Data inserted successfully!";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    $password_db = $row["password"];
                    /*$first_name = $row["FirstName"];
                    $last_name = $row["LastName"];
                    $person_id = $row["PersonID"];
                    $_SESSION["FirstName"] = $first_name;
                    $_SESSION["LastName"] = $last_name;
                    $_SESSION["PersonID"] = $person_id;*/
                }
                $verify = password_verify($password_form, $password_db);
                //var_dump($verify);
                if ($verify == "true") {
                    echo "login success";
                    header("location:homepage.php");
                }
            } else {
                echo "0 results";
            }
        } else {
            echo "Error fetching data: " . $conn->error;
        }
        //6. close db connection
        $conn->close();
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <div class="container">
        <h1>LOGIN FORM</h1>
        <form method="post" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>'>
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="mail" placeholder="Email" name="email">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" placeholder="" name="password">
            </div>
            <input type="submit" value="Submit" name="submit" class="btn btn-danger">
            <br>
            <a href="registration.php">Don`t have an account?</a>
        </form>
    </div>
</body>