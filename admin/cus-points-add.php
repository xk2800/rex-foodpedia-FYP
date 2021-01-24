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
                margin-left: 10px;
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
    
    <body style="background-color: #4C5C68;">     
        
        <?php
            include("navbar.html");
        ?>

        <div class="container">
            <form>
                
                <!-- will need to adjust it to be at the center of the screen after backend is setup -->
                <div class="row mb-4 mt-5">
                    <div class="form-group col-md-9">
                        <input id="exampleFormControlInput5" type="email" placeholder="Kindly insert the user email that would like to add points" class="form-control form-control-underlined">
                    </div>
                    <div class="form-group col-md-3">
                        <button type="submit" class="btn btn-primary rounded-pill btn-block shadow-sm">Search</button>
                    </div>
                </div>
                <!-- end statement -->
            </form>

            <!-- if-else statement will go here, state=true -> statement block will be executed || state=false -> alert box display the error -->
                <div class="card">
                    <div class="card-header">
                        <h5 id="title-cus-add">Add Points</h5>
                    </div>
                    
                    <div class="card-body">
                        <form>
                            <div class="form-group row">
                                <label for="point-cus-add" class="col-sm-2 col-form-label"><span style="color:red">*&nbsp;</span>Points<br/>
                                    <span id="small-cus-add">Set the number of points</span>
                                </label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="point-cus-add" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="point-cus-add" class="col-sm-2 col-form-label"><span style="color:red">*&nbsp;</span>Validity<br/>
                                    <span id="small-cus-add">Set the validity of points (days)</span>
                                </label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="point-cus-add" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="point-cus-add" class="col-sm-2 col-form-label"><span style="color:red">*&nbsp;</span>Status<br/>
                                    <span id="small-cus-add">Choose status for points</span>
                                </label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>Available</option>
                                        <option>Unavailable</option>
                                    </select>
                                </div>
                            </div>
                            <a href="#" class="btn btn-primary" style="margin: 0.5em 0em 2em 11.5em;">Save</a>
                        </form>   
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