<?php 
session_start();

if(isset($_POST['qty']))
{
    $qty = $_POST['dish_quantity'];
    $pid = $_POST['id'];
    $pprice = $_POST['dish_price'];

    $tprice = $qty*$pprice;

    $stmt = $conn->prepare("UPDATE cart SET dish_qty=?, dish_total=? WHERE id=?");

    $stmt-> bind_param("isi",$qty,$tprice,$pid);
    $stmt-> execute();
}
?>