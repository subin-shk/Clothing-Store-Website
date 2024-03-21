<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Womens - CloverEmporium</title>
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
</head>
<body>

 <?php

require_once("header.php");

include("db_conn.php");

?> 





<section class="products" style="margin-bottom: 1000px;">
    <div class="container bg-light py-6 my-6 mt-0">
        <h1 style="text-align:center;">Our Products</h1>    
        <p class="text-dark bg-light border border-primary rounded-pill  font-weight-bold text-center px-3 py-1 ">
            <a href="womens.php">Women's</a> |
            <a href="mens.php">Men's</a> |
            <a href="kids.php">Kid's</a> </p>
        <div class="bulit_icon"><img src="assets/images/bulit-icon.png"></div>
        <h2 style="margin:50px 200px 0px 100px; width: 300px; text-align:left; border-bottom: 1px solid #000;">Women's Collection</h2>  


        
        
          

          
          <!-- <div class="cat">
            <h5 style="border-bottom: 1px solid #c8c8c8; padding-bottom: 10px;">Categories</h5>
            <div class="cat-content">
          <h6><a href="#dresses">Dresses</a></h6>
          <h6><a href="#tops">Tops</a></h6>
          <h6><a href="#bottoms">Bottoms</a></h6>
        </div>
        
      </div> -->

      <div class="pro_lists">
      
      <h2 style="border-bottom: 1px dashed #000; padding: 10px;">Dress</h2>
             <?php
            $sql1="select * from items where product_cat='women' and item_type='dress'";
            $result1=mysqli_query($conn,$sql1);
           $count = 1;

           while($item=mysqli_fetch_assoc($result1)){
            if($count<=21)
            
            
            $product_id = $item['item_id'];

            echo '
            
            <form action="cart_handle.php" method="POST">
            
            <div class="pro_items">
            

            <img src="assets/images/products/'.$item['item_image'].'">
            <h5 style="border-bottom: 1px solid #c8c8c8; margin-top: 10px; text-align:center; padding-bottom:5px;">'.$item['item_name'].'</h5>
            <p class="text-center" style="font-size: 16px; font-weight: bold; color: #000;">Rs. '.$item['item_price'].'/-</p>

            <input type="submit" value="Add to cart" class="cart text-center border-0 rounded-pill py-3 px-4 px-md-5 me-4 btn btn-primary" style="color:#fff; margin-left:30px;">
            
            <input  type="hidden" name="product_id" value="'.$product_id.'">

            </div>
            </form>


            
            
           ';
           $count++;
            
           }
           ?> 
        </div>



        <div class="pro_lists" >
        <h2 style="border-bottom: 1px dashed #000; padding: 10px;">Tops</h2>

             <?php
            $sql1="select * from items where product_cat='women' and item_type='tops'";
            $result1=mysqli_query($conn,$sql1);
           $count = 1;

           while($item=mysqli_fetch_assoc($result1)){
            
            
            
            $product_id = $item['item_id'];

            echo '
            
            <form action="cart_handle.php" method="POST">
            
            <div class="pro_items">
            

            <img src="assets/images/products/'.$item['item_image'].'">
            <h5 style="border-bottom: 1px solid #c8c8c8; margin-top: 10px; text-align:center; padding-bottom:5px;">'.$item['item_name'].'</h5>
            <p class="text-center" style="font-size: 16px; font-weight: bold; color: #000;">Rs. '.$item['item_price'].'/-</p>

            <input type="submit" value="Add to cart" class="cart text-center border-0 rounded-pill py-3 px-4 px-md-5 me-4 btn btn-primary" style="color:#fff; margin-left:30px;">
            
            <input  type="hidden" name="product_id" value="'.$product_id.'">

            </div>
            </form>


            
            
           ';
           $count++;
            
           }
           ?> 
  
      </div>


      <div class="pro_lists" >
        <h2 style="border-bottom: 1px dashed #000; padding: 10px;">Bottoms</h2>

             <?php
            $sql1="select * from items where product_cat='women' and item_type='bottoms'";
            $result1=mysqli_query($conn,$sql1);
           $count = 1;

           while($item=mysqli_fetch_assoc($result1)){
            
            
            
            $product_id = $item['item_id'];

            echo '
            
            <form action="cart_handle.php" method="POST">
            
            <div class="pro_items">
            

            <img src="assets/images/products/'.$item['item_image'].'">
            <h5 style="border-bottom: 1px solid #c8c8c8; margin-top: 10px; text-align:center; padding-bottom:5px;">'.$item['item_name'].'</h5>
            <p class="text-center" style="font-size: 16px; font-weight: bold; color: #000;">Rs. '.$item['item_price'].'/-</p>

            <input type="submit" value="Add to cart" class="cart text-center border-0 rounded-pill py-3 px-4 px-md-5 me-4 btn btn-primary" style="color:#fff; margin-left:30px;">
            
            <input  type="hidden" name="product_id" value="'.$product_id.'">

            </div>
            </form>


            
            
           ';
           $count++;
            
           }
           ?> 
  
      </div>
     
    
   



    

</section>




</body>
</html>