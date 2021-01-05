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

              #navbar-title-sales-report {
                  padding-right: 50px;
                  letter-spacing: 2px;
                  text-transform: uppercase;
              }  

            </style>    

        </head>

        <body style="background-color: #E4F6E6">

            <?php
                include("../nav.html");
            ?>
            
            <div class="container text-center">  
                <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-top: 70px;">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-whole-sales-report" aria-controls="navbar-whole-sales-report" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbar-whole-sales-report" style="margin: 20px 0px 20px 0px;">
                        <div class="navbar-nav">
                            <a class="nav-item nav-link active" id="navbar-title-sales-report" href="#">Daily <span class="sr-only">(current)</span></a>
                            <a class="nav-item nav-link" id="navbar-title-sales-report" href="#">Weekly</a>
                            <a class="nav-item nav-link" id="navbar-title-sales-report" href="#">Monthly</a>
                        </div>
                    </div>
                </nav>

                <div class="card rounded mt-5" style="width: 69.5rem;">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
            </div>    

            <!--THIS IS BOOTSTRAP JAVASRIPT PART START-->
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
         </body>
</html>