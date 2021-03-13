<!DOCTYPE html>
    <?php
        include("db-connect.php");
        $email = $_SESSION["email"];
        //session_start();
    ?>
        <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Menu | REX Foodipedia</title>

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

<!---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<style>
        body{
            background-color: #e7ded2;
        }
        
        .card{
            background-color: #e7ded2;
        }

        .text-center h1,h2,h3,h4,h5,h6{
            padding: 5rem 0 0 0;
        }

        .text-center hr{
            overflow: visible;
            height: 30px;
            border-style: solid;
            border-color: black;
            border-width: 1px 0 0 0;
            border-radius: 20px;
        }

        .text-center hr::before{
            display: block;
            content: "";
            height: 30px;
            margin-top: -31px;
            border-style: solid;
            border-color: black;
            border-width: 0 0 1px 0;
            border-radius: 20px;
        }
    
    /* Menu Navigation (FOOD SELECTION) STARTS */
        #btns{
            background-color: #a3d2ca;
            color: black;
            margin: 40px 25px 20px 25px;
            border-radius:6px;
            border:1px solid black;
            padding:5px;
        }

        #btns:hover {
            background-color: #056676;
            color:black;
            text-decoration: none;
        }

        #btns.active {
            background-color:blue;
            color: gold;
        }
    /* Menu Navigation (FOOD SELECTION) ENDS */


    /* Item Grid Starts */
        .card {
            box-shadow:0 4px 8px 0 rgba(0,0,0,0.2);
            transition:0.3s;
        }

        .card:hover{
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }

        .container{
            padding: 2px 16px;
        }

        .col {
            border-radius: 15px;
            padding: 15px;
            margin: 20px 20px 20px 20px;
        }

        .col:hover {
            transition: scale(1.1);
            transform: scale(1.1);
        }
        
        .container img {
            border-radius: 15px;
            width: 50%;
            height: 50%;   
        }

        .container img:hover {
            transition: scale(1.04);
            transform: scale(1.04);
        }
    /* Item Grid Ends */

        .container p{
            font-size: x-large;
            color: black;
            font-weight: bold;
        }

        .container hr{
            border: 1px solid black; 
            border-radius: 12px;
        }

        #grid{
            width:25%;
            display:grid;
            grid-template-columns: auto;
            gap:10px;
            /* grid-auto-rows:100px; */
            grid-auto-columns:100px;
        }


        #grid > div{
            background-color:#e7ded2;
        }

        .vendor-list-item{
            display:inline-block;
            width:22%;
            /* float:left;
            flex-direction:row;
            width:25%;
            background-color:blue;
            column:3;
            -webkit-columns:3;  */
            margin:10px 10px 10px 10px;
        }

</style>

        
        </head>
        <body style="background-color: #e7ded2;">
<!-- PHP-->
    <?php
        include("nav.php");
    ?>

