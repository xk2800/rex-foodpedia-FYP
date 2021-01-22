<?php
session_start();
session_regenerate_id(true);

//set default time zone
date_default_timezone_set("Asia/Kuala_Lumpur");

// change the information according to your database
$db_connection = mysqli_connect("13.212.90.225", "database", "DZUUuox3oDVC3s3A","rex-foodipedia");
// CHECK DATABASE CONNECTION
if(mysqli_connect_errno()){
    echo "Connection Failed".mysqli_connect_error();
    exit;
}
?>
