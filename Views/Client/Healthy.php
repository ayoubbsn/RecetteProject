<?php
require_once __DIR__ . "/Header.php";
require_once __DIR__ . "/../../Controllers/AccueilController.php";
require_once __DIR__ . "/FilterSearch.php";

?>

<html>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <link rel='stylesheet' href='./css/Common.css'>
    <link rel="stylesheet" href="./css/FilterSort.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
    <title>
        Healthy
    </title>
</head>

<body>
    <?php
    Header::Show();
    ?>
    <center>
        <h1> Les Recettes healthy </h1>
    </center>

    <?php FilterSearch::renderSearch() ?>


    <div id="card-container">

        <center>
            <a href="./Categorie.php?categorie=1">
                <h2> Recettes de la categorie des plats </h2>
            </a>
        </center>

        <div class="categorie">
        <?php AccueilController::loadIngredientHealthy(1) ?>

        </div>
        <center>
            <a href="./Categorie.php?categorie=2">
                <h2> Recettes de la categorie du dessert </h2>
            </a>
        </center>

        <div class="categorie">
        <?php AccueilController::loadIngredientHealthy(2) ?>

        </div>

        <center>
            <a href="./Categorie.php?categorie=3">
                <h2> Recettes de la categorie des boissons </h2>
            </a>
        </center>

        <div class="categorie">
        <?php AccueilController::loadIngredientHealthy(3) ?>
>
        </div>
        <center>
            <a href="./Categorie.php?categorie=4">
                <h2> Recettes de la categorie des entrées </h2>
            </a>
        </center>

        <div class="categorie">
        <?php AccueilController::loadIngredientHealthy(4) ?>

        </div>

    </div>



    <script src="./js/ideaDeRecette.js"></script>
    <script src="./js/filter.js"></script>

</body>

</html>