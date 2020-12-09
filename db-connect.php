<?php

//used for procedule php call
$connect = mysqli_connect("13.212.90.225.239.138", "database", "DZUUuox3oDVC3s3A", "rex-foodipedia");

//using PDO call
$mysqli = NEW MySQLi ('13.212.90.225.239.138', 'database', 'DZUUuox3oDVC3s3A', 'rex-foodipedia');

//actual db connection
@mysqli_connect("13.212.90.225.239.138", "database", "DZUUuox3oDVC3s3A", "rex-foodipedia") || die('<p>Error: 500. <br> DB not connected</p>');

?>

