<?php
    include_once './php/db.php';
    $alert = '';
    if(isset($_POST['submit'])){
        $currentpassword = md5($_POST['currPW']);
        $newpassword = md5($_POST['newPW']);   
        $confirmpassword = md5($_POST['confPW']);

       $query = mysqli_query($conn, "SELECT * FROM guestbook1 WHERE userpw = '$currentpassword'") or die("You entered an incorrect password");
       $password_row = mysqli_fetch_array($query);
	   $database_password = $password_row['userpw'];
       if ($database_password == $currentpassword)
		{
		if ($newpassword == $confirmpassword)
			{
			$update_pwd = mysqli_query($conn, "UPDATE guestbook1 SET userpw='$newpassword' where userpw ='$currentpassword'");
			$alert = 'Canged successful!';
			}
		  else
			{
       $alert = "Your new and Retype Password is not match";
			}
		}
	  else
		{
      $alert = 'Your old password is wrong';
		}
	}
 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./css/profile.css" />
    <link rel="shortcut icon" href="./images/Burger recipe.png" />
    <script type = "text/javascript"  src = "./JS/forgotPwd.js" ></script>
    <title>Change Password</title>
</head>
<body>
<div id = wrapper>
<h1> Change Password </h1>
<form action="changepw.php" method="POST">
    Current Password:<input type="password" name="currPW" id="currPW"  minlength="8" maxlength="18"><br/><br/>
    New Password: <input type="password" name="newPW" id="newPW" minlength="8" maxlength="18"><br/><br/>
    Confirm Pssword: <input type="password" name="confPW"id="confPW" minlength="8" maxlength="18"><br/><br/>
    <input type="submit" name="submit" value="Confirm Change" id="submit">
    <a href="./php/logout_session.php">Back to Login</a>
    <h3><?php echo $alert ?></h3><br/>
</form>
</div>
</body>
</html>
