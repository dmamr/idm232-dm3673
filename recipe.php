<?php
    if(!isset($_GET['id'])){
        echo'You did something wrong.';
        die;
    }
    $host = "10.248.95.141";
    $user = "dm3673";
    $pass = "QNULi44urv6RuF0B";
    $dbnm = "dm3673_db";
    $connect = new mysqli($host, $user, $pass, $dbnm); 
    $stmt = $connect->prepare("SELECT * FROM recipes WHERE id=?");
    $stmt->bind_param("i", $_GET['id']);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    if(!isset($row)){
        echo'You did something wrong.';
        die;
    }
?>
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
    <div style="display: flex; justify-content: flex-start; align-items: center;">
        <h1 class="title">RECIPE</h1>
        <div class="spacer">
        </div>
        <form action="recipes.php" method="get">
            <input class="search" type="text" name="query" placeholder="SEARCH"> 
        </form>
        <a href="recipe.php"><img class="minibutton" src="pics/clear form.svg"></a>
        <a href="index.php"><img class="minibutton" src="pics/filter.png"></a>
    </div>
    <hr class="h1hr">
    <div class="kachow">
        <div class="leftthingy">
            <img class="recipeimage" src="<?=$row['photo'];?>">
            <div class="att"><?php
                if($row['is_vegetarian']):?>
                    <img class="recipeatt" src="pics/vegetarian.svg">
                <?php
                endif;
                if($row['is_sugar_free']):?>
                    <img class="recipeatt" src="pics/sugar free.svg">
                <?php
                endif;
                if($row['is_gluten_free']):?>
                    <img class="recipeatt" src="pics/gluten.svg">
                <?php
                endif;
            ?></div>
            <div class="recipetitle"><?=$row['name'];?></div>
            <div class="subtitle"><?=$row['cooktime'];?></div>
            <div class="description"><?=$row['description'];?></div>
            <a class="returnbutton" href="recipes.php">RETURN</a>
        </div>
        <div class="rightthingy">
            <h3>list of ingredients</h3>
            <p><?=$row['ingredients'];?></p>
            <h3>steps</h3>
            <ol><?=$row['steps'];?></ol>
        </div>
    </div>
</div>
<div id="menu" class="menu">
    <div class="burgertext">MENU</div>
    <img class="burger" src="pics/burger.svg">
</div>
<div id="overlay" class="overlay">
    <div class="inneroverlay">
        <a class="title" href="index.php">HOME</a>
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
