<?php
require_once __DIR__ . "/g-header.php";
require_once __DIR__ . "/../../Controllers/AdminG-RecetteController.php";
$i = 2;
?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./bootstrap-table-master/dist/bootstrap-table.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="./Admin.css">
    <title>Gestion des recettes</title>
</head>

<body>
    <?php
    header::Show("Gestion des recettes", "./images/recipe-book.png");
    ?>
    <div id="page-container">
        <div id="id01" class="modal">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            <div class="container">
                <form action="/post.php">
                    <label for="nomrecette">Nom de la recette</label>
                    <input type="text" id="nomrecette" name="nomrecette" placeholder="le nom ...">

                    <label for="description">Description de la recette</label>
                    <textarea id="description" name="description" placeholder="la description.." style="height:200px"></textarea>

                    <label for="categories">Selectionez la Categorie</label>
                    <select id="categories" name="categories" multiple>
                        <?php
                        RecetteController::ShowCategories();
                        ?>
                    </select>

                    <div class="sup-container">
                        <div class="sub-container">
                            <label for="tempsprep">Temps de preparation:</label>
                            <input type="time" id="tempsprep" name="tempsprep">
                        </div>
                        <div class="sub-container">
                            <label for="tempcui">Temps de cuisson:</label>
                            <input type="time" id="tempcui" name="tempcui">
                        </div>
                        <div class="sub-container">
                            <label for="tempsrepo">Temps de repos:</label>
                            <input type="time" id="tempsrepo" name="tempsrepo">
                        </div>
                    </div>
                    <br>
                    <div class="sup-container">
                        <div>
                            <label for="difficulte">Difficultée (entre 0 et 100):</label>
                            <input type="range" id="difficulte" name="difficulte" min="0" max="100">
                        </div>
                        <div>
                            <label for="calories">Les calories:</label>
                            <input type="number" id="calories" name="calories" min="0" max="5000">
                        </div>
                    </div>

                    <label for="ingredients">Les ingredients</label>
                    <button id="ingredients-button" type="button" class="btn btn-outline-success btn-sm">Ajouter les ingredients</button>
                    <div id="ing-sup-container">

                        <div class="ingredients-container">

                            <select id="ingredients1" name="ingredients1">
                                <?php
                                RecetteController::ShowIngredients();
                                ?>
                            </select>
                            <label for="quantity"> Quantité (mg / ml) :</label>
                            <input type="number" id="quantity1" name="quantity1" min="0" max="1000">
                        </div>
                    </div>
                    <br> <br> 
                    <label for="fetes">Les fetes</label>
                    <button id="fetes-button" type="button" class="btn btn-outline-success btn-sm">Ajouter les fetes</button>
                    <div id="fetes-sup-container">
                        <div class="fetes-container">

                            <select id="fetes1" name="fetes1">
                                <option class="opt1" value="null"></option>
                                <?php
                                RecetteController::Showfetes();
                                ?>
                            </select>

                        </div>
                    </div>












                    <br>


                    <div class="sub-container">
                        <label for="image">Image de la recette</label>
                        <input type="file" name="image" id="image">
                    </div>
                    <div class="sub-container">
                        <label for="video">Video de la recette</label>
                        <input type="file" name="video" id="video">
                    </div>

                    <label for="etapes">Description de l'etape</label>
                    <button id="etape-button" type="button" class="btn btn-outline-success btn-sm">ajouter une etape</button>
                    <br><br>
                    <div id="sup-etapes" class="sub-container">
                        <input type="text" id="etape1" name="etape1" placeholder="etape 1">
                    </div>
                    <br>

                    <input type="submit" value="Submit">
                    <button type="button" id="closeButton">Cancel</button>

                </form>
            </div>

        </div>

        <div id="table-super-container">
            <div id="table-container">
                <div id="toolbar">
                    <button id="button" class="btn btn-danger">Delete</button>
                    <button id="addButton" class="btn btn-dark"> Add </button>
                    <a href="./Approuver.php"><button id="approuve" class="btn btn-primary">Approuver</button></a>
                    <button id="refresh" class="btn btn-primary">Refresh</button>
                </div>
                <table id="table" data-detail-view="true" data-detail-formatter="detailFormatter" data-height="600" data-show-columns="true" data-toolbar="#toolbar" data-toggle="table" data-search="true" data-click-to-select="true" data-auto-refresh="true" data-pagination="true" data-url="json/data2.json">
                    <thead>
                        <tr>
                            <th data-field="state" data-checkbox="true"></th>
                            <th data-field="id" data-sortable="true" data-width="5">ID</th>
                            <th data-field="nom_categorie" data-sortable="true" data-width="40">Categorie</th>
                            <th data-field="nom_recette" data-sortable="true" data-width="100">Nom de recette</th>
                            <th data-field="temps_total" data-sortable="true" data-width="40">Temps total</th>
                            <th data-field="estim_calories" data-sortable="true" data-width="40">Calories</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>



    </div>












    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-table@1.21.2/dist/bootstrap-table.min.js"></script>
    <script src="./js/Common.js"></script>
    <script src="./js/g-recette.js"></script>

</body>

</html>