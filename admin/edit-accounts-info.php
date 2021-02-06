<!DOCTYPE html>
<?php
/**
 * TODO: CSS FIX ***
 * TODO: FOOTER FIX ***
 *
 *  * THIS IS USING BETTER COMMENTS *
 */
    //session_start();
    include "../db-connect.php";
    ob_start();


    if(isset($_REQUEST["admin_username"]) && ($_REQUEST["account"])){
        $admin_username = $_REQUEST["admin_username"];
        $account_type   = $_REQUEST["account"];

        $admin_username_find = mysqli_query($connect, "SELECT * from admin_acc WHERE username = '$admin_username'");
        $admin_username_output = mysqli_fetch_assoc($admin_username_find);
        //echo $row ["name"];

        // echo $admin_username_output['email'];

        //return true;

    }else if(isset($_REQUEST["staff_username"]) && ($_REQUEST["account"])){
        $staff_username = $_REQUEST["staff_username"];
        $account_type   = $_REQUEST["account"];

        $staff_username_find = mysqli_query($connect, "SELECT * from staff_acc WHERE username = '$staff_username'");
        $staff_username_output = mysqli_fetch_assoc($staff_username_find);
        //echo $row ["name"];

        // echo $staff_username_output['staff_id'];

        //return true;
    }

    //echo "<br>";
    //echo $account_type;
?>
<html>
<head>
        <title>Edit <?php
            //echo $admin_username;
            if(isset($_REQUEST["admin_username"]) && ($_REQUEST["account"])){
                $admin_username = $_REQUEST["admin_username"];
                $account_type   = $_REQUEST["account"];

                echo $admin_username;

                //return true;

            }else if(isset($_REQUEST["staff_username"]) && ($_REQUEST["account"])){
                $staff_username = $_REQUEST["staff_username"];
                $account_type   = $_REQUEST["account"];

                echo $staff_username;
            }

        ?> | REX Foodipedia
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--INCLUDE START HERE-->
        <link rel="icon" type="image/png" href= "img/logo/logo.png">

        <!--THIS IS FONT AWESOME JAVASCRIPT START-->
        <script src="https://kit.fontawesome.com/daa253e478.js" crossorigin="anonymous"></script>

        <!--THIS IS BOOTSTRAP CSS PART START-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <!-- jQuery CDN -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!--FONTS.CSS-->
        <link rel="stylesheet" href="css/fonts.css">

