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
	<p>CrepeterImage($url,4);<br>
	</p>
	<h2>Résultat
		Affichage
		images in row<br>
	</h2>






	<?php


	echo "<div class='flex-container'>";
	$url = "https://interactive-examples.mdn.mozilla.net/media/cc0-images/grapefruit-slice-332-332.jpg";
	// 	<img class="fit-picture"
	//  src="/media/cc0-images/grapefruit-slice-332-332.jpg"
	//  alt="Grapefruit slice atop a pile of other slices">

	function repeterImage($url, $n): void
	{


		for ($i = 0; $i < $n; $i++) {
			//echo "<div>";
			echo "<img class='fit-picture' src='$url' alt='Grapefruit slice atop a pile of other slices'>";
			//echo "</div>";
		}
	};
	echo "<div class='flex-container-wrap'>";
	echo repeterImage($url, 4);
	echo "</div>";

	echo "<div class='flex-container'>";
	echo repeterImage($url, 4);
	echo "</div>";



	echo "<div class='flex-container'>";
	echo repeterImage($url, 4);
	echo "</div>";




	echo "</div>";

	echo "</div>";


	?>
</body>

</html>