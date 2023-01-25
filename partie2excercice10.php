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
	<script type="text/javascript" src="validationjavascript.js"></script>
	<h1>Exercice 9</h1>
	<p>En utilisant l’ensemble des fonctions personnalisées crées précédemment,
		créer un formulaire complet qui contient les informations suivantes :
		champs de texte avec nom, prénom, adresse e-mail,
		ville, sexe et
		une liste de choix parmi lesquels on pourra
		sélectionner un intitulé de formation : « Développeur Logiciel »,
		« Designer web », « Intégrateur » ou « Chef de projet ».<br>
		Le formulaire devra également comporter un bouton permettant de le soumettre
		à un traitement de validation (submit).
	</p>
	<h2>Résultat
		Affichage
		avec un tableau de valeurs en paramètre ("Monsieur","Madame","Mademoiselle").<br>

	</h2>






	<?php

	$nomsInput = array("Nom", "Prénom", "email", "ville", "sex", "listintitule");



	function afficherRadio($sex): void
	{
		foreach ($sex as $value) {

			echo "<div>";
			echo "<input type='radio' id = '$value' name='$value' value='$value' unchecked >";
			echo "<label for='$value'>$value</label>";
			echo "</div>";
		}
	};



	function alimenterListeDeroulante($elements): void
	{

		foreach ($elements as $value) {
			echo "<option valeur=" . $value . ">$value</option>";
			echo "<br>";
		}
	};




	function afficherInput($nomsInput): void
	{
		$sex = array("Homme", "Femme");
		$elements = array(
			"", "Développeur Logiciel", "Designer web", "Intégrateur",
			"Chef de projet"
		);

		//sort par clé
		foreach ($nomsInput as $value) {
			echo "<label>" . $value . "</label> <br>";
			if ($value == "email") {
				echo "<input type='mail' id ='mail' class='mail'  name=" . $value . " required/>";
				echo "<span class='error' aria-live='polite'></span>";
			} elseif ($value == "sex") {
				afficherRadio($sex);
			} elseif ($value == "listintitule") {
				echo "<label for='gendre'>Quelle est votre Intitulé:</label>";
				echo "<select name='intitule' id='intitule' required>";
				echo "<br>";
				echo alimenterListeDeroulante($elements);
				echo "</select>";
			} else
				echo "<input type='text' name=" . $value . " required/>";
			echo "<br>";
		}
	};




	echo "<form>";
	echo afficherInput($nomsInput);
	echo "<input type='submit' value='Envoyer le formulaire'>";
	echo "</form>";

	echo "<form>";
	echo "<label for='mail'>Pourriez-vous nous fournir une adresse mail ?</label>";
	echo "<input type='email' id='mail2' name='mail'>";
	echo "<button>Envoyer</button>";
	echo "</form>";


	?>
</body>

</html>