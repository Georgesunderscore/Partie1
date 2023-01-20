<h1>Exercice 15</h1>
<p>Créer une classe Personne (nom, prénom et date de naissance).<br>
Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.<br>
$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;<br>
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") <br>
</p>
<h2>    
Affichage :<br>
Michel DUPONT a … ans<br>
Alice DUCHEMIN a … an<br>
</h2>
<?php

class Personne
{
    // déclaration d'une propriété
    public $nom = 'kayal';
    public $prenom = 'georges';
    public $birthdate = "01-01-1996";

    public function __construct($nom,$prenom,$birthdate) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->birthdate = $birthdate;
        
    }
    public function __toString(){
     $ecrire = $this->nom . $this->prenom . $this->birthdate ;
        return $ecrire;
    }

    
    // déclaration des méthodes
    public function displayPersonne() {
        echo $this->nom;
        echo $this->prenom;
        echo $this->birthdate;
    }
}
function filtreDate($filtre,$listPersonnes){
        
    //$ecrire = $this->nom . $this->prenom . $this->birthdate ;
    //   return $ecrire;
   }
$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");
$listpersonnes = [$p1,$p2];


foreach($listpersonnes as $p => $x) {
    echo"$x->nom";
    echo" ";
    echo"$x->prenom";
    $start_date = date_create($x->birthdate);
    $end_date   = date_create(date('m.d.y')); // test
    $diff = $start_date->diff($end_date);
    printf(' Your age : %d years', $diff->y);
    echo "<br>";


}

// echo $p1->prenom;
//git branch -M master ou dautre main pour cree une ;
                                                    // git init
                                                    // git add .
                                                    // git commit -m "first commit"
                                                    // git branch -M main
                                                    // git remote add origin "_git repository link here_"
                                                    // git push -u origin main
// echo $p1->nom;
// echo "a ";
// echo $p1->birthdate;
// echo "ans ";
// echo $p1;


?>


