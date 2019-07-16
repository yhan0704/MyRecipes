<?php
include_once './php/db.php';
$success = '';
$error = '';
  if(isset($_POST['submit'])){
      $username = $_POST['name'];
      $email = $_POST['email'];   

      $query = mysqli_query($conn, "SELECT * FROM guestbook1 WHERE userID = '$username' AND email = '$email'");
      $row = mysqli_num_rows($query);
      if($row == 1){
        $success = 'Here is your user ID  :' . $username;
      } else
      {
        $error = 'You entered an incorrect your name or email.';
      }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./css/forgetIDPW.css" />
    <title>Change Password</title>
</head>
<body>
  <div id = wrapper>
  <link rel="shortcut icon" href="./images/Burger recipe.png" />
  <h1> Forgot ID! </h1>
  <form action="forgotID.php" method="POST">
      <h2>User ID:</h2><input type="text" name="name"><br/>
      <h2>Email:</h2> <input type="text" name="email"><br/><br/>
      <h3><?php echo $error ?></h3><h3><?php echo $success ?></h3><br/>
      <input type="submit" name="submit" value="Confirm Change">
    &nbsp;&nbsp;<a href="index.php">Back to Login</a>
  </div>
</form>
</body>
</html>
