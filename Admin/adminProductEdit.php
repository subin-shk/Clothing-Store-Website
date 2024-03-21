<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product - CloverEmporium</title>
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
    require_once("../db_conn.php");
    include("adminIndex.php");
    ?>
    <?php
    $item_id=$_POST["product_id"];
    $sql_edit="SELECT * from items where item_id=$item_id";
    $result_edit= mysqli_query($conn,$sql_edit);
    $item=mysqli_fetch_assoc($result_edit);
    echo'
    <div class="body-main">

    <h1 class="text-center">Edit Product</h1>
    <div class="bulit_icon"><img src="../assets/images/bulit-icon.png"></div>
        <form id="addProductForm" action="productEditHandle.php" method="post" class="text-center" enctype="multipart/form-data" style="margin:0 auto; border: 1px solid #000; padding:20px; border-radius:8px; width: 800px; background: linear-gradient(rgb(241, 203, 203),#fff);">
            
        <div class="form-group">
        <label for="" class="text-dark">Product Name: </label>
        <input class="input_xl  border-primary rounded-pill" id="name" type="text" name="item_name" value="'.$item["item_name"].'" required>
        </div>
        <br>

        <!-- <label for="">URL of Photo : </label> -->
        <div class="form-group">
        <label for="" class="text-dark">Product Image: </label> <input class="input_xl border-primary rounded-pill" name="item_image" type="text" id="image" value="'.$item["item_image"].'" required>
        </div>
        <br>

        <div class="form-group">
        <label for="" class="text-dark">Price: </label><input class="input_xl border-primary rounded-pill" min=0 type="number" id="price" name="item_price" value="'.$item["item_price"].'" required>
        </div>
        <br>
        
        <div class="form-group">
        <label for="" class="text-dark">Category: </label>

        <input class="input_xl text-dark  border-primary rounded-pill" min=0 type="text" id="category" name="product_cat" value="'.$item["product_cat"].'" required>
        </div>
        
        <br>
        <div class="form-group">
        <label for="" class="text-dark">Product type: </label>
        <input class="input_xl border-primary rounded-pill" min=0 type="text" id="type" name="item_type" value="'.$item["item_type"].'" required>
        <br>
        </div>
        <br>
        
        
        
        
        
        



    </select><br>

                            <input type="hidden" name="item_id" value="'.$item_id.'">
    <input class="btn btn-primary rounded-pill" style="width:200px;" type="submit" value="Save Edit">
    </form>
    </div>

    </div>
    ';


    ?>
    <script>
    // const alertdiv = document.getElementById("alert-added-inside");
    // window.addEventListener("load", () => {
    //     setTimeout(() => {
    //         alertdiv.style.display = "none";
    //         // alertdiv.style.opacity = "0";
    //     }, 2000)

    // })
    </script>
</body>

</html>