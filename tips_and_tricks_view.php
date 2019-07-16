<!DOCTYPE html>
<link rel="shortcut icon" href="./images/Burger recipe.png" />
	<title>Tips and Tricks</title>
	<link rel="stylesheet" type="text/css" href="./css/tips_tricks.css" title="style" />
</head>
<h1> Thank you for your information! </h1>
<body>
<?php
	include_once './php/db.php';
	//connect to mysql database
	$conn;
?>


<?php
	$constructed_query1 = mysqli_query($conn, "SELECT * FROM food_blog");

	$num_rows = mysqli_num_rows($constructed_query1);
	//$num_fields = mysqli_num_fields($constructed_query1);
?>

<?php
	for($row_num = 1; $row_num <= $num_rows; $row_num++){
	echo '<div class="div2">';
	$row_array = mysqli_fetch_array($constructed_query1);
	print("Your Tips and Tricks: $row_array[user_id] <br />
			Description: $row_array[tip_cook]<br />");
	echo '</div>';
	}
?>

<p>
<a href="tips_and_tricks.php"> Enter another post</a> <br />
</p>
</body>
</html>