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
	<h1>Exercice 9</h1>
	<p>Créer une fonction personnalisée permettant d’afficher des boutons radio
		avec un tableau de valeurs en paramètre ("Monsieur","Madame","Mademoiselle").<br>
	</p>
	<h2>Résultat
		Affichage
		avec un tableau de valeurs en paramètre ("Monsieur","Madame","Mademoiselle").<br>

	</h2>






	<?php


	echo "<div class='flex-container'>";
	$nomsRadio = array("Monsieur", "Madame", "Mademoiselle");

	function afficherRadion($nomsRadio): void
	{
		foreach ($nomsRadio as $value) {

			echo "<div>";
			echo "<input type='radio' id = '$value' name='rgChoice' value='$value' unchecked>";
			echo "<label for='$value'>$value</label>";
			echo "</div>";
		}
	};

	afficherRadion($nomsRadio);

	?>
</body>

</html>