<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Strona szefa</title>
</head>
<body>

	<?php
		
		for($wysokosc = 1; $wysokosc <= 6; ++$wysokosc)
		{
			
			for($szerokosc = 1; $szerokosc <= 5; ++$szerokosc)
			{
				if($wysokosc == 1 OR $wysokosc == 6)
				{
					echo "*";
				}
				
				elseif($szerokosc == 1 OR $szerokosc == 5)
				{
					echo "*";
				}
				
				else
				{
					echo "_";
				}
			}
			
			echo "<br>";
		}
		
	?>


</body>