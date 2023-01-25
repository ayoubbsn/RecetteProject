<?php
require_once(__DIR__ . "/../Config/DB.php");


class ideaDeRecetteModel
{
    public static function getRctAlwdIng()
    {
        $connection = DB::connect();
        $stmt = $connection->prepare("SELECT id_recette , FLOOR( COUNT(*)*0.7 ) as num FROM recette_ing GROUP BY id_recette ORDER BY id_recette ;");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $connection = $stmt = null;
        return $result;
    }
    public static function getallRecetteIng($data)
    {   
        $data = join("','",$data);   
        $connection = DB::connect();
        $stmt = $connection->prepare("SELECT id_recette , COUNT(*) as nb FROM recette_ing  WHERE id_ing IN ('$data') GROUP BY id_recette ORDER BY id_recette;");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $connection = $stmt = null;
        return $result;
    }
}
