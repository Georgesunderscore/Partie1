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
	<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en précisant le nom des champs associés
		.<br>
		Vous devrez appeler la fonction comme suit : afficherInput($nomsInput);

	</p>
	<h2>Résultat
		Affichage
		les inputs text form<br>
	</h2>


	<form action="" method="">

		<?php
		$nomsInput = array("Nom", "Prénom", "Ville");

		function afficherInput($nomsInput): void
		{
			//sort par clé
			foreach ($nomsInput as $value) {
				echo "<label>" . $value . "</label> <br>";
				echo "<input type='text' name=" . $value . " />";
				echo "<br>";
			}
		};
		echo afficherInput($nomsInput);
		echo "</form>"
		?>
</body>

</html>