<?php
require_once(__DIR__ . "/../Config/DB.php");
class RecetteModel
{

    public static function getAll()
    {
        $connection = DB::connect();
        $stmt = $connection->prepare("SELECT * from recette");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $connection = $stmt = null;
        return $result;
    }
    public static function getAllApproved()
    {
        $connection = DB::connect();
        $stmt = $connection->prepare("SELECT recette.id, name as nom_categorie, nom_recette, description, ADDTIME(temps_prep, temps_cuisson) as temps_total , temps_prep , temps_cuisson , temps_repos , difficulte , estim_calories FROM recette JOIN categories ON recette.id_categorie = categories.id WHERE approved like '%1'");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $connection = $stmt = null;
        return $result;
    }
    public static function getAllNotApproved()
    {
        $connection = DB::connect();
        $stmt = $connection->prepare("SELECT recette.id, name as nom_categorie, nom_recette, description, ADDTIME(temps_prep, temps_cuisson) as temps_total , temps_prep , temps_cuisson , temps_repos , difficulte , estim_calories FROM recette JOIN categories ON recette.id_categorie = categories.id WHERE approved LIKE '%\00'");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $connection = $stmt = null;
        return $result;
    }
    public static function insertRecetteByAdmin(int $id_categorie, $nom_recette, $description, $temps_prep, $temps_cuisson, $temps_repos, $difficulte, $estim_calories)
    {
        $admin = 1;
        $approved = 0x01;
        $connection = DB::connect();
        $stmt = $connection->prepare("INSERT INTO recette (id_categorie,id_utilisateur,approved,nom_recette,description,temps_prep,temps_cuisson,temps_repos,difficulte,estim_calories) VALUES (?,?,?,?,?,?,?,?,?,?)");
        $stmt->bindParam(1, $id_categorie);
        $stmt->bindParam(2, $admin);
        $stmt->bindParam(3, $approved);
        $stmt->bindParam(4, $nom_recette);
        $stmt->bindParam(5, $description);
        $stmt->bindParam(6, $temps_prep);
        $stmt->bindParam(7, $temps_cuisson);
        $stmt->bindParam(8, $temps_repos);
        $stmt->bindParam(9, $difficulte);
        $stmt->bindParam(10, $estim_calories);
        $stmt->execute();
        $id = $connection->lastInsertId();
        $connection = null;
        return $id;
    }
    public static function deleteRecette(int $id)
    {
        $connection = DB::connect();
        $stmt =  $connection->prepare("DELETE FROM recette_ing WHERE id_recette=?");
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $stmt =  $connection->prepare("DELETE FROM recette_fetes WHERE id_recette=?");
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $stmt =  $connection->prepare("DELETE FROM image WHERE id_recette=?");
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $stmt =  $connection->prepare("DELETE FROM video WHERE id_recette=?");
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $stmt =  $connection->prepare("DELETE FROM etapes WHERE id_recette=?");
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $stmt = $connection->prepare("DELETE FROM recette WHERE id=?");
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $connection = null;
    }
    public static function approuver(int $id)
    {
        $connection = DB::connect();
        $stmt = $connection->prepare("UPDATE recette SET approved= '1' WHERE  id = ?;");
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $connection = null;
    }
}
