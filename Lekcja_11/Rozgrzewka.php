<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Strona szefa</title>
</head>
<body>
	<form action="./formularzeZadanie3.php" method="POST">

	<p>Rozgrzewka</p>
	<hr><br>


	<?php
		//Zadanie 1
		$tablica = array(2, 4, 22, 43, 5 , 3, 6, 8, 11, 21);
		$zdanie = "To jest zdanie z 6 słów";

		foreach ($tablica as $tab) {
			echo $tab . " ";
		};

		echo "<br>" . $zdanie . "<br>";

		//Zadanie 2
		$tabZdanie = explode(" ", "To jest zdanie z 6 słów");
		print_r($tabZdanie);

		//Zadanie 3
		echo "<br>";
		echo "<br><b>Wyświetlić ilość elementów w oby dwóch tablicach.</b><br>";
		echo count($tablica);
		echo "<br>";
		echo count($tabZdanie);

		//Zadanie 4
		sort($tablica, SORT_NUMERIC);
		sort($tabZdanie, SORT_STRING);

		echo "<br>";
		echo "<br><b>Posortować tablice od najmniejszej do najwiekszej oraj alfabetycznie.</b><br>";
		foreach ($tablica as $tab) {
			echo $tab . " ";
		};

		echo "<br>";
		foreach ($tabZdanie as $tabZ) {
			echo $tabZ . " ";
		};
		echo "<br>";
		echo "<br><b>Posortować tablice od najwiekszej do najmniejszej oraj nie alfabetycznie.</b>";
		rsort($tablica, SORT_NUMERIC);
		rsort($tabZdanie, SORT_STRING);

		echo "<br>";
		foreach ($tablica as $tab) {
			echo $tab . " ";
		};

		echo "<br>";
		foreach ($tabZdanie as $tabZ) {
			echo $tabZ . " ";
		};

		//Zadanie 5
		shuffle($tablica);
		shuffle($tabZdanie);

		echo "<br>";
		echo "<br><b>Przetasować elementy dwóch tablic oraz wyświetlić rezultat.</b><br>";
		foreach ($tablica as $tab) {
			echo $tab . " ";
		};

		echo "<br>";
		foreach ($tabZdanie as $tabZ) {
			echo $tabZ . " ";
		};

		//Zadanie 6
		echo "<br><br><b>Wyświetlić zerowy element tablicy.</b><br>";
		echo current($tablica) . "<br>";

		next($tablica);
		echo "<br><b>Wyświetlić 2 element tablicy liczac od 0.</b><br>";
		echo next($tablica);
		echo "<br>";

		echo "<br><b>Wyświetlić 1 element tablicy.</b><br>";
		echo reset($tablica);
	?>


</body>