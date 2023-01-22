<?php
require_once __DIR__ . "/../Models/CardModel.php";
require_once __DIR__ . "/../Models/CarouselModel.php";
require_once __DIR__ . "/../Models/IngredientsModel.php";
require_once __DIR__ . "/../Models/ImageVIdeoModel.php";


class AccueilController {


    public static function laodDiapo($imagePath , $linkPath , $title) {
        $imagePath = substr($imagePath, 1);
        $imagePath = "../../Controllers$imagePath";
        echo "<div class='mySlides fade'>
        <img src='$imagePath' style='width:100%'>
        <div class='text'>
            <p>$title</p>
            <a href='$linkPath' > <button class='ensvp'>En Savoir plus</button> </a>
        </div>
    </div>  "; 
    }

    public static function LoadCard($imagePath ,$idrecette , $nomrecette, $categorie , $description ,$tempstotal ,$calories , $difficulte ){
        $imagePath = substr($imagePath, 1);
        $imagePath = "../../Controllers$imagePath";
        echo "<a href=\"./recette.php?idrecette=$idrecette&nomrecette=$nomrecette&categorie=$categorie&description=$description&tempstotal=$tempstotal&calories=$calories&difficulte=$difficulte\">
                <div class='card'>
                    <img src='$imagePath' alt='Avatar'>
                    <div class='container'>
                        <h4><b>$nomrecette</b></h4>
                        <p>Star Rating</p>
                        <div class='star'>
                            <span id='s1' class='fa fa-star checked'></span>
                            <span id='s2' class='fa fa-star checked'></span>
                            <span id='s3' class='fa fa-star checked'></span>
                            <span id='s4' class='fa fa-star'></span>
                            <span id='s5' class='fa fa-star'></span>
                        </div>
                    </div>
                </div>
             </a>";
    }

    public static function LoadAllDiapo() {
        $data = CarouselModel::GetAllCarousel();
        foreach ($data as $key => $val) {
            AccueilController::laodDiapo($val['url'], $val['lien'],$val['name']);
        }
    }


    public static function LoadAllCards($idCat){
        $data = CardModel::LoadRecetteLAll($idCat);
        foreach ($data as $key => $val) {
            AccueilController::LoadCard($val['url'],$val['id'],$val['nom_recette'],$idCat,$val['description'],$val['temps_total'],$val['estim_calories'],$val['difficulte']);
        }
    }

    public static function loadIngredients($data){
        foreach ($data as $key => $val) {
            echo "<tr class='data' >
                     <th style='background-color: white; color: black ;'>" . $val['nom'] . "</th>
                     <th style='background-color: white; color: black ;'>" . $val['quantité'] . "</th>
                 <tr>";
        }
    }

    public static function loadStepsRecette($data){
        foreach ($data as $key => $val) {
            echo "  <button class='accordion'>Etape". $val['step_num'] ."</button>
                    <div class='panel'>
                        <p>". $val['description'] ."</p>
                    </div>";
        }
    }

    public static function ingredientCard($name,$infoNutri,$calories) {
        echo "
                <div class='card'>
                    <div class='container'>
                        <h4><b>$name</b></h4>
                        <p>$infoNutri</p>
                        <p> les calories <b> $calories </b> </p>
                    </div>
                </div>";
    }
    public static function ingredientCardAllfinfo($name,$infoNutri,$calories,$healthy,$saison) {
        echo "
                <div class='card'>
                    <div class='container'>
                        <h4><b>$name</b></h4>
                        <p>$infoNutri</p>
                        <p class='$saison saison' >Saison : </p>
                        <b><p class='$healthy healthy' > </p></b>
                        <p> les calories <b> $calories </b> </p>
                    </div>
                </div>";
    }
    public static function loadIngredientSeasonCard(int $season){
        $data = CardModel::LoadRecetteSeason($season);
        foreach ($data as $key => $val) {
            $url = ImageVideoModel::getImagePath($val['id'])[0]['url'];
            AccueilController::LoadCard($url,$val['id'],$val['nom_recette'],$val['id_categorie'],$val['description'],$val['temps_total'],$val['estim_calories'],$val['difficulte']);
        }
    }

    public static function loadIngredientHealthy(){
        $data = IngredientsModel::loadIngredientsHealthy();
        foreach ($data as $key => $val) {
            AccueilController::ingredientCard($val['nom'], $val['inf_nutri'], $val['estimcalorie']);
        }
    }

    public static function loadIngredientsCards(){
        $data = IngredientsModel::loadIngredientsAllinfo();
        foreach ($data as $key => $val) {
            AccueilController::ingredientCardAllfinfo($val['nom'], $val['inf_nutri'], $val['estimcalorie'],$val['healthy'],$val['id_saison']);
        }
    }


}




?>
