<?php 
     include("db-connect.php");

     //session_start();
        
     $id = $_GET['id'];
?>

<?php 
    if(isset($id)) { 
        
        if(!$connects) {
            die('Couldnt connect to database'.mysql_error());
    
        } else {
         
            $shopping_cart_delete = mysqli_query($connects, "DELETE FROM cart WHERE id = '$id' ") or die("Error, Item can't be delete");
            
            echo " <script>
                    alert('Product Deleted');
                     location.href = 'shopping-cart.php';
                   </script> ";
        } 
    } 
?>
