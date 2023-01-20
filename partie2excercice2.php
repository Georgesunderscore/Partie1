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
     Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);

    </p>
    <h2>Résultat 
    Affichage
    Pays Capitale<br>
    ALLEMAGNE Berlin<br>
    FRANCE Paris<br>
    ITALIE Rome<br>
    USA Washington<br>
    </h2>
    
    <?php 
       $capitales = array ("France"=>"Paris",
                           "Allemagne"=>"Berlin",
                           "USA"=>"Washington",
                           "Italie"=>"Rome");

        function afficherTableHTML($capitales):void{

            //sort par clé
            ksort($capitales);
            
            foreach($capitales as $key => $value){
                echo "<span class='h1red'>" . mb_strtoupper($key) . "</span>";    
                echo " ";
                echo "<span class='h1red'>" . $value . "</span>";    
                
                echo "<br>";
            }
            
            




            

            };
    
        echo     afficherTableHTML($capitales) ; 
   

    

    ?>    
</body>
</html>



