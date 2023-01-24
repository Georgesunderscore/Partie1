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
	<h1>Exercice 3</h1>
	<p>Afficher un lien hypertexte permettant d’accéder au site d’Elan Formation.<br>
		Le lien devra s’ouvrir dans un nouvel onglet (_blank).<br>
	</p>

	<h2>Résultat
		Elan link<br>
	</h2>

	<?php

	function afficherLienHTML($lien): void
	{
		echo "<a href=" . $lien . " target=_blank>Elan formation </a>";
		echo "<br>";
		//echo $lien;
	};

	$lien = "https://elan-formation.eu/accueil";

	echo afficherLienHTML($lien);

	?>
</body>

</html>