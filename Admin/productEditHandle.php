<?php
    require_once '../db_conn.php';
    
        $name = addslashes($_REQUEST['item_name']);
        // $p_desc = addslashes($_REQUEST['item_desc']);
        $price = $_REQUEST['item_price'];
        $image=$_REQUEST['item_image'];
        $category=$_REQUEST['product_cat'];
        $item_type=$_REQUEST['item_type'];
        // echo $name;
        // echo $p_desc;
        // echo $price;
        // echo $p_desc;
        // echo$c_id;
        // echo $item_image;
        
 


        $item_id= $_REQUEST['item_id'];

                $q_insert_product = "UPDATE items SET 
                item_name='$name',
                
                item_image='$image',
                -- product_cat_id=$c_id,
                item_price='$price',

                product_cat='$category',
                
                item_type='$item_type'


                WHERE  item_id='$item_id'";
                if(mysqli_query($conn,$q_insert_product)){
                    echo "edited";
                    header("location:products.php?editstatus=edited");
                }else{
                    header("location:products.php?editstatus=notedited");
                    
                }
           
    
?>