<!DOCTYPE html>

    <html>
        <head>
            <title>Sales Report | REX Foodipedia</title>

            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <!--INCLUDE START HERE-->
            <link rel="icon" type="image/png" href= "image/MYRUN 1.png">

            <!--THIS IS FONT AWESOME JAVASCRIPT START-->
            <script src="https://kit.fontawesome.com/daa253e478.js" crossorigin="anonymous"></script>

            <!--THIS IS BOOTSTRAP CSS PART START-->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

            <!--FONTS.CSS-->
            <link rel="stylesheet" href="css/fonts.css">
            
            <style>

              #pills-tab {
                  padding-top: 10px;
                  letter-spacing: 2px;
                  text-transform: uppercase;
                  /*padding-bottom:50px;*/
              }

              #navbar-view-by-report {
                  font-style: italic;
                  font-weight: bold;
                  text-transform: uppercase;
                  padding-top: 50px;
                  letter-spacing: 1px;
              }

              #money-sales-report {
                margin-bottom:20px; 
                font-style:italic; 
              }

            </style>    

        </head>

        <body style="background-color: #E4F6E6">

            <?php
                include("navbar.html");
            ?>

            <div class="container">
                <p id="navbar-view-by-report"><span style="color:red;">* </span>Please select a mode : </p>
            </div>

            <?php 
                include("../db-connect.php");

                //$staff_username = $_SESSION['staffuname'];
            ?>    

            <!-- credit to : https://stackoverflow.com/questions/5293189/select-records-from-today-this-week-this-month-php-mysql
                           : https://www.w3schools.com/sql/func_mysql_date_add.asp -->

            <!-- analyze queries -->
            <?php 
                 $var_query_select_unit_sold_day = "SELECT SUM(dish_qty) AS total_dish FROM order_rec WHERE YEAR(date) = YEAR(NOW()) AND MONTH(date) = MONTH(NOW()) AND DAY(date) = DAY(NOW())";
                 $var_query_select_subtotal_day = "SELECT SUM(subtotal) AS total_sales FROM transaction WHERE YEAR(date) = YEAR(NOW()) AND MONTH(date) = MONTH(NOW()) AND DAY(date) = DAY(NOW())";
                 
                 $var_query_select_unit_sold_week = "SELECT SUM(dish_qty) AS total_dish FROM order_rec WHERE date BETWEEN DATE_ADD(now(), INTERVAL -1 DAY) AND DATE_ADD(now(), INTERVAL 6 DAY)";
                 $var_query_select_subtotal_week = "SELECT SUM(subtotal) AS total_sales FROM transaction WHERE date BETWEEN DATE_ADD(now(), INTERVAL -1 DAY) AND DATE_ADD(now(), INTERVAL 6 DAY)";
                 //$var_query_select_subtotal_week = //"SELECT SUM(subtotal) AS total_sales FROM transaction WHERE WEEKOFYEAR(date) = WEEKOFYEAR(NOW())";
                 
                 $var_query_select_unit_sold_month = "SELECT SUM(dish_qty) AS total_dish FROM order_rec WHERE YEAR(date) = YEAR(NOW()) AND MONTH(date)=MONTH(NOW())";
                 $var_query_select_subtotal_month = "SELECT SUM(subtotal) AS total_sales FROM transaction WHERE YEAR(date) = YEAR(NOW()) AND MONTH(date)=MONTH(NOW())";
            ?>
            
            <?php   
                // analyze by day
                $query_select_unit_sold_day = mysqli_query($connect, $var_query_select_unit_sold_day);
                
                while($row_unit_day = mysqli_fetch_assoc($query_select_unit_sold_day)) {
                    $db_dish_qty_day = $row_unit_day['total_dish'];
                }
                
                 $query_select_subtotal_day = mysqli_query($connect, $var_query_select_subtotal_day);
                
                 while($row_subtotal_day = mysqli_fetch_assoc($query_select_subtotal_day)) {
                    $db_subtotal_day = $row_subtotal_day['total_sales'];
                 }

                // analyze by week
                $query_select_unit_sold_week = mysqli_query($connect, $var_query_select_unit_sold_week);
               
                while($row_unit_week = mysqli_fetch_assoc($query_select_unit_sold_week)) {
                    $db_dish_qty_week = $row_unit_week['total_dish'];
                }   

                $query_select_subtotal_week = mysqli_query($connect, $var_query_select_subtotal_week);
                
                while($row_subtotal_week = mysqli_fetch_assoc($query_select_subtotal_week)) {
                    $db_subtotal_week = $row_subtotal_week['total_sales'];
                }

                // analyze by month
                $query_select_unit_sold_month = mysqli_query($connect, $var_query_select_unit_sold_month);
               
                while($row_unit_month = mysqli_fetch_assoc($query_select_unit_sold_month)) {
                    $db_dish_qty_month = $row_unit_month['total_dish'];
                }   

                $query_select_subtotal_month = mysqli_query($connect, $var_query_select_subtotal_month);
                
                while($row_subtotal_month = mysqli_fetch_assoc($query_select_subtotal_month)) {
                    $db_subtotal_month = $row_subtotal_month['total_sales'];
                }
            ?>

            <div class="container text-center">  
                <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-top: 50px;">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-whole-sales-report" aria-controls="navbar-whole-sales-report" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item ">
                            <a class="nav-link active" id="pills-daily-tab" data-toggle="pill" href="#pills-daily" role="tab" aria-controls="pills-daily" aria-selected="true" name="daily_tab">Daily</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-weekly-tab" data-toggle="pill" href="#pills-weekly" role="tab" aria-controls="pills-weekly" aria-selected="false" name="weekly_tab">Weekly</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-monthly-tab" data-toggle="pill" href="#pills-monthly" role="tab" aria-controls="pills-monthly" aria-selected="false" name="monthly_tab">Monthly</a>
                        </li>
                    </ul>
                </nav>

                <div class="card rounded mt-5" style="width: 69.5rem;">
                    <div class="card-body">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active " id="pills-daily" role="tabpanel" aria-labelledby="pills-daily-tab">
                                <h3 class="card-title" id="money-sales-report">RM<?php echo number_format((float)$db_subtotal_day, 2, '.', ''); ?></h3>
                                <h5 class="card-subtitle mb-2 text-muted" id="daily-rev" style="padding-bottom:10px;">Total Revenue - Daily</h5>
                                <h6 class="card-subtitle mb-2 text-muted" id="date-sales-daily-report" >
                                    <script>
                                         var date_a = new Date();
                                         var months = ["January","February","March","April","May","June","July","August","September","October","November","December"];
                                         document.getElementById("date-sales-daily-report").innerHTML = months[date_a.getMonth()] + " " + date_a.getDate();
                                    </script>  
                                </h6>
                                <br/>
                                <hr/>
                                <br/>

                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="row" style="float: left;">Unit Sold</th>
                                            <td scope="row" id="unit-sold-day" style="float: right; font-weight: bold;"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="float: left;">
                                                <i class="fa fa-money" aria-hidden="true"></i> &ensp;
                                                Total Income (RM)
                                            </th>    
                                            <td scope="row" style="float: right;" id="total-income-day"></td>
                                        </tr>
                                    </thead>
                                </table>

                                <script>
                                     document.getElementById("unit-sold-day").innerHTML = "<?php echo $db_dish_qty_day; ?>";
                                     document.getElementById("total-income-day").innerHTML = "<?php echo number_format((float)$db_subtotal_day, 2, '.', ''); ?>";
                                </script>
                            </div>


                            <div class="tab-pane fade" id="pills-weekly" role="tabpanel" aria-labelledby="pills-weekly-tab">
                                <h3 class="card-title" id="money-sales-report">RM<?php echo number_format((float)$db_subtotal_week, 2, '.', ''); ?></h3>
                                <h5 class="card-subtitle mb-2 text-muted" id="weekly-rev" style="padding-bottom:10px;">Total Revenue - Weekly </h5>
                                <h6 class="card-subtitle mb-2 text-muted" id="date-sales-week-report" >
                                    <script>
                                        var date_b = new Date();
                                        var months = ["January","February","March","April","May","June","July","August","September","October","November","December"];
                                        document.getElementById("date-sales-week-report").innerHTML = months[date_b.getMonth()] + " " + date_b.getDate() + " - " + months[date_b.getMonth()] + " " + parseInt(date_b.getDate() + 7) ;
                                    </script>
                                </h6>
                                <br/>
                                <hr/>
                                <br/>
                                
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="row" style="float: left;">Unit Sold</th>
                                            <td scope="row" id="unit-sold-week" style="float: right; font-weight: bold;"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="float: left;">
                                                <i class="fa fa-money" aria-hidden="true"></i> &ensp;
                                                Total Income (RM)
                                            </th>    
                                            <td scope="row" style="float: right;" id="total-income-week"></td>
                                        </tr>
                                    </thead>
                                </table>

                                <script>
                                     document.getElementById("unit-sold-week").innerHTML = "<?php echo $db_dish_qty_week; ?>";
                                     document.getElementById("total-income-week").innerHTML = "<?php echo number_format((float)$db_subtotal_week, 2, '.', ''); ?>";
                                </script>
                            </div>


                            <div class="tab-pane fade show" id="pills-monthly" role="tabpanel" aria-labelledby="pills-monthly-tab">
                                <h3 class="card-title" id="money-sales-report">RM<?php echo number_format((float)$db_subtotal_month, 2, '.', ''); ?></h3>
                                <h5 class="card-subtitle mb-2 text-muted" id="monthly-rev" style="padding-bottom:10px;">Total Revenue - Monthly</h5>
                                <h6 class="card-subtitle mb-2 text-muted" id="date-sales-monthly-report" >
                                    <script>
                                         var date_c = new Date();
                                         var months = ["January","February","March","April","May","June","July","August","September","October","November","December"];
                                         document.getElementById("date-sales-monthly-report").innerHTML = months[date_c.getMonth()] + " " 
                                    </script>  
                                </h6>
                                <br/>
                                <hr/>
                                <br/>

                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="row" style="float: left;">Unit Sold</th>
                                            <td scope="row" id="unit-sold-month" style="float: right; font-weight: bold;"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="float: left;">
                                                <i class="fa fa-money" aria-hidden="true"></i> &ensp;
                                                Total Income (RM)
                                            </th>    
                                            <td scope="row" style="float: right;" id="total-income-month"></td>
                                        </tr>
                                    </thead>
                                </table>

                                <script>
                                     document.getElementById("unit-sold-month").innerHTML = "<?php echo $db_dish_qty_month; ?>";
                                     document.getElementById("total-income-month").innerHTML = "<?php echo number_format((float)$db_subtotal_month, 2, '.', ''); ?>";
                                </script>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!--THIS IS BOOTSTRAP JAVASRIPT PART START-->
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
         </body>
</html>
