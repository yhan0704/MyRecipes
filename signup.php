<?php
include_once './php/db.php';
$error = '';
	if(isset($_POST['submit'])){
	$userIDs = $_POST['custID'];
	$userpws = md5($_POST['pw']);
	$userNames = $_POST['custName'];
	$userphones = $_POST['dayTimeNumber'];
	$userEmails = $_POST['emailaddress'];
		$query = mysqli_query($conn, "SELECT * FROM guestbook1 WHERE userID='$userIDs'");
		$row = mysqli_num_rows($query);
		if($row > 0){
			echo '<script type="text/javascript">alert("input ID already exist!");</script>';		
		}
		else
		{
			$sql = mysqli_query($conn, "INSERT INTO guestbook1 (userID, userpw, username,phone,email,token) 
			values ('$userIDs', '$userpws', '$userNames','$userphones','$userEmails', '')");
			header("Location:loginsuccess.php");
		}	
	    
	}
?>

<!DOCTYPE html>
<!-- Shows Sign up page -->
<head>
<link rel="shortcut icon" href="./images/Burger recipe.png" />
<title>Sign up</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" type="text/css" href="./css/signup.css" title="style" />
 <script type = "text/javascript"  src = "./JS/signup.js" >
	 </script>
</head>

<body>
<div class = "LogBar">
	<form method = "Post">
 <dl>
    <dt><strong>ID</strong></dt>
		<dd>
			<input type="text" name="custID" id="custID" />
		</dd>
	 <dt><strong>password</strong></dt>
		<dd>
			<input type="password" name="pw" id="passwords" minlength = "8" maxlength="18" />
		</dd>
	<dt><strong> confirm password</strong></dt>
		<dd>
			<input type="password" name="password" id="checkpassword" />
		</dd>		
	 <dt><strong>name</strong></dt>
		<dd>
			<input type="text" name="custName" id="custName" />
		</dd>
	<dt><strong>Phone Number (EX:000-000-0000)</strong> </dt>
		<dd>
			<input type="text" name="dayTimeNumber" id="phoneNum" />
		</dd>
	<dt><strong>e-mail address</strong> </dt>
		<dd>
			<input type="text" name="emailaddress" id="email" />
		</dd>	
</dl>	
<p>
<input type = "submit" name = "submit" value="Submit" id="submitButton"/>
<input type = "reset" value="Reset" />
</p>
</form>

<form action = "index.php" method = "post" >
<p>
<input type = "submit" value="back to log in" />
</p>
</form>
</div>
</body>
</html>


