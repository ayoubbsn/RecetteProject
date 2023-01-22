<?php
include __DIR__ . "/../Models/RecetteModel.php";
include __DIR__ . "/AdminG-RecetteController.php";
include __DIR__ . "/../Models/ImageVIdeoModel.php";
include __DIR__ . "/../Models/StepsModel.php";
include __DIR__ . "/../Models/RecetteIngredientModel.php";


$target_path = $_FILES['image']['name'];
$nomrecette = isset($_POST['nomrecette']) ? $_POST['nomrecette'] : null;
$description = isset($_POST['description']) ? $_POST['description'] : null;
$categories = isset($_POST['categories']) ? $_POST['categories'] : null;
$tempsprep = isset($_POST['tempsprep']) ? $_POST['tempsprep'] : null;
$tempcui = isset($_POST['tempcui']) ? $_POST['tempcui'] : null;
$tempsrepo = isset($_POST['tempsrepo']) ? $_POST['tempsrepo'] : null;
$difficulte = isset($_POST['difficulte']) ? $_POST['difficulte'] : null;
$calories = isset($_POST['calories']) ? $_POST['calories'] : null;


$idRecetteIns = RecetteModel::insertRecetteByAdmin($categories, $nomrecette, $description, "00:" . $tempsprep, "00:" . $tempcui, "00:" . $tempsrepo, $difficulte, $calories);
RecetteController::loadFile();

$j = 1;

while (isset($_POST['ingredients' . $j]) && isset($_POST['quantity' . $j])) {
    RecetteIngredientModel::insertRecetteIngredient($idRecetteIns,$_POST['ingredients' . $j],$_POST['quantity' . $j]);
    $j++;
}

while(isset($_POST['fetes' . $j])){
    FeteModel::insertRecetteFete($idRecetteIns, $_POST['fetes' . $j]);
    $j++;
}



$j = 1;
$etapes = array();
while (isset($_POST['etape' . $j])) {
    array_push($etapes, $_POST['etape' . $j]);
    StepsModel::insertRecetteSteps($idRecetteIns, $j, $_POST['etape' . $j]);
    $j++;
}



if (isset($_FILES['image'])) {
    $errors = array();
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $nb = ImageVideoModel::ImageExistInDB($file_name)[0]['nb'];
    if ($nb == 0) {
        move_uploaded_file($file_tmp, "./Uploads/uploaded-Image-" . $file_name);
        ImageVideoModel::lnsertImageRecette($idRecetteIns, "./Uploads/uploaded-Image-" . $file_name, $nomrecette);
        echo "Success";
    } else {
        move_uploaded_file($file_tmp, "./Uploads/uploaded-Image-(" . ++$nb . ")" . $file_name);
        ImageVideoModel::lnsertImageRecette($idRecetteIns, "./Uploads/uploaded-Image-(" . ++$nb . ")" . $file_name, $nomrecette);
        echo "Success";
    }
}
if (isset($_FILES['video'])) {
    $errors = array();
    $file_name = $_FILES['video']['name'];
    $file_size = $_FILES['video']['size'];
    $file_tmp = $_FILES['video']['tmp_name'];
    $nb = ImageVideoModel::VideoExistInDB($file_name)[0]['nb'];
    if ($nb == 0) {
        move_uploaded_file($file_tmp, "./Uploads/uploaded-Video-" . $file_name);
        ImageVideoModel::lnsertVideoRecette($idRecetteIns, "./Uploads/uploaded-Video-" . $file_name, $nomrecette);
        echo "Success";
    } else {
        move_uploaded_file($file_tmp,   "./Uploads/uploaded-Video-(" . ++$nb . ")" . $file_name);
        ImageVideoModel::lnsertVideoRecette($idRecetteIns,  "./Uploads/uploaded-Video-(" . ++$nb . ")" . $file_name, $nomrecette);
        echo "Success";
    };
}

echo "sent";
