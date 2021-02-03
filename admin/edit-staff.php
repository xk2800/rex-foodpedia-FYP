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

    include "../db-connect.php";
    session_start();
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

    
?>

    <div class="container">

        <form method="POST" name="editadmin">


            <div class="option">
            <select name="staff-admin" id="uni-name" onchange='option_drop(this.value);' required></p>
                                                                    <option style='display:none;'>Select Staff/Admin</option>
                                                                    <option value="staff">Staff</option>
                                                                    <option value="admin">Admin</option>
                                                                    </select>
                                                                    <br><br>
            </div>

            <div class="edit_admin" id="editadmin" style="display: none;">

                    <p>edit admin</p>

                </form>
            </div>


            <div class="edit_staff" id="editstaff" style="display: none;">
    <?php
    
    ?>


                    <p>Edit Staff Name<br><input type="text" name="staffname" id="name"></p>
                    <p><br></p>
                    

            </div>


        </form>






    </div>




<!--THIS IS BOOTSTRAP JAVASRIPT PART START-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<!--THIS IS BOOTSTRAP JAVASCRIPT PART END-->

</body>
</html>