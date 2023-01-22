<?php
require_once __DIR__ . "/Header.php";
require_once __DIR__ . "/../../Controllers/AccueilController.php";
?>

<html>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <link rel='stylesheet' href='./css/Common.css'>
    <title>
        Healthy
    </title>
</head>

<body>
    <?php
    Header::Show();
    ?>
       <center>  <h1> Les Ingredients healthy </h1> </center>
        <div id="ing-card-container">
            <?php AccueilController::loadIngredientHealthy() ?>
        </div>







</body>

</html>