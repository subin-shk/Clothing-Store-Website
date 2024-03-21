

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search - CloverEmporium</title>
            <!-- Google Web Fonts -->
            <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playball&display=swap" rel="stylesheet">



        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/owl.carousel.min.css" rel="stylesheet">


    <!--CSS-->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- script link -->
    <script src="assets/js/jquery-3.1.1.slim.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

  <style>
    
  </style>

  
</head>
<body>
<?php

require_once("header.php");

include("db_conn.php");

?> 
<div class="container">
    <h1 class="text-center" style="margin-top:100px;" >Search</h1>
<div class="bulit_icon"><img src="assets/images/bulit-icon.png"></div>

<section class="search-form">
    <form action="" method="POST" style="margin-left:40%;">
        <input type="text" class="border border-primary rounded-pill py-1 px-5 my-5 text-center" placeholder="search products" name="search_box">
        <button class="btn btn-primary rounded-pill" name="search_btn"><i class="fa-solid fa-magnifying-glass"></i></button>
    </form>
</section>











<section class="products" style="padding-top: 0;">

   

      <?php
         if(isset($_POST['search_btn'])) {
         $search_box= $_POST['search_box'];
        
         $select_products =  "SELECT * FROM `items` WHERE product_cat LIKE '%{$search_box}%' OR item_name LIKE '%{$search_box}%' OR item_type LIKE '%{$search_box}%'";
         $result1=mysqli_query($conn,$select_products);
         
         if(mysqli_num_rows($result1) > 0){
         while($item=mysqli_fetch_assoc($result1)){
          
          
          
          $product_id = $item['item_id'];

          echo '
          
          <form action="cart_handle.php" method="POST"  style="margin-left:160px;">
          
          <div class="pro_items">
          

          <img src="assets/images/products/'.$item['item_image'].'">
          <h5 style="border-bottom: 1px solid #c8c8c8; margin-top: 10px; text-align:center; padding-bottom:5px;">'.$item['item_name'].'</h5>
          <p class="text-center" style="font-size: 16px; font-weight: bold; color: #000;">Rs. '.$item['item_price'].'/-</p>

          <input type="submit" value="Add to cart" class="cart text-center border-0 rounded-pill py-3 px-4 px-md-5 me-4 btn btn-primary" style="color:#fff; margin-left:30px;">
          
          <input  type="hidden" name="product_id" value="'.$product_id.'">

          </div>
          </form>


          
          
         ';
         
          
         }
        }
        else{
            echo '<p class="text-center empty">No results found!</p>';
        }
    }
    else{
        echo '<p class="text-center empty">Search Something!</p>';
    }

         ?> 


</div>
</body>
</html>