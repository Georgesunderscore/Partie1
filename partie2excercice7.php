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
	<p>Créer une fonction personnalisée permettant de générer des cases à cocher.<br>
		On pourra préciser dans le tableau associatif si la case est cochée ou non..<br>
		Exemple :<br>
		genererCheckbox($elements);<br>
		//où $elements est un tableau associatif clé => valeur avec 3 entrées.<br>
	</p>
	<h2>Résultat
		Affichage
		item list of checkbox<br>
	</h2>


	<form action="" method="">




		<?php

		// <fieldset>
		//   <legend>Veuillez sélectionner vos intérêts</legend>
		//   <div>
		//     <input type="checkbox" id="coding" name="interest" value="coding" checked>
		//     <label for="coding">Développement</label>
		//   </div>
		//   <div>
		//     <input type="checkbox" id="music" name="interest" value="music">
		//     <label for="music">Musique</label>
		//   </div>
		// </fieldset>
		$elements = array(
			"Choix1" => "checked",
			"Choix2" => "",
			"Choix3" => "checked"
		);
		echo "<fieldset>";
		echo "<legend>Veuillez sélectionner vos intérêts</legend>";
		echo "<br>";

		function genererCheckbox($elements): void
		{


			foreach ($elements as $key => $value) {
				echo "<div>";
				echo "<input type='checkbox' id=$key name=$key $value>";
				echo "<label for=$key> $key</label>";
				echo "<br>";
				echo "</div>";
			}
		};
		echo genererCheckbox($elements);
		echo "</fieldset>";
		echo "</form>";

		?>
</body>

</html>