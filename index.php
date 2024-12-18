<!DOCTYPE html>
<html>
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400..900&display=swap" rel="stylesheet">
<link href="styles.css" rel="stylesheet">
<script src="script.js" defer></script>
</head>
<body>
<div class="mainmainmain">
	<h1 class="title">HEALTHY COOKBOOK</h1>
	<hr class="h1hr">
	<div class="mainblock">
		<div class="buttons">
			<a href="recipes.php?category=breakfast">BREAKFAST</a>
			<a href="recipes.php?category=main">MAIN COURSE</a>
			<a href="recipes.php?category=snack">SNACK</a>
			<a href="recipes.php?category=dessert">DESSERT</a>
			<a href="recipes.php?category=soup">SOUP</a>
			<a href="recipes.php?category=salad">SALAD</a>
		</div>
		<img src="pics/bg.png" class="bg">
	</div>
</div>
<div id="menu" class="menu">
	<div class="burgertext">MENU</div>
	<img class="burger" src="pics/burger.svg">
</div>
<div id="overlay" class="overlay">
	<div class="inneroverlay">
		<a class="title" href="">HOME</a>
		<hr class="h1hr shorten">
		<a class="title" href="recipes.php">VIEW RECIPES</a>
		<hr class="h1hr shorten">
		<div class="spacer"></div>
		<a class="title" href="help.php">HELP</a>
	</div>
	<div class="overlaymenu">
		<button id="close">
			<div class="burgertext">CLOSE</div>
			<img class="burger" src="pics/close.svg">
		</button>
	</div>
</div>
</body>
</html>
