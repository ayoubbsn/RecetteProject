<?php
require_once(__DIR__ . "/../Models/UserModel.php");


class UserController
{
    public static function loadFile()
    {
        $myfile = fopen("../Views/Admin/json/dataUser.json", "w");
        $data = json_encode(UserModel::getAllApprovedUsers());
        fwrite($myfile, $data);
    }
    public static function loadFileApprouver()
    {
        $myfile = fopen("../Views/Admin/json/dataUserNa.json", "w");
        $data = json_encode(UserModel::getAllNotApprovedUsers());
        fwrite($myfile, $data);
    }

}
