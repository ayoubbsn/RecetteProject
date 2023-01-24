<?php
require_once __DIR__ . "./Header.php";
require_once __DIR__ . "/../../Controllers/AccueilController.php";
require_once __DIR__ . "/FilterSearch.php";

?>

<html>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/FilterSort.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>

    <link rel='stylesheet' href='./css/Common.css'>
    <title>
        Saisons
    </title>
</head>

<body>
    <?php
    Header::Show();
    ?>
    <br><br><br>
    <?php FilterSearch::renderSearch() ?>
    <center>
        <h1> Les Recettes de la saison d'hiver </h1>
    </center>
    <div id="npage-card-container">
        <div class="categorie">
            <?php AccueilController::loadIngredientSeasonCard(2) ?>
        </div>
    </div>

    <center>
        <h1> Les Recettes de la saison du printemps </h1>
    </center>
    <div id="ing-card-container">
        <div class="categorie">
            <?php AccueilController::loadIngredientSeasonCard(3) ?>
        </div>
    </div>

    <center>
        <h1> Les Recettes de la saison d'été </h1>
    </center>
    <div id="ing-card-container">
        <div class="categorie">
            <?php AccueilController::loadIngredientSeasonCard(4) ?>
        </div>
    </div>

    <center>
        <h1> Les Recettes de la saison d'auotomne </h1>
    </center>
    <div id="ing-card-container">
        <div class="categorie">
            <?php AccueilController::loadIngredientSeasonCard(1) ?>
        </div>
    </div>





    <script src="./js/filter.js"></script>

</body>

</html>