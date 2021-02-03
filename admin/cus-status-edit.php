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
                     
                     #button-status-edit, #button-status-edit-2, #form-status-edit{
                        margin-top: 25px;
                     }

                     #title-status-edit {
                         font-size: 1.5em;
                         font-weight: 300;
                     }
                    
                </style>
        
        </head>
        
        <body style="background-color: #4C5C68;">
            
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
                <div class="card mx-auto" style="width: 22rem; margin-top: 12em;">
                    <div class="card-header" id="title-status-edit">
                        Account Status
                    </div>
                    <div class="card-body">
                        <form>
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
                                            <option>ACTIVE</option>
                                            <option>INACTIVE</option>
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
                                            <option>Gold</option>
                                            <option>Silver</option>
                                            <option>Bronze</option>
                                            <option>None</option>
                                        </select>
                                   </div>
                                </div>
                            </div>
                        </form>
                    
                        <a href="#" class="btn btn-primary" id="button-status-edit">Save Account Status</a>&emsp;<a href="#" class="btn btn-secondary" id="button-status-edit-2">Cancel</a>
                    </div>`
                </div>
            </div>    
            
            <!--THIS IS BOOTSTRAP JAVASRIPT PART START-->
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

        </body>
</html>