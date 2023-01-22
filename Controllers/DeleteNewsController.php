<?php
require_once __DIR__ . "/../Models/NewsModel.php";

NewsModel::deletNews($_POST['idnews']);

header("Location: ../Views/Admin/g-news.php");
