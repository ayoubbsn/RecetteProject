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

$data = array(18,19,20,3);
$result = FeteModel::getRecetteFete(96);
var_dump($result);