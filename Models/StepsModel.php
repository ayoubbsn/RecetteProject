<?php 
class StepsModel {
    public static function insertRecetteSteps(Int $idRecette,Int $stepNum, $description) {
        $connection = DB::connect();
        $stmt = $connection->prepare("INSERT INTO etapes (id_recette,step_num,description) VALUES (?,?,?)");
        $stmt->bindParam(1, $idRecette);
        $stmt->bindParam(2, $stepNum);
        $stmt->bindParam(3, $description);
        $stmt->execute();
        $id = $connection->lastInsertId();
        $connection = null;
        return $id;
    }

    public static function loadSteps($id) {
        $connection = DB::connect();
        $stmt = $connection->prepare("SELECT step_num , description FROM etapes WHERE id_recette = ? ORDER BY step_num;");
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $connection = $stmt = null;
        return $result;
    }
}
?>