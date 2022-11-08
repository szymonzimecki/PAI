<html>


	<head>
		<title> Strona Szefa </title>
		<meta charset="utf-8">
	</head>

	<body>
	
		<div id="header">
			
		</div>

		<?php
			$hostname = 'localhost'; // Nazwa hosta
			$database = 'sklep'; // Nazwa bazy danych
			$username = 'root'; // Nazwa użtytkownika
			$password = ''; // Hasło

			$conn = mysqli_connect($hostname, $username, $password, $database);

			$query = "SELECT * FROM klient";
			$result = mysqli_query($conn, $query);

			while($row = mysqli_fetch_row($result)){
			    echo "Id: " . $row[0]. ' ' . "<br>Imie: " . $row[1]. ' '. "<br>Nazwisko: " . $row[2]. ' '. "<br>Email: " . $row[3]. ' ' . "<br><br>";
			}


			$query2 = "INSERT INTO klient(Id, Imie, Nazwisko, Adres_email) VALUES(NULL, 'Dawid', 'Petrykowski', 'rybiarz14@gmail.com')";

			if ($result2 = mysqli_query($conn, $query2)) {
				echo "Dodano nowy rekord";
			}
			else echo "Nie udało się dodać nowego rekordu";

			while($row = mysqli_fetch_row($result)){
			    echo "Id: " . $row[0]. ' ' . "<br>Imie: " . $row[1]. ' '. "<br>Nazwisko: " . $row[2]. ' '. "<br>Email: " . $row[3]. ' ' . "<br><br>";
			}

			mysqli_close($conn);
		?>
	
	</body>


</html>