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
    <h1>Exercice 14</h1>
    <p>Créer une classe Voiture possédant 2 propriétés (marque et modèle) ainsi qu’une classe VoitureElec qui hérite (extends) de la classe Voiture 
			et qui a une propriété supplémentaire (autonomie).
		Instancier une voiture « classique » et une voiture « électrique » ayant les caractéristiques suivantes :
		Peugeot 408 : $v1 = new Voiture("Peugeot","408");
		BMW i3 150 : $ve1 = new VoitureElec("BMW","I3",100);
 </p>
    <h2>Affichage</br>
	Votre programme de test devra afficher les informations des 2 voitures de la façon suivante :
		echo $v1->getInfos()."<br/>";
		echo $ve1->getInfos()."<br/>"; 
        
    </h2>
    
    <?php 
		
		class Voiture
		{
			// déclaration
			private string $_marque = "";
			//accessible de la class fille
			protected string $_model = "";
			
			public function __construct($marque, $model)
			{
				$this->_marque = $marque;
				$this->_model = $model;
			
			}
			public function __toString()
			{
				$ecrire = $this->_marque ." ". $this->_model ;
				return $ecrire;
			}

			public function getInfos()
			{
				$ecrire = "Infos véhicule $this->_marque $this->_model ";
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

		}

		class VoitureElec extends Voiture 
		{

			private int $_autonomie = 0;
			
			public function __construct($marque, $model, $autonomie)
			{
				parent::__construct($marque,$model);	
				$this->_autonomie = $autonomie;
	
			}

			 public function getInfos()
			 {
																		//protected accesible du classe fille	
			 	$ecrire =  parent::getInfos() . " ". $this->_autonomie  . " ". $this->_model;
			 	return $ecrire;
			 }

		} 


//creation des objets des voitures 

$v1 = new Voiture("Peugeot","408");
$ve2 = new VoitureElec( "Peugeot","408" ,100);

 echo $v1->getInfos();
 echo "<br>";
 echo $ve2->getInfos();

//out of class Cannot access protected property
 //echo $ve2->_model;
 

    ?>    
</body>
</html>



