<?php
    session_start();
    require_once "config/dbConnect.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Welcome</title>
        <meta name = "viewport" content = "width=device-width, initial-scale=1" />
        <meta charset = "uft-8" />
        <link rel = "stylesheet" href = "css/signup.css" />
    </head>
    <body>
        <div class = "topnav">
            <a href="./">Home</a>
        <a href="">About us</a>
        <a href="">Product</a>
        <a href="">Search</a>
        <a href="contactus.html">Contact Us</a>
        <a href="index.php">Buyer Carts</a>
            
            <div class = "topnav-right">
                <?php
                if (isset($_SESSION["control"])){
                ?>
                <div class = "usertitle">
                    <h4>Welcome <?php print $_SESSION["control"]["username"]; ?></h4>
                </div>
                <a href = "processes/user_processes.php?signout" >Sign Out</a>
                <?php
                
                    }
                ?>
            </div>
        </div>
        <div class = "footer" >
            Copyright &copy; eShoe 2019
        </div>
    </body>
</html>