<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - CloverEmporium</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="admin.css">
        
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.1.0/remixicon.css"
        integrity="sha512-dUOcWaHA4sUKJgO7lxAQ0ugZiWjiDraYNeNJeRKGOIpEq4vroj1DpKcS3jP0K4Js4v6bXk31AAxAxaYt3Oi9xw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
    .admin_lala a:hover{
    color:#000;
    }
        </style>
</head>

<body>
    <?php
    include("adminIndex.php");
    include("../db_conn.php");
    ?>

    <div class="body-main">
    <h1 class="text-center">Admin Dashboard</h1>
    <div class="admin_lala bg-light border border-primary rounded-pill  font-weight-bold text-center px-3 py-1" style="width:500px; margin-left:350px; margin-bottom: 10px;">
            <a href="products.php">All products</a> |
            <a href="addProduct.php">Add Products</a> |
            <a href="orders.php">Orders' Placed</a> |
            <a href="users.php">Users</a>
    </div>
            <div class="bulit_icon"><img src="../assets/images/bulit-icon.png"></div>
        <div class="dashboard-main">

            <div class="dashboard-box ">
            <p>No. of Products</p>
                <?php
                // $sql_items="SELECT COUNT(item_id) as total FROM items;";
                $sql_items="SELECT * FROM items;";
                $result_items = mysqli_query($conn,$sql_items);
                $item=mysqli_num_rows($result_items);
                echo"$item";
                ?>
                
            </div>

            <div class="dashboard-box ">
            <p>No. of Categories</p>
                <?php
                // $sql_items="SELECT COUNT(item_id) FROM items;";
                $sql_items="SELECT * FROM categories;";
                $result_items = mysqli_query($conn,$sql_items);
                $item=mysqli_num_rows($result_items);
                echo"$item";
                ?>
                
            </div>
            

            <div class="dashboard-box ">
            <p>No. of Users</p>
                <?php
                // $sql_items="SELECT COUNT(item_id) FROM items;";
                $sql_items="SELECT * FROM users;";
                $result_items = mysqli_query($conn,$sql_items);
                $item=mysqli_num_rows($result_items);
                echo"$item";
                ?>
                
            </div>

            <div class="dashboard-box ">
            <p>No. of Orders</p>
                <?php
                // $sql_items="SELECT COUNT(item_id) FROM items;";
                $sql_items="SELECT * FROM orders";
                $result_items = mysqli_query($conn,$sql_items);
                $item=mysqli_num_rows($result_items);
                echo"$item";
                ?>
                
            </div>


        </div>
    </div>
    <script>

    </script>
</body>

</html>