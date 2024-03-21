<?php
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        include("db_conn.php");

        $username = $_POST["username"];
        $password = $_POST["password"];

        $usertype=$_GET["user_type"];

        //check if email in database
        $sql = "SELECT * FROM `users` WHERE username='$username'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_num_rows($result);
        $item = mysqli_fetch_assoc($result);

        if($row==1)
        {
            //email exits in databse


            //check password
            if($password==$item["password"])
            {


                // //session start
                session_start();
                $_SESSION['login']=true;
                $_SESSION['username']=$item['username'];
                $_SESSION['userid']=$item['id'];

                if($item['user_type'] == 'admin'){
                    header("location: Admin/adminDashboard.php");
                }elseif($item['user_type'] == 'user'){
                header("location: index.php");
                }
                
                
            }
            else{
                echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
                // header("location: login.php?c=none&e=notexist&p=nomatch");
            }   
        }
        else{
            
            echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
            // header("location: login.php?c=none&e=notexist&p=none");

        }
    }
?>