<?php

require_once (__DIR__."/../Config/DB.php");

class CarouselModel
{

    public static function GetAllCarousel()
    {

        $connection = DB::connect();
        $stmt = $connection->prepare("SELECT diapo.id id, lien , url , name from ( diapo JOIN image ON diapo.id = image.id_diapo);");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $connection = $stmt = null;
        return $result;
    }

    public static function insertCarousel($lien)
    {
        $connection = DB::connect();
        $stmt = $connection->prepare("INSERT INTO diapo (lien) VALUES (?)");
        $stmt->bindParam(1, $lien);
        $stmt->execute();
        $id = $connection->lastInsertId();
        $connection = null;
        return $id;
    }
    public static function deleteCarousel($id){
        $connection = DB::connect();
        $stmt =  $connection->prepare("DELETE FROM image WHERE id_diapo=?");
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $stmt = $connection->prepare("DELETE FROM diapo WHERE id=?");
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $connection = null;
    }
}
