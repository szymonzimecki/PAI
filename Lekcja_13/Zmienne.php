<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Strona szefa</title>
</head>
<body>

	<p>Rozgrzewka</p>
	<hr>

	<?php

		$liczba = 3;
		$wyraz = "Sesja Test";

		echo "Liczba: " . $_SESSION["liczba"] = $liczba;
		echo "<br>Wyraz: " . $_SESSION["wyraz"] = $wyraz;
	?>


</body>