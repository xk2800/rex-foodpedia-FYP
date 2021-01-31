<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Shopping Cart | REX Foodipedia</title>

        <!--FONTS.CSS STARTS-->
            <link rel="preload" href="css/fonts.css" as="style">
        <!--FONTS.CSS END-->

        <!--THIS IS FONT AWESOME JAVASCRIPT START-->
            <script src="https://kit.fontawesome.com/daa253e478.js" crossorigin="anonymous"></script>
        <!--THIS IS FONT AWESOME JAVASCRIPT END-->

        <!--THIS IS BOOTSTRAP CSS PART START-->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!--THIS IS BOOTSTRAP CSS PART END-->

        <!--External CSS Start-->
            <!--<link rel="stylesheet" href="user-menus.css">-->
        <!--External CSS End-->    

    <style>
        body{
            margin-top: 10rem;
            }

        .media-body{
            margin-left:20px;
        }
        
        .lower-button button{
            width: 100%;
        }

        #continue-shopping{
            width:auto;
        }

    </style>

</head>

<body style="background-color: #e7ded2;">

    <!-- PHP-->
    <?php
        include("navbar.html");
    ?>
    
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-10 col-md-offset-1">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Total</th>
                            <th class="text-center">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <tr>
                            <td class="col-sm-8 col-md-6">
                            <div class="media">
                                <a class="thumbnail pull-left" href="#"> 
                                    <img src="../img/food1.jpg" style="width: 72px; height: 72px;">
                                </a>
                                <div class="media-body">
                                    <h5><a href="#">#1</a></h5>
                                    <h6>Description: <br>Nasi Lemak x2 <br> Rendang x1</h6>
                                </div>
                            </div>
                            </td>
                            
                            <td class="col-sm-1 col-md-1 text-center">
                                <strong>$12.34</strong>
                            </td>
                            
                            <td class="col-sm-1 col-md-1 text-center">
                                <strong>$42.22</strong>
                            </td>

                            <td class="col-sm-1 col-md-1 text-center">
                                <span class="text-danger"><strong>Preparing</strong></span>
                            </td>
                            
                            <!--
                            <td class="col-md-1">
                            <button type="button" class="btn">
                                <span class="glyphicon glyphicon-edit"><i class="fas fa-edit"></i></span> 
                            </button>
                            </td>
                            -->
                        </tr>

                        <tr>
                            <td class="col-md-6">
                            <div class="media">
                                <a class="thumbnail pull-left" href="#"> <img src="../img/food1.jpg" style="width: 72px; height: 72px;"> </a>
                                <div class="media-body">
                                    <h5><a href="#">#2</a></h5>
                                    <h6>Description: <br>Rendang x2 <br>Ayam Masak Merah x3</h6>
                                </div>
                            </div>
                            </td>

                            <td class="col-md-1 text-center"><strong>$32.33</strong></td>
                            <td class="col-md-1 text-center"><strong>$123.33</strong></td>
                            <td class="col-sm-1 col-md-1 text-center">
                                <span class="text-warning"><strong>Delivery</strong></span>
                            </td>

                            <!--
                            <td class="col-md-1">
                            <button type="button" class="btn">
                                <span class="glyphicon glyphicon-edit"><i class="fas fa-edit"></i></span> 
                            </button>
                            </td>
                            -->
                        </tr>

                        <tr>
                            <td class="col-md-6">
                            <div class="media">
                                <a class="thumbnail pull-left" href="#"> <img src="../img/food1.jpg" style="width: 72px; height: 72px;"> </a>
                                <div class="media-body">
                                    <h5><a href="#">#3</a></h5>
                                    <h6>Description: <br>Ayam Goreng x2 <br>Nasi Goreng x2 <br> Rendang x1<br>Ayam Goreng x2 <br>Nasi Goreng x2 <br> Rendang x1</a></h6>
                                </div>
                            </div>
                            </td>

                            
                            <td class="col-md-1 text-center"><strong>$5.00</strong></td>
                            <td class="col-md-1 text-center"><strong>$18.59</strong></td>
                            <td class="col-sm-1 col-md-1 text-center">
                                <span class="text-success"><strong>Delivered</strong></span>
                            </td>
                            
                            <!--
                            <td class="col-md-1">
                            <button type="button" class="btn">
                                <span class="glyphicon glyphicon-edit"><i class="fas fa-edit"></i></span> 
                            </button>
                            </td>
                            -->
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

<!--THIS IS BOOTSTRAP JAVASRIPT PART START-->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<!--THIS IS BOOTSTRAP JAVASCRIPT PART END-->

</body>
</html>