<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Strona szefa</title>
</head>
<body>
	<form action="./formularzeZadanie3.php" method="POST">

	<p>Ankieta</p>
	<hr>

	<p><input type="radio" name="plec1" value="Mężczyzna" />Mężczyzna</p>
	<p><input type="radio" name="plec2" value="Kobieta" />Kobieta</p>
	<p><input type="radio" name="plec3" value="Nie chce podawać" />Nie chce podawać</p>
	<hr>

	<p><input type="checkbox" name="Check1" value="1" />Tak</p>
	<p><input type="checkbox" name="Check2" value="2" />Nie</p>
	<p><input type="checkbox" name="Check3" value="3" />Nie wiem</p>
	<hr>

	<select name="cars" id="cars">
		<option selected disabled>Wybierz</option>
		<option value="volvo">BMW</option>
		<option value="mercedes">Mercedes</option>
		<option value="audi">Audi</option>
	</select>


	<br><br><br>
	<input type="submit" />
		
	</form>

	<?php

		if (isset($_POST['plec1'])) {
			$m = $_POST['plec1'];
			echo "<br><b>Płeć: </b>" . $m;
		}

		elseif (isset($_POST['plec2'])) {
			$k = $_POST['plec2'];
			echo "<br><b>Płeć: </b>" . $k;
		}

		elseif (isset($_POST['plec3'])) {
			$n = $_POST['plec3'];
			echo "<br><b>Płeć: </b>" . $n;
		}
			
	?>


</body>