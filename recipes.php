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
        <h1 class="title">RECIPES</h1>
        <div class="spacer">
        </div>
        <form action="recipes.php" method="get">
            <input class="search" type="text" name="query" placeholder="SEARCH"> 
        </form>
        <a href="recipes.php"><img class="minibutton" src="pics/clear form.svg"></a>
        <a href="index.php"><img class="minibutton" src="pics/filter.png"></a>
    </div>
    <hr class="h1hr">
    <div class="recipes">
        <?php
        $host = "10.248.95.141";
        $user = "dm3673";
        $pass = "QNULi44urv6RuF0B";
        $dbnm = "dm3673_db";
            $connect = new mysqli($host, $user, $pass, $dbnm); 
            if (isset($_GET['category']) and isset($_GET['query'])){
                $stmt = $connect->prepare("SELECT * FROM recipes WHERE category=? AND (name LIKE ? OR description LIKE ?)");
                $query = '%'.$_GET['query'].'%';
                $stmt->bind_param("sss", $_GET['category'], $query, $query);
            }else if (isset($_GET['category'])) {
                $stmt = $connect->prepare("SELECT * FROM recipes WHERE category=?");
                $stmt->bind_param("s", $_GET['category']);
            } else if(isset($_GET['query'])) {
                $query = '%'.$_GET['query'].'%';
                $stmt = $connect->prepare("SELECT * FROM recipes WHERE name LIKE ? OR description LIKE ?");
                $stmt->bind_param("ss", $query, $query);
            } else {
                $stmt = $connect->prepare("SELECT * FROM recipes");
            }

            $stmt->execute();
            $result = $stmt->get_result();
            while($data = $result->fetch_assoc()):?>
                <a href="recipe.php?id=<?=$data['id'];?>" class="recipe">
                    <img class="recipeimage" src="<?=$data['photo'];?>">
                    <div class="att"><?php
                        if($data['is_vegetarian']):?>
                            <img class="recipeatt" src="pics/vegetarian.svg">
                        <?php
                        endif;
                        if($data['is_sugar_free']):?>
                            <img class="recipeatt" src="pics/sugar free.svg">
                        <?php
                        endif;
                        if($data['is_gluten_free']):?>
                            <img class="recipeatt" src="pics/gluten.svg">
                        <?php
                        endif;
                    ?></div>
                    <div class="recipetitle"><?=$data['name'];?></div>
                    <div class="subtitle"><?=$data['cooktime'];?></div>
                </a>
            <?php endwhile;?>
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
