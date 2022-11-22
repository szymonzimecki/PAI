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
			$database = 'user_db'; // Nazwa bazy danych
			$username = 'root'; // Nazwa użtytkownika
			$password = ''; // Hasło

			$conn = mysqli_connect($hostname, $username, $password, $database);

			$query = "SELECT * FROM users";
			$result = mysqli_query($conn, $query);

			echo "<ol>";

			while($row = mysqli_fetch_row($result)){

			    echo "<li>" . "Imie: " . $row[1] . ' ' . "Email: " . $row[2] . "
			    Hasło: " . $row[3] ."</li>" . "<br><br>";
			}
			echo "</ol>";

			mysqli_close($conn);
		?>
	
	</body>


</html>