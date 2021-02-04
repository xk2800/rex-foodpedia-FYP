<!DOCTYPE html>
<?php 
     include("../db-connect.php");
?>
    <html>
        <head>
            <title>Account Statuses | REX Foodipedia</title>

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
                    padding: 80px 0px 15px 0px;
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
                
                <p id="p-status">Account Statuses
                    <a href="cus-status-edit.php" class="btn btn-primary" id="button-status">+ Account Statuses</a>
                </p>
                
                <hr style="background-color:#898f8b"/>
            
                <!--ref : https://getbootstrap.com/docs/4.0/components/pagination/-->
                <nav aria-label="Account Statuses Navigator" style="margin: 30px 0px 30px 0px;">
                    <ul class="pagination">
                        <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                        </li>
                    </ul>
                </nav>
                
                <?php 
                    
                    $query_cus_status = mysqli_query($connect, "SELECT email, status, category FROM user_acc");
                    $numrow = mysqli_num_rows($query_cus_status);
                ?>

                <table class="table table-bordered table-hover table-dark" >
                    <thead>
                        <tr>
                            <th scope="col">User Email</th>
                            <th scope="col">Account Status</th>
                            <th scope="col">Account Category</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            if($numrow > 0) {
                        
                                while($row = mysqli_fetch_assoc($query_cus_status)) {
                                    
                                    $db_email_cus_status = $row['email'];
                                    $db_status_cus_status = $row['status'];
                                    $db_category_cus_status = $row['category'];

                                   if($db_status_cus_status == 0) {
                                        $db_status_cus_status_string = "Inactive";

                                   } else if($db_status_cus_status == 1) {           
                                       $db_status_cus_status_string = "Active";
                                                
                                   } else {
                                       $db_status_cus_status_string = "NULL";
                                   }

                                    switch($db_category_cus_status) {
                                        case 1: $db_category_cus_status_string = "Bronze";
                                                break;
                                        case 2: $db_category_cus_status_string = "Silver";
                                                break;
                                        case 3: $db_category_cus_status_string = "Gold";
                                                break;
                                        default: $db_category_cus_status_string = "None";
                                                 break;                         
                                    }
                        ?>
                                    <tr>
                                        <th scope="row"><?php echo $db_email_cus_status; ?></th>
                                        <td><?php echo $db_status_cus_status_string; ?></td>
                                        <td><?php echo $db_category_cus_status_string; ?></td>
                                        <td>
                                            <a href="cus-status-edit.php?email=<?php echo $row['email']; ?>">Edit</a>
                                            &emsp;
                                            <a onclick="return confirm('Delete this record?')" href="cus-status-delete.php?email=<?php echo $row['email']; ?>">Delete</a>
                                        </td>
                                    </tr>
                        <?php
                                }
                            }    
                        ?>
                        
                    </tbody>
                </table>
            </div>

            <!--THIS IS BOOTSTRAP JAVASRIPT PART START-->
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        </body>
</html>