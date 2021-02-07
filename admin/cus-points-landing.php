<!DOCTYPE html>
<?php 
    include("../db-connect.php");
?>
    <html>
        <head>
            <title>Loyalty Point - Landing | REX Foodipedia</title>

            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
    
            <!--INCLUDE START HERE-->
            <link rel="icon" type="image/png" href= "img/logo/logo.png">

            <!--THIS IS FONT AWESOME JAVASCRIPT START-->
            <script src="https://kit.fontawesome.com/daa253e478.js" crossorigin="anonymous"></script>

            <!--THIS IS BOOTSTRAP CSS PART START-->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

            <!--FONTS.CSS-->
            <link rel="stylesheet" href="css/fonts.css">

            <style>
                
                #p-status {
                    font-size: 2.5em;
                    padding: 30px 0px 15px 0px;
                    font-weight: 300;
                }

                #button-status {
                   float: right;
                   margin-top: 13px;
                }

            </style>

        </head>
        
        <body style="background-color: #4C5C68;">

            <?php
                include("navbar.html");
            ?>

            <div class="container">
                
                <p id="p-status">Loyalty Points Balance
                </p>
                
                <hr style="background-color:#898f8b"/>

                 <!--ref : https://getbootstrap.com/docs/4.0/components/pagination/ , https://www.allphptricks.com/create-simple-pagination-using-php-and-mysqli/ -->

                 <?php 

                    // Get the Current Page Number
                    if (isset($_GET['page_no']) && $_GET['page_no'] != "") {
                        $page_no = $_GET['page_no'];

                    } else {
                        $page_no = 1;
                    }

                    // SET Total Records Per Page Value
                    $total_records_per_page = 5;

                    // Calculate OFFSET Value and SET other Variables
                    $offset = ($page_no-1) * $total_records_per_page;
                    $previous_page = $page_no - 1;
                    $next_page = $page_no + 1;
                    $adjacents = "2";

                    // Get the Total Number of Pages for Pagination
                    $result_count = mysqli_query($connect,"SELECT COUNT(*) As total_records FROM user_acc");
                    $total_records = mysqli_fetch_array($result_count);

                    $total_records = $total_records['total_records'];
                    $total_no_of_pages = ceil($total_records / $total_records_per_page);
                    $second_last = $total_no_of_pages - 1; // total pages minus 1

                ?>

                <?php 
                    // SQL Query for Fetching Limited Records using LIMIT Clause and OFFSET
                    $query_cus_status = mysqli_query($connect, "SELECT email, status, category FROM user_acc LIMIT $offset, $total_records_per_page");
                    $numrow = mysqli_num_rows($query_cus_status);
                ?>
                
                <!-- pagination + font awesome icon -->
                <ul class="pagination" style="margin: 40px 0px 40px 0px;">
                    <?php 
                        if($page_no > 1) {
                            echo "<li style='padding-right: 30px;'><a style='margin-right: 30px;' class='btn btn-secondary btn-block' href='?page_no=1'>
                                                                    <i class='fa fa-fast-backward' aria-hidden='true'></i>
                                                                   </a> &emsp; 
                                  </li>";
                        } 
                    ?>
                    <li style="padding-right: 30px;" <?php if($page_no <= 1) { echo "class='disabled'"; } ?> >
                        <a style="margin-right: 30px;" class="btn btn-secondary btn-block " <?php if($page_no > 1) {
                                    echo "href='?page_no=$previous_page'";
                                } ?>><i class="fa fa-backward" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li style="padding-right: 30px;" <?php if($page_no >= $total_no_of_pages) { echo "class='disabled'"; } ?> >
                        <a style="margin-right: 30px;" class="btn btn-secondary btn-block " <?php if($page_no < $total_no_of_pages) {
                                    echo "href='?page_no=$next_page'";
                                } ?>><i class="fa fa-forward" aria-hidden="true"></i>
                        </a>
                    </li>
                    <?php if($page_no < $total_no_of_pages) { 
                                echo "<li><a style='margin-right: 30px;' class='btn btn-secondary btn-block' href='?page_no=$total_no_of_pages'>
                                            <i class='fa fa-step-forward' aria-hidden='true'></i>
                                          </a> 
                                      </li>"; 
                          } 
                    ?>
                </ul>
                
               
                <table class="table table-bordered table-hover table-dark" >
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Customer Email</th>
                            <th scope="col">Available Point</th>
                            <th scope="col">Point Validity</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>test</td>
                            <td>test_test</td>
                            <td>test_test_test</td>
                            <td>test_test_test_test</td>
                            <td ><a href="#">Edit</a>&emsp;<a href="#">Delete</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!--THIS IS BOOTSTRAP JAVASRIPT PART START-->
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        </body>
</html>