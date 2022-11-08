<html>


	<head>
		<title> Strona Szefa </title>
		<meta charset="utf-8">
	</head>

	<body>
	
	<div id="header">
		
	</div>

	<?php
		if (isset($_GET['page'])) {
			$strona = $_GET['page'];
		}
		else{
			$strona = null;
		}

		echo "Strona: " . $strona . "<br>";
	?>

	<form action="./Get.php" method="POST">
		<h2>Atrakcje Zachodniopomorskie</h2>
		<a href="Get.php?page=main">Strona Glowna</a><br>
		<a href="Get.php?page=news">Aktualnosc</a>
	</form>
	
	<?php if(($strona)!=null) include($strona.".php"); ?>
	
	</body>


</html>