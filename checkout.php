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
    <?php require_once("header.php");  ?>
    <div id="checkout-main-div" style="margin: 100px 0;">
        
        <h1 style="text-align:center;">Checkout</h1>
        <div class="bulit_icon"><img src="assets/images/bulit-icon.png"></div>
        <br>
        <p id="textField"></p>
        <form autocomplete="off" method="POST" class="container" #signup_form
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
    </div>

    <?php require_once("footer.php");  ?>

</body>

</html>