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
    ob_start();

?>
<html>
    <head><title>View Transactions | REX Foodipedia</title>

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

</head>
<body>

<?php
    include "navbar.html";
?>

    <div class="container">

    <?php
            $info_call      = mysqli_query($connect, "SELECT * FROM transaction");

        if(mysqli_num_rows($info_call)==0){
            echo "No Data Available";
        }else{
    ?>
            <table>
                <th>Customers Email</th>
                <th>(Non-)Contactless</th>
                <th>Send Type</th>
                <th>Receipt ID</th>
                <th>Date of Order</th>
                <th>Address(If Applicable)</th>
                <th>Order Subtotal</th>
                <th>Order Discount</th>
                <th>Order Total</th>
                <th>Payment Method</th>
                <th>Payment Date</th>
                <th>Delivery/Pickup Time</th>
            </table>
    <?php
            while($output_check = mysqli_fetch_assoc($check_transaction)){
    ?>
            <table>
                <tr>
                    <td></td>
                </tr>
            </table>
    ?>
    <?php
            }
        }
    ?>



    </div>


<!--THIS IS BOOTSTRAP JAVASRIPT PART START-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<!--THIS IS BOOTSTRAP JAVASCRIPT PART END-->

</body>
</html>