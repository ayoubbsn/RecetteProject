<?php
require_once __DIR__ . "./Header.php";
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
    <title>
        Accueil
    </title>
</head>

<body>
    <?php
    Header::Show();
    ?>

    <center>
        <h1>La page de news</h1>
    </center>

    <div id="npage-card-container">
        <?php AccueilController::loadNewsCards() ?>
    </div>


    <script src="./js/ideaDeRecette.js"></script>
    <script src="./js/filter.js"></script>
</body>

</html>s