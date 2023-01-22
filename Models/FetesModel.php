<?php

require_once (__DIR__."/../Config/DB.php");

class FeteModel {

    public static function getAllFetes(){
        $connection = DB::connect();
        $stmt = $connection->prepare("SELECT * from fetes ORDER BY id ;");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $connection = $stmt = null;
        return $result;
    }
    public static function insertRecetteFete($idrecette, $idfete){
        $connection = DB::connect();
        $stmt = $connection->prepare("INSERT INTO  recette_fetes (id_recette,id_fete) VALUES (?,?)");
        $stmt->bindParam(1, $idrecette);
        $stmt->bindParam(2, $idfete);
        $stmt->execute();
        $id = $connection->lastInsertId();
        $connection = null;
        return $id;
    }

    public static function getRecetteFete($id)
    {
        $connection = DB::connect();
        $stmt = $connection->prepare("SELECT id_fete from recette_fetes WHERE id_recette = ? ;");
        $stmt->bindParam(1, $idrecette);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $connection = $stmt = null;
        return $result;
    }
}