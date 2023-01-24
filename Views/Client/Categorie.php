<?php
require_once __DIR__ . "./Header.php";
require_once __DIR__ . "/../../Controllers/AccueilController.php";
require_once __DIR__ . "/FilterSearch.php";


$categorie = isset($_GET['categorie']) ? $_GET['categorie'] : null;

?>

<html>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <link rel='stylesheet' href='./css/Common.css'>
    <link rel="stylesheet" href="./css/FilterSort.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>

    <title>
        Categorie
    </title>
</head>

<body>
    <?php
    Header::Show();
    ?>

    <br><br><br>
    <?php FilterSearch::renderSearch() ?>


    <div id="npage-card-container">
        <?php
        AccueilController::LoadAllCards($categorie)
        ?>

    </div>

    <script src="./js/filter.js"></script>
</body>

</html>s