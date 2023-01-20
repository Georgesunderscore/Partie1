<h1>Exercice 4</h1>
<p>Soit la phrase « Engage le jeu que je le gagne ».<br>
Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>
<h2>Résultat</h2>
<?php 
    $phrase = "Engage le jeu que je le gagne";
    if (checkPalindrome($phrase)){
        echo "La phrase $phrase est palindrome";
    }
    else
        echo "La phrase $phrase n'est pas palindrome";

    function checkPalindrome($string) : bool{
        $string = strtolower($string);
        $string = str_replace(" ","",$string);
        $reverse = strrev($string);
        $vbool =false;
            if($string == $reverse){
                $vbool =true;
            } else {
                $vbool = false;
            }
        return $vbool;
     }
