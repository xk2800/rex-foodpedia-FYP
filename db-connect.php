<?php
session_start();

// session_start();
session_regenerate_id(true);

//set default time zone
date_default_timezone_set("Asia/Kuala_Lumpur");

// used for delete
// $connects = mysqli_connect("13.212.90.225", "deletes", "XFhvEdqYVQw4RaS4", "rex-foodipedia");
$connects = mysqli_connect("localhost", "root", "1234567890", "rex-foodipedia");


//used for procedure php call
// $connect = mysqli_connect("13.212.90.225", "database", "DZUUuox3oDVC3s3A", "rex-foodipedia");
$connect = mysqli_connect("localhost", "root", "1234567890", "rex-foodipedia");

//using PDO call
// $mysqli = NEW MySQLi ('13.212.90.225', 'database', 'DZUUuox3oDVC3s3A', 'rex-foodipedia');

//actual db connection
// @mysqli_connect("13.212.90.225", "database", "DZUUuox3oDVC3s3A", "rex-foodipedia") || die('<p>Error: 500. <br> DB not connected</p>');
@mysqli_connect("localhost", "root", "1234567890", "rex-foodipedia")|| die('<p>Error: 500. <br> DB not connected</p>');
// $connectings = new PDO("mysql:host=13.212.90.225; dbname=rex-foodipedia", "database", "DZUUuox3oDVC3s3A");

// session_start();
// session_regenerate_id(true);
// change the information according to your database
// $db_connection = mysqli_connect("13.212.90.225", "database", "DZUUuox3oDVC3s3A","rex-foodipedia");
// CHECK DATABASE CONNECTION
// if(mysqli_connect_errno()){
//     echo "Connection Failed".mysqli_connect_error();
//     exit;
// }

?>

