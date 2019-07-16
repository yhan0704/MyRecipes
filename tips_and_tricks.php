<?php
session_start();
?>
<?php

include_once './php/db.php';
	if(isset($_POST["submit"])){
		$a_name = $_POST['usrname'];
		$a_post = $_POST['upost'];
		$query = mysqli_query($conn, "INSERT INTO food_blog (user_id, tip_cook) VALUES('$a_name','$a_post')");

		header("Location:tips_and_tricks_view.php");
	}

?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="shortcut icon" href="./images/Burger recipe.png" />
<title>Tips and Tricks</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" type="text/css" href="./css/myrecipes.css" title="style" />
</head>

<body>
<div id="main-navbar">
		<div class="space">
			</div>
			<ul>
				<?php if(isset($_SESSION['id'])){
					echo 'Hi, '. $_SESSION['id'];
				}    
				else{
					echo 'Hi, guest';
				} 
				?>
			<li>
				<?php if(isset($_SESSION['id'])): ?>
				<a href="profile.php">Profile</a>
				<?php else: ?>
				<?php endif; ?> 
				</li>
				<li>
				<?php if(isset($_SESSION['id'])): ?>
				<a href="./php/logout_session.php">logout</a>
				<?php else: ?>
				<a href="index.php">login</a>
				<?php endif; ?> 
				</li>
			</ul>
		</div>
		
		<h1> My Recipes.com </h1>
		
		<fieldset class = "line">	
			<div class="navbar"> 
			<span class="open-slide">
					<a href="#" onclick="openSlideMenu()"><img src="./images/Menu.png" alt="menu-bar"></a>
				</span>
					<div class="dropdown">
					<button class = "dropbtn" >About</button> 
					<div class="dropdown-content">
							<a href="about_web.php"> About Site</a> 
					</div>
					</div>
				<div class="dropdown">
					<button class = "dropbtn">Example Recipies</button>
						<div class="dropdown-content">
							<a href="appetizers.php"> Apptizers</a> 
							<a href="chicken.php"> Chicken</a>
							<a href="steak.php"> Steak</a>
							<a href="pasta.php"> Pasta</a>
							<a href="seafood.php"> Seafood</a>
							<a href="desserts.php"> Desserts</a>
						</div>
				</div>	
				<div class="dropdown">
					<button class = "dropbtn">My Recipes</button>
						<div class="dropdown-content">
							<a href="my_recipes.php" > Add Recipes</a>
							<a href="my_recipes_view.php"> View Recipes</a>
						</div>
				</div>	
				<div class="dropdown">	
					<button class = "dropbtn">Tips and Tricks</button>
					<div class="dropdown-content">
						<a href="tips_and_tricks.php"> Submit Tips and Tricks</a>
						<a href="tips_and_tricks_view.php"> View Tips and Tricks</a>
					</div>
				</div>
				
			</div>
		</fieldset>

		<div id="side-menu" class="side-nav">
			<a href="#" class="btn-close"
			onclick="closeSlideMenu()">&times;</a>
			<a href="about_web.php">About me</a>
			<a href="appetizers.php">Appetizer Recipies</a>
			<a href="chicken.php">Chicken Recipies</a>
			<a href="desserts.php">Desserts Recipies</a>
			<a href="my_recipes.php">My Recipes</a>
			<a href="tips_and_tricks.php">Tips and Tricks</a>
		</div>

		<script>
		function openSlideMenu(){
			document.getElementById('side-menu').style.width = '250px';
			document.getElementById('main').style.marginLeft = '250px';
		}

		function closeSlideMenu(){
			document.getElementById('side-menu').style.width = '0';
			document.getElementById('main').style.marginLeft = '0';
		}
		</script>

	<h2> Tips and Tricks </h2>

	<div class = "tips">
	<p> Want to sharpen your cutting skills? Don't know how to cut an onion without tearing up? The community is here to help! Ask away!</p>
	</div>

	<div class="align">
	<form name="make_blog" action="tips_and_tricks.php" id="usrform" method = "post">
		<p>
		<strong>Tips and Tricks</strong>: <input type="text" name="usrname" style="font-family:Arial, Helvetica, sans-serif;font-size:1.5em;border-radius:4px;">
		<input type="submit" name = "submit" value="post" style="font-size: 20px;border:2px solid white;background-color:white;color:black;border-radius:4px;">
		</p>
		
		<p><label for="comments">Description:</label>
		</p>
		<textarea class = "placeholdere" name="upost" id="comments" placeholder="Tips and Tricks!!!"></textarea>

	</form>
	</div>

	<div class="floatCancel">
	<footer id="footer">
            <p>&copy; Young Chan Han</p>
            <div>           
            <ul>              
                <li><a href="http://www.linkedin.com/in/yhan1205">
                    <img src="./images/Linkedin.png" />
                    </a>
                </li>

                <li><a href="https://github.com/yhan0704/MyRecipes">
                    <img src="./images/Github.png" />
                    </a>
                </li>
            </ul>
            </div>
		</footer>
	</div>
</div>	
</body>
</html>