<?php
include __DIR__."./g-header.php";
require_once __DIR__."/../../Controllers/CarouselController.php"
?>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./Admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./common.css">
    <title>Gestion des paramètres</title>
</head>

<body>
    <?php
    header::Show("Gestion des paramètres", "./images/settings.png");
    ?>
    <div id="id01" class="modal">
        <div class="container">
            <form action="./../../Controllers/CarouselFormController.php" method="post">
                <label for="fname">Le lien :</label><br>
                <input type="text" id="lien" name="lien" value="" placeholder="AbsolutePath" ><br>

                <label for="fname">Le lien d'image :</label><br>
                <input type="text" id="lienimg" name="lienimg" value="" placeholder="Database path"><br>

                <label for="fname">Le titre :</label><br>
                <input type="text" id="titre" name="titre" value=""><br>



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
                        <th scope="col">le lien : </th>
                        <th scope="col">le lien d'image </th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    CarouselController::renderTable();
                    ?>
                </tbody>
            </table>
        </div>
    </div>












    <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
    <script src="./js/g-ncommon.js"></script>
</body>

</html>