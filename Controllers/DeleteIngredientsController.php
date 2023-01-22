<?php
require_once __DIR__ . "/../Models/IngredientsModel.php";

IngredientsModel::deletIngredient($_POST['iding']);

header("Location: ../Views/Admin/g-nutrition.php");
