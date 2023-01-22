<?php
require_once __DIR__ . "/../Models/RecetteModel.php";
require_once __DIR__ . "/AdminG-RecetteController.php";

$length = count($_POST);
for ($x = 0 ; $x < $length; $x++) {
    RecetteModel::approuver(intval($_POST[$x]));
}
RecetteController::loadFile();
echo count($_POST);
?>