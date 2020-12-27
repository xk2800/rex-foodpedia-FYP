<!DOCTYPE html>
    <html>
        <head> 
            <title>Edit Menu | REX Foodipedia</title>

            <meta name="viewpoint" content="width=device-width, initial-scale=1">
            <meta name="viewpoint" content="width=device-width">
    
            <!--INCLUDE START HERE-->
            <link rel="icon" type="image/png" href= "image/MYRUN 1.png">

            <!--THIS IS FONT AWESOME JAVASCRIPT START-->
            <script src="https://kit.fontawesome.com/daa253e478.js" crossorigin="anonymous"></script>

            <!--THIS IS BOOTSTRAP CSS PART START-->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

            <!--FONTS.CSS-->
            <link rel="stylesheet" href="css/fonts.css">

            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

            <style>

                #form-title-edit {
                    text-align: center;
                    letter-spacing: 2px;
                    text-transform: uppercase;
                    background-color: #D1FBD6;
                }

                table {
                    background-color:white;
                    /*border-radius: 20px;*/
                    box-shadow: 7px 7px 5px #888888;
                    margin-top: 10em;
                }

                #form-header-edit {
                    text-align: center;
                    /*font-style: italic;*/
                    letter-spacing: 2px;
                    font-family: Lato;
                    font-size:0.85em;
                }
                
            </style>

        </head>
        
        <body style="background-color: #E4F6E6">

            <?php
                include("../nav.html");
            ?>

            <div class="container">
                <table class="table table-hover" >
                    <thead>
                        <tr id="form-title-edit">
                            <th colspan="7" scope="col" height="auto">Edit Food Menu</th>
                        </tr>   
                        
                        <tr id="form-header-edit">
                            <th scope="col">#ID</th>
                            <th scope="col">Dish</th>
                            <th scope="col">Image</th>
                            <th scope="col">Desciption</th>
                            <th scope="col">Stock Quantity</th>
                            <th scope="col">Unit Price </th>
                            <th scopre="col">Action</th>
                        </tr>
                       
                    </thead>

                    <tbody style="font-size: 0.8em">
                        <tr>
                            <th scope="row">01</th>
                            <td>Lorem ipsum dolor</td>
                            <td rowspan=""><img src="../img/dummy.jpg" alt="Girl in a jacket" style="width:20em; height:10em"></td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
                            <td>1000</td>
                            <td>5.60</td>
                            <td><a class="btn btn-primary" href="#" role="button">Update</a></td>
                        </tr>

                        <tr>
                            <th scope="row">02</th>
                            <td>test</td>
                            <td>test</td>
                            <td>@test</td>
                            <td>test</td>
                            <td>test</td>
                            <td><a class="btn btn-primary" href="#" role="button">Update</a></td>
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