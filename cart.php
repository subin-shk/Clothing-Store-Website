<?php
if(!session_id())
    session_start();
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cart - CloverEmporium</title>
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
        include("db_conn.php");
        require_once("header.php");
        $userid = $_SESSION["userid"];



        
    ?>
    <section class="jubotron" style="margin-bottom: 50px;">

        <!-- items-div -->
        <div class="cart-items container">
        <h1 style="text-align:center;">Cart</h1>
        <div class="bulit_icon"><img src="assets/images/bulit-icon.png"></div>
            <?php 
            // echo"$userid";
            $sql="SELECT * from cart where id=$userid";
            $result=mysqli_query($conn,$sql);
            $rows=mysqli_num_rows($result);
            if ($rows==0) {

                echo"<div class='empty-cart'><br>
                <h3>Cart is empty.</h3><br>
                <a href='womens.php' class='btn btn-primary' style='margin: 0 auto; margin-top:20px; width: auto; padding: 15px;'>Add items</a><br><br>
                </div>
                ";
                
            }
            else{
                echo"<div class='nonempty-cart'>
                <div class='internal-nonempty'>
                <div class='internal-right' >";
                echo"<table style='width:700px;height:200px;' cellpadding='20';>
                    <tr style='border-bottom: 1px #000 solid'>
                        <th>Image</th>
                        <th>Item</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        </tr>
                ";

                while($item=mysqli_fetch_assoc($result)){
                    $cart_id= $item["cart_id"];
                    $item_id=$item["item_id"];
                    $product_quantity=$item["product_quantity"];
                    
                        // Check if product_quantity is not set or less than 1
                    if (!isset($product_quantity) || $product_quantity < 1) {
                        $product_quantity = 1; // Set it to 1 by default
                    }

                    $sql_item="SELECT * from items where item_id=".$item_id."";
                    $result_item=mysqli_query($conn,$sql_item);
                    $item=mysqli_fetch_assoc($result_item);
                    
                    $item_name=$item["item_name"];
                    $item_price=$item["item_price"];
                    $item_image=$item["item_image"];

                    //for quantity update
                    $sql_quantity="select * from cart";
                    $result_quantity=mysqli_query($conn,$sql_quantity);
                    $item_qua=mysqli_fetch_assoc($result_quantity);
                    

                    $item_quantity=$item_qua["product_quantity"];




                    echo'
                    <tr>
                    <td><img style="height:100px; width: 100px; border-radius:20px;padding-bottom:5px;" src="assets/images/products/'.$item_image.'"</td>
                    <td>'.$item_name.'</td>
                    <td class="price">'.$item_price.'</td>
                    <td>

                    <form method="post" action="handlequan.php?cid='.$cart_id.'" style="width:170px;">
                    
                    <input type="number" style="width:60px;" class="quantity rounded-pill" name="product_quantity"  value="'.$product_quantity.'"  min="1" max="50" onchange="handlequan()" >
                    &nbsp;&nbsp;
                    <input type="submit" name="update_product_quantity" value="Update" class="btn btn-primary rounded-pill">
                    </form>

                    </td>
                    <td class="sum" name="sum"></td>

                    <td><a href="cartRemove.php?itemid='.$item_id.'" class="btn btn-primary rounded-pill">Remove<a></td>
                    </tr>
                    ';

                }
                echo '</table></div>
                <div class="total-div"><h1>Grand Total:</h1> <h3><p id="grandtotal" name="grandtotal"></p></h3> 
                
                <a href="womens.php" id="buy-more-button" class="btn btn-primary" style="padding:10px;">Buy more</a>



                <input type="hidden" name="item_id" value="'.$item_id.'">
                
                <a href="checkout.php" class="btn btn-primary" style="margin-top:10px; padding:10px;" >Check Out</a></div>
                
                </div>
                ';
                


        }
        ?>
        </div>
    </section>
<!-- <?php
        if(isset($_POST['update_product_quantity'])) {
            $quantity = $_POST['product_quantity'];
            $total_price = $POST['sum'];
        
            $sql = "UPDATE cart SET product_quantity='$quantity' WHERE item_id='$item_id'";
            
            if ($conn->query($sql) === TRUE) {
                echo "Quantity updated successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $sql_sum="UPDATE cart SET total_price='$total_price' WHERE item_id='$item_id'";
            if ($conn->query($sql_sum) === TRUE) {
                echo "Total Price updated successfully";
            } else {
                echo "Error: " . $sql_sum . "<br>" . $conn->error;
            }
        }


?> -->





<!-- <?php
require_once('footer.php');
?> -->




</body>

<script>
const quan = document.getElementsByClassName("quantity");
const price = document.getElementsByClassName("price");
const sums = document.getElementsByClassName("sum");
const total = document.getElementById("grandtotal");

function handlequan() {
    let finalSum = 0;
    for (let i = 0; i < quan.length; i++) {
        let sum = Number(quan[i].value) * Number(price[i].innerHTML);
        sums[i].innerHTML = sum;
        finalSum += sum;
    }
    total.innerHTML = "Rs. "+finalSum+"/-";

    // document.getElementById("grandtotal").value = finalSum;
}
handlequan();

// const dec = document.getElementById("dec");
// const inc = document.getElementById("inc");
// dec.addEventListener("click", () => {
//     for (let i = 0; i < quan.length; i++) {


//         quan[i].value = quan[i].value - 1;
//         handlequan();
//     } 
// })



</script>


/</html>