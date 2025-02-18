<?php
//admin add users to db
require_once "config/dbConnect.php";


  $uid = "SELECT * FROM users WHERE userId = '{$_GET['id']}' LIMIT 1";

  $dup_id = $dbConn -> query($uid);

  $row = mysqli_fetch_object($dup_id);

  $firstname = $row ->firstname;  
  $lastname =  $row ->lastname;  
  $username = $row ->username;  
  $email =  $row ->email; 
  $phonenumber =  $row ->phonenumber; 
  $userType =  $row ->userType
  ; 
  if(isset($_POST['editusers'])){

    $firstname = mysqli_real_escape_string($dbConn, $_POST['firstname']);
    $lastname= mysqli_real_escape_string($dbConn, $_POST['lastname']);
    $username= mysqli_real_escape_string($dbConn, $_POST['username']);
    $Email = mysqli_real_escape_string($dbConn, $_POST['email']);
    $phonenumber= mysqli_real_escape_string($dbConn, $_POST['phonenumber']);
    $userType = mysqli_real_escape_string($dbConn, $_POST['userType']);

  $update = "UPDATE users SET firstname='$firstname', lastname='$lastname', username='$username', email='$Email', phonenumber='$phonenumber', userType='$userType' WHERE UserID={$_GET['id']}";

  
  if ($dbConn -> query($update) === TRUE) {


      $success = "User has been successfully Edited.";
      $_SESSION["success"] = $success;

      header("Location: admin.php?Update=Successful");
      exit();
    }else{
      die("Failed to insert new record" . $conn-> error);
    }
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Edit users</title>
  <meta name ="viewport" content="width=device-width, initial-scale=1" /><meta charset="utf-8" />
  <link rel="stylesheet" type="text/css" href="css/signup.css"/>
</head>
<body>
 <div class = "header">
  <h1> Edit Users </h1>
  </div>
  <div class = "row">
    <div class = "content">
      <h2>Edit Here</h2>
      <form action="" method = "POST" autocomplete="on">
        <div>
          <label for = "">Firstname: </label>
          <input type = "text" name = "firstname" placeholder=" Your firstname" value="<?php echo $firstname ?>" required autofocus />
        </div>
        <div>
          <label for = "">Lastname: </label>
          <input type = "text" name = "lastname" placeholder=" Your lastname" value="<?php echo $lastname ?>" required autofocus />
        </div>
        <div>
          <label for = "">Username: </label>
          <input type = "text" name = "username" placeholder=" Your username" value="<?php echo $username ?>" required />
        </div>
        <div>
          <label for = "">Email: </label><br />
          <input type = "email" name = "email" placeholder=" Your email" value="<?php echo $email ?>" required />
        </div>
        <div>
          <label for = "">Phonenumber: </label>
          <input type = "text" name = "phonenumber" placeholder=" Your phonenumber" value="<?php echo $phonenumber ?>" required />
        </div>
        <div>
        <div>
          <select name = "userType" required>
            <option value = "">----Please Select User Type----</option>
            <option <?php if($userType=="Seller") echo "selected"; ?> value = "Seller">Seller</option>
          </select>
      </div>
      <div>
        <input type="submit" name="editusers" value="Edit" />
      </div>
      </form>
    </div>
  </div>
  <div class = "footer" >
    <h2>Copyright &copy; eshoe 2019</h2>
  </div>
</body>
</html>
</body>
</html>