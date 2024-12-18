<!DOCTYPE html>
<html>
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400..900&display=swap" rel="stylesheet">
<link href="styles.css" rel="stylesheet">
<script src="script.js" defer></script>
<style type="text/css">
    ol {
   list-style: none;
   counter-reset: item;
 }
 li {
   counter-increment: item;
   margin-bottom: 5px;

 }
 li::before {
    display: flex;
    color: #1E1E1E;
    content: counter(item)".";
    font-family: Martin;
    font-size: 96px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
    margin-left: 20px;
    margin-top: 10px;
    width: 120px;
    text-align: right;
 }
</style>
</head>
<body>
<div class="mainmainmain">
    <div style="display: flex; justify-content: flex-start; align-items: center;">
        <h1 class="title">WHAT DO I DO?</h1>
        <div class="spacer">
        </div>
        <a class="returnbutton" href="index.php" style="margin-right: 20px;">BACK TO HOME PAGE</a>
    </div>
    <hr class="h1hr">
    <div class="help">
        <ol class="helpnumber">
            <li class="helptext"><div class="helptext">Use the search bar on the recipes page or click the search icon in the top menu to quickly find recipes by name or ingredients.</div></li>
            <hr class="h1hr">
            <li class="helptext"><div class="helptext">Click the buttons on the home page to filter recipes by category</div></li>
            <hr class="h1hr">
            <li class="helptext"><div class="helptext">Enjoy healthy meals with our Healthy Cookbook! </div></li>
            <hr class="h1hr">

        </ol>
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
