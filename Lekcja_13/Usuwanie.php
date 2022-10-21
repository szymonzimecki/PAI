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
		if (isset($_SESSION['liczba']) AND isset($_SESSION['wyraz'])) {
			echo "<br>Liczba: " . $_SESSION["liczba"];
			echo "<br>Wyraz: " . $_SESSION["wyraz"] . "<br>";	
		}

		if (isset($_POST['Usun'])) {
			session_unset();
			if (isset($_SESSION['liczba']) AND isset($_SESSION['wyraz'])) {
				echo "<br>Sesja istnieje";
			}
			else{
				echo "<br>Sesja nie istnieje";
			}
		}
	?>

	<hr>
	<form action="./Usuwanie.php" method="POST">
		<input type="submit" name="Usun" value="Usuń" />
	</form>

</body>