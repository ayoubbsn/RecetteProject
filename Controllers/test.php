<?php
include (__DIR__."/AdminG-RecetteController.php");
?>
<html>

<head>
    <title>
        hello
    </title>
</head>

<body>
    <select id="country" name="country">
        <option value="australia">Australia</option>
        <option value="canada">Canada</option>
        <option value="usa">USA</option>
        <?php
        RecetteController::ShowCategories();
        ?>


    </select>
</body>

</html>