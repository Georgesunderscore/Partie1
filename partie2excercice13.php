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
    <h1>Exercice 13</h1>
    <p>Créer une classe Voiture possédant les propriétés suivantes : 
        marque, modèle, nbPortes et vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( )
        en plus des accesseurs (get) et mutateurs (set) traditionnels. 
        La vitesse initiale de chaque véhicule instancié est de 0.
         Une méthode personnalisée pourra afficher toutes les informations d’un véhicule.  </p>
    <h2>Affichage</br>
    Une méthode personnalisée pourra afficher toutes les informations d’un véhicule.</br>
        
    </h2>
    
    <?php 
		
		class Voiture
		{
			// déclaration
			private string $_marque = "";
			private string $_model = "";
			private int $_nbportes = 0;
			private int $_vitesseActuelle = 0;

			private int $_vitesseInitial = 0;
			private bool $_statusVoiture = false;

			public function __construct($marque, $model, $nbportes, $vitesseActuelle)
			{
				$this->_marque = $marque;
				$this->_model = $model;
				$this->_nbportes = $nbportes;
				$this->_vitesseActuelle = $vitesseActuelle;

				$this->_vitesseInitial = 0;
				$this->_statusVoiture = false;
			}
			public function __toString()
			{
				$ecrire = $this->_marque ." ". $this->_model ." ". $this->_nbportes ." ". $this->_vitesseActuelle;
				return $ecrire;
			}

			public function displayVoitureInfo()
			{
				$ecrire = "Infos véhicule $this->_marque  $this->_model  $this->_nbportes  $this->_vitesseActuelle";
				return $ecrire;
			}

			public function getMarque(): string
			{
				return $this->_marque;
			}
			
			public function setMarque(string $marque)
			{
				$this->_marque = $marque;
			}

			public function getModel(): string
			{
				return $this->_model;
			}

			public function setModel(string $model)
			{
				$this->_model = $model;
			}

			public function getNbport(): int
			{
				return $this->_nbport;
			}

			public function setNbportes(int $nbportes)
			{
				$this->_nbportes = $nbportes;
			}

			public function getVitesseActuelle(): int
			{
				return $this->_vitesseActuelle;
			}

			public function setVitesseActuelle(int $vitesseActuelle)
			{
				$this->_vitesseActuelle = $vitesseActuelle;
			}

			public function getStatusVoiture(): bool
			{
				return $this->_statusVoiture;
			}

			public function setStatusVoiture(bool $statusVoiture)
			{
				$this->_statusVoiture = $statusVoiture;
			}

			public function demarrer()
			{
				$this.setStatusVoiture(TRUE);
			
			}
			public function stopper( )
			{
				$this.setStatusVoiture(FALSE);
			}

			public function accelerer($vitesse) 
			{
				$v1 = $this->getVitesseActuelle();
				$this->setVitesseActuelle($v1+ $vitesse);
			}
			public function ralentir($vitesse){
				$this->setVitesseActuelle($this->getVitesseActuelle() - $vitesse);
			}
		}

//creation des objets des voitures 
//$marque, $model, $_nbportes, $_vitesseActuelle)
$v1 = new Voiture("BMW", "X8", 4 , 0) ;
$v2 = new Voiture("Peugeot", "8000", 4 , 0) ;


//echo $v1.getVitesseActuelle();
// echo $v1->getModel();

 $v1->accelerer(10);
 echo $v1->getVitesseActuelle();

// echo $v1;
// echo "<br>";
// echo $v2;


    ?>    
</body>
</html>



