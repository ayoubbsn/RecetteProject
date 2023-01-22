<?php
require_once __DIR__ . "/../Config/DB.php";
require_once __DIR__ . "/IngredientsModel.php";

class SeasonModel
{

    public static function getSeasons()
    {
        $connection = DB::connect();
        $stmt = $connection->prepare("SELECT id , nom from saison");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $connection = $stmt = null;
        return $result;    
    }

    public static function insertIngredientSeasons($idsaison , $iding){
        $connection = DB::connect();
        $stmt = $connection->prepare("INSERT INTO  saison_ing (id_ing ,id_saison) VALUES (?,?)");
        $stmt->bindParam(1, $iding);
        $stmt->bindParam(2, $idsaison);
        $stmt->execute();
        $id = $connection->lastInsertId();
        $connection = null;
        return $id;
    }

    public static function GetRecetteSeason($idRecetteIns){
        $connection = DB::connect();
        $stmt = $connection->prepare(" SELECT nom FROM ( SELECT id_saison , MAX(nb) as ma FROM  ( SELECT id_saison , COUNT(*) nb FROM (recette JOIN recette_ing ON recette.id = recette_ing.id_recette JOIN saison_ing ON recette_ing.id_ing = saison_ing.id_ing) WHERE recette.id = ? GROUP BY id_saison ) as t1 ) as t2 JOIN saison ON id_saison = id");
        $stmt->bindParam(1, $idRecetteIns);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $connection = $stmt = null;
        return $result;  
    }

}
