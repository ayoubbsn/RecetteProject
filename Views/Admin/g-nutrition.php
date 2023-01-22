<?php
require_once __DIR__ . "./g-header.php";
require_once __DIR__ . "/../../Controllers/IngredientsController.php";
require_once __DIR__ . "/../../Controllers/AdminG-RecetteController.php";

?>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./Admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./common.css">
    <title>Gestion de la nutrition</title>
</head>

<body>
    <?php
    header::Show("Gestion de la nutrition", "./images/diet.png");
    ?>
    <div id="id01" class="modal">
        <div class="container">
            <form action="./../../Controllers/IngredientsFormController.php" method="post">
                <label for="fname">Nom :</label><br>
                <input type="text" id="nom" name="nom" value=""><br>
                <label for="lname">Informations nutrilitionelles :</label><br>
                <input type="text" id="infnutri" name="infnutri" value=""><br>

                <div class="sub-form-container">
                    <div class="sub-form">
                        <label for="calories">Les calories:</label>
                        <input type="number" id="calories" name="calories" min="0" max="5000">
                    </div>
                    <div class="sub-form">
                        <label for="calories">Liquide :</label>
                        <input type="radio" id="liquide" name="liquide" value="1">
                    </div>

                    <div class="sub-form">
                        <label for="calories">Healthy :</label>
                        <input type="radio" id="healthy" name="healthy" value="1">
                    </div>

                </div>

                <select id="saison" name="saison">
                <option value="null"></option>
                <?php RecetteController::showSeasons() ?>

                </select>
                <br><br>

                <input type="submit" value="Submit">
            </form>
        </div>
    </div>


    <div id="button-holder">
        <button id="addbutton" class="btn btn-dark"> Ajouter </button>
    </div>


    <div id="sup-container">
        <div id="table-container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Nom </th>
                        <th scope="col">Informations nutrilitionelles</th>
                        <th scope="col">Healthy</th>
                        <th scope="col">liquid</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    IngredientsController::renderTable();
                    ?>
                </tbody>
            </table>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
    <script src="./js/g-ncommon.js"></script>
</body>

</html>