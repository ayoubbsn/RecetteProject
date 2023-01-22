<?php
require_once __DIR__ . "./Header.php";
require_once __DIR__ . "/../../Controllers/AccueilController.php";

$categorie = isset($_GET['categorie']) ? $_GET['categorie'] : null;

?>

<html>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <link rel='stylesheet' href='./css/Common.css'>
    <title>
        Categorie
    </title>
</head>

<body>
    <?php
    Header::Show();
    ?>

    <div id="npage-card-container" >
        <?php
        AccueilController::LoadAllCards($categorie)
        ?>

    </div>

</body>

</html>s