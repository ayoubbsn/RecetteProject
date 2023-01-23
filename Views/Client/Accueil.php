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

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="./js/filter.js"></script>


    <link rel="stylesheet" href="./css/FilterSort.css">
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

    <div class="filterBy">
        <div class="filter-option">
            <label for="filter"> Filter by : </label>
            <select name="filter" id="select-filter">
                <option disabled selected value> -- select an option -- </option>
                <option value="tmpprep"> Temps de preparation</option>
                <option value="tmpcuiss"> Temps de cuisson</option>
                <option value="tmptot"> Temps total</option>
                <option value="notation"> Notation </option>
                <option value="saison"> Saison </option>
                <option value="calories"> Le nombre de calories</option>

            </select>


            <div class="fo tmpprep">
                <label for="Temps de preparation"></label>
                <input type="number" name="tmpprep" id="tmpprep">
            </div>

            <div class="fo tmpcuiss">
                <input type="number" name="tmpcuiss" id="tmpcuiss">
            </div>

            <div class="fo tmptot">
                <input type="number" name="tmptot" id="tmptot">

            </div>

            <div class="fo calories">
                <input type="number" name="min" id="min">
                <input type="number" name="max" id="max">
            </div>

            <div class="fo saison">
                <select name="saisons" id="saisons">
                    <option value="1"> Automne </option>
                    <option value="2"> Hiver </option>
                    <option value="3"> Printemps</option>
                    <option value="4"> éte </option>
                </select>
            </div>

            <div class="fo Notation">
                <select name="saisons" id="saisons">
                    <option value="1"> 1 Étoile </option>
                    <option value="2"> 2 Étoiles </option>
                    <option value="3"> 3 Étoiles </option>
                    <option value="4"> 4 Étoiles </option>
                    <option value="4"> 5 Étoiles </option>

                </select>
            </div>

        </div>
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
    <br>
    <br><br><br>



    <script src="./js/Common.js"></script>
</body>

</html>