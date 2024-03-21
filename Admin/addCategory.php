<?php
    include("../db_conn.php");
    $category_name=$_POST['category_name'];
    $category_image=$_POST['category_image'];
    $sql="insert into categories(category_name,category_image) values('$category_name','$category_image')";
    $result=mysqli_query($conn,$sql);
    header("location:adminCategories.php");

?>