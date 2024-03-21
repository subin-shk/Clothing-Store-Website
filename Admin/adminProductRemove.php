<?php
    include("../db_conn.php");
    $itemid=$_POST["product_id"];
    $sql_remove="DELETE from items where item_id=$itemid";
    $result_remove=mysqli_query($conn,$sql_remove);
    header("location:products.php?productstatus=removed");
    
?>