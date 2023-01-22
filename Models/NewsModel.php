<?php

require_once (__DIR__."/../Config/DB.php");

class NewsModel
{

    public static function GetAllNews()
    {

        $connection = DB::connect();
        $stmt = $connection->prepare("SELECT id , paragraphe , titre from news");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $connection = $stmt = null;
        return $result;
    }

    public static function insertNews($paragragh , $titre)
    {
        $connection = DB::connect();
        $stmt = $connection->prepare("INSERT INTO news (paragraphe,titre) VALUES (?,?)");
        $stmt->bindParam(1, $paragragh);
        $stmt->bindParam(2, $titre);
        $stmt->execute();
        $id = $connection->lastInsertId();
        $connection = null;
        return $id;
    }
    public static function deletNews($id){
        $connection = DB::connect();
        $stmt = $connection->prepare("DELETE FROM news WHERE id=?");
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $connection = null;
    }
}
