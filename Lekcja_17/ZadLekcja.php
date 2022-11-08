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
			$database = 'zadanie'; // Nazwa bazy danych
			$username = 'root'; // Nazwa użtytkownika
			$password = ''; // Hasło

			$conn = mysqli_connect($hostname, $username, $password, $database);

			$query = "SELECT * FROM lowisko";
			$result = mysqli_query($conn, $query);

			while($row = mysqli_fetch_row($result)){
			    echo "Akwen: " . $row[2] . ' ' . "Województwo: " . $row[3] ."<br><br>";
			}

			mysqli_close($conn);
		?>
	
	</body>


</html>