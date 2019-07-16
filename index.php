<?php
include_once './php/db.php';
session_start();
$error = '';
if(isset($_POST['submit'])){
	$username=$_POST['uname']; 
	$password=md5($_POST['mypass']); 
	if(empty($username) || empty($password)){		
		$error = "Please Check your ID and Password";
		session_destroy();
	}
	else
	{
		$query = mysqli_query($conn, "SELECT * FROM guestbook1 WHERE userID='$username'
									AND userpw = '$password'");
		$_SESSION['id'] = $username; 
		if(mysqli_num_rows($query) >0 ){
			header("Location: appetizers.php");
		}
		else
		{
			$error = "Please Check your ID and Password";
			session_destroy();
		}		
	}
}
?>
<!DOCTYPE html>
<!-- created the buttons and the user login page -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="shortcut icon" href="./images/Burger recipe.png" />
<title>My Recipes</title>
<link rel="stylesheet" type="text/css" href="./css/Login.css" title="style" />
 <script type = "text/javascript"  src = "signup.js" >
	 </script>
</head>
<body>
<!-- Start of user login -->
<div class = "LogBar">
<h1> Welcome to My Recipe</h1>
	<div class='guest'>
		<a href="appetizers.php">As A Guest</a>
	</div>
	<span class="error"><?php echo $error; ?></span> 
	<form method="post" action="index.php">
		<p>
		<!-- Username Input -->
		<label>
			<span class="userID">ID: <input type = "text" name = "uname"  id = "id" size = "25" maxlength="25" /><span>
		</label>
		<br />
		<!-- User password -->
		<label>
		Password: <input type = "password" name = "mypass" size = "18" maxlength="18" />
		</label>
		<br />
		<input type = "submit" name = "submit" value="log in" />	
		</p>
	</form>

		<div class="forgot">
		<ul>
			<li>
			<a class="forgetID" href="forgotID.php">Forgot ID?</a> &nbsp; &nbsp; or &nbsp; &nbsp;
			</li>
			<li>
			<a class="forgetPW" href="forgotPW.php">Forgot password?</a>
			</li>
		</ul>
		</div>
		
	<div class="signupBotton">
		<form action = "signup.php" method = "post">
			<p>
			<input type = "submit"  value = "sign up" />
			</p>
		</form>
	</div>	
</div>

<!-- Footer -->
	<div class ="footer">
		<p>Copyright (c) 2019 My Recipe</p>
		<p>All rights reserved</p>        
	</div>

</body>
</html>
  