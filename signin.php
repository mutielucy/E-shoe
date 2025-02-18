<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>HTML Sign In</title>
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
            
            <div class = "topnav-right">
                <a href = "signup.html" >Sign Up</a>
                <a href = "signin.html" >Sign In</a>
            </div>
        </div>
        <div class = "header">
            <h1>Sign In Header</h1>
        </div>
        <div class = "row">
            <div class = "sidebar">
                <h3>Sign In Form</h3>
			<form action = "processes/user_processes.php" method = "POST" autocomplete = "off" >
                <div>
                    <label for = "">Username: </label>
                    <input type = "text" name = "username" placeholder=" Your username" required autofocus />
                </div>
                <div>
                    <label for = "">Password: </label>
                    <input type = "password" name = "password" placeholder=" Your password" required />
                </div>				
                    <div>
					<input type = "submit" name = "signin" value = "Sign In" />
				</div>
             </form> 
            </div>
            <div class = "sidebar">
            <h3>Side bar</h3>
            This where you Sign In as a admin,buyer,seller or a delivery person.
        </div>
        </div>
        <div class = "footer" >
            <h3>Copyright &copy; eShoe 2019</h3>
        </div>
    </body>
</html>