<?php
require_once __DIR__ . "./Header.php";
require_once __DIR__ . "/../../Controllers/AccueilController.php";
?>

<html>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <link rel='stylesheet' href='./css/Common.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
    <title>
        Accueil
    </title>
</head>

<body>
    <?php
    Header::Show();
    ?>
    <div class="slideshow-container">

        <?php
        AccueilController::LoadAllDiapo();

        ?>



        <div class="mySlides fade">
            <img src="./images/hlou.jpg" style="width:100%">
            <div class="text">
                <p>Tajine helou</p>
                <button class="ensvp">En Savoir plus</button>
            </div>
        </div>

        <div class="mySlides fade">
            <img src="./images/couscous.jpg" style="width:100%">
            <div class="text">
                <p>Couscous </p>
                <button class="ensvp">En Savoir plus</button>
            </div>
        </div>

        <div class="mySlides fade">
            <img src="./images/Chorba.JPG" style="width:100%">
            <div class="text">
                <p>Chorba</p>
                <button class="ensvp">En Savoir plus</button>
            </div>
        </div>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>

    <br>
    <br>


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
    <br>
    <br><br><br>



    <script src="./js/Common.js"></script>

</body>

</html>