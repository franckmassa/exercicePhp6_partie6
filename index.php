<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Exercice6</title>
</head>
<body>
  <p>
    <?php
    //Teste que les paramètres de l'url existent et affichage des valeurs
    if(isset($_GET['building']) && isset($_GET['room'])){
      echo $_GET['building'] . ' ' . $_GET['room'];
    }
    ?>
  </p>
</body>
</html>
