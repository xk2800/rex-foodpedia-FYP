<?php
//WORKING - Xavier
//action.php

include('../db-connect.php');
/*
if(isset($_REQUEST["access"])){
    $name = $_REQUEST["access"];

    $result = mysqli_query($connect, "SELECT username from staff_acc WHERE hashed = '$name'");
    $staff_username1 = mysqli_fetch_assoc($result);
    
}

//echo $staff_username1["username"];

$staff_username = $staff_username1["username"];
*/
if($_POST['action'] == 'edit')
{
 $data = array(
  ':dish_name'  => $_POST['dish_name'],
  ':cloudinary_link'    => $_POST['cloudinary_link'],
  ':price'    => $_POST['price'],
  ':description'   => $_POST['description'],
  ':stock_qty'   => $_POST['stock_qty'],
  ':deleted_menu'   => $_POST['deleted_menu'],
  ':dish_id'  => $_POST['dish_id']
 );

 $query = "
 UPDATE menu 
 SET dish_name = :dish_name,
 cloudinary_link = :cloudinary_link,
 price = :price,
 description = :description,
 stock_qty = :stock_qty,
 deleted_menu = :deleted_menu
 WHERE dish_id = :dish_id
 ";
 $statement = $connect->prepare($query);
 $statement->execute($data);
 echo json_encode($_POST);
}

if($_POST['action'] == 'delete')
{
 $query = "
 UPDATE menu SET deleted_menu=0
 WHERE dish_id = '".$_POST["dish_id"]."'
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
 echo json_encode($_POST);
}


?>
