<?php
require_once __DIR__ . "/../Models/CarouselModel.php";

CarouselModel::deleteCarousel($_POST['idcar']);

header("Location: ../Views/Admin/g-parametres.php");
