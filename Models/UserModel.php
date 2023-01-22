<?php
require_once(__DIR__ . "/../Config/DB.php");
class UserModel
{
    public static function getAllApprovedUsers()
    {
        $connection = DB::connect();
        $stmt = $connection->prepare("SELECT * from utilisateur WHERE approved=1");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $connection = $stmt = null;
        return $result;
    }
    public static function getAllNotApprovedUsers()
    {
        $connection = DB::connect();
        $stmt = $connection->prepare("SELECT * from utilisateur WHERE approved=0");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $connection = $stmt = null;
        return $result;
    }

    public static function Approver(int $id){
        $connection = DB::connect();
        $stmt = $connection->prepare("UPDATE utilisateur SET approved= '1' WHERE  id = ?;");
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $connection = null;
    }
    public static function delete(int $id){
        $connection = DB::connect();
        $stmt = $connection->prepare("DELETE FROM utilisateur WHERE id=?");
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $connection = null;
    }
}
