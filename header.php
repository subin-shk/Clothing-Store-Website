<?php $page = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1); ?>

<?php
if(!session_id())
    session_start();
 
?>

<html>
    <head>
            <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>



<header>




<nav class="nav" >
        <div class="nav-logo">
            <a href="index.php"><h1 style="margin-top:20px;"><span class="text-primary">Clover</span>Emporium</h1></a>
        </div>
        <div class="nav-menu flex" id="navMenu">
            <ul>
                <li><a href="index.php" class="link <?= $page == 'index.php' ? 'active':''; ?>">Home</a></li>


                <li>
                <div class="dropdown">
                
                <button class="dropbtn noHover"><span class="link <?= $page == 'womens.php' || $page == 'mens.php' || $page == 'kids.php' ? 'active':''; ?> "  >Products&nbsp;&nbsp;<i class="fa-solid fa-angle-down"></i></span></button>
                <div class="dropdown-content">
                <a href="womens.php">Women's Collection</a>
                <a href="mens.php">Men's Collection</a>
                <a href="kids.php">Kids' Collection</a>
                </div>

                </div>

                <li><a href="about.php" class="link <?= $page == 'about.php' ? 'active':''; ?>">About</a></li>
                <li><a href="contact.php" class="link <?= $page == 'contact.php' ? 'active':''; ?>">Contact</a></li>
                <li><a href="search.php" class="link <?= $page == 'search.php' ? 'active':''; ?>">Search&nbsp;&nbsp;<i class="fa-solid fa-magnifying-glass"></i></a></li>


            <?php
                    
                    if(isset($_SESSION['login'])&&$_SESSION['login']==true){
                                          

                        echo "<li>
                        <a href='cart.php' class='link cart'>Cart&nbsp;&nbsp;&nbsp;<i class='fa-solid fa-cart-shopping'></i> </a>";

                        echo "<a href='logout.php' class='link'>Logout&nbsp;&nbsp;&nbsp;<i class='fa-solid fa-arrow-right-from-bracket'></i></a></li> ";

      
                    }
                    else{

                        echo "<li><a href='login.php' class='link'>Login&nbsp;&nbsp;<i class='fa-solid fa-arrow-right-to-bracket'></i></a></li>";
                     
                    }
                    
                    echo"</ul>";
                    ?>



            <div class="nav-menu-btn">
                <i class="bx bx-menu" onclick="myMenuFunction()"></i>
            </div>

        </div>
    </nav>

    <script>
   
   function myMenuFunction() {
    var i = document.getElementById("navMenu");
    if(i.className === "nav-menu") {
        i.className += " responsive";
    } else {
        i.className = "nav-menu";
    }
   }
 
</script> 
    


</header>




</body>
