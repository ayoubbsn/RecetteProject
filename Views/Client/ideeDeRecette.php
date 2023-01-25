<?php
require_once __DIR__ . "./Header.php";
require_once __DIR__ . "/../../Controllers/AdminG-RecetteController.php";
require_once __DIR__ . "/../../Controllers/AccueilController.php";
require_once __DIR__ . "/FilterSearch.php";

?>

<html>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <link rel='stylesheet' href='./css/Common.css'>
    <link rel="stylesheet" href="./css/FilterSort.css">
    <link rel="stylesheet" href="./css/ideederecette.css">

    <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
    <title>
        Idées de recettes
    </title>
</head>

<body>
    <?php
    Header::Show();
    ?>
    <div id="main">


        <form id="recette-form" action="./../../Controllers/IdeaRecetteController.php" method="post">

            <label for="ingredients"> <b> Les ingredients :</b></label>
            <div>
                <button id="ingredients-button" type="button" class="btn btn-outline-success btn-sm">Ajouter les ingredients</button>
                <input type="submit" id="valider" value="Valider">
            </div>
            <div id="ing-sup-container">

                <div class="ingredients-container">

                    <select id="ingredients1" name="ingredients1">
                        <?php
                        RecetteController::ShowIngredients();
                        ?>
                    </select>
                    <label for="quantity"> Quantité (mg / ml) :</label>
                    <input type="number" id="quantity1" name="quantity1" min="0" max="1000">
                </div>
            </div>
            <br> <br>

        </form>
    </div>

    <?php FilterSearch::renderSearch() ?>


    <div id="card-container">

        <center>
            <a href="./Categorie.php?categorie=1">
                <h2> Recettes de la categorie des plats </h2>
            </a>
        </center>

        <div class="categorie">
            <?php
            AccueilController::LoadAllCards(1);
            ?>
        </div>
        <center>
            <a href="./Categorie.php?categorie=2">
                <h2> Recettes de la categorie du dessert </h2>
            </a>
        </center>

        <div class="categorie">
            <?php
            AccueilController::LoadAllCards(2);
            ?>
        </div>

        <center>
            <a href="./Categorie.php?categorie=3">
                <h2> Recettes de la categorie des boissons </h2>
            </a>
        </center>

        <div class="categorie">
            <?php
            AccueilController::LoadAllCards(3);
            ?>
        </div>
        <center>
            <a href="./Categorie.php?categorie=4">
                <h2> Recettes de la categorie des entrées </h2>
            </a>
        </center>

        <div class="categorie">
            <?php
            AccueilController::LoadAllCards(4);
            ?>
        </div>

    </div>


    <script src="./js/ideaDeRecette.js"></script>
    <script src="./js/filter.js"></script>

</body>

</html>