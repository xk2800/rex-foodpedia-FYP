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

            <div class="container text-center">  
                <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-top: 50px;">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-whole-sales-report" aria-controls="navbar-whole-sales-report" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item ">
                            <a class="nav-link" id="pills-daily-tab" data-toggle="pill" href="#pills-daily" role="tab" aria-controls="pills-daily" aria-selected="true" onclick="daily()">Daily</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-weekly-tab" data-toggle="pill" href="#pills-weekly" role="tab" aria-controls="pills-weekly" aria-selected="false" onclick="weekly()">Weekly</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-monthly-tab" data-toggle="pill" href="#pills-monthly" role="tab" aria-controls="pills-monthly" aria-selected="false" onclick="monthly()">Monthly</a>
                        </li>
                    </ul>
                </nav>

                <div class="card rounded mt-5" style="width: 69.5rem;">
                    <div class="card-body">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-daily" role="tabpanel" aria-labelledby="pills-daily-tab">
                                <h3 class="card-title" id="money-sales-report">RM0.00</h3>
                                <h5 class="card-subtitle mb-2 text-muted" id="daily-rev" style="padding-bottom:10px;"></h5>
                                <h6 class="card-subtitle mb-2 text-muted" id="date-sales-daily-report" ></h6>
                                <br/>
                                <hr/>
                                <br/>
                            </div>

                            <div class="tab-pane fade" id="pills-weekly" role="tabpanel" aria-labelledby="pills-weekly-tab">
                                <h3 class="card-title" id="money-sales-report">RM0.00</h3>
                                <h5 class="card-subtitle mb-2 text-muted" id="weekly-rev" style="padding-bottom:10px;"></h5>
                                <h6 class="card-subtitle mb-2 text-muted" id="date-sales-week-report" ></h6>
                                <br/>
                                <hr/>
                                <br/>
                            </div>

                            <div class="tab-pane fade" id="pills-monthly" role="tabpanel" aria-labelledby="pills-monthly-tab">
                                <h3 class="card-title" id="money-sales-report">RM0.00</h3>
                                <h5 class="card-subtitle mb-2 text-muted" id="monthly-rev" style="padding-bottom:10px;"></h5>
                                <h6 class="card-subtitle mb-2 text-muted" id="date-sales-month-report" ></h6>
                                <br/>
                                <hr/>
                                <br/>
                            </div>

                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="row" style="float: left;">Unit Sold</th>
                                        <td scope="row" id="unit-sold" style="float: right; font-weight: bold;"></td>
                                    </tr>
                                    <tr> 
                                        <th scope="row" style="float: left;">
                                            <i class="fa fa-money" aria-hidden="true"></i> &ensp;
                                            Unit Price
                                        </th>    
                                        <td scope="row" id="unit-price" style="float: right;"></td>
                                        
                                    </tr>
                                    <tr>
                                        <th scope="row" style="float: left;">
                                            <i class="fa fa-money" aria-hidden="true"></i> &ensp;
                                            Total Income
                                        </th>    
                                        <td scope="row" style="float: right;" id="total-income"></td>
                                    </tr>

                                    <script>
                                            // php will then later insert into this script
                                            
                                            function daily() {
                                                
                                                document.getElementById("daily-rev").innerHTML = "Total Revenue - Daily";

                                                var date_a = new Date();
                                                var months = ["January","February","March","April","May","June","July","August","September","October","November","December"];
                                                document.getElementById("date-sales-daily-report").innerHTML = months[date_a.getMonth()] + " " + date_a.getDate();

                                                document.getElementById("unit-sold").innerHTML = "sold_test1";
                                                document.getElementById("unit-price").innerHTML = "price_test1";
                                                document.getElementById("total-income").innerHTML = "income_test1";
                                            }

                                            function weekly() {
                                                
                                                document.getElementById("weekly-rev").innerHTML = "Total Revenue - Weekly";
                                                
                                                var date_b = new Date();
                                                var months = ["January","February","March","April","May","June","July","August","September","October","November","December"];
                                                document.getElementById("date-sales-week-report").innerHTML = months[date_b.getMonth()] + " " + date_b.getDate() + " - " + months[date_b.getMonth()] + " " + parseInt(date_b.getDate() + 7) ;
                                                
                                                document.getElementById("unit-sold").innerHTML = "sold_test2";
                                                document.getElementById("unit-price").innerHTML = "price_test2";
                                                document.getElementById("total-income").innerHTML = "income_test2";
                                            }

                                            function monthly() {

                                                document.getElementById("monthly-rev").innerHTML = "Total Revenue - Montly";
                                                
                                                var date_c = new Date();
                                                var months = ["January","February","March","April","May","June","July","August","September","October","November","December"];
                                                document.getElementById("date-sales-month-report").innerHTML = months[date_c.getMonth()] + " " 
                                                document.getElementById("unit-sold").innerHTML = "sold_test3";
                                                document.getElementById("unit-price").innerHTML = "price_test3";
                                                document.getElementById("total-income").innerHTML = "income_test3";
                                            }
                                    </script>
                                </thead>
                            </table>               
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