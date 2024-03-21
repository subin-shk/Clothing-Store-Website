<?php
    require_once '../db_conn.php';
    
    if($_POST){
        $name = addslashes($_REQUEST['item_name']);
        $image=addslashes($_REQUEST['item_image']);
        $price = $_REQUEST['item_price'];
        $cat=$_REQUEST['product_cat'];
        $type=$_REQUEST['item_type'];
        // echo $name;
        // echo $p_desc;
        // echo $price;
        // echo $p_desc;
        // echo$c_id;
        // echo $item_image;
        
        // $c_id = $_REQUEST['category'];


        $q_product = "SELECT * from items where item_name= '$name' and item_price = '$price'";

        $result = mysqli_query($conn,$q_product);
        if(mysqli_num_rows($result)==0){
        

                $q_insert_product = "INSERT INTO items (item_name,item_image,item_price,product_cat,item_type) values ('$name','$image','$price','$cat','$type')";
                if(mysqli_query($conn,$q_insert_product)){
                    // echo "
                    // <div class='server_success'>
                    // Product is Added !
                    // </div>
                    // ";
                    header("refresh:2;url=addProduct.php?st=added");
                }else{
                    echo "error";
                }
            }
            else{
                header("refresh:2;url=addProduct.php?st=notadded");
            }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product - CloverEmporium</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="admin.css">
        
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.1.0/remixicon.css"
        integrity="sha512-dUOcWaHA4sUKJgO7lxAQ0ugZiWjiDraYNeNJeRKGOIpEq4vroj1DpKcS3jP0K4Js4v6bXk31AAxAxaYt3Oi9xw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
   form {
    display: flex;
    flex-direction: column;
    align-items: center;
  }
  
  .form-group {
    display: flex;
    flex-direction: row;
    align-items: center;
    margin-bottom: 10px;
  }
  
  label {
    margin-right: 10px;
    width: 150px;
  }
  
  input {
    padding: 5px;
    width: 400px; /* You can adjust the width as needed */
  }
</style>
</head>

<body>
    <?php
    include("adminIndex.php");
    ?>
    <?php
    if(isset($_GET["st"])){
        $status=$_GET["st"];
        if($status== "added"){
            echo'<div id="alert-added"></div>
            <div id="alert-added-inside" class="alert alert-danger alert-dismissible fade show"style="text-align:center;width:22vw;position:fixed;top:50%;left:40%;z-index:100;" role="alert">
            Item added successfully!!
            </div>
            </div>
            ';
        }else{
            echo'<div id="alert-added"></div>
            <div id="alert-added-inside" class="alert alert-danger alert-dismissible fade show"style="text-align:center;width:22vw;position:fixed;top:50%;left:40%;z-index:100;" role="alert">
            Item not added!!
            </div>
            </div>
            ';
            
        }
    }
    ?>
    <div class="body-main">

            <h1 class="text-center">Add Products</h1>
            <div class="bulit_icon"><img src="../assets/images/bulit-icon.png"></div>
            
        <form id="addProductForm" action="" method="post" enctype="multipart/form-data" style="margin:0 auto; border: 1px solid #000; padding:20px; border-radius:8px; width: 800px; background: linear-gradient(rgb(241, 203, 203),#fff);">
        <div class="form-group">
            <label for="" class="text-dark">Product Name: </label>
            <input class="input_xl  border-primary rounded-pill" id="name" type="text" name="item_name" placeholder="Name of Product" required>
            </div>
            <br>

            <!-- <label for="">URL of Photo : </label> -->
            <div class="form-group">
            <label for="" class="text-dark">Product Image: </label> <input class="input_xl border-primary rounded-pill" name="item_image" type="text" id="image" placeholder="Mention image file name" required>
            </div>
            <br>

            <div class="form-group">
            <label for="" class="text-dark">Price: </label><input class="input_xl border-primary rounded-pill" min=0 type="number" id="price" name="item_price" placeholder="Mention Price of the product" required>
            </div>
            <br>
            
            <div class="form-group">
            <label for="" class="text-dark">Category: </label>
            <!-- <select name="method" class="form-control input_xl text-dark  border-primary rounded-pill" min=0 style="width:400px;" type="text" id="category" name="product_cat" required>
                <option value="" class="text-dark" disabled selected>Choose the category of product</option>
                    <option class="text-dark" value="women">Women</option>
                    <option class="text-dark" value="men">Men</a></option>
                    <option class="text-dark" value="kids">Kids</a></option>
                </select> -->
            <input class="input_xl text-dark  border-primary rounded-pill" min=0 type="text" id="category" name="product_cat" placeholder="Choose the category of the item (women, men, kid)" required>
            </div>
            
            <br>
            <div class="form-group">
            <label for="" class="text-dark">Product type: </label>
            <input class="input_xl border-primary rounded-pill" min=0 type="text" id="type" name="item_type" placeholder="Mention the type of product" required>
            <br>
            </div>
            <br>


            <input class="btn btn-primary" name="add" type="submit" style="width:200px;" value="Add Product">
        </form>
    </div>

    </div>
    <script>
    const alertdiv = document.getElementById("alert-added-inside");
    window.addEventListener("load", () => {
        setTimeout(() => {
            alertdiv.style.display = "none";
            // alertdiv.style.opacity = "0";
        }, 2000)

    })
    </script>
</body>

</html>