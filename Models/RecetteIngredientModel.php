<?php

require_once (__DIR__."/../Config/DB.php");

class RecetteIngredientModel {


    public static function insertRecetteIngredient(Int $idrecette ,Int $iding , $quantity ){
        $connection = DB::connect();
        $stmt = $connection->prepare("INSERT INTO  recette_ing (id_recette,id_ing,quantité) VALUES (?,?,?)");
        $stmt->bindParam(1, $idrecette);
        $stmt->bindParam(2, $iding);
        $stmt->bindParam(3, $quantity);
        $stmt->execute();
        $id = $connection->lastInsertId();
        $connection = null;
        return $id;
    }
}