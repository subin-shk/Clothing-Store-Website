<?php
    require_once '../db_conn.php';
    
    if($_POST){
        
        $user_id=$_REQUEST['user_id'];
       
        $sql_user_remove = "DELETE  from users where id= '$user_id'";

        $result = mysqli_query($conn,$sql_user_remove);
        
        header("refresh:2;url=users.php");
        }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List - CloverEmporium</title>
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
    include("adminIndex.php");
    include("../db_conn.php");
    ?>

    <div class="body-main">
        
    <h1 class="text-center">User List</h1>
    <div class="bulit_icon"><img src="../assets/images/bulit-icon.png"></div>
        <?php
              $sql = "SELECT * FROM `users`";
              $result = mysqli_query($conn,$sql);
            echo '
            <table  cellpadding=15 class="text-dark text-center" style="border: 1px solid #000; padding:20px; border-radius:8px;margin:0 auto; margin-top:50px; background: linear-gradient(rgb(241, 203, 203),#fff);" >
            <tr style="border-bottom:1px solid #000;">
                <th>User ID</th>
                <th>User-name</th>
                <th>Email</th>
                <th>User Type</th>
                <th style="width:100px;">Action</th>
            </tr>
            ';
       while($item = mysqli_fetch_assoc($result))
       {
        
           echo'
            <tr>
                <td>'.$item["id"].'</td>
                <td>'.$item['username'].'</td>
                <td>'.$item['email'].'</td>
                <td>'.$item['user_type'].'</td>
                <td>
                
                <form action="" method="post">
                          <button type="submit" class="border border-primary rounded-pill bg-primary text-light py-1 px-2">Remove</button>
                          
                          <input  type="hidden" name="user_id" value="'.$item['id'].'">
                          </form>
                </td>
            </tr>
           ';
           
          }
           
     
     ?>
    </div>
    <script>

    </script>
</body>

</html