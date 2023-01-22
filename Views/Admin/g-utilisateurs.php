<?php
include "./g-header.php";
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./bootstrap-table-master/dist/bootstrap-table.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="./Admin.css">
    <title>Gestion des utilisateurs</title>
</head>

<body>
    <?php
    header::Show("Gestion des utilisateurs", "./images/user.png");
    ?>

    <div id="table-super-container">
        <div id="table-container">
            <div id="toolbar">
                <button id="dbutton" class="btn btn-danger">Delete</button>
                <button id="addButton" class="btn btn-dark"> Add </button>
                <a href="./g-UserApprv.php"><button id="approuve" class="btn btn-primary">Approuver</button></a>
                <button id="refresh" class="btn btn-primary">Refresh</button>
            </div>
            <table id="table" data-detail-view="true" data-detail-formatter="detailFormatter" data-height="600" data-show-columns="true" data-toolbar="#toolbar" data-toggle="table" data-search="true" data-click-to-select="true" data-auto-refresh="true" data-pagination="true" data-url="json/dataUser.json">
                <thead>
                    <tr>
                        <th data-field="state" data-checkbox="true"></th>
                        <th data-field="id" data-sortable="true" data-width="5">ID</th>
                        <th data-field="nom" data-sortable="true" data-width="40">Nom</th>
                        <th data-field="prenom" data-sortable="true" data-width="100">Nom de recette</th>
                        <th data-field="date_naissance" data-sortable="true" data-width="40">Temps total</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-table@1.21.2/dist/bootstrap-table.min.js"></script>
    <script src="./js/Common.js"></script>
    <script src="./js/g-utilisateurs.js"></script>
</body>

</html>