<?php

require_once __DIR__ . "/../Models/IngredientsModel.php";
require_once __DIR__ . "/../Models/SeasonModel.php";


$nom = isset($_POST['nom']) ? $_POST['nom'] : null;
$infnutri = isset($_POST['infnutri']) ? $_POST['infnutri'] : null;
$calories = isset($_POST['calories']) ? $_POST['calories'] : null;
$liquide = isset($_POST['liquide']) ? $_POST['liquide'] : 0;
$healthy = isset($_POST['healthy']) ? $_POST['healthy'] : 0;
$saison = isset($_POST['saison']) ? $_POST['saison'] : null;



$id = IngredientsModel::insertIngredient($nom, $liquide, $infnutri, $calories, $healthy);

if ($saison != "null") {
    echo "" . $saison . "";
    SeasonModel::insertIngredientSeasons($saison, $id);
}

header("Location: ../Views/Admin/g-nutrition.php");
