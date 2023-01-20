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

<h1>Exercice 5</h1>
<p>Affichage :
   Montant en francs : 100
   100 francs = 15.24 €<br>
   Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.
   Attention, la valeur générée devra être arrondie à 2 décimales.</p>
<h2>Résultat</h2>
<?php 

    $vfrancs = 10000000;
    $vrate = 6.56167;
    
    $valeurEuros = round($vfrancs / $vrate,2);
    // Notation française                                ',' , separation pour la valeur decimale apres la virgule
                                                          //' 'espace qui separe les milliers   
    $valeurEurosNF = number_format($vfrancs / $vrate, 2, ',',' ');
    echo "Montant en francs : $vfrancs <br> $vfrancs francs = $valeurEuros €<br>";
    echo "format francais Montant en francs : $vfrancs francs = $valeurEurosNF €<br>";

   // Notation anglaise sans séparateur de milliers
   $english_format_number = number_format($vfrancs / $vrate, 2, '.', '');
   echo " format anglais Montant en francs : $vfrancs francs = $english_format_number €<br>";
    


   ?>
   </body>
   </html>