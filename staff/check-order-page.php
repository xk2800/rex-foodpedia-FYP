<!DOCTYPE html>

<?php
    include "../db-connect.php"; 
    //session_start();
    /*if(!isset($_REQUEST["access"])){
        header("Location:../admin/index");
    }*/
?>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Check Order | REX Foodipedia</title>

        <!--FONTS.CSS STARTS-->
            <link rel="preload" href="css/fonts.css" as="style">
        <!--FONTS.CSS END-->

        <!--THIS IS FONT AWESOME JAVASCRIPT START-->
            <script src="https://kit.fontawesome.com/daa253e478.js" crossorigin="anonymous"></script>
        <!--THIS IS FONT AWESOME JAVASCRIPT END-->

        <!--THIS IS BOOTSTRAP CSS PART START-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <!--THIS IS BOOTSTRAP CSS PART END-->


<script>
    $(document).ready(function(){
    $("#searchinput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
    });
</script>

    <style>
        body{
            margin-top: 10rem;
            }

        .media-body{
            margin-left:20px;
        }
        
        .lower-button button{
            width: 100%;
        }

        #continue-shopping{
            width:auto;
        }

    </style>

</head>

<body style="background-color: #e7ded2;">

    <!-- PHP-->
    <?php
        //include("navbar.php");
        $query = "SELECT * FROM transaction ORDER BY receipt_id DESC";  
        $result = mysqli_query($connect, $query);

        /*if(isset($_REQUEST["access"])){
            $name = $_REQUEST["access"];
    
            $result = mysqli_query($connect, "SELECT username from staff_acc WHERE hashed = '$name'");
            $staff_username1 = mysqli_fetch_assoc($result);
            
        }*/
    ?>
   
    <div class="container">


        <div class="row">

        <!-- TESTINGGGGGGGGGGGGGGGGGGGGGG -->
                <?php 

            // Get the Current Page Number
            if (isset($_GET['page_no']) && $_GET['page_no'] != "") {
                $page_no = $_GET['page_no'];

            } else {
                $page_no = 1;
            }

            // SET Total Records Per Page Value
            $total_records_per_page = 8;

            // Calculate OFFSET Value and SET other Variables
            $offset = ($page_no-1) * $total_records_per_page;
            $previous_page = $page_no - 1;
            $next_page = $page_no + 1;
            $adjacents = "2";

            // Get the Total Number of Pages for Pagination
            $result_count = mysqli_query($connect,"SELECT COUNT(*) As total_records FROM order_rec");
            $total_records = mysqli_fetch_array($result_count);

            $total_records = $total_records['total_records'];
            $total_no_of_pages = ceil($total_records / $total_records_per_page);
            $second_last = $total_no_of_pages - 1; // total pages minus 1

            ?>

            <?php 
            // SQL Query for Fetching Limited Records using LIMIT Clause and OFFSET
            $query_cus_status = mysqli_query($connect, "SELECT * FROM order_rec LIMIT $offset, $total_records_per_page");
            $numrow = mysqli_num_rows($query_cus_status);
            ?>

            

