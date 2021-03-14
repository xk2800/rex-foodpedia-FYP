<!DOCTYPE html>
<html lang="en">

<?php
//WORKING - Xavier
    include "../db-connect.php";
    ob_start();
    /*if(!isset($_REQUEST["access"])){
        header("Location:../admin/index");
    }*/
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://markcell.github.io/jquery-tabledit/assets/js/tabledit.min.js"></script>

<style>
    /* .tabledit-edit-button{
        display: none !important;
    } */
    body{
        background-color: ;
    }
</style>
</head>
<?php
    /*if(isset($_REQUEST["access"])){
        $name = $_REQUEST["access"];

        $result = mysqli_query($connect, "SELECT username from staff_acc WHERE hashed = '$name'");
        $staff_username1 = mysqli_fetch_assoc($result);
        
    }

    //echo $staff_username1["username"];

    $staff_username = $staff_username1["username"];*/


?>

<br><br><br>
    <div class="container">
    <br />
        <div class="panel panel-default">
            <div class="panel-heading">Sample Data</div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="menu_data" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Dish ID</th>
                                <th>Dish Name</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Stock Quantity</th>
                                <th>Unit Price</th>
                                <th>Menu Availability</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <br />
    <br />
</body>
</html>

<script>

    $(document).ready(function(){

    var dataTable = $('#menu_data').DataTable({
        "processing" : true,
        "serverSide" : true,
        "order" : [],
        "ajax" : {
        url:"fetch_del_prod.php",
        type:"POST"
        }
    });

    $('#menu_data').on('draw.dt', function(){
        $('#menu_data').Tabledit({
            url:'action_del_prod.php',
            dataType:'json',
            editButton: false,
            columns:{
                identifier : [0, 'dish_id'],
                editable:[]
            },
            restoreButton:false,
            onSuccess:function(data, textStatus, jqXHR)
            {
                if(data.action == 'delete')
                {
                    $('#' + data.id).remove();
                    $('#menu_data').DataTable().ajax.reload();
                }
            }
        });
    });

    });
</script>
