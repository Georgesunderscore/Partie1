<h1>Exercice 9</h1>
<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.<br>
   Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de<br> 
   plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable » ):<br>
</p>
<h2>Résultat 
    Affichage :<br>
    Age : 32<br>
    Sexe : F<br>
    La personne est imposable
</h2>

<?php

$age = 32;
$sexe = "F";
echo "Age : $age <br>";
echo "Sexe : $sexe <br>";

switch ($sexe) {
    case "H":
        if($age>20)
        echo "La personne est imposable<br>";
        break;
    case "F":
        if($age>18 && $age <= 35)
        echo "La personne est imposable<br>";
        break;
    default:
        echo "Autre<br>";
}

//correction variable
$condition1 = $sexe == "F" && $age >= 18 && $age <= 35;
$condition2 = $sexe == "H" && $age > 20;

if($condition1 || $condition2) {
    echo "La personne est imposable<br>";
} else {
    echo "La personne est non imposable<br>";
}





