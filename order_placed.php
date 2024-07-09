<?php
@include 'db_conn.php';
session_start();

if (!isset($_GET['order_id'])) {
    echo "No order ID provided.";
    exit();
}

$order_id = $_GET['order_id'];
$id = $_SESSION['userid'];

// Retrieve order details
$query = "SELECT * FROM orders WHERE order_id = '$order_id' AND id = '$id'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    $order = mysqli_fetch_assoc($result);
} else {
    echo "Order not found.";
    exit();
}

// Retrieve ordered products
$query_products = "SELECT * FROM order_items WHERE order_id = '$order_id'";
$result_products = mysqli_query($conn, $query_products);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Placed - CloverEmporium</title>
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
    <script>alert "Order Placed Successfully";</script>
    <?php include("header.php"); ?>
    <div class="container">
        <h1>Order Details</h1>
        <p><strong>Order ID:</strong> <?php echo $order['order_id']; ?></p>
        <p><strong>Name:</strong> <?php echo $order['name']; ?></p>
        <p><strong>Email:</strong> <?php echo $order['email']; ?></p>
        <p><strong>Address:</strong> <?php echo $order['address']; ?></p>
        <p><strong>State:</strong> <?php echo $order['state']; ?></p>
        <p><strong>Country:</strong> <?php echo $order['country']; ?></p>
        <p><strong>Phone No:</strong> <?php echo $order['phone_no']; ?></p>
        <p><strong>Payment Method:</strong> <?php echo $order['payment_method']; ?></p>
        <p><strong>Status:</strong> <?php echo $order['status']; ?></p>
        
        <h2>Products</h2>
        <ul>
            <?php while ($product = mysqli_fetch_assoc($result_products)) { ?>
                <li>
                    <strong><?php echo $product['item_name']; ?></strong>
                    <p>Price: <?php echo $product['item_price']; ?></p>
                    <p>Quantity: <?php echo $product['quantity']; ?></p>
                </li>
            <?php } ?>
        </ul>
    </div>
</body>
</html>
