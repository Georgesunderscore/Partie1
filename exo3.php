<h1>Exercice 3</h1>
<p>Soit la phrase « Notre formation DL commence aujourd'hui ».<br>
A partir de la phrase de l’exercice 1, écrire l’instruction permettant de remplacer le mot « aujourd’hui » par le mot « demain ». Afficher l’ancienne et la nouvelle phrase.</p>
<h2>Résultat</h2>
<?php 
    $phrase = "Notre formation DL commence aujourd'hui";
     remplacer($phrase,"aujourd'hui","demain"); 

function remplacer($phrase,$motav,$motap) : string {
    //ancienne phrase
    echo("$phrase <br>" );
    //traitement 
    echo str_replace($motav, $motap, $phrase);
    //nouvelle phrase
    //echo($phrase);
    return $phrase;
}
