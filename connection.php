<?php

$connect = mysqli_connect("localhost", "root", "", "rex-foodipedia");

if($connect)
{
    echo (""); //leave blank 
}else{
    echo("<p>Error: 500. <br> DB not connected</p>");
    
}

?>


