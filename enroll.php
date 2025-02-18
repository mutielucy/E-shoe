<?php
//admin add users to db
require_once "config/dbConnect.php";

if (isset($_POST["addusers"])){
    // Declaring the variables
    $firstname = mysqli_real_escape_string($dbConn, $_POST['firstname']);
    $lastname= mysqli_real_escape_string($dbConn, $_POST['lastname']);
    $username= mysqli_real_escape_string($dbConn, $_POST['username']);
    $Email = mysqli_real_escape_string($dbConn, $_POST['email']);
    $phonenumber= mysqli_real_escape_string($dbConn, $_POST['phonenumber']);
    $Password= mysqli_real_escape_string($dbConn, $_POST['password']);
    $ConfPass= mysqli_real_escape_string($dbConn, $_POST['ConfPass']);
    $userType = mysqli_real_escape_string($dbConn, $_POST['userType']);

    if ($Password != $ConfPass) {
      $error = "Password does not match confirm password";
      $_SESSION["error"] = $error;
      header("Location: enroll.php?addusers=Failed");
      exit();
    }

    // Encrypting Password
    $hashpass = password_hash($ConfPass, PASSWORD_DEFAULT);

    $unames = "SELECT * FROM users WHERE username = '$username' LIMIT 1";

    $dup_names = $dbConn -> query($unames);

    if ($dup_names -> num_rows > 0) {
      $error = "Username already exists.";
      $_SESSION["error"] = $error;
      header("Location: enroll.php?Adduser=Failed");
      exit();
    }

    //Insering into database
    $sql = "INSERT INTO users (firstname, lastname, username, email, phonenumber, password, userType) VALUES ('$firstname', '$lastname', '$username', '$Email', '$phonenumber', '$hashpass', '$userType')";

    // mysqli_query($dbConn, $sql);
    if ($dbConn -> query($sql) === TRUE) {
      $success = "User has been successfully added to the database.";
      $_SESSION["success"] = $success;
      header("Location: enroll.php?Add Users = Success");
    }else{
      die("Failed to insert new record" . $dbConn-> error);
    }
  }

?>
<!DOCTYPE html>
<html>
<head>
  <title>Enroll</title>
  <meta name ="viewport" content="width=device-width, initial-scale=1" /><meta charset="utf-8" />
  <link rel="stylesheet" type="text/css" href="css/signup.css"/>
</head>
<body>
 <div class = "header">
  <h1> Add Users </h1>
  </div>
  <div class = "row">
    <div class = "content">
      <h1>Enroll Here</h1>
      <form action="" method = "POST" autocomplete="on">
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
          <input type = "email" name = "email" placeholder=" Your email" required />
        </div>
        <div>
          <label for = "">Phonenumber: </label>
          <input type = "text" name = "phonenumber" placeholder=" Your phonenumber" required />
        </div>
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
            <option value = "Seller">Seller</option>
          </select>
      </div>
      <div>
        <input type="submit" name="addusers" value="Enroll" />
      </div>
      </form>
  <div class = "footer" >
    <h3>Copyright &copy; eshoe 2019</h3>
  </div>
</body>
</html>