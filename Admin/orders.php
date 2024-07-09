<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Orders - CloverEmporium</title>
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
    include("adminIndex.php");?>
    <div class="body-main" >

    <h1 class="text-center">Orders' Made</h1>
    <div class="bulit_icon"><img src="../assets/images/bulit-icon.png"></div>

        <table cellpadding=15 class="text-dark text-center border border-dark" style="margin:0 auto;  padding:20px; background: linear-gradient(rgb(241, 203, 203),#fff);">
        <tr style="border-bottom:1px solid #000;">
        
                                <th>Name</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>State</th>
                                <th>Country</th>
                                <th>Phone</th>
                                <th>Payment Method</th>
                                <th>Total Amount</th>
                                <th>Order Date</th>
        </tr>

        <?php
        // Include database connection
        include '../db_conn.php';

        // Query to fetch orders
        $query = "SELECT * FROM userorders";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            // Output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row['state'] . "</td>";
                echo "<td>" . $row['country'] . "</td>";
                echo "<td>" . $row['phone'] . "</td>";
                echo "<td>" . $row['payment_method'] . "</td>";
                echo "<td>" . $row['total_amount'] . "</td>";
                echo "<td>" . $row['order_date'] . "</td>"; // Assuming you have a timestamp for order creation

   
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No orders found</td></tr>";
        }

        // Close database connection
        mysqli_close($conn);
        ?>
    </table>





    </div>

</body>

</html>