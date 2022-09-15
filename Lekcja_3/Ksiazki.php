<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Strona szefa</title>
</head>
<body>

	<?php

		$ksiazka = "Kryminał";
		
		switch($ksiazka)
		{
			case "Biografia":
				echo "Wybrales ksiazke z kategorii Biografia";
				break;
				
			case "Fantastyka":
				echo "Wybrales ksiazke z kategorii Fantastyka";
				break;
				
			case "Kryminał":
				echo "Wybrales ksiazke z kategorii Kryminał";
				break;
				
			case "Poradniki":
				echo "Wybrales ksiazke z kategorii Poradniki";
				break;
				
			case "Historia":
				echo "Wybrales ksiazke z kategorii Historia";
				break;
				
			default:
				echo "Nie czytasz ksiazek, ZACZNIJ!";
		}
		
	?>


</body>