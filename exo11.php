<h1>Exercice 11</h1>
<p>Initialiser un tableau de x marques de voitures. <br>
   Ecrire un algorithme permettant de parcourir ce tableau et d’en afficher le contenu (une marque de voiture par ligne).<br>
   Il est également demandé d’afficher le nombre de marques de voitures présentes dans le tableau.<br>
</p>
<h2>Affichage:<br>
Affichage (attention à utiliser une liste à puces)<br>
Il y a 4 marques de voitures dans le tableau :<br>
Peugeot<br>
Renault<br>
BMW<br>
Mercedes<br>

</h2>
<?php

$marques = array("Peugeot","Renault","BMW","Mercedes");
echo "Il ya " . count($marques) . " marques de voitures dans le tableau :<br>";
foreach($marques as $marque){
    echo "$marque <br>";


}



?>


