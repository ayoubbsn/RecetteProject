<?php
require_once __DIR__ . "/../Models/UserModel.php";
require_once __DIR__ . "/AdminG-UserController.php";

$length = count($_POST);
for ($x = 0 ; $x < $length; $x++) {
    UserModel::delete(intval($_POST[$x]));
}
UserController::loadFile();
var_dump($_POST);
?>