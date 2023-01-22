<?php

use Random\Engine\Secure;

require_once __DIR__."/CategoriesModel.php";
require_once __DIR__ . "/RecetteModel.php";
require_once __DIR__ . "/UserModel.php";
require_once __DIR__ . "/ImageVIdeoModel.php";
require_once __DIR__ . "/NewsModel.php";
require_once __DIR__ . "/CarouselModel.php";
require_once __DIR__ . "/CardModel.php";
require_once __DIR__ . "/SeasonModel.php";
require_once __DIR__ . "/FetesModel.php";
require_once __DIR__ . "/IngredientsModel.php";
require_once __DIR__ . "/IdeaRecetteModel.php";


$data = SeasonModel::GetRecetteSeason(80);
echo "<p> " . $data["url"] . " </p> <br>";
var_dump($data);