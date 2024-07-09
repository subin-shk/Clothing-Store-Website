<?php
@include 'db_conn.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userid = $_SESSION["userid"];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $phone = $_POST['phone'];
    $payment_method = $_POST['payment'];
    $total_amount = $_POST['amt'];

    // Insert order details into the userorder table
    $sql_insert = "INSERT INTO userorders (user_id, name, email, address, state, country, phone, payment_method, total_amount)
                   VALUES ('$userid', '$name', '$email', '$address', '$state', '$country', '$phone', '$payment_method', '$total_amount')";

    if (mysqli_query($conn, $sql_insert)) {
        if ($payment_method == "cash-on-delivery") {
            header("Location: order_successful.php");
            exit();
        }
    } else {
        echo "Error: " . $sql_insert . "<br>" . mysqli_error($conn);
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
        label {
            color: #000;
            margin-top: 5px;
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
            <div class="col" style="margin-left:100px; padding:0 50px;border-radius:10px;background: linear-gradient(rgb(241, 203, 203),#fff); ">
                <h1 style="text-align:center; margin-top:10px;">Products</h1>
                <hr style="color:black;">
                <?php 
                    $sql="SELECT * from cart where id=$userid";
                    $result=mysqli_query($conn,$sql);
                    $rows=mysqli_num_rows($result);
                    $grand_total=0;
                    while ($item=mysqli_fetch_assoc($result)) {
                        $item_id=$item["item_id"];
                        $product_quantity=$item["product_quantity"];
                        if (!isset($product_quantity) || $product_quantity < 1) {
                            $product_quantity = 1; 
                        }
                        $sql_item="SELECT * from items where item_id=$item_id";
                        $result_item=mysqli_query($conn,$sql_item);
                        $item=mysqli_fetch_assoc($result_item);
                        $item_name=$item["item_name"];
                        $item_price=$item["item_price"];
                        $item_image=$item["item_image"];
                        echo'
                        <div style=" width:500px;">        
                            <div class="items" style="float:left; width:130px; margin-top:15px;">
                                <div>
                                    <img src="assets/images/products/'.$item_image.'" alt="image" style="height:90px;width:90px;border-radius:10px;object-fit:cover;">
                                </div>
                                <p style="width:90px; color: black;">
                                    <b>Price:</b> '.$item_price.'<br>
                                    <b>Quantity:</b> '.$product_quantity.'<br>
                                    <b>Total:</b> '.$item_price*$product_quantity.'
                                </p>
                            </div>
                        </div>';
                        $grand_total+=$item_price*$product_quantity; 
                    }
                    echo'
                    <div class="row">
                        <h2 style="text-align:center; font-weight:bold; margin-top:25px;">Grand-Total: <br>Rs. '.$grand_total.'/-</h2>
                        <a href="cart.php" class="btn btn-primary " style="margin-top:10px; margin-left:10px; padding:10px; font-weight:bold;" >Back to Cart</a>
                    </div>';
                ?>
            </div>

            <div class="col">
                <form id="payment-form" method="POST" autocomplete="off" 
                    style="width:550px;height:470px;margin-right:100px;padding:40px;border-radius:10px;background: linear-gradient(rgb(241, 203, 203),#fff); ">
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
                    <input value="<?php echo $grand_total;?>" name="tAmt" type="hidden">
                    <input value="<?php echo $grand_total;?>" name="amt" type="hidden">
                    <input value="0" name="txAmt" type="hidden">
                    <input value="0" name="psc" type="hidden">
                    <input value="0" name="pdc" type="hidden">
                    <input value="epay_payment" name="scd" type="hidden">
                    <input value="<?php echo $invoice_no;?>" name="pid" type="hidden">
                    <input value="http://localhost/Clothing%20Store%20Website%20(Web%20Project)/order_successful.php" type="hidden" name="su">
                    <input value="http://localhost/Clothing%20Store%20Website%20(Web%20Project)/esewa_payment_failed.php" type="hidden" name="fu">
                    <div style="margin-top:25px;">
                        <label style="float:left; margin-top:5px; margin-right:15px;">Order now with:</label>
                        <div style="padding-top:5px;">
                        <input type="radio" name="payment" value="e-sewa"> E-Sewa
                        <input type="radio" name="payment" value="cash-on-delivery" style="margin-left:25px;"> Cash on Delivery
                        </div>
                    </div>
                    <input type="submit" name="order" value="Order now" class="btn btn-primary" style="margin-top: 20px; ">
                </form>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('payment-form').addEventListener('submit', function (e) {
            const selectedPaymentMethod = document.querySelector('input[name="payment"]:checked').value;
            if (selectedPaymentMethod === 'e-sewa') {
                this.action = 'https://uat.esewa.com.np/epay/main';
            } else if (selectedPaymentMethod === 'cash-on-delivery') {
                this.action = '';
            }
        });
    </script>
</body>

</html>
