<?php
//start session service
session_start();
//Importing database connection
require_once "../config/dbConnect.php";
//signup process
if (isset($_POST["signup"])) {
	//variable declaration
	$firstname = mysqli_real_escape_string($dbConn, $_POST["firstname"]);
	$lastname = mysqli_real_escape_string($dbConn, $_POST["lastname"]);
	$username = mysqli_real_escape_string($dbConn, $_POST["username"]);
	$email = mysqli_real_escape_string($dbConn, $_POST["email"]);
	$phonenumber = mysqli_real_escape_string($dbConn, $_POST["phonenumber"]);
	$password = mysqli_real_escape_string($dbConn, $_POST["password"]);
	$ConfPass = mysqli_real_escape_string($dbConn, $_POST["ConfPass"]);
	$userType = mysqli_real_escape_string($dbConn, $_POST["userType"]);
	//verifying if the password and confirm password are the same
	if ($password != $ConfPass) {
		header("Location: ../signup.php");
		exit();
	} 
	//encrypting password
	$hash_password = password_hash($ConfPass, PASSWORD_DEFAULT);
	//inserting data innto users table
	$user_insert = "INSERT INTO users(firstname, lastname, username, email, phonenumber, password, userType)VALUES('$firstname', '$lastname', '$username', '$email', '$phonenumber', '$hash_password', '$userType')";
	//executing the sql query
	if($dbConn->query($user_insert) === TRUE){
		header("Location: ../signin.php");
			exit();
			}else{
				die("Failed to insert the new record: " .$dbConn->error);
			}
	}
	//signin process
	if(isset($_POST["signin"])){
		//variable declaration
		$entered_username = mysqli_real_escape_string($dbConn, $_POST["username"]);
	$entered_password = mysqli_real_escape_string($dbConn, $_POST["password"]);
	//verify if username matches any record
	$spot_username = "SELECT * FROM users WHERE username = '$entered_username' LIMIT 1";
	//executing the select query
	$uName_res = $dbConn->query($spot_username);
	//count atleast one matching row
	if($uName_res->num_rows > 0){
		//session
		$_SESSION["control"] = $uName_res->fetch_assoc();
		//fetching stored password with session
		$stored_password = $_SESSION["control"]["password"];
		$userType = $_SESSION["control"]["userType"];
            
		//verify if entered password is identical to the stored password
		if (password_verify($entered_password, $stored_password)) {
			//if the two password match then redirect to viewUsers.php
			header("Location: ../viewUsers.php");
			exit();
		}else if($userType == "Admin"){
                    header("Location: ../admin.php");
                    exit();
		}else{
			//destroy control session and redirect back to signin.html
			unset($_SESSION["control"]);
			header("Location: ../signin.php");
			exit();
		}
	}else{
		//redirect back to signin.html
		header("Location: ../signin.php");
		exit();
	}
}
//signout process
if (isset($_GET["signout"])) {
			unset($_SESSION["control"]);
			header("Location: ../signin.php");
			exit();
}
?>