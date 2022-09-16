<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Strona szefa</title>
</head>
<body>

	<?php
		
		for($count = 1; $count <= 10; ++$count)
		{
			echo "<br>";
			
			for($count1 = 1; $count1 <= 10; ++$count1)
			{
				echo "$count * " . $count1 . " = " . $count1 * $count;
				echo "<br>";
			}
		}
		
	?>


</body>