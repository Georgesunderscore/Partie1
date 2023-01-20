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


<h1>Exercice 7</h1>
<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :<br>
      Poussin : entre 6 et 7 ans<br>
      Pupille : entre 8 et 9 ans<br>
      Minime : entre 10 et 11 ans<br>
      Cadet : à partir de 12 ans<br>
      Si la catégorie n’est pas gérée, merci de le préciser   <br>
</p>
<h2>Résultat 
    Affichage :<br>
    L’enfant qui a 10 ans appartient à la catégorie « Minime »</h2>
<?php 
    $age = 10;
    if($age >= 12 ){echo ("L’enfant qui a $age ans appartient à la catégorie Cadet");} 
    elseif ($age >=10) {echo "L’enfant qui a $age ans appartient à la catégorie Minime";} 
    elseif ($age >= 8) {echo "L’enfant qui a $age ans appartient à la catégorie Pupille";} 
    elseif ($age >= 6) {echo "L’enfant qui a $age ans appartient à la catégorie Poussin";} 
    else echo "la catégorie n’est pas gérée";


    
    ?>
</body>
</html>