</head>
<body>

    <?php
            include("navbar.html");
            //$admin_username = '123';
    ?>
        <div class="container">
    <?php
            if(isset($_REQUEST["staff_id"]) && ($_REQUEST["account"])){
                $admin_username = $_REQUEST["staff_id"];
                $account_type   = $_REQUEST["account"];

                echo $admin_username;
                echo "<br>";
                echo $account_type;


                $findadmin          = mysqli_query($connect, "SELECT * FROM admin_acc WHERE staff_id='$admin_username'");
                $findadmin_output   = mysqli_fetch_assoc($findadmin);



                $adminID        = $findadmin_output['staff_id'];
                $adminName      = $findadmin_output['fname'];
                $adminUsername  = $findadmin_output['username'];
                $adminEmail     = $findadmin_output['email'];
                $adminStatus_db = $findadmin_output['admin_isDelete'];

                if($adminStatus_db == "0"){
                    $adminStatus = "Activated";
                }else if($adminStatus_db == "1"){
                    $adminStatus = "Deactivated";
                }else{
                    echo "No data to show";
                }

                if(isset($_POST["submitadmin"])){

                    $adminid        = $_POST['adminid'];
                    $adminname      = $_POST['adminname'];
                    $adminusername  = $_POST['adminusername'];
                    $adminemail     = $_POST['adminemail'];
                    $adminactivity  = $_POST['adminactivity_radio'];



                    $admin_insert = mysqli_query($connect, "UPDATE admin_acc SET fname='$adminname', username='$adminusername', email='$adminemail', admin_isDelete='$adminactivity' WHERE staff_id='$adminid'");

                    if($admin_insert){

                        header("location: edit-accounts?admin=updated");
                        //echo "updated";
                    }else{
                        $fullUrl ="https:// $_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";


                        if(strpos($fullUrl, "admin=update_failed") == true){
                            //echo '<script>document.getElementById("error").innerHTML = "<br><br>"</script>';
                            echo '<div class="container">
                                    <div class="alert alert-alert" role="alert">
                                        Admin information failed to be updated, kindly try again.
                                    </div>
                                </div>';

                            
                        }
                    }

                    //echo $adminid."<br>".$adminname."<br>".$adminusername."<br>".$adminemail."<br>".$adminactivity;
                    }

        ?>

                <form method="POST">

                    <span class="id">Admin ID                       <br><input type="text" name="adminid" id="id" value="<?php echo $adminID ?>" readonly></span><br><br>
                    <span class="name">Admin Name                   <br><input type="text" name="adminname" id="name" value="<?php echo $adminName ?>" placeholder="<?php if($adminName): echo $adminName; else: echo 'No Data'; endif; ?>"></span><br><br>
                    <span class="username">Admin Username           <br><input type="text" name="adminusername" id="username" value="<?php echo $adminUsername ?>" placeholder="<?php if($adminUsername): echo $adminUsername; else: echo 'No Data'; endif; ?>"></span><br><br>
                    <span class="email">Admin Email                 <br><input type="text" name="adminemail" id="email" value="<?php echo $adminEmail ?>" placeholder="<?php if($adminEmail): echo $adminEmail; else: echo 'No Data'; endif; ?>"></span><br><br>
                    <span class="activity_output">Account Activity  <br><input type="text" name="adminactivity_output" id="activity_output" value="<?php echo $adminStatus ?>" placeholder="<?php if($adminStatus): echo $adminStatus; else: echo 'No Data'; endif; ?>" readonly></span><br><br>
                    <span class="activity_radio">Account Activity   <br><input type="radio" name="adminactivity_radio" id="activity_radio_activate" value="0" required> <label for="activity_radio_activate">Activate</label></span>
                                                                        <input type="radio" name="adminactivity_radio" id="activity_radio_deactivate" value="1"> <label for="activity_radio_deactivate">Deactivate</label></span>

                    <?php //if($adminStatus): echo $adminStatus; else: echo 'No Data'; endif; ?>

                    <br><br>
                    <button type="submit" name="submitadmin" id="submitadmin">Submit Changes</button>
                    <button type="submit" name="canceladmin">Cancel Operation</button>
                </form>

        <?php



            }else if(isset($_REQUEST["staff_id"]) && ($_REQUEST["account"])){
                $staff_username = $_REQUEST["staff_id"];
                $account_type   = $_REQUEST["account"];

                echo $staff_username;
                echo "<br>";
                echo $account_type;

                $findstaff          = mysqli_query($connect, "SELECT * FROM staff_acc WHERE staff_id='$staff_username'");
                $findstaff_output   = mysqli_fetch_assoc($findstaff);


                $staffID        = $findstaff_output['staff_id'];
                $staffName      = $findstaff_output['fname'];
                $staffUsername  = $findstaff_output['username'];
                $staffEmail     = $findstaff_output['email'];
                $staffStatus_db = $findstaff_output['staff_isDelete'];

                if($staffStatus_db == "0"){
                    $staffStatus = "Activated";
                }else if($staffStatus_db == "1"){
                    $staffStatus = "Deactivated";
                }else{
                    echo "No data to show";
                }

        ?>

                <form method="POST">

                    <span class="id">Staff ID                       <br><input type="text" name="staffid" id="id" value="<?php echo $staffID ?>" readonly></span><br><br>
                    <span class="name">Staff Name                   <br><input type="text" name="staffname" id="name" value="<?php echo $staffName ?>" placeholder="<?php if($staffName): echo $staffName; else: echo 'No Data'; endif;?>"></span><br><br>
                    <span class="username">Staff Username           <br><input type="text" name="staffusername" id="username" value="<?php echo $staffUsername ?>" placeholder="<?php if($staffUsername): echo $staffUsername; else: echo 'No Data'; endif; ?>"></span><br><br>
                    <span class="email">Staff Email                 <br><input type="text" name="staffemail" id="email" value="<?php echo $staffEmail ?>" placeholder="<?php if($staffEmail): echo $staffEmail; else: echo 'No Data'; endif; ?>"></span><br><br>
                    <span class="activity_output">Account Activity  <br><input type="text" name="staffactivity_output" id="activity_output" value="<?php echo $staffStatus ?>" placeholder="<?php if($staffStatus): echo $staffStatus; else: echo 'No Data'; endif; ?>" readonly></span><br><br>
                    <span class="activity_radio">Account Activity   <br><input type="radio" name="staffactivity_radio" id="activity_radio_activate" value="0"> <label for="activity_radio_activate">Activate</label></span>
                                                                        <input type="radio" name="staffactivity_radio" id="activity_radio_deactivate" value="1"> <label for="activity_radio_deactivate">Deactivate</label></span>

                    <?php
                    //if($staffStatus): echo $staffStatus; else: echo 'No Data'; endif;
                    ?>
                    <br><br>
                    <button type="submit" name="submitstaff">Submit Changes</button>
                    <button type="submit" name="cancelstaff">Cancel Operation</button>
                </form>

        <?php

                if(isset($_POST["submitstaff"])){

                    $staffid        = $_POST['staffid'];
                    $staffname      = $_POST['staffname'];
                    $staffusername  = $_POST['staffusername'];
                    $staffemail     = $_POST['staffemail'];
                    $staffactivity  = $_POST['staffactivity_radio'];



                    $staff_insert = mysqli_query($connect, "UPDATE staff_acc SET fname='$staffname', username='$staffusername', email='$staffemail', staff_isDelete='$staffactivity' WHERE staff_id='$staffid'");

                    if($staff_insert){

                        header("location: edit-accounts?staff=updated");
                        //echo "updated";
                    }else{
                        $fullUrl ="https:// $_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";


                        if(strpos($fullUrl, "staff=update_failed") == true){
                            //echo '<script>document.getElementById("error").innerHTML = "<br><br>"</script>';
                            echo '<div class="container">
                                    <div class="alert alert-alert" role="alert">
                                        Staff information failed to be updated, kindly try again.
                                    </div>
                                </div>';

                            
                        }
                    }

                    //echo $staffid."<br>".$staffname."<br>".$staffusername."<br>".$staffemail."<br>".$staffactivity;
                }


            }
    ?>
        </div>

        <!--THIS IS BOOTSTRAP JAVASRIPT PART START-->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    </body>
</html>