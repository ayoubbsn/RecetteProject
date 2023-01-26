<?php
require_once __DIR__ . "./Header.php";
require_once __DIR__ . "./../../Controllers/AdminG-RecetteController.php";
require_once __DIR__ . "/../../Controllers/AccueilController.php";
require_once __DIR__ . "/FilterSearch.php";
?>

<html>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/FilterSort.css">
    <link rel="stylesheet" href="./css/fetes.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

    <title>
        Fetes
    </title>
</head>

<body>
    <?php
    Header::Show();
    ?>


    <div id="supp" >
        <div id="fete-container">
            <p>Veuillez choisir la fete </p>
            <select id="fete" name="fete">
                <option class="opt1" value="null"></option>
                <?php
                RecetteController::Showfetes();
                ?>
            </select>
        </div>


        <?php FilterSearch::renderSearch() ?>

    </div>

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



    <script src="./js/Common.js"></script>
    <script src="./js/filter.js"></script>
    <script src="./js/fetes.js"></script>
</body>

</html>