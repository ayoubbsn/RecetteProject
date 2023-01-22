<?php
require_once __DIR__ . "/../Config/DB.php";


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


}
