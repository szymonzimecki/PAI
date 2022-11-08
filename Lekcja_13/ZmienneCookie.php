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

		$cookie_name = "user";
		$cookie_value = "John Doe";

		setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

		if (!isset($_COOKIE[$cookie_name])) {
			echo "Nie stworzono zmiennych";
		}
		else{
			echo "Stworzono zmienne:<br>";
			echo $_COOKIE[$cookie_name];
		}

	?>


</body>