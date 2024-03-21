<?php
if(!session_id())
    session_start();
 

    
        if(isset($_SESSION['login'])&&$_SESSION['login']==true){
            
        include("db_conn.php");

        // $quantity=$_POST["quantity"];
        $item_id=$_POST["product_id"];
        // echo $item_id;        
        $u_id=$_SESSION['userid'];
            $sql2="select * from cart where item_id=$item_id and id=$u_id";   
            $result2=mysqli_query($conn,$sql2);
            $row2=mysqli_num_rows($result2);
       
            if ($row2==0) {
                $sql="INSERT into cart(item_id,id) values($item_id,$u_id)";
                $result=mysqli_query($conn,$sql);
                if(!$result){
                    die("".mysqli_error($conn));
                }
                header("location:cart.php");           
            }
            else{
                header("location:index.php?status=aa#explore-section");
            }
        
       
    }else{
        header("location:login.php");
            
                            
                            
    }
?>