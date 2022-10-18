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

	<p><input type="radio" name="plec" value="m" />Mężczyzna</p>
	<p><input type="radio" name="plec" value="k" />Kobieta</p>
	<p><input type="radio" name="plec" value="n" />Nie chce podawać</p>
	<hr>

	<p><input type="checkbox" name="Check[]" value="Tak" />Tak</p>
	<p><input type="checkbox" name="Check[]" value="Nie" />Nie</p>
	<p><input type="checkbox" name="Check[]" value="Nie wiem" />Nie wiem</p>
	<hr>

	<select name="cars" id="cars">
		<option selected disabled>Wybierz</option>
		<option value="BMW">BMW</option>
		<option value="mercedes">Mercedes</option>
		<option value="audi">Audi</option>
	</select>


	<br><br><br>
	<input type="submit" />
		
	</form>

	<?php
		//Radio
		if(isset($_POST['plec'])){
		    if($_POST['plec'] == 'm')
		    	echo "<br><b>Wybrana płeć:</b> Mężczyzna";

		    if($_POST['plec'] == 'k')
		    	echo "<br><b>Wybrana płeć:</b> Kobieta";
		    if($_POST['plec'] == 'n')
		    	echo "<br><b>Wybrana płeć:</b>Nie chce podawać";
		}

		//CheckBox
		if(isset($_POST['Check'])){
		    for($i=0; $i<count($_POST['Check']); $i++){
		        echo "<br><b>CheckBox:</b> " . $_POST['Check'][$i];
		    }
		}

		//Select
		if(isset($_POST['cars'])){
		    echo "<br><b>Wybrane auto:</b> " . $_POST['cars'];
		}
	?>


</body>