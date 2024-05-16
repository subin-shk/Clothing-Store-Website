<?php


    @include 'db_conn.php';
    
    session_start();
    
    if(isset($_POST['order'])){
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address= $_POST['address'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $phone = $_POST['phone'];
    $method = $_POST['method'];

        // Insert order into database
        $query = "INSERT INTO orders (name, email,address,state,country,phone_no,payment_method) VALUES ('$name', '$email','$address','$state','$country','$phone','$method')";
        $result = mysqli_query($conn, $query);
        
        if ($result) {
            echo "Order placed successfully!";
        } else {
            echo "Error: " . mysqli_error($conn);
        }

    

    }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Checkout - CloverEmporium</title>
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

  <style>
    label{
        color: #000;
        margin-top:5px;
    }

    select option:first {
    color: #000;
    }

  </style>


</head>

<body>
    <?php
        include("db_conn.php");
        require_once("header.php");
        $userid = $_SESSION["userid"];

        
    ?>
    <div id="checkout-main-div container" style="margin: 100px 0;">
        
        <h1 style="text-align:center;">Checkout</h1>
        <div class="bulit_icon"><img src="assets/images/bulit-icon.png"></div>
        <br>
        <div class="row">
            <!-- <div class="col"> -->
                    <form autocomplete="off" action="" method="POST" class="container" #signup_form 
                        style="width:550px;height:470px;margin-top:15px;padding:40px;border-radius:10px;background: linear-gradient(rgb(241, 203, 203),#fff); ">
                        
                            <p class="text-dark text-center bg-light border border-primary rounded-pill">Place your order</p>
                        


                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>

                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter your email" required>

                        </div>
                        <div style="display:flex; justify-content: space-between;">
                            <div class="form-group">
                                <label for="town">Address</label>
                                <input type="text" class="form-control" style="width:220px;" id="address" name="address"
                                    placeholder="Address" required>
                            </div>
                            <div class="form-group">
                                <label for="state">State</label>
                                <input type="text" class="form-control" style="width:220px;" id="state" name="state"
                                    placeholder="State" required>
                            </div>

                        </div>

                        <div class="form-group">
                                <label for="country">Country</label>
                                <input type="text" class="form-control" style="width:220px;" id="country" name="country"
                                    placeholder="Country" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Phone no.</label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter your Phone no." required>
                        </div>
                        <div class="form-group">
                            <label for="payment">Payment Method</label>
                            
                            <select name="method" class="form-control" required>
                            <option value="" disabled selected>Select your payment method</option>
                                <option value="cash on delivery">cash on delivery</option>
                                <option value="e-sewa"><a href="https://esewa.com.np/">e-sewa</a></option>
                                <option value="khalti"><a href="https://khalti.com/">khalti</a></option>
                            </select>
                        </div>

                        <input type="submit" name="order" value="Order now" class="btn btn-primary" style="margin-top: 20px; margin-left: 190px;">
                    </form>
                <!-- </div> -->
<!-- DISPLAY ITEM ON CART -->




<div style="width:250px;">
                <!-- <div class="col"> -->
<?php 
            // echo"$userid";
            $sql="SELECT * from cart where id=$userid";
            $result=mysqli_query($conn,$sql);
            $rows=mysqli_num_rows($result);

            $grand_total=0;

            if ($rows==0) {

                echo"<div class='empty-cart'><br>
                <h3>Cart is empty.</h3><br>
                <a href='products.php' class='btn btn-primary' style='margin: 0 auto; margin-top:20px; width: auto; padding: 15px;'>Add items</a><br><br>
                </div>
                ";
                
            }
            else{
                    while ($item=mysqli_fetch_assoc($result)) {

                        // $cart_id= $item["cart_id"];
                        $item_id=$item["item_id"];
                        $product_quantity=$item["product_quantity"];
        
                        $sql_item="SELECT * from items where item_id=$item_id";
                        $result_item=mysqli_query($conn,$sql_item);
                        $item=mysqli_fetch_assoc($result_item);
                        
                        $item_name=$item["item_name"];
                        $item_price=$item["item_price"];
                        $item_image=$item["item_image"];
                        echo'

                        <div class="items">
                        <div>
                            <img src="assets/images/products/'.$item_image.'" alt="image" style="height:70px;width:70px;border-radius:10px;object-fit:cover;">
                        </div>
                        <div>
                            <h5>'.$item_name.'</h5>
                            <div style="display:flex;justify-content:space-between;gap:10px;">
                            <h6>Price: '.$item_price.'</h6>
                            <h6>Quantity: '.$product_quantity.'</h6>
                            </div>
                        </div>
                        
                        <h5>Total: '.$item_price*$product_quantity.'</h5>
                        
                    </div>
                    ';
                    $grand_total+=$item_price*$product_quantity; 
                    }
                    echo'
                    </div>
                    <div style="position:absolute;right:10px;bottom:2px;"><h4 style="color:red;font-weight:bold;">Grand-Total: '.$grand_total.'</h4></div>
                    ';
                }


        
        ?>

                </div>
             </div>
    </div>









    <?php require_once("footer.php");  ?>

</body>


<script>
const quan = document.getElchementsByClassName("quantity");
const price = document.getElementsByClassName("price");
const sums = document.getElementsByClassName("sum");
const total = document.getElementById("grandtotal")

function handlequan() {
    let finalSum = 0;
    for (let i = 0; i < quan.length; i++) {
        let sum = Number(quan[i].value) * Number(price[i].innerHTML);
        sums[i].innerHTML = sum;
        finalSum += sum;
    }
    total.innerHTML = finalSum;
}
handlequan();




</html>