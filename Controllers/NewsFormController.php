<?php

require_once __DIR__ . "/../Models/NewsModel.php";

$titre = isset($_POST['titre']) ? $_POST['titre'] : null;
$paragraphe = isset($_POST['paragraphe']) ? $_POST['paragraphe'] : null;
NewsModel::insertNews($paragraphe, $titre);
header("Location: ../Views/Admin/g-news.php");
