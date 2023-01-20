<h1>Exercice 10</h1>
<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui <br>
    affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 1 €<br>
</p>
<h2>Affichage:<br>
Montant à payer : 152 €<br>
Montant versé : 200 €<br>
Reste à payer : 48 €<br>
***************************************************<br>
Rendue de monnaie : <br>
4 billets de 10 € - 1 billet de 5 € - 1 pièce de 2 € - 1 pièce de 1 €<br>

</h2>

<?php


$ecrire = "Rendue de monnaie :<br>";
$mPayer = 152;
$mVerse = 200;
$rPayer = $mVerse -$mPayer ;
$i = 0;
$diviseurList = [10,5,2,1];
$length = count($diviseurList);
foreach($diviseurList as $diviseur) {
    $i++;
                    //transcripter
    //$partieEntiere= (int)($rPayer/$diviseur); // donne 4 ; 1 ; 1 ; 1 
    $partieEntiere= intdiv($rPayer, $diviseur); // donne 4 ; 1 ; 1 ; 1 
    $reste = $rPayer%$diviseur; // donne 8 //              3 ; 1 ; 0
    echo "$partieEntiere billets de $diviseur € ";
    if ($i != $length) {
        echo "-";
    }
    $rPayer = $reste;
}


/*
while($rPayer > 0){
    if ($rPayer - 10 >= 0){
       $count10 = $count10+1;
       $rPayer = $rPayer - 10; 
    } elseif( $rPayer - 5 >= 0){
       $count5++;
       $rPayer = $rPayer - 5;
   } elseif( $rPayer - 2 >= 0){
       $count2++;
       $rPayer = $rPayer - 2;
   } elseif ($rPayer - 1 >= 0) {
       $count1++;
       $rPayer = $rPayer - 1;
   }else{
       echo "else <br>";
   }

   }
   echo  "$ecrire $count10 billets de 10 € - $count5  billets de 5 € - $count2  billets de 2 € - $count1  billets de 1 €";

*/
?>







