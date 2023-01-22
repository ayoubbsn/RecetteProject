<?php
require_once (__DIR__."/../Config/DB.php");

class IngredientsModel {
    public static function loadIngredients(){
        $connection = DB::connect();
        $stmt = $connection->prepare("SELECT id , nom from ingredients");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $connection = $stmt = null;
        return $result;
    }
    public static function loadIngredientsHealthy(){
        $connection = DB::connect();
        $stmt = $connection->prepare("SELECT * from ingredients WHERE healthy= 1 ;");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $connection = $stmt = null;
        return $result;
    }
    public static function loadIngredientsAllinfo(){
        $connection = DB::connect();
        $stmt = $connection->prepare("SELECT * from ( ingredients LEFT OUTER JOIN saison_ing ON ingredients.id = saison_ing.id_ing) ;");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $connection = $stmt = null;
        return $result;
    }

    public static function getAllIngredients(){
        $connection = DB::connect();
        $stmt = $connection->prepare("SELECT * from ingredients");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $connection = $stmt = null;
        return $result;
    }
    public static function insertIngredient($nom,$liquid,$infNutri,$calorie,$healthy){
        $connection = DB::connect();
        $stmt = $connection->prepare("INSERT INTO ingredients (nom,liquid,inf_nutri,estimcalorie,healthy) VALUES (?,?,?,?,?)");
        $stmt->bindParam(1, $nom);
        $stmt->bindParam(2, $liquid);
        $stmt->bindParam(3, $infNutri);
        $stmt->bindParam(4, $calorie);
        $stmt->bindParam(5, $healthy);
        $stmt->execute();
        $id = $connection->lastInsertId();
        $connection = null;
        return $id;
    }
    public static function deletIngredient($id){
        $connection = DB::connect();
        $stmt = $connection->prepare("DELETE FROM recette_ing WHERE id_ing=?");
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $stmt = $connection->prepare("DELETE FROM saison_ing WHERE id_ing=?");
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $stmt = $connection->prepare("DELETE FROM ingredients WHERE id=?");
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $connection = null;
    }

    public static function loadIngredientsRecette($id){
        $connection = DB::connect();
        $stmt = $connection->prepare("SELECT * FROM ( ingredients JOIN recette_ing ON id = id_ing ) WHERE id_recette= ? ;");
        $stmt->bindParam(1,$id);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $connection = $stmt = null;
        return $result;
    }
}
