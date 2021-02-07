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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<!--FONTS.CSS-->
<link rel="stylesheet" href="css/fonts.css">

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

<style>
    *{
        font-size: 16px;
    }
</style>


</head>
<body>

<?php
    
    //include "navbar.html";

            $query = "SELECT * FROM transaction ORDER BY receipt_id DESC";  
            $result = mysqli_query($connect, $query);
?>
        
        <br /><br /><br><br>
    <div class="container" style="width:700px;">
    <input id="myInput" type="text" placeholder="Search..">
        <br />
        <div class="table-responsive">
            <br />
            <div id="employee_table">
                <table class="table table-bordered">
                    <tr>
                        <th width="70%">Employee Name</th>
                        <th width="15%">Receipt ID</th>
                        <th width="15%">View</th>
                    </tr>
                    <?php  
                               while($row = mysqli_fetch_array($result))  
                               {  
                               ?>
                    <tbody id="myTable">
                    <tr>
                        <td><?php echo $row["email"]; ?></td>
                        <td><?php echo $row["receipt_id"]; ?></td>
                        <td><input type="button" name="view" value="view" id="<?php echo $row["receipt_id"]; ?>"
                                class="btn btn-info btn-xs view_data" /></td>
                    </tr>
                    <?php  
                               }  
                               ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
<div id="dataModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Employee Details</h4>
            </div>
            <div class="modal-body" id="receipt_id">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $(document).on('click', '.view_data', function () {
            var receipt_id = $(this).attr("id");
            if (receipt_id != '') {
                $.ajax({
                    url: "fetch-transactions.php",
                    method: "POST",
                    data: {
                        receipt_id: receipt_id
                    },
                    success: function (data) {
                        $('#receipt_id').html(data);
                        $('#dataModal').modal('show');
                    }
                });
            }
        });
    });
</script>
