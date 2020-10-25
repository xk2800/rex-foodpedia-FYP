<?php

//used for procedule php call
$connect = mysqli_connect("localhost", "root", "", "rex-foodipedia");

//using PDO call
$mysqli = NEW MySQLi ('localhost', 'root', '', 'rex-foodipedia');

//actual db connection
@mysqli_connect("localhost", "root", "", "rex-foodipedia") || die('<p>Error: 500. <br> DB not connected</p>');

?>

