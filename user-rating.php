<!DOCTYPE html>

<?php
    include("db-connect.php");
    //include("db_connection.php");
?>
    <html lang="en">
        <head>
            <title>Feedback | REX Foodipedia</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
    
            <!--INCLUDE START HERE-->
            <link rel="icon" type="image/png" href= "img/logo/logo.png">

            <!--THIS IS FONT AWESOME JAVASCRIPT START-->
            <script src="https://kit.fontawesome.com/daa253e478.js" crossorigin="anonymous"></script>

            <!--THIS IS BOOTSTRAP CSS PART START-->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

            <!-- Material Design Bootstrap *ref : https://mdbootstrap.com/md-bootstrap-cdn/ -->
            <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

            <!--FONTS.CSS-->
            <link rel="stylesheet" href="css/fonts.css">

            <style>
               
                #card-title-rating, #card-desc-rating {
                    color: #6d6e6e;
                    font-weight: 600;
                    margin: 20px 0px 15px 20px;
                }
                
                #card-desc-rating {
                    color: #bfbdbd !important;
                }

                #card-textarea-rating {
                    height:20em; 
                    width:33em; 
                    margin:0px 20px 0px 20px;
                }

                #card-radio-rating {
                    margin-right: 3px;
                }

                #card-radio-desc-rating {
                    margin-right: 20px;
                }

            </style>    

        </head>
        
        <body style="background-color: #e8ded2;">
            
            <?php
                include("nav.php"); 
            ?>

            <?php 
                $email = $_SESSION["email"];

                $rating_check_query = mysqli_query($connect, "SELECT * FROM user_rating WHERE email = '$email' ");
                $row = mysqli_fetch_assoc($rating_check_query);
            ?>

            <div class="container">
                <div class="card mx-auto" style="width:55%; margin-top:1em;">
                    <div class="card-header">
                        <h4 class="card-title" id="card-title-rating">Send us some feedback!</h4>
                        <p class="card-text" id="card-desc-rating">Found a bug? Have a suggestion? Fill out the form below and<br/>we will take a look!</p>
                    </div>
                    
                    
                    <div class="card-body" id="card-whole-rating">    
                        <form name="user_rating_form" method="POST" onsubmit="return alert('Your feedback had been sent to us, thank you!');">
                            <div class="md-form">
                                <textarea id="card-textarea-rating" class="md-textarea form-control" rows="3" placeholder="Enter your feedback here!" name="text_rating" value="<?php echo $row["comment"];?>"></textarea>
                            </div>
                            
                            <div class="form-check">
                                <label class="radio-inline" id="card-radio-desc-rating"><input id="card-radio-rating" type="radio" name="rating_radio" value=1 >Bug</label>
                                <label class="radio-inline" id="card-radio-desc-rating"><input id="card-radio-rating" type="radio" name="rating_radio" value=2>Comment</label>
                                <label class="radio-inline" id="card-radio-desc-rating"><input id="card-radio-rating" type="radio" name="rating_radio" value=3>Others</label>
                            </div>

                            <button type="submit" class="btn btn-primary" style="margin:10px 20px 0px 20px; float:right;" name="feedback_button">Send Feedback</a>
                        </form>
                    </div>
                </div>
                
                <?php 
                //to verify if the session is passed
                    //if($email) {
                        //echo 'passed';
                    //} else {
                        //echo 'failed';
                    //}
                ?>

                <?php 
                   if(isset($_POST['feedback_button'])) {
                       $var_text_rating = $_POST['text_rating'];
                       $var_rating_radio = $_POST['rating_radio'];

                       if(isset($_POST['rating_radio'])) {
                            
                            if($var_rating_radio == 1) {
                                $value_rating_button = "Bug";
                            } else if($var_rating_radio == 2) {
                                $value_rating_button = "Comment";
                            } else if($var_rating_radio == 3) {
                                $value_rating_button = "Others";
                            }
                       }

                        $rating_query = mysqli_query($connect, "INSERT INTO user_rating (email, comment, radio_button) VALUES ('$email', '$var_text_rating', '$value_rating_button')");

                        echo " <script> 
                                location.href = 'index.php';
                               </script> ";
                   }  
                ?>
                
            </div>
        
            <!--THIS IS BOOTSTRAP JAVASRIPT PART START-->
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            
            
            <!-- JavaScript CDN for Material Bootstrap *ref : https://mdbootstrap.com/md-bootstrap-cdn/ -->
                
                <!-- JQuery -->
                <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <!-- Bootstrap tooltips -->
                <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
                <!-- Bootstrap core JavaScript -->
                <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
                <!-- MDB core JavaScript -->
                <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
<?php
    include ("foot.php")
?>
            </body>
</html>