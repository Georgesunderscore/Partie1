<h1>Exercice 6</h1>
<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité d’articles,
   son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)</p>
<h2>Résultat 
      Affichage :
      Prix unitaire de l’article : 9.99 €<br>
      Quantité : 5<br>
      Taux de TVA : 0.2<br>
      Le montant de la facture à régler est de : 59.94 €</h2>
<?php 
    $prixunitaire = 9.99;
    $quantite = 5;
    $tauxTva = 0.2;
    $resultat = $prixunitaire * $quantite * (1 + $tauxTva);
    $resultat = round( $resultat , 2);

    echo"Le montant de la facture à régler est de : $resultat € <br>";

    echo "correction<br>";
    $montantTTC = round($prixunitaire * $quantite * (1 + $tauxTva), 2);

    echo "Prix unitaire : $prixunitaire €<br>
         Qté : $quantite articles<br>
         Taux TVA : ". $tauxTva * 100 ." %<br>
         Le montant de la facture est de : $montantTTC €";

    
