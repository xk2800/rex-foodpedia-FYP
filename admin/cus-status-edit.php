<!DOCTYPE html>
    <html>
        <head><title>Edit Account Status | REX Foodipedia</title>

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
                     
                     #button-status-edit {
                        margin-top: 65px; 
                     }
                     
                     #button-status-edit-2, #form-status-edit{
                        margin-top: 25px;
                     }

                     #title-status-edit {
                         font-size: 1.5em;
                         font-weight: 300;
                     }
                    
                </style>
        
        </head>
        
        <body style="background-color: #4C5C68;">
            
            <!-- credit : https://www.11zon.com/zon/php/how-to-edit-data-in-php-using-form.php -->

            <?php
                include("navbar.html");
            ?>

            <?php 
                
                include("../db-connect.php");
                
                $email = $_GET['email'];

                $query_cus_status_edit = mysqli_query($connect, "SELECT * FROM user_acc WHERE email = '$email' ");
                $row = mysqli_fetch_assoc($query_cus_status_edit);
            ?>

            <div class="container">
                <div class="card mx-auto" style="width: 22rem; margin-top: 7.5em;">
                    <div class="card-header" id="title-status-edit">
                        Account Status
                    </div>
                    <div class="card-body">
                        <form name="form_cus_edit" method="POST" onsubmit="return alert('Your changes has been made');">
                            <div class="form-group" id="form-status-edit">
                                <div class="row">
                                    <div class="col-sm">
                                        <label for="exampleFormControlSelect1">User Email</label>
                                    </div>
                                    <div class="col-sm">
                                        <div class="form-group">
                                            <input type="text" class="form-control" aria-describedby="emailHelp" readonly name="email_cus_edit" value="<?php echo $row['email']; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" >
                                <div class="row">
                                   <div class="col-sm">
                                        <label for="exampleFormControlSelect1">Account Status<span style="color: red;">&nbsp;*</span></label>
                                   </div> 
                                   <div class="col-sm">
                                        <select class="form-control" id="exampleFormControlSelect1" name="acc_cus_edit">
                                            <option value="1">ACTIVE</option>
                                            <option value="0">INACTIVE</option>
                                        </select>
                                   </div>
                                </div>
                                
                            </div>
                            <div class="form-group">
                                <div class="row">
                                   <div class="col-sm">
                                        <label for="exampleFormControlSelect1">Account Category<span style="color: red;">&nbsp;*</span></label>
                                   </div> 
                                   <div class="col-sm">
                                        <select class="form-control" id="exampleFormControlSelect1" name="category_cus_edit">
                                            <option value="3">Gold</option>
                                            <option value="2">Silver</option>
                                            <option value="1">Bronze</option>
                                            <option value="0">None</option>
                                        </select>
                                   </div>
                                </div>
                            </div>

                            <center><button type="submit" class="btn btn-primary btn-block w-75 " id="button-status-edit" name="btn_cus_edit">Save Account Status</button>
                            <a href="cus-status.php" class="btn btn-secondary btn-block w-75 " id="button-status-edit-2">Cancel</a></center>

                        </form>  
                    </div>`
                </div>

                <?php 
                    if(isset($_POST['btn_cus_edit'])) {

                        $var_acc_cus_edit = $_POST['acc_cus_edit'];
                        $var_category_cus_edit = $_POST['category_cus_edit'];

                        $query_update_cus_status_edit = mysqli_query($connect, "UPDATE user_acc SET status = '$var_acc_cus_edit', category = '$var_category_cus_edit' WHERE email = '$email' ");

                        if($query_update_cus_status_edit) {
                            echo "<script>
                                    location.href = 'cus-status.php';
                                  </script>";
                        }
                    }
                ?>
            </div>    
            
            <!--THIS IS BOOTSTRAP JAVASRIPT PART START-->
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

        </body>
</html>