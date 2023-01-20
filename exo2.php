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

<h1>Exercice 2</h1>
<p>Soit la phrase « Notre formation DL commence aujourd'hui ».<br>
   Ecrire un algorithme permettant de compter le nombre de mots contenus dans cette phrase</p>
<h2>Résultat</h2>
<?php 
    $phrase = "Notre formation DL commence aujourd'hui";
    $nbrMots = str_word_count($phrase);
    
    echo"La phrase  $phrase contient $nbrMots mots <br>";
    echo"La phrase  $phrase contient ".str_word_count($phrase)." mots <br>";
    ?>

</body>    
</html>