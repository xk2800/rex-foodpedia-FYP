<!DOCTYPE html>
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
    </head>
    
    <body style="background-color: #4C5C68;">     
        
        <?php
            include("navbar.html");
        ?>

        <div class="container">
            <form>
                <div class="row mb-4 mt-5">
                    <div class="form-group col-md-9">
                        <input id="exampleFormControlInput5" type="email" placeholder="Insert the user email" class="form-control form-control-underlined">
                    </div>
                    <div class="form-group col-md-3">
                        <button type="submit" class="btn btn-primary rounded-pill btn-block shadow-sm">Search</button>
                    </div>
                </div> 
            </form>

            <!-- if-else statement will go here, state=true -> statement block will be executed || state=false -> alert box display the error -->
                <div class="card">
                    <h5 class="card-header">Add Points</h5>
                    <div class="card-body">
                        <a href="#" class="btn btn-primary btn-sm float-right">Save</a>
                    </div>    
                </div>
            <!-- end of if-else statement -->
        </div>

        <!--THIS IS BOOTSTRAP JAVASRIPT PART START-->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    
    </body>
</html>