<!--  TESTINGGGGGGGGGGGGGG  -->
            <div class="col-sm-12 col-md-10 col-md-offset-1">
                <span class="search">You can search for by Receipt ID, Product, Order By, Time, Quantity, Price, Total or Status.</span><br>
                <input id="searchinput" type="text" placeholder="Search..">
                <table class="table table-hover" style="margin-top: 5rem;">
                    <thead>
                        <tr>
                            <th width="15%">Receipt ID</th>
                            <th>Product</th>
                            <th class="text-center">Order by</th>
                            <th class="text-center">Time</th>
                            <th class="text-center">Quantity</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Total</th>
                            <th class="text-center">Status</th>
                            <th width="15%">View</th>
                        </tr>
                    </thead>
                            <?php
                                //$staff_username = $_SESSION['staffuname'];

                                $check_order_query = mysqli_query($connect, "SELECT * FROM order_rec");
                                $numrow = mysqli_num_rows($check_order_query);
                            ?>  
                    <!-- <tbody>   -->
                            <?php
                                if($numrow != 0)
                                {
                                    while($row = mysqli_fetch_assoc($query_cus_status))
                                    {
                                        $db_id = $row['id'];
                                        $db_email = $row['email'];
                                        $db_date = $row['date'];
                                        $db_dish_name = $row['dish_name'];
                                        $db_dish_price = $row['dish_price'];
                                        $db_dish_id = $row['dish_id'];
                                        $db_order_status = $row['order_status'];
                                        $db_delivery_status = $row['delivery_status'];
                                        $db_qty = $row['dish_qty'];
                            ?>

                        <tbody id="myTable">
                        <tr>
                            <td><?php echo $row["receipt_id"]; ?></td>
                        <?php
                        //}
                        ?>
                            <td class="col-sm-8 col-md-6">
                            <div class="media">
                                <!-- <a class="thumbnail pull-left" href="#"> 
                                    <img src="../img/food1.jpg" style="width: 72px; height: 72px;">
                                </a> -->
                                <div class="media-body">
                                    <h5>#<?php echo $db_id;?></h5>
                                    <h6>Description: <br> <?php echo $db_dish_name;?></h6>
                                </div>
                            </div>
                            </td>

                            <td>
                            <strong><?php echo $db_email;?></strong>
                            </td>

                            <td>
                                <strong><?php echo $db_date;?></strong>
                            </td>

                            <td>
                                <strong>
                                <?php echo $db_qty;?>
                                </strong>
                            </td>
                            
                            <td class="col-sm-1 col-md-1 text-center">
                                <strong><?php echo $db_dish_price;?></strong>
                            </td>
                            
                            <td class="col-sm-1 col-md-1 text-center">
                                <strong>
                                <?php 
                                    $total = $db_qty * $db_dish_price;
                                    echo number_format((float)$total,2,'.','');
                                ?>
                                </strong>
                            </td>

                            <td class="col-sm-1 col-md-1 text-center">
                            <?php echo $db_delivery_status == 0 ? '<span class="text-warning"> <strong>Delivery</strong> </span>' : '<span class="text-success"><strong> Delivered </strong></span>';?>
                            </td>
                            <!-- </tbody> -->
                            <td><input type="button" name="view" value="view" id="<?php echo $row["receipt_id"]; ?>"
                                class="btn btn-info btn-xs view_data" /></td>
                            
                            <!-- <td class="col-md-1">
                            <button type="button" class="btn">
                                <span class="glyphicon glyphicon-edit"><i class="fas fa-edit"></i></span> 
                            </button>
                            </td> -->
                        </tr>
                        </tbody>
                        <?php 
                            }
                        }
                        ?>

                    
                </table>
                <!-- pagination + font awesome icon -->
            <ul class="pagination" style="margin: 40px 0px 40px 0px;">
            <?php 
                if($page_no > 1) {
                    echo "<li style='padding-right: 30px;'><a style='margin-right: 30px;' class='btn btn-secondary btn-block' href='?page_no=1'>
                                                            First Page
                                                            <!--<i class='fa fa-fast-backward' aria-hidden='true'></i>-->
                                                        </a> &emsp; 
                        </li>";
                } 
            ?>
            <li style="padding-right: 30px;" <?php if($page_no <= 1) { echo "class='disabled'";}?>>
                <a style="margin-right: 30px;" class="btn btn-secondary btn-block " 
                <?php if($page_no > 1) {
                            echo "href='?page_no=$previous_page'";
                        } ?>>
                        Previous
                        <!-- <i class="fa fa-backward" aria-hidden="true"></i> -->
                </a>
            </li>
            <li style="padding-right: 30px;" <?php if($page_no >= $total_no_of_pages) { echo "class='disabled'"; } ?> >
                <a style="margin-right: 30px;" class="btn btn-secondary btn-block " <?php if($page_no < $total_no_of_pages) {
                            echo "href='?page_no=$next_page'";
                        } ?>>Next
                        <!-- <i class="fa fa-forward" aria-hidden="true"></i> -->
                </a>
            </li>
            <?php if($page_no < $total_no_of_pages) { 
                        echo "<li><a style='margin-right: 30px;' class='btn btn-secondary btn-block' href='?page_no=$total_no_of_pages'>
                                    Last Page
                                    <!--<i class='fa fa-step-forward' aria-hidden='true'></i>-->
                                </a> 
                            </li>"; 
                } 
            ?>
            </ul>
            <p style='float: right; margin-top: 8px; font-style: italic; border-top: 1px #CCC;'>Page <?php echo $page_no." of ".$total_no_of_pages; ?></p>
            </div>
        </div>
    </div>

    <br><br>
</body>
</html>
<div id="dataModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Transaction Details</h4>
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