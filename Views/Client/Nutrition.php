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
        Page nutrition
    </title>
</head>

<body>
    <?php
    Header::Show();
    ?>

    <center><h1> les ingredients </h1></center>
    <div id="npage-card-container">
        <?php
        AccueilController::loadIngredientsCards();

        ?>
    </div>



    
    <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
    <script src="./js/nutrition.js" ></script>
</body>

</html>