<h1>Exercice 13</h1>
<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de coefficient). Elle devra être affichée avec 2 décimales.»<br>
</p>
<h2>Affichage:<br>
Les notes obtenues par l’élève sont : 10 12 8 19 3 16 11 13 9<br>
Sa moyenne générale est donc de : 11.22<br>
Hello Marie-Claire<br>

</h2>
<?php

$notes = array(10,12,19,3,16,11,13,9);
echo "les notes obtenus par l’élève sont : ";
foreach($notes as $note ){
    echo "$note ";
    $totalnotes = $note;
}
echo "<br>";
echo "Sa moyenne générale est donc de :";

$moyenGeneral = 0.00;
$sommeNotes = array_sum($notes);
$nbNotes = count($notes);
$moyenGeneral = round($sommeNotes / $nbNotes, 2);
echo "$moyenGeneral";

?>


