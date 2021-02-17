<?php

//action.php

include('../db-connect.php');

if($_POST['action'] == 'edit')
{
 $data = array(
  ':dish_name'  => $_POST['dish_name'],
  ':picture'    => $_POST['picture'],
  ':price'    => $_POST['price'],
  ':description'   => $_POST['description'],
  ':stock_qty'   => $_POST['stock_qty'],
  ':menu_available'   => $_POST['menu_available'],
  ':menu_random'   => $_POST['menu_random'],
  ':dish_id'  => $_POST['dish_id']
 );

 $query = "
 UPDATE menu 
 SET dish_name = :dish_name,
 picture = :picture,
 price = :price,
 description = :description,
 stock_qty = :stock_qty,
 menu_available = :menu_available,
 menu_random = :menu_random
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
