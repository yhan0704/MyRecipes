<?php
session_start();
?>
<!DOCTYPE html>
<link rel="shortcut icon" href="./images/Burger recipe.png" />
	<title>Profile</title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="./css/profile.css" />

<body>
<div id = wrapper>
<h1> Here is your information!!! </h1>
<?php
	include_once './php/db.php';
	$id = $_SESSION['id'];
    $sql =  mysqli_query($conn, "SELECT * FROM guestbook1 where userID = '$id'");
    $num_rows = mysqli_num_rows($sql);

    for($row_num = 1; $row_num <= $num_rows; $row_num++){
    	$row_array = mysqli_fetch_array($sql);
	}	
	echo "
		<div class = information>
		<h2>Your id</h2>  $row_array[userID] <br />
		<h2>Your name</h2> $row_array[username]<br />
		<h2>Your phone</h2>  $row_array[phone]<br />
		<h2>Your email</h2>  $row_array[email]<br />		
		</div>"
?>

<h3><a href="changepw.php">Change Your Password</a></h3>
</div>
</body>
</html>
