<?php
require_once __DIR__ . "./Header.php";
require_once __DIR__ . "/../../Controllers/AdminG-RecetteController.php";
?>

<html>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <link rel='stylesheet' href='./css/Common.css'>
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


        <form id="recette-form" action="">

            <label for="ingredients"> <b> Les ingredients :</b></label>
            <button id="ingredients-button" type="button" class="btn btn-outline-success btn-sm">Ajouter les ingredients</button>
            <input type="submit" id="valider" value="Valider">
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



    <script src="./js/ideaDeRecette.js"></script>
</body>

</html>