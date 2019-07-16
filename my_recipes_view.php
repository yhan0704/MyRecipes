<!DOCTYPE html>
<link rel="shortcut icon" href="./images/Burger recipe.png" />
	<title>Creating your own recipes</title>
	<link rel="stylesheet" type="text/css" href="./css/tips_tricks.css" title="style" />
</head>
<h1> Thank you for creating your own recipes! </h1>
<body>
<?php
	include_once './php/db.php';
	#connect to mysql database
	$conn; 
	if (mysqli_connect_errno())
		exit("Error - could not connect to MySQL");

?>



<?php
	$constructed_query1 = mysqli_query($conn, "SELECT * FROM my_recipes");
	$num_rows = mysqli_num_rows($constructed_query1);
?>

<?php
	for($row_num = 1; $row_num <= $num_rows; $row_num++){
	echo '<div class="div2">';
	$row_array = mysqli_fetch_array($constructed_query1);
	print("Food name: $row_array[food_name] <br />
		  Discription: $row_array[description]<br />
		  Steps: $row_array[steps]\r\n <br />");
	echo '</div>';
	}
?>

<p>
<a href="my_recipes.php"> Go Back </a> <br />
</p>
</body>
</html>