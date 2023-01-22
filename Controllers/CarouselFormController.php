<?php

require_once __DIR__ . "/../Models/CarouselModel.php";
require_once __DIR__ . "/../Models/ImageVIdeoModel.php";


$lien = isset($_POST['lien']) ? $_POST['lien'] : null;
$lienimg = isset($_POST['lienimg']) ? $_POST['lienimg'] : null;
$titre = isset($_POST['titre']) ? $_POST['titre'] : null;

$id = CarouselModel::insertCarousel($lien);
ImageVideoModel::lnsertImageDiapo($id, $lienimg, $titre);









header("Location: ../Views/Admin/g-parametres.php");
