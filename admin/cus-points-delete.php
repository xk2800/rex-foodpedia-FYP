<?php 
     include("../db-connect.php");
     //session_start();
        
     $email = $_GET['email'];
?>

<?php 
    if(isset($email)) { 
        
        if(!$connects) {
            die('Couldnt connect to database'.mysql_error());
    
        } else {
         
            $query_cus_status_delete = mysqli_query($connects, "DELETE FROM user_acc WHERE email = '$email' ") or die("Query insertion failed");
            
            echo " <script>
                     location.href = 'cus-points-landing.php';
                   </script> ";
        } 
    } 
?>
