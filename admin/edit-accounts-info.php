<!DOCTYPE html>
<?php
/**
 * TODO: CSS FIX ***
 * TODO: FOOTER FIX ***
 * 
 *  * THIS IS USING BETTER COMMENTS *
 */

    include "../db-connect.php";
    ob_start();
    session_start();
    

?>
<html>
<head>
        <title>Edit | REX Foodipedia</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!--INCLUDE START HERE-->
        <link rel="icon" type="image/png" href= "img/logo/logo.png">

        <!--THIS IS FONT AWESOME JAVASCRIPT START-->
        <script src="https://kit.fontawesome.com/daa253e478.js" crossorigin="anonymous"></script>

        <!--THIS IS BOOTSTRAP CSS PART START-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <!--FONTS.CSS-->
        <link rel="stylesheet" href="css/fonts.css">

</head>
<body>

    <?php
            include("navbar.html");

            $admin_username = '123';
    ?>
        <div class="container">
    <?php
                        $getadmininfo  = mysqli_query($connect, "SELECT * FROM admin_acc WHERE username!='$admin_username'");
                        

        ?>

                    <p>Admin ID: <br><select name="adminid" id="id">
                        <option style='display:none;'>Select Admin ID</option>
        <?php
                        while($getid_output = mysqli_fetch_array($getadmininfo)){
                            $staff_id = $getid_output["username"];
                            //echo $staff_id;
                            echo "<option value='". $getid_output['username'] ."'>" .$getid_output['username'] ."</option>";
                        }
        ?>
                        </select>
                    </p>
        <?php
                            $getadmininfo1  = mysqli_query($connect, "SELECT * FROM admin_acc WHERE username='$staff_id'");
                        //while($getadmininfo_output = mysqli_fetch_assoc($getadmininfo)){
                            $getadmininfo_output = mysqli_fetch_assoc($getadmininfo1);
                            $admin_name     = $getadmininfo_output["fname"];
                            $admin_username = $getadmininfo_output["username"];
                            $admin_email    = $getadmininfo_output["email"];
                            $admin_activity = $getadmininfo_output["admin_isDelete"];

        ?>
                    <p>Admin Name               <br><input type="text" name="adminname" id="name" placeholder="<?php echo $admin_name ?>" value="<?php echo $admin_name ?>"></p>
                    <p>Admin Username           <br><input type="text" name="adminusername" id="username"></p>
                    <p>Admin Email              <br><input type="email" name="adminemail" id="email"></p>
                    <p>Current Account Status   <br><input type="text" name="adminstatus" id="status" readonly></p>
                    <p>Account Active?          <br><input type="radio" name="adminaccount" id="account"> Active
                                                    <input type="radio" name="adminaccount" id="account"> Inactive
                    </p>
        <?php
                        //}
        ?>

                    <button type="submit" name="adminsubmit">Update Information</button>
                    <button type="submit" name="admincancel">Cancel</button>
        </div>

        <!--THIS IS BOOTSTRAP JAVASRIPT PART START-->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    </body>
</html>