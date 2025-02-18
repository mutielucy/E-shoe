<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
  <meta name ="viewport" content="width=device-width, initial-scale=1" /><meta charset="utf-8" />
  <link rel="stylesheet" type="text/css" href="css/signup.css"/>
</head>
<body>
	<div class = "topnav">
		<a href="./">Home</a>
		<a href="">About us</a>
		<a href="">Product</a>
		<a href="">Search</a>
		<a href="contactus.html">Contact Us</a>

		<div class = "topnav-right">
			<a href="signup.html">Sign Up</a>
			<a href="signin.html">Sign In</a>
		</div>
	</div>
	<div class = "header">
		<h1>Sign Up Header</h1>
	</div>
	<div class = "row">
		<div class = "content">
			<h2>Sign Up Here</h2>
			<form action="processes/user_processes.php"method = "POST" autocomplete="off">
				<div>
					<label for = "">Firstname: </label>
					<input type = "text" name = "firstname" placeholder=" Your firstname" required autofocus />
				</div>
				<div>
					<label for = "">Lastname: </label>
					<input type = "text" name = "lastname" placeholder=" Your lastname" required autofocus />
				</div>
				<div>
					<label for = "">Username: </label>
					<input type = "text" name = "username" placeholder=" Your username" required />
				</div>
				<div>
					<label for = "">Email: </label><br />
					<input type = "email" name = "email" placeholder=" Your email" maxlength = "100"required />
				</div>
				<div>
					<label for = "">Phonenumber: </label>
					<input type = "text" name = "phonenumber" placeholder=" Your phonenumber" required />
				</div>
				<div>
					<label for = "">Password: </label>
					<input type = "password" name = "password" placeholder=" Your password" required />
				</div>
				<div>
					<label for = "">Confirmpassword: </label>
					<input type = "password" name = "ConfPass" placeholder=" Confirm password" required />
				</div>
				<div>
					<select name = "userType" required>
            <option value = "">----Please Select User Type----</option>
            <option value = "Admin">Admin</option>
            <option value = "Buyer">Buyer</option>
            <option value = "Seller">Seller</option>
            <option value = "Delivery Person">Delivery Person</option>
          </select>
			</div>
			<div>
				<input type = "submit" name = "signup" value = "Sign Up" />
			</div>
			</form>
			<?php
         if(!isset($_GET['signup'])){
            exit();
        }
        else{
            $signupCheck=$_GET['signup'];

            if($signupCheck=="Password error"){
            echo"<p id='error'>Password and Confirm Password does not match!</p>";
            exit();
            }
            elseif($signupCheck=="success"){
            echo"<p id='success'>User registered;Click BACK to sign in</p>";
            exit();
            }
            elseif($signupCheck=="Credentials error"){
            echo"<p id='error'>Invalid credentials!</p>";
            exit();
            }
            elseif($signupCheck=="Signup error"){
            echo"<p id='error'>Signup unsuccessful!</p>";
            exit();
            }
        }     
    ?>
        </div>
    </body>  
</html>
		</div>
		<div class = "sidebar">
			<h3>Side bar</h3>
			This where you Sign Up as a admin,buyer,seller or a delivery person.
		</div>
	</div>
	<div class = "footer" >
		<h3>Copyright &copy; eShoe 2019</h3>
	</div>
</body>
</html>