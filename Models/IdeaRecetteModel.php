<?php
require_once(__DIR__ . "/../Config/DB.php");


class ideaDeRecetteModel
{
    public static function getRctAlwdIng()
    {
        $connection = DB::connect();
        $stmt = $connection->prepare("SELECT id_recette , ( COUNT(*)*0.7 ) as num FROM recette_ing GROUP BY id_recette ");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $connection = $stmt = null;
        return $result;
    }
    public static function getallRecetteIng()
    {
        $connection = DB::connect();
        $stmt = $connection->prepare("SELECT * FROM recette_ing ");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $connection = $stmt = null;
        return $result;
    }

}
