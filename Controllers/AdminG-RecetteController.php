<?php
require_once(__DIR__ . "/../Models/RecetteModel.php");
require_once(__DIR__ . "/../Models/IngredientsModel.php");
require_once(__DIR__ . "/../Models/CategoriesModel.php");
require_once(__DIR__ . "/../Models/SeasonModel.php");
require_once(__DIR__ . "/../Models/FetesModel.php");


class RecetteController
{
    public static function loadFile()
    {
        $myfile = fopen("../Views/Admin/json/data2.json", "w");
        $data = json_encode(RecetteModel::getAllApproved());
        fwrite($myfile, $data);
    }
    public static function loadFileApprouver()
    {
        $myfile = fopen("../Views/Admin/json/data3.json", "w");
        $data = json_encode(RecetteModel::getAllNotApproved());
        fwrite($myfile, $data);
    }

    public static function ShowIngredients()
    {
        $data = IngredientsModel::loadIngredients();
        foreach ($data as $key => $val) {
            echo "<option class='ing-obj'  value=" . $val['id'] . " >" . $val['nom'] . "</option>";
        }
    }

    public static function showFetes()
    {
        $data = FeteModel::getAllFetes();
        foreach ($data as $key => $val) {
            echo "<option class='fetes-obj'  value=" . $val['id'] . " >" . $val['nom'] . "</option>";
        }
    }



    public static function ShowCategories()
    {
        $data = CategoriesModel::loadCategories();
        foreach ($data as $key => $val) {
            echo "<option value=" . $val['id'] . ">" . $val['name'] . "</option>";
        }
    }
    public static function showSeasons()
    {
        $data = SeasonModel::getSeasons();
        foreach ($data as $key => $val) {
            echo "<option value=" . $val['id'] . ">" . $val['nom'] . "</option>";
        }
    }
}
