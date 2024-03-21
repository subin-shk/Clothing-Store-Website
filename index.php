<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - CloverEmporium</title>
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



    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


    <!-- script link -->
    <script src="assets/js/jquery-3.1.1.slim.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>



</head>
<body>

<?php
require_once("header.php");
?>

        <!-- Hero Start -->
        <div class="container-fluid bg-light py-6 my-6 mt-0">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-7 col-md-12" >
                        <small class="d-inline-block fw-bold text-dark bg-light border border-primary rounded-pill px-4 py-1 mb-4" style="filter:drop-shadow(10px 1px 10px gray); margin-left:100px;">Welcome to CloverEmporium</small>
                        <h1 class="display-1 mb-4" style=" margin-left:100px;">Experience Great Shopping with <span class="text-primary">Clover</span>Emporium</h1>
                        <a href="about.php" class="btn btn-primary border-0 rounded-pill py-3 px-4 px-md-5 me-4" style="filter:drop-shadow(10px 2px 10px gray); margin-left:100px;">About us</a>
                        <a href="contact.php" class="btn btn-primary border-0 rounded-pill py-3 px-4 px-md-5" style="filter:drop-shadow(10px 2px 10px gray); ">Contact</a>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <img src="assets/images/banner-img2.png" class="img-fluid rounded animated zoomIn" style="filter:drop-shadow(10px 2px 10px gray);" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->


        <!-- Categories Start -->
<section>

    <div class="container">
        <h1 style="text-align:center;">Shop by Category</h1>
        <div class="bulit_icon"><img src="assets/images/bulit-icon.png"></div>
        <div  style="margin-top:25px;">
        <div class="col-md-4 col-sm-12 col-xs-12 categories">
        
            <img src="assets/images/cat-1.jpg" style="width:400px; height:400px;">
            <h4 style="text-align:center; margin-top:15px;">Women's Collection</h4>
            <div class="read_bt"><a href="womens.php">Browse</a></div>
        </div>

        <div class="col-md-4 col-sm-12 col-xs-12 categories" >
        
        <img src="assets/images/cat-2.jpg" style="width:400px; height:400px;">
        <h4 style="text-align:center; margin-top:15px;">Men's Collection</h4>
        <div class="read_bt"><a href="mens.php">Browse</a></div>
        
        </div>

        <div class="col-md-4 col-sm-12 col-xs-12 categories" >
        
        <img src="assets/images/cat-3.jpg" style="width:400px; height:400px;">
        <h4 style="text-align:center; margin-top:15px;">Kid's Collection</h4>
        <div class="read_bt"><a href="kids.php">Browse</a></div>
        
        </div>
        </div>

    </div>

</section>

<!-- Categories End -->

      <!-- about section start -->
      <div class="about_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12" >
                  <h1 style="text-align:center;">About our shop</h1>
                  <div class="bulit_icon"><img src="assets/images/bulit-icon.png"></div>
               </div>
            </div>
            <div class="about_section_2 layout_padding col-sm-12 col-xs-12">
               <div class="image_iman"><img src="assets/images/about_img.jpg" class="about_img"></div>
               <div class="about_taital_box">
                  <h1 class="about_taital_1">All about <span class="text-primary">Clover</span>Emporium</h1>
                  <p class=" about_text">At Clover Emporium, we believe that every outfit tells a story, and we're here to help you craft yours. Founded with a vision to inspire confidence and celebrate individuality, we curate a diverse collection of clothing and accessories that cater to every style and occasion...</p>
                  <div class="readmore_btn"><a href="about.php">Read More</a></div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section end -->

 <?php
 require_once("footer.php");
 ?>



</body>
</html>