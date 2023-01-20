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
<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée (tableau contenant clé et valeur),<br>
   dire bonjour aux différentes personnes dans leur langue respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola »<br>
</p>
<h2>Affichage:<br>
Affichage :<br>
Salut Mickaël<br>
Hola Virgile<br>
Hello Marie-Claire<br>

</h2>
<?php

$tableauCle = array(
    "Mickael" => "francais",
    "Georges" => "anglais",
    "Paul" => "espagnol",
    "Jean" => "arabe"
);

//var_dump($tableauCle);


foreach($tableauCle as $key => $value){
    if($value =="francais" ){
        echo "Salut ";
    }elseif($value =="anglais" ){
        echo "Hello ";
    }elseif($value =="espagnol" ){
        echo "Hola ";
    }elseif($value =="arabe" ){
        echo "Marhaba ";
    }
    echo "$key <br>";
}



?>



</body>
</html>