<?php
require_once __DIR__ . "/../Models/IdeaRecetteModel.php";

$j = 1;
$data = array();
while (isset($_POST['ingredients' . $j]) && isset($_POST['quantity' . $j])) {
    array_push($data, $_POST['ingredients' . $j]);
    $j++;
}

$allowedNumber = ideaDeRecetteModel::getRctAlwdIng();
$recettesInc = ideaDeRecetteModel::getallRecetteIng($data);

$available = array();
for ($i = 0; $i < count($allowedNumber); $i++) {
    for ($j = 0; $j < count($recettesInc); $j++) {
        if (($allowedNumber[$i]['id_recette'] == $recettesInc[$j]['id_recette']) && ((int)$recettesInc[$j]['nb'] >=  (int)$allowedNumber[$i]['num'])) {
            array_push($available, $recettesInc[$j]['id_recette']);
        }
    }
}

echo json_encode($available);