<!DOCTYPE html>
<?php
    include "db-connect.php";
    session_start();

?>
<html>
    <head><title>Your Receipt | REX Foodpedia</title>

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

    <div class="container">

    <div class="paper">
        <img src="img/logo/logo.png" alt="REX Foodipedia Logo" id="logo">
        <p id="receipt title">RECEIPT</p>
        <p id="send-type">....</p>
        <p id="receipt_id">Receipt Number: ...</p>
        <p id="date">Date: </p>
        <p id="hori-line"><hr></p>
        <p id="company-info">...</p>
        <p id="cust-address">Delivery Address: ...</p>

        <?php
        //$query = "SELECT * FROM order_rec WHERE trans_id";
        $result = mysqli_query($connect, $query);
        if(mysqli_num_rows($result3)>0){
        ?>
        <span id="label">
            <table>
                <th id="dish-label">Dish</th>
                <th id="quantity">Quantity</th>
                <th id="unit-price">Unit Price</th>
                <th id="price">Price</th>
            </table>
        </span>
        <?php
            while ($row3 = mysqli_fetch_assoc($result)) {
            ?>
                <span id="db-items">
        <?php
                echo '<table>';
                echo '<tr>';
                echo '<td>'.$row3['name'].'</td>';
                echo '<td>'.$row3['email'].'</td>';
                echo '<td style="width: 130px;">';
                if($row3['vetting'] == "0"){
                    echo "No submission";
                }
                else if($row3['vetting'] == "1")
                {
                    echo "Pending";
                }else if($row3['vetting'] == "2"){
                    echo "Reject";
                } else if($row3['vetting'] == "3"){
                    echo "Approved";
                }else if($row3['vetting'] == "20"){
                    echo "Reject Without Email Send";
                }
                '</td>';
                echo '<td style="width: 130px; text-align: center;">'?><a href="resume?email=<?php echo $row3["email"];?>"><button type="submit">Update Status</button></a></td><?php
                echo '</tr>';
                echo '</table>';
            }
        ?>
                </span>
        <?php
        }
        ?>
        <p id="hori-line"><hr></p>

        <span class="payment-breakdown">
            <table id="default-text">
                <tr>
                    <th id="subtotal">Subtotal</th>
                    <th id="db-subtotal">RM SUBTOTAL</th>
                </tr>
                <tr>
                    <td id="discount">- Discount</td>
                    <td id="db-discount">RM DISCOUNT</td>
                </tr>
                <tr>
                    <td id="voucher">- Voucher</td>
                    <td id="db-voucher">RM VOUCHER</td>
                </tr>
                <tr>
                    <p id="hori-line"><hr></p>
                </tr>
                <tr>
                    <td id="tax">+Service Tax(6%)</td>
                    <td id="db-tax">RM SERVICE TAX</td>
                </tr>
                <tr>
                    <th id="total">Total</th>
                    <th id="db-total">RM TOTAL</th>
                </tr>
                <tr>
                    <th id="payment-type">Payment method: PAYMENT METHOD</th>
                </tr>
            </table>

        </span>
    </div>


    </div>


<!--THIS IS BOOTSTRAP JAVASRIPT PART START-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<!--THIS IS BOOTSTRAP JAVASCRIPT PART END-->

</body>
</html>