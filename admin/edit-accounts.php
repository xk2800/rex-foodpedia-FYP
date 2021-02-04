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

    session_start();
    include "../db-connect.php";
    ob_start();

?>
<html>
<head>
    <title>Edit Staff | REX Foodipedia</title>

    <meta name="viewpoint" content="width=device-width, initial-scale=1">
    <meta name="viewpoint" content="width=device-width">
    
<!--INCLUDE START HERE-->
    <link rel="icon" type="image/png" href= "image/MYRUN 1.png">

<!--THIS IS FONT AWESOME JAVASCRIPT START-->
    <script src="https://kit.fontawesome.com/daa253e478.js" crossorigin="anonymous"></script>
<!--THIS IS FONT AWESOME JAVASCRIPT END-->

<!--THIS IS BOOTSTRAP CSS PART START-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<!--THIS IS BOOTSTRAP CSS PART END-->

<!--FONTS.CSS-->
    <link rel="stylesheet" href="css/fonts.css">

    <link rel="stylesheet" href="../css/edit-staff.css">


<script>
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
</head>
<body>

<?php
        include("navbar.html");
?>

<?php
    $staff_username = $_SESSION['staffuname'];
    echo $staff_username;
    //onclick="javascript:option_drop();"

    $admin_username = '123';
    
?>

    <div class="container">

            <div class="option">
            <select name="staff-admin" id="uni-name" onchange='option_drop(this.value);' required></p>
                                                                    <option style='display:none;'>Select Staff/Admin</option>
                                                                    <option value="staff">Staff</option>
                                                                    <option value="admin">Admin</option>
                                                                    </select>
                                                                    <br><br>
            </div>

            <div class="edit_admin" id="editadmin" style="display: none;">

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

                        echo '<table>';
                        echo '<tr>';
                        echo '<td>'.$admin_output['staff_id'].'</td>';
                        echo '<td>'.$admin_output['fname'].'</td>';
                        echo '<td>'.$admin_output['username'].'</td>';
                        echo '<td>'.$admin_output['email'].'</td>';
                        echo '<td>';

                        $admin_status = $admin_output['admin_isDelete']; 
                        if($admin_status == "0"){
                            echo "Active";
                        }else if($admin_status == "1"){
                            echo "Deactivated";
                        }else{
                            echo "No data to show";
                        }
                        echo '</td>';
                        echo '<td>'?><a href="edit-accounts-info?admin_username=<?php echo $admin_output["username"];?>&account=admin"><button type="submit">Edit</button></a></td><?php
                        echo '</tr>';
                        echo '</table>';
                    }
    ?>
    <?php
                }
    ?>
            </div>


            <div class="edit_staff" id="editstaff" style="display: none;">


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

                        echo '<table>';
                        echo '<tr>';
                        echo '<td>'.$staff_output['staff_id'].'</td>';
                        echo '<td>'.$staff_output['fname'].'</td>';
                        echo '<td>'.$staff_output['username'].'</td>';
                        echo '<td>'.$staff_output['email'].'</td>';
                        echo '<td>';

                        $staff_status = $staff_output['staff_isDelete']; 
                        if($staff_status == "0"){
                            echo "Active";
                        }else if($staff_status == "1"){
                            echo "Deactivated";
                        }else{
                            echo "No data to show";
                        }
                        echo '</td>';
                        echo '<td>'?><a href="edit-accounts-info?staff_username=<?php echo $staff_output['username'];?>&account=staff"><button type="submit" name="action_admin">Edit</button></a><?php '</td>';
                        echo '</tr>';
                        echo '</table>';
                    }
    ?>
    <?php
                }
    ?>
                    

            </div>







    </div>




<!--THIS IS BOOTSTRAP JAVASRIPT PART START-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<!--THIS IS BOOTSTRAP JAVASCRIPT PART END-->

</body>
</html>