<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="admin.css">
        
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.1.0/remixicon.css"
        integrity="sha512-dUOcWaHA4sUKJgO7lxAQ0ugZiWjiDraYNeNJeRKGOIpEq4vroj1DpKcS3jP0K4Js4v6bXk31AAxAxaYt3Oi9xw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php
    include("adminIndex.php");
    include("../db_conn.php");
    ?>
    <?php
    if(isset($_GET["productstatus"])){
        $status=$_GET["productstatus"];
        if($status== "removed"){
            echo'<div id="alert-added"></div>
            <div id="alert-added-inside" class="alert alert-danger alert-dismissible fade show"style="text-align:center;width:22vw;position:fixed;top:50%;left:40%;z-index:100;" role="alert">
            Item removed successfully!!
            </div>
            </div>
            ';
        }
    }
    if(isset($_GET["editstatus"])){
        $status=$_GET["editstatus"];
        if($status== "edited"){
            echo'<div id="alert-added"></div>
            <div id="alert-added-inside" class="alert alert-danger alert-dismissible fade show"style="text-align:center;width:22vw;position:fixed;top:50%;left:40%;z-index:100;" role="alert">
            Item Edited successfully!!
            </div>
            </div>
            ';
        }
    }
    ?>
    <div class="body-main">


        
            <h1 class="text-center">All Products</h1>
            <div class="bulit_icon"><img src="../assets/images/bulit-icon.png"></div>
        
        <?php
              $sql = "SELECT * FROM `items`";
              $result = mysqli_query($conn,$sql);
     $count = 1;
     
       echo '<div class="product-container">';
       
       
       while($item = mysqli_fetch_assoc($result))
       {
          //  if($count<=28)
          //  {
          //  $category_id = $item['product_cat_id'];
           $product_id = $item['item_id'];
           
           // card
           echo'
               <div class="card my-4 box-food" style="width: 200px; height:350px; background: linear-gradient(#d78373,#e9e9e9);">
                   <img src="../assets/images/products/'.$item['item_image'].'" class="card-img-top p-2" style="height:59%;">
                   <div class="card-body text-center" style="padding:15px 10px 0px 10px;font-size:0.9rem;">
                   <p class="card-title text-dark m-0" style="border-bottom:1px solid #000;">'.substr($item['item_name'],0,50).'</p>
                   <h6 class="card-title font-weight-bold" style=" margin-top:10px;">Rs. '.$item['item_price'].'</h6>


                    
                   <!-- Button trigger modal -->

                  <button type="button" class="btn btn-primary" id="button-order" data-toggle="modal" data-target="#exampleModalCenter'.$product_id.'">
                    View
                  </button>

                  <!-- Modal -->

                  <div class="modal fade" id="exampleModalCenter'.$product_id.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                         <h5 class="modal-title" id="exampleModalCenterTitle">Product Details</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                       
                        <form action="adminProductEdit.php" method="post">

                        <div class="modal-body">
                          <div style="display:flex;height:200px;">
                          <img src="../assets/images/products/'.$item['item_image'].'" class="card-img-top" style="height:100%;border-radius:15px;width:200px;  object-position: center;">
                            <div class="right" style="width:50%;display:flex;flex-direction:column;justify-content:center;align-items:center;"> 

                          <br>  
                            <!--<input type="number" name="quantity" id="quantityInput" onchange=\'calcTotal()\' value="1" style="width:50px;">-->
                              <h5 >'.$item["item_name"].'</h5>
                              <p class="text-dark">Price: '.$item["item_price"].'</p>
                          </div>
                          </div>
                          
                        </div>
                        <div class="modal-footer">
                          <input type="submit" value="Edit" class="btn btn-secondary text-light" >
                          <input  type="hidden" name="product_id" value="'.$product_id.'">
                          </form>
                          
                          <form action="adminProductRemove.php" method="post">
                          
                          <input type="submit" value="Remove"  class="btn btn-primary text-light">
                          <input  type="hidden" name="product_id" value="'.$product_id.'">

                          

                          </form>
                        </div>
                      </div>
                    </div>
                  </div> 
                

                   </div>
               </div>';
           $count++;
           
           }
       
           
       echo '</div>';
     
     ?>


        <script>
        const alertdiv = document.getElementById("alert-added-inside");
        window.addEventListener("load", () => {
            setTimeout(() => {
                alertdiv.style.display = "none";
                // alertdiv.style.opacity = "0";
            }, 2000)

        })
        </script>
    </div>
</body>

</html>