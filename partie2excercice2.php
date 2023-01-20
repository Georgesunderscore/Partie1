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
    <p>Réaliser un algorithme permettant d’afficher le tableau HTML suivant <br>
    (notez que le nom du pays s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays)<br>
     grâce à une fonction personnalisée.<br>

        Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) ;   </p>
    <h2>Résultat 
        Affichage (si $texte = « Mon texte en paramètre »)
        MON TEXTE EN PARAMETRE en rouge
    </h2>
    
    <?php 
    $text = " Mon texte en paramètre ";
    echo convertirMajRouge($text);
    //echo convertirMajRouge("TEST");
    function convertirMajRouge($texte):string{
        $result = mb_strtoupper($texte) ;
        return "<span class='h1red'>" . $result . "</span>";

    }

    

    ?>    
</body>
</html>



