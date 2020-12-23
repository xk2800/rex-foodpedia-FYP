<!DOCTYPE html>
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

                .text-center h1,h2,h3,h4,h5,h6{
                    padding: 10rem 0 0 0;
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
                    border-radius:12px;
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
                    width: 100%;
                    height: 100%;   
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
</style>

        
        </head>
        <body style="background-color: #e7ded2;">
<!-- PHP-->
    <?php
        include("nav.html");
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
        <button id="btns" class="tablinks" onclick="openCity(event, 'chinese')">Chinese Cuisine</button>
        <button id="btns" class="tablinks" onclick="openCity(event, 'malaysian')">Malaysian Cuisine</button>
        <button id="btns" class="tablinks" onclick="openCity(event, 'japanese')">Japanese Cuisine</button>
        <button id="btns" class="tablinks" onclick="openCity(event, 'indian')">Indian Cuisine</button>
        <!--/div-->
    </div>
    <!-- Menu Nav End -->

    <!-- Menu Item 1st row Starts -->
    <div id="home" class="tabcontent">
        <div class="container" >
        
            <p>Random Picks</p>
            <hr>

            <div class="row">

                <div class="col">
                    <div class="panel">
                        <a href="https://www.youtube.com/watch?v=-PItSeOJ1hQ">
                            <img src="img/food1.jpg">
                        </a>
                    <b>Chicken Curry</b>
                    <div>
                    Chicken curry is a dish originating from the Indian subcontinent. 
                    </div>
                    </div>
                </div>

                <div class="col">
                    <div class="panel">
                        <a href="https://www.youtube.com/watch?v=-PItSeOJ1hQ">
                            <img src="img/food1.jpg">
                        </a> 
                    <b>Rendang</b>
                    <div>
                    Rendang is an Indonesian spicy meat dish originating from the 
                    Minangkabau region in West Sumatra, Indonesia.
                    </div>
                    </div>
                </div>

                <div class="col">
                    <div class="panel">
                        <a href="https://www.youtube.com/watch?v=-PItSeOJ1hQ">
                            <img src="img/food1.jpg">
                        </a>     
                    <b>Nasi Lemak</b>
                    <div>
                    Nasi lemak is a Malay cuisine dish consisting of fragrant rice 
                    cooked in coconut milk and pandan leaf.   
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu Item 1st row End -->

        <!-- Menu Item 2nd row Starts -->
        <div class="container">

            <p>Recommended Restaurants</p>
            <hr>

            <div class="row">

                <div class="col">
                    <div class="panel">
                        <a href="https://www.youtube.com/watch?v=-PItSeOJ1hQ">
                            <img src="img/food1.jpg">
                        </a>
                        Abcd
                    </div>
                </div>

                <div class="col">
                    <div class="panel">
                        <a href="https://www.youtube.com/watch?v=-PItSeOJ1hQ">
                            <img src="img/food1.jpg">
                        </a> 
                        Efgh
                    </div>
                </div>

                <div class="col">
                    <div class="panel">
                        <a href="https://www.youtube.com/watch?v=-PItSeOJ1hQ">
                            <img src="img/food1.jpg">
                        </a>     
                        Ijkl
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu Item 2nd row End -->

        <!-- Menu Item 3rd row Start -->
        <div class="container">
            <div class="row">

                <div class="col">
                    <div class="panel">
                        <a href="https://www.youtube.com/watch?v=-PItSeOJ1hQ">
                            <img src="img/food1.jpg">
                        </a>
                        Mno
                    </div>
                </div>

                <div class="col">
                    <div class="panel">
                        <a href="https://www.youtube.com/watch?v=-PItSeOJ1hQ">
                            <img src="img/food1.jpg">
                        </a> 
                        Pqrs
                    </div>
                </div>

                <div class="col">
                    <div class="panel">
                        <a href="https://www.youtube.com/watch?v=-PItSeOJ1hQ">
                            <img src="img/food1.jpg">
                        </a>     
                        Tuv
                    </div>
                </div>
            </div>
        </div>
    <!-- Menu Item 3rd row End -->
    </div>


    <div id="chinese" class="tabcontent">

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