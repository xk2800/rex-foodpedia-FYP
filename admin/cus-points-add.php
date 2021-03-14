<!DOCTYPE html>
<?php 
    
    include("../db-connect.php");        
    ob_start();

    if(!isset($_REQUEST["access"])){
        header("Location:index");
    }

    $email = $_GET['email'];
?>
<html>
    <head>
        <title>Loyalty Point - Add | REX Foodipedia</title>
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
            
            #title-cus-add {
                font-size: 1.5em;
                font-weight: 300;
            }

            ::placeholder {
                font-style: italic;
                font-size: 0.9em;
            }
            
            #small-cus-add  {
                /*margin-left: 2px;*/
                font-weight: lighter;
                font-size: 0.7em;
                font-style: italic;
                color: #9c9c9c;   
            }

            #point-cus-add {
                margin-top: 13px;
            }

        </style>
    </head>
    
    <body>     
        
        <?php
            include("navbar.php");

            if(isset($_REQUEST["access"])){
                $name = $_REQUEST["access"];
        
                $result = mysqli_query($connect, "SELECT username from admin_acc WHERE hashed = '$name'");
                $admin_username1 = mysqli_fetch_assoc($result);
                
            }
        
            $admin_username = $admin_username1["username"];
        
        
        ?>
        
        <?php  
            $query_cus_point_edit = mysqli_query($connect, "SELECT * FROM user_acc WHERE email = '$email' ");
            $row = mysqli_fetch_assoc($query_cus_point_edit);
        ?>

        <div class="container">
                <div class="card" style="margin-top: 6.3em;">
                    <div class="card-header">
                        <h5 id="title-cus-add">Edit Points</h5>
                    </div>
                    
                    <div class="card-body">
                        <form name="cus_point_add_form" method="POST">
                            <div class="form-group row">
                                <label for="point-cus-add" class="col-sm-2 col-form-label">Email<br/>
                                    <span id="small-cus-add">User email</span>
                                </label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="point-cus-add" readonly value="<?php echo $row['email']; ?>">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="point-cus-add" class="col-sm-2 col-form-label">Points<br/>
                                    <span id="small-cus-add">Set the number of points</span>
                                </label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="point-cus-add" name="cus_points_add_points" value="<?php echo $row['lpoints']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="point-cus-add" class="col-sm-2 col-form-label">Validity<br/>
                                    <span id="small-cus-add">Set the validity of points (days)</span>
                                </label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="point-cus-add" name="cus_points_add_validity" value="<?php echo $row['lpoints_valid']; ?>">
                                </div>
                            </div>
                            <div class="form-group row" style="margin-top:1.85em;">
                                <label for="point-cus-add" class="col-sm-2 col-form-label">Status<br/>
                                    <span id="small-cus-add">Choose status for points</span>
                                </label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="exampleFormControlSelect1" name="cus_points_add_status">
                                        <option value="1" >Available</option>
                                        <option value="0">Unavailable</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" style="margin: 0.5em 0em 2em 11.5em;" name="btn_add_points">Save</button> 
                            <a href="cus-points-landing?access=<?php echo $name ?>" class="btn btn-secondary" style="float: right; margin-top: 0.5em;">Back</a>
                        </form>   
                    </div>    
                </div>

                <?php 
                    if(isset($_POST['btn_add_points'])) {

                        $var_cus_points_add_points = $_POST['cus_points_add_points'];
                        $var_cus_points_add_validity = $_POST['cus_points_add_validity'];
                        $var_cus_points_add_status = $_POST['cus_points_add_status'];

                        $query_update_cus_points_add = mysqli_query($connect, "UPDATE user_acc SET lpoints = '$var_cus_points_add_points', lpoints_valid = '$var_cus_points_add_validity', lpoints_status = '$var_cus_points_add_status' WHERE email = '$email' ");

                        if($query_update_cus_points_add) {
                                header("location: cus-points-landing?access=".$name);
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