<!---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    
    <div class="text-center">
        <h1>MENU</h1>
        <hr style="width:15%;">
    </div>

    <!-- Menu Nav Start-->
    <div class="text-center">
        <!--a class="active" type="button" href="#">Home</a>
        <a type="button" href="#">Chinese Cuisine</a>
        <a type="button" href="#">Malaysian Cuisine</a>
        <a type="button" href="#">Japanese Cuisine</a>
        <a type="button" href="https://www.youtube.com/">Indian Cuisine</a-->
        <!--div class="tab"-->
        <button id="btns" class="tablinks" onclick="openCity(event, 'home')">Home</button>
        <button id="btns" class="tablinks" onclick="openCity(event, 'Malaysian')">Malaysian Cuisine</button>
        <button id="btns" class="tablinks" onclick="openCity(event, 'Japanese')">Japanese Cuisine</button>
        <button id="btns" class="tablinks" onclick="openCity(event, 'Korean')">Korean Cuisine</button>
        <button id="btns" class="tablinks" onclick="openCity(event, 'Thailand')">Thailand Cuisine</button>
        <!--/div-->
    </div>
    <!-- Menu Nav End -->


    

    <!-- Random Menu -->
        <div id="home" class="tabcontent">

            <?php
                //$menu_query = mysqli_query($connect, "SELECT * from menu WHERE email = '$email' ");
                $menu_query_random = mysqli_query($connect, "SELECT * FROM menu ORDER BY RAND() LIMIT 4 ");
                $menu_query = mysqli_query($connect,"SELECT * FROM menu");
                $numrowrandom = mysqli_num_rows($menu_query_random);
                $numrow = mysqli_num_rows($menu_query);
            ?>
                            <div class="container">
                                <p>Random Picks</p>
                                <hr>
                        
            
                                 <!-- <div class="container" style="display:flex; background-color:blue;"> -->
                                <div class="row">
                                    <div class="column" style="float:left;">
                                        <div class="grid" style="display:flex; flex-direction:row; width:100%;">
                                                
                                                   

                                                    <?php 
                                                        if($numrowrandom != 0)
                                                        {
                                                            while($row = mysqli_fetch_assoc($menu_query_random))
                                                            {
                                                                $db_dish_name = $row['dish_name'];
                                                                $db_dish_description = $row['description'];
                                                                $db_dish_price = $row['price'];
                                                        ?>

                                                    
                                                        <div class="container" style="width:50%;">
                                                            <a href="product-details.php?id=<?php echo $row['id'];?>" style="text-decoration:none;">
                                                                <img src="img/food1.jpg" style="width:100%">
                                                            
                                                            <div style="margin:10px 0 0 0; text-decoration:none;">
                                                                <p><?php echo $db_dish_name ?> <br> <b>RM <?php echo $db_dish_price?></b></p>
                                                            </div></a>
                                                        </div>

                                                    <?php 
                                                    }
                                                }
                                                ?>  
                                        </div>
                                    </div>
                                </div>  
                            </div> 

            <!-- Random Menu -->

            <!-- Menu Item 2nd row Starts -->
            <div class="container">

                <p>Recommended Restaurants</p>
                <hr>                    
                        <ul class="vendor-list" style="width:100%;">
                            <?php 
                            if($numrow != 0)
                            {
                                while($row = mysqli_fetch_assoc($menu_query))
                                {
                                    $db_dish_name = $row['dish_name'];
                                    $db_dish_description = $row['description'];
                                    $db_dish_price = $row['price'];
                            ?>
                           
                                    
                                        <li class="vendor-list-item">
                                           
                                                    <a href="product-details.php?id=<?php echo $row['id'];?>" style="text-decoration:none;">
                                                        <img src="img/food1.jpg" style="width:100%">
                                                        <p><?php echo $db_dish_name ?> <br> <b>RM <?php echo $db_dish_price?></b></p>                
                                                    </a>
                                        </li>
                            <?php
                                    }
                                }
                            ?>
                        </ul>           
                </div>
        </div>

    <div id="Malaysian" class="tabcontent">
        <?php
            //$menu_query = mysqli_query($connect, "SELECT * from menu WHERE email = '$email' ");
            $menu_query_malaysian = mysqli_query($connect,"SELECT * FROM menu WHERE cuisine = 'Malaysian'");
            $numrow = mysqli_num_rows($menu_query_malaysian);
        ?>

        <div class="container" style="display:flex; flex-direction:row; width:100%;">

            <ul class="vendor-list" style="width:100%;">
                            <?php 
                            if($numrow != 0)
                            {
                                while($row = mysqli_fetch_assoc($menu_query_malaysian))
                                {
                                    $db_dish_name = $row['dish_name'];
                                    $db_dish_description = $row['description'];
                                    $db_dish_price = $row['price'];
                            ?>
                           
                                    
                                        <li class="vendor-list-item">
                                           
                                                    <a href="product-details.php?id=<?php echo $row['id'];?>" style="text-decoration:none;">
                                                        <img src="img/food1.jpg" style="width:100%">
                                                        <p><?php echo $db_dish_name ?> <br> <b>RM <?php echo $db_dish_price?></b></p>                
                                                    </a>
                                        </li>
                            <?php
                                    }
                                }
                            ?>
                        </ul>    
                            </div>  

    </div>

    <div id="Japanese" class="tabcontent">
        <?php
            //$menu_query = mysqli_query($connect, "SELECT * from menu WHERE email = '$email' ");
            $menu_query_japanese = mysqli_query($connect,"SELECT * FROM menu WHERE cuisine = 'Japanese'");
            $numrow = mysqli_num_rows($menu_query_japanese);
        ?>

        <div class="container" style="display:flex; flex-direction:row; width:100%;">

        <ul class="vendor-list" style="width:100%;">
                            <?php 
                            if($numrow != 0)
                            {
                                while($row = mysqli_fetch_assoc($menu_query_japanese))
                                {
                                    $db_dish_name = $row['dish_name'];
                                    $db_dish_description = $row['description'];
                                    $db_dish_price = $row['price'];
                            ?>
                           
                                    
                                        <li class="vendor-list-item">
                                                    <a href="product-details.php?id=<?php echo $row['id'];?>" style="text-decoration:none;">
                                                        <img src="img/food1.jpg" style="width:100%">
                                                        <p><?php echo $db_dish_name ?> <br> <b>RM <?php echo $db_dish_price?></b></p>                
                                                    </a>
                                        </li>
                            <?php
                                    }
                                }
                            ?>
            </ul>      
        </div>
    </div>

    <div id="Korean" class="tabcontent">

        <?php
                //$menu_query = mysqli_query($connect, "SELECT * from menu WHERE email = '$email' ");
                $menu_query_korean = mysqli_query($connect,"SELECT * FROM menu WHERE cuisine = 'Korean'");
                $numrow = mysqli_num_rows($menu_query_korean);
        ?>

        <div class="container" style="display:flex; flex-direction:row; width:100%;">

        <ul class="vendor-list" style="width:100%;">
                            <?php 
                            if($numrow != 0)
                            {
                                while($row = mysqli_fetch_assoc($menu_query_korean))
                                {
                                    $db_dish_name = $row['dish_name'];
                                    $db_dish_description = $row['description'];
                                    $db_dish_price = $row['price'];
                            ?>
                           
                                    
                                        <li class="vendor-list-item">
                                                    <a href="product-details.php?id=<?php echo $row['id'];?>" style="text-decoration:none;">
                                                        <img src="img/food1.jpg" style="width:100%">
                                                        <p><?php echo $db_dish_name ?> <br> <b>RM <?php echo $db_dish_price?></b></p>                
                                                    </a>
                                        </li>
                            <?php
                                    }
                                }
                            ?>
            </ul>      
                                            </div> 

    </div>

    <div id="Thailand" class="tabcontent">

        <?php
            //$menu_query = mysqli_query($connect, "SELECT * from menu WHERE email = '$email' ");
            $menu_query_thailand = mysqli_query($connect,"SELECT * FROM menu WHERE cuisine = 'Thailand'");
            $numrow = mysqli_num_rows($menu_query_thailand);
        ?>

            <div class="container" style="display:flex; flex-direction:row; width:100%;">

            <ul class="vendor-list" style="width:100%;">
                            <?php 
                            if($numrow != 0)
                            {
                                while($row = mysqli_fetch_assoc($menu_query_thailand))
                                {
                                    $db_dish_name = $row['dish_name'];
                                    $db_dish_description = $row['description'];
                                    $db_dish_price = $row['price'];
                            ?>
                           
                                    
                                        <li class="vendor-list-item">
                                                    <a href="product-details.php?id=<?php echo $row['id'];?>" style="text-decoration:none;">
                                                        <img src="img/food1.jpg" style="width:100%">
                                                        <p><?php echo $db_dish_name ?> <br> <b>RM <?php echo $db_dish_price?></b></p>                
                                                    </a>
                                        </li>
                            <?php
                                    }
                                }
                            ?>
            </ul>      
</div>

    </div>

    <script>
        function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
}

</script>

        <!--THIS IS BOOTSTRAP JAVASRIPT PART START-->
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <!--THIS IS BOOTSTRAP JAVASCRIPT PART END-->
        </body>
</html>