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
    <h1>Exercice 12</h1>
    <p>La fonction var_dump($variable) permet d’afficher les informations d’une variable.
       Soit le tableau suivant :
       $tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));
       A l’aide d’une boucle, afficher les informations des variables contenues dans le tableau.  </p>
    <h2>Affichage</br>
            bool(true)</br>
            string(5) "texte"</br>
            int(10)</br>
            float(25.369)</br>
            array(2) { [0]=> string(7) "valeur1" [1]=> string(7) "valeur2" }</br>
        
    </h2>
    
    <?php 
    $tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));
    foreach($tableauValeurs as $value){
        var_dump($value); 
        echo "</br>";
        }

    ?>    
</body>
</html>



