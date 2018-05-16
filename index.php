<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
  <title>Exercice 6 Partie 2 PHP</title>
</head>
<body>
  <p>
    <?php
    $monAge = 24;
    echo 'le contenu de ma variable $monAge est ' . $monAge . '<br />';
    if ($monAge <= 18) {// Si $age est inférieur à 18
      echo 'Tu n\'es pas majeur';
    }
    else {// Sinon on affiche ce message
      echo 'Tu es majeur';
    }
    ?>
  </p>
</body>
</html>
