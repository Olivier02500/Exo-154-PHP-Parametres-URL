<?php

/**
 * Exo 1
 * ------
 * 1. Créez une nouvelle page 'exo1.php'
 * 2. Créez un lien dans index.php ( ici ) qui passe le paramètre 'iteration' avec pour valeur 10 à cette page.
 * 3. Traitez tous les paramètres pour vous prémunir des petits malins.
 * 4. Faites une boucle pour afficher autant de fois Hello World 10 fois en utilisant 'iteration' dans la boucle.
 */

// TODO Votre code ici.
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>index</title>
</head>
<body>

<a href="./exo1.php?iteration=10">Exo 1</a>

</body>
</html>
<?php

/**
 * Exo 2
 * ------
 * Faites exactement la même chose que pour l'exercice 1, mais le nouveau fichier sera nommé exo2.php
 * Créez au moins 10 liens à l'aide d'une boucle !!!
 * Pour chaque lien, le paramètre iteration prendra la valeur actuelle de votre variable de boucle ( $i par exemple ).
 */

echo '<br><br>';

for ($i = 0; $i < 10; $i++){
    echo "<p><a href='./exo2.php?iteration=$i'>Exo 2</a></p>";
}
?>




