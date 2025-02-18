<?php
  // Start Session
  session_start();

  // Import database connection
require_once "config/dbConnect.php";

?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Panel</title>
  <link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>
    <table>
      <thead>
        <tr>
          <th> User ID </th>
          <th> First Name </th>
          <th> Last Name </th>
          <th> Username </th>
          <th> Email </th>
          <th> Phone Number </th>
          <th> User Type </th>
          <th> </th>
          <th> </th>
        </tr>
      </thead>
      <?php
        $sql = "SELECT * FROM users";
        $query = $dbConn -> query($sql);
        if ($query -> num_rows > 0) {
          while ($row = mysqli_fetch_object($query)) {
           
      ?>
      <tbody>
        <tr>
          <td> <?php echo $row ->userId?> </td>
          <td> <?php echo $row ->firstname?> </td>
          <td> <?php echo $row ->lastname?> </td>
          <td> <?php echo $row ->username?> </td>
          <td> <?php echo $row ->email?> </td>
          <td> <?php echo $row ->phonenumber?> </td>
          <td> <?php echo $row ->userType?> </td>
          <td> <a href="edit.php?edited=1&id=<?php echo $row->userId ?>">  Edit</a> </td>
          <td> <a href="processes/user_processes.php?delete=1&id=<?php echo $row->userId ?>"> Delete </a> </td>
        </tr>
      </tbody>

      <?php
          }
        }else{
          echo "Error";
        }
      ?>
    </table>
    </body>
</html>
<?php
  unset($_SESSION["success"])
?>