<?php
include __DIR__ . "./g-header.php";
require_once __DIR__ . "/../../Controllers/NewsController.php";
?>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./Admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./common.css">
    <title>Gestion des news</title>
</head>

<body>
    <?php
    header::Show("Gestion des news", "./images/news.png");
    ?>
    <div id="id01" class="modal">
        <div class="container">
            <form action="./../../Controllers/NewsFormController.php" method="post">
                <label for="fname">Titre:</label><br>
                <input type="text" id="titre" name="titre" value=""><br>
                <label for="lname">Paragraphe:</label><br>
                <input type="text" id="paragraphe" name="paragraphe" value=""><br><br>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>


    <div id="button-holder">
        <button id="addbutton" class="btn btn-dark"> Ajouter </button>
    </div>


    <div id="sup-container">
        <div id="table-container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">paragraphe</th>
                        <th scope="col">titre</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    NewsController::renderTable()
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
<script src="./js/g-ncommon.js"></script>

</html>