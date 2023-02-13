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
	<h1>Exercice 5</h1>
	<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs.<br>
		Exemple :<br>
		$elements = array("Monsieur","Madame","Mademoiselle");<br>
		alimenterListeDeroulante($elements);<br>
	</p>
	<h2>Résultat
		Affichage
		item list<br>
	</h2>


	<form action="" method="">

		<?php
		$elements = array("Monsieur", "Madame", "Mademoiselle");
		echo "<label for='gendre'>Quelle est votre Gendre:</label>";
		echo "<select name='gendre' id='gendre'>";
		echo "<br>";

		function alimenterListeDeroulante($elements): void
		{


			foreach ($elements as $element) {
				echo "<option value=" . $element . ">$element</option>";
				echo "<br>";
			}
		};
		echo alimenterListeDeroulante($elements);
		echo "</select>";
		echo "</form>";

		?>
</body>

</html>