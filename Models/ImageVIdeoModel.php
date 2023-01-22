<?php
require_once (__DIR__."/../Config/DB.php");

class ImageVideoModel {
    public static function lnsertImageRecette(Int $idRecette, $path , $name){
        $connection = DB::connect();
        $stmt = $connection->prepare("INSERT INTO image (id_recette,url,name) VALUES (?,?,?)");
        $stmt->bindParam(1, $idRecette);
        $stmt->bindParam(2, $path);
        $stmt->bindParam(3, $name);
        $stmt->execute();
        $id = $connection->lastInsertId();
        $connection = null;
        return $id;
    }
    public static function lnsertVideoRecette(Int $idRecette, $path , $name){
        $connection = DB::connect();
        $stmt = $connection->prepare("INSERT INTO video (id_recette,url,name) VALUES (?,?,?)");
        $stmt->bindParam(1, $idRecette);
        $stmt->bindParam(2, $path);
        $stmt->bindParam(3, $name);
        $stmt->execute();
        $id = $connection->lastInsertId();
        $connection = null;
        return $id;
    }



    public static function lnsertImageNews(Int $idNews, $path , $name){
        $connection = DB::connect();
        $stmt = $connection->prepare("INSERT INTO image (id_news,url,name) VALUES (?,?,?)");
        $stmt->bindParam(1, $idNews);
        $stmt->bindParam(2, $path);
        $stmt->bindParam(3, $name);
        $stmt->execute();
        $id = $connection->lastInsertId();
        $connection = null;
        return $id;
    }

    public static function lnsertVideoNews(Int $idNews, $path , $name){
        $connection = DB::connect();
        $stmt = $connection->prepare("INSERT INTO video (id_news,url,name) VALUES (?,?,?)");
        $stmt->bindParam(1, $idNews);
        $stmt->bindParam(2, $path);
        $stmt->bindParam(3, $name);
        $stmt->execute();
        $id = $connection->lastInsertId();
        $connection = null;
        return $id;
    }



    public static function ImageExistInDB($path) {
        $connection = DB::connect();
        $stmt = $connection->prepare("SELECT COUNT(*) nb FROM image WHERE url LIKE '%$path%'");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $connection = $stmt = null;
        return $result;
    }
    public static function VideoExistInDB($path) {
        $connection = DB::connect();
        $stmt = $connection->prepare("SELECT COUNT(*) nb FROM video WHERE url LIKE '%$path%'");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $connection = $stmt = null;
        return $result;
    }

    public static function lnsertImageDiapo(Int $iddiapo, $path , $name){
        $connection = DB::connect();
        $stmt = $connection->prepare("UPDATE image SET name = ? , id_diapo = ? WHERE url = ?");
        $stmt->bindParam(1, $name);
        $stmt->bindParam(2, $iddiapo);
        $stmt->bindParam(3, $path);
        $stmt->execute();
        $id = $connection->lastInsertId();
        $connection = null;
        return $id;
    }
    public static function getImagePath($idrecette){
        $connection = DB::connect();
        $stmt = $connection->prepare("SELECT url FROM image WHERE id_recette= ?");
        $stmt->bindParam(1, $idrecette);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $connection = $stmt = null;
        return $result;
    }

}

?>