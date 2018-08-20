<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>exercice6</title>
    </head>
    <body>
        <?php
        if (!empty($_GET['building']) && !empty($_GET['room'])) {
            // affichage des paramètres
            echo $_GET['building'] . ' ' . $_GET['room'];
        }
        ?>
    </p>
</body>
</html>