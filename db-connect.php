<?php
//used for procedule php call
$connect = mysqli_connect("13.212.90.225", "database", "DZUUuox3oDVC3s3A", "rex-foodipedia");

//using PDO call
$mysqli = NEW MySQLi ('13.212.90.225', 'database', 'DZUUuox3oDVC3s3A', 'rex-foodipedia');

//actual db connection
@mysqli_connect("13.212.90.225", "database", "DZUUuox3oDVC3s3A", "rex-foodipedia") || die('<p>Error: 500. <br> DB not connected</p>');

session_start();
session_regenerate_id(true);
// change the information according to your database
$db_connection = mysqli_connect("13.212.90.225", "database", "DZUUuox3oDVC3s3A","google_login");
// CHECK DATABASE CONNECTION
if(mysqli_connect_errno()){
    echo "Connection Failed".mysqli_connect_error();
    exit;
}

?>

