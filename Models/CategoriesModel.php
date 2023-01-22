<?php
require_once (__DIR__."/../Config/DB.php");

class CategoriesModel {
    public static function loadCategories(){
        $connection = DB::connect();
        $stmt = $connection->prepare("SELECT id,name from categories");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $connection = $stmt = null;
        return $result;
    }
}

?>