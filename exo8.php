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