<?php
include __DIR__ . "./slideshow.php";
require_once __DIR__ . "./Header.php";
require_once __DIR__ . "/../../Models/StepsModel.php";
require_once __DIR__ . "/../../Models/IngredientsModel.php";
require_once __DIR__ . "/../../Models/ImageVIdeoModel.php";
require_once __DIR__ . "/../../Controllers/AccueilController.php";
require_once __DIR__ . "/../../Models/SeasonModel.php";
require_once __DIR__ . "/../../Models/FetesModel.php";



$idrecette = isset($_GET['idrecette']) ? $_GET['idrecette'] : null;
$nomrecette = isset($_GET['nomrecette']) ? $_GET['nomrecette'] : null;
$categorie = isset($_GET['categorie']) ? $_GET['categorie'] : null;
//$saison = isset($_GET['saison']) ? $_GET['saison'] : null;
//$fetes = isset($_GET['fetes']) ? $_GET['fetes'] : null;
$description = isset($_GET['description']) ? $_GET['description'] : null;
$tempstotal = isset($_GET['tempstotal']) ? $_GET['tempstotal'] : null;
$calories = isset($_GET['calories']) ? $_GET['calories'] : null;
$difficulte = isset($_GET['difficulte']) ? $_GET['difficulte'] : null;


$steps = StepsModel::loadSteps($idrecette);
$ingredients = IngredientsModel::loadIngredientsRecette($idrecette);
$url = ImageVideoModel::getImagePath($idrecette);

$fetesArr =  isset(FeteModel::getRecetteFete($idrecette)[0]) ? FeteModel::getRecetteFete($idrecette)[0] : null;
$fetes = isset($fetesArr['nom']) ? $fetesArr['nom'] : null;

$saison = isset(SeasonModel::GetRecetteSeason($idrecette)[0]) ? SeasonModel::GetRecetteSeason($idrecette)[0] : NULL;
$saison = isset($saison['nom']) ? $saison['nom'] : null;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <link href="./css/Recette.css" rel="stylesheet">
  <link rel="stylesheet" href="./css/accordion.css">
  <link href="./css/slideshow.css" rel="stylesheet">


  <title>Recette <?php echo $nomrecette ?> </title>
</head>

<body>
  <?php
  Header::Show();
  ?>
  <div class="main">

    <?php
    SlideShow::Render($url[0]['url']);
    ?>
    <div class="info">
      <div class="title">

        <h1><?php echo $nomrecette ?></h1>
        <div>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
          <span class="fa fa-star"></span>
        </div>
      </div>
      <h3>Categorie <?php echo $categorie ?> </h3>
      <div class="chips">
        <h4>Saisons: </h4>
        <div class="chip">
          <?php echo $saison ?>
        </div>
      </div>
      <div class="chips">
        <h4>Fêtes: </h4>
        <div class="chip">
          <?php echo  $fetes ?>
        </div>
      </div>
      <p class="desc">
        <?php echo $description ?>
      </p>
      <div class="additional-info">
        <div class="additional-info-section">
          <p class="first"> <?php echo substr($tempstotal, 3) ?> </p>
          <center>
            <p class="second">mins</p>
          </center>
        </div>

        <div class="additional-info-section">
          <p class="first"> <?php echo $calories ?> </p>
          <p class="second">calories</p>
        </div>

        <div class="additional-info-section">
          <p class="first"> <?php echo $difficulte ?> </p>
          <p class="second">difficulte</p>
        </div>
      </div>
      <div class="ingredients">
        <h1>Ingredients</h1>
        <table>
          <tr>
            <th>Ingredient</th>
            <th>Quantité</th>
          <tr>
            <?php AccueilController::loadIngredients($ingredients) ?>
        </table>
      </div>
      <div style="margin-top:2rem;">
        <h1>Etapes</h1>
        <?php
        AccueilController::loadStepsRecette($steps);
        ?>
      </div>
    </div>

  </div>



  <script src="./js/accordion.js"></script>
</body>

</html>