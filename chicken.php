<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="./images/Burger recipe.png" />
	<title>Chicken</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" type="text/css" href="./css/myrecipes.css" title="style" />
</head>

<!-- Food Catergories-->
<body>
<div id="wrapper">
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

		<h2> Chicken Recipes </h2>

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

		<section id="thumbnails">
			<div class="firstpic">
			<div class="gallery">
				
					<a href="https://www.delish.com/cooking/recipe-ideas/a19664686/firecracker-chicken-meatballs-recipe/">
						<img src="images/chicken/1.jpg"   alt="chicken1" /></a>
				<div class="desc">
				Firecracker Chicken Meatballs 
				</div>
			</div>	
			<div class="gallery">
						<a href="https://www.delish.com/cooking/recipe-ideas/a19683183/flamin-hot-chicken-tenders-recipe/">
							<img src="images/chicken/2.jpg"  alt="chicken2" /></a>
					<div class="desc">
						Flamin' Hot Chicken Tenders
					</div>			
				</div>	
			</div>	

			<div class="secondpic">
				<div class="gallery">
					<a href="https://www.delish.com/cooking/recipe-ideas/a26089644/korean-fried-chicken-recipe/">
						<img src="images/chicken/3.jpg" alt="chicken3"/></a>
						
				<div class="desc">	
					Korean Fried Chicken
				</div>
			</div>

			<div class="gallery">
					<a href="https://www.delish.com/cooking/recipe-ideas/a26241824/tuscan-butter-roast-chicken-recipe/">
						<img src="images/chicken/4.jpg"  alt="chicken4"/></a>
					<div class="desc">		
					Tuscan Butter Roast Chicken
					</div>
			</div>
			</div>	
		</section>
		
		source: <a style='color:white; margin-top:5%; display:block;' href="https://www.delish.com/cooking/g1264/spicy-chicken-recipes/">
https://www.delish.com/cooking/g1264/spicy-chicken-recipes/ </a>

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
</body>
</html>
