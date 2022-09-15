<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Strona szefa</title>
</head>
<body>

	<?php

		$liczba = 75;
		
		if ($liczba < 39)
		{
			echo "dostales 1";
		}
		elseif(($liczba >= 40) AND ($liczba <54))
		{
			echo "dostales 2";
		}
		elseif (($liczba >= 55) AND ($liczba < 69))
		{
			echo "dostales 3";
		}
		elseif (($liczba >= 70) AND ($liczba < 84))
		{
			echo "dostales 4";
		}
		elseif (($liczba >= 85) AND ($liczba < 94))
		{
			echo "dostales 5";
		}
		elseif (($liczba >= 95) AND ($liczba < 100))
		{
			echo "dostales 6";
		}
		
	?>


</body>