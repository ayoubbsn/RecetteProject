<?php 

require_once (__DIR__."/../Config/DB.php");

class CardModel {

    public static function LoadRecette(){
        $connection = DB::connect();
        $stmt = $connection->prepare("SELECT nom_recette , url FROM ( image JOIN recette ON recette.id = image.id_recette );");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $connection = $stmt = null;
        return $result;
    }

    public static function LoadRecetteL($idcat){
        $connection = DB::connect();
        $stmt = $connection->prepare("SELECT nom_recette , url FROM ( image JOIN recette ON recette.id = image.id_recette ) WHERE recette.id_categorie = ? LIMIT 10;");
        $stmt->bindParam(1, $idcat);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $connection = $stmt = null;
        return $result;
    }

    public static function LoadRecetteLAll($idcat){
        $connection = DB::connect();
        $stmt = $connection->prepare("SELECT url, recette.id as id , nom_recette , description , ADDTIME(temps_prep, temps_cuisson) as temps_total , estim_calories , difficulte  FROM  ( recette JOIN image ON recette.id = image.id_recette ) WHERE recette.id_categorie = ? LIMIT 10;");
        $stmt->bindParam(1, $idcat);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $connection = $stmt = null;
        return $result;
    }

    public static function LoadRecetteSeason(Int $idseason) {
        $connection = DB::connect();
        $stmt = $connection->prepare("SELECT recette.id as id , nom_recette , id_categorie , description , ADDTIME(temps_prep, temps_cuisson) as temps_total , estim_calories , difficulte , id_saison  FROM ( recette JOIN recette_ing ON recette.id = recette_ing.id_recette  JOIN saison_ing ON saison_ing.id_ing = recette_ing.id_ing ) WHERE id_saison = ? LIMIT 10;");
        $stmt->bindParam(1, $idseason);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $connection = $stmt = null;
        return $result;
    }



}

?>