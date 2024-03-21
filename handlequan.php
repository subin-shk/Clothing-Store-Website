<?php
include('db_conn.php');
$cid=$_GET['cid'];
$quantity = $_POST['product_quantity'];
$sql = "update cart set product_quantity=$quantity where cart_id=$cid";
$res = mysqli_query($conn,$sql);
if($res){
    header('location: ./cart.php');
}
?>