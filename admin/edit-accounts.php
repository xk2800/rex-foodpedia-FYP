<!DOCTYPE html>
<?php
/**
 * TODO: CSS FIX ***
 * TODO: FOOTER FIX ***
 * 
 *  * THIS IS USING BETTER COMMENTS *
 * 
 * XAVIER
 */

    //session_start();
    include "../db-connect.php";
    ob_start();

?>
<html>
<head>
    <title>Edit Staff | REX Foodipedia</title>

    <meta name="viewpoint" content="width=device-width, initial-scale=1">
    <meta name="viewpoint" content="width=device-width">
    
<!--INCLUDE START HERE-->
<link rel="icon" type="image/png" href= "../img/logo/logo.png">

<!--THIS IS FONT AWESOME JAVASCRIPT START-->
    <script src="https://kit.fontawesome.com/daa253e478.js" crossorigin="anonymous"></script>
<!--THIS IS FONT AWESOME JAVASCRIPT END-->

<!--THIS IS BOOTSTRAP CSS PART START-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<!--THIS IS BOOTSTRAP CSS PART END-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>


<!--FONTS.CSS-->
    <link rel="stylesheet" href="css/fonts.css">

    <link rel="stylesheet" href="../css/edit-staff.css">


<script>
    $(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
    function option_drop(val){
        var element=document.getElementById('editstaff');
        var doc = document.getElementById('editadmin');
        if(val=='staff'){
            element.style.display='block';
            doc.style.display='none';

        }else if(val=='admin'){

            element.style.display='none';

                if(val=='admin'){
                    doc.style.display='block';
                }else{
                    doc.style.display='none';
                }

            
        }
    }
</script>
<style>
    body{
        background-color: #e8ded2;
    }
</style>
</head>
<body>

<?php
        include("navbar.php");

        if(isset($_REQUEST["access"])){
            $name = $_REQUEST["access"];
    
            $result = mysqli_query($connect, "SELECT username from admin_acc WHERE hashed = '$name'");
            $admin_username1 = mysqli_fetch_assoc($result);
            
        }
    
        
    
        $admin_username = $admin_username1["username"];
    
?>

<?php
    //$admin_username = $_SESSION['adminuname'];
    //echo $admin_username;
    echo "<br>";
    //onclick="javascript:option_drop();"

    $fullUrl ="https:// $_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";


    if(strpos($fullUrl, "admin=updated") == true){
        //echo '<script>document.getElementById("error").innerHTML = "<br><br>"</script>';
        echo '<div class="container">
                <div class="alert alert-success" role="alert">
                    Admin information has successfully been updated!
                </div>
            </div>';

        
    }

    if(strpos($fullUrl, "staff=updated") == true){
        //echo '<script>document.getElementById("error").innerHTML = "<br><br>"</script>';
        echo '<div class="container">
                <div class="alert alert-success" role="alert">
                    Staff information has successfully been updated!
                </div>
            </div>';

        
    }

    
?>

    <div class="container">
        <input id="myInput" type="text" placeholder="Search..">
        <br><br>

            <div class="updated_info"></div>


            <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Admin</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Staff</a>
            </li>
            </ul>


            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <br>
    <?php

                    $admin_count_sql    = "SELECT count(*) as number from admin_acc";
                    $admin_count        = mysqli_query($connect, "$admin_count_sql");

                    while($admin_count_output = mysqli_fetch_array($admin_count)){
                        $admin_output = $admin_count_output['number'];
                    }

                    echo "Total of staff accounts registered in the system is <b>".$admin_output."</b><br><br>";

                    $staff_count_sql    = "SELECT count(*) as number from staff_acc";
                    $staff_count        = mysqli_query($connect, "$staff_count_sql");

                    while($staff_count_output = mysqli_fetch_array($staff_count)){
                        $staff_output = $staff_count_output['number'];
                    }

                    echo "Total of staff accounts registered in the system is <b>".$staff_output."</b>";
    ?>

                </div>


                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <br>
    <?php
                    $getadmininfo = mysqli_query($connect, "SELECT * FROM admin_acc WHERE username!='$admin_username' ORDER BY admin_isDelete=0 DESC");

                    if(mysqli_num_rows($getadmininfo)==0){
                        echo "No data available";
                    }else{
    ?>
                        <table>
                            <th>Admin ID</th>
                            <th>Admin Name</th>
                            <th>Admin Username</th>
                            <th>Admin Email</th>
                            <th>Account Activity</th>
                            <th>Action</th>
                        </table>
    <?php
                        while($admin_output = mysqli_fetch_assoc($getadmininfo)){
    ?>
                            <table>
                            <tbody id="myTable">
                                <tr>
                                    <td><?php if($admin_output['staff_id']): echo $admin_output['staff_id']; else: echo 'No Data'; endif;?></td>
                                    <td><?php if($admin_output['fname']): echo $admin_output['fname']; else: echo 'No Data'; endif;?></td>
                                    <td><?php if($admin_output['username']): echo $admin_output['username']; else: echo 'No Data'; endif;?></td>
                                    <td><?php if($admin_output['email']): echo $admin_output['email']; else: echo 'No Data'; endif;?></td>
                                    <td>    
    <?php
                                        $admin_status = $admin_output['admin_isDelete']; 
                                        if($admin_status == "0"){
                                            echo "Active";
                                        }else if($admin_status == "1"){
                                            echo "Deactivated";
                                        }else{
                                            echo "No data to show";
                                        }
    ?>
                                    </td>
                                    <td><a href="edit-accounts-info?staff_id=<?php echo $admin_output["staff_id"];?>&account=admin&access=<?php echo $name ?>"><button type="submit">Edit</button></a></td>
                                </tr>
                                </tbody>
                            </table>
    <?php
                        }
    ?>
    <?php
                    }
    ?>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <br>
    <?php
                    $getstaffinfo = mysqli_query($connect, "SELECT * FROM staff_acc ORDER BY staff_isDelete=0 DESC");

                    if(mysqli_num_rows($getstaffinfo)==0){
                        echo "No data available";
                    }else{
    ?>
                        <table>
                            <th>Staff ID</th>
                            <th>Staff Name</th>
                            <th>Staff Username</th>
                            <th>Staff Email</th>
                            <th>Account Activity</th>
                            <th>Action</th>
                        </table>
    <?php
                        while($staff_output = mysqli_fetch_assoc($getstaffinfo)){
    ?>
                            <table>
                                <tbody id="myTable">
                                    <tr>
                                        <td><?php if($staff_output['staff_id']): echo $staff_output['staff_id']; else: echo 'No Data'; endif; ?></td>
                                        <td><?php if($staff_output['fname']): echo $staff_output['fname']; else: echo 'No Data'; endif; ?></td>
                                        <td><?php if($staff_output['username']): echo $staff_output['username']; else: echo 'No Data'; endif; ?></td>
                                        <td><?php if($staff_output['email']): echo $staff_output['email']; else: echo 'No Data'; endif; ?></td>
                                        <td>
    <?php
                                        $staff_status = $staff_output['staff_isDelete']; 
                                        if($staff_status == "0"){
                                            echo "Active";
                                        }else if($staff_status == "1"){
                                            echo "Deactivated";
                                        }else{
                                            echo "No data to show";
                                        }
    ?>
                                        </td>
                                        <td><a href="edit-accounts-info?staff_id=<?php echo $staff_output['staff_id'];?>&account=staff&access=<?php echo $name ?>"><button type="submit" name="action_admin">Edit</button></a></td>
                                    </tr>
                                </tbody>
                            </table>
    <?php
                        }
                    }
    ?>

                </div>
            </div>

    </div>


<!--THIS IS BOOTSTRAP JAVASRIPT PART START-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<!--THIS IS BOOTSTRAP JAVASCRIPT PART END-->

</body>
</html>