<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Document</title>
    </head>
    <body>


<h1>Exercice 8</h1>
<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la forme  :<br>
</p>
<h2>Résultat 
    Affichage :<br>
    Affichage (pour la table de 8) :<br>
    Table de 8 :<br>
    1 x 8 = 8<br>
    2 x 8 = 16<br>
    3 x 8 = 24...<br>
</h2>
<?php 
    $tablede = 8;
    for ($i = 1; $i <= 10; $i++) {
        echo ("$i * 8 = " . $i * 8 . " <br>");
    }




echo var_dump(range(1, 10));
foreach (range(1, 10) as $key => $value) {
    echo ($key. $value);
}
?>
</body>
</html>
