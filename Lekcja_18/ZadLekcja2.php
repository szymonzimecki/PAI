<html>


	<head>
		<title> Strona Szefa </title>
		<meta charset="utf-8">
	</head>

	<body>
	
		<div id="header">
			
		</div>

		<?php
			$conn = mysqli_connect('localhost', 'root', '', "user_db");

			$select = "SELECT * FROM users";
			$result = mysqli_query($conn, $select);

			while($row = mysqli_fetch_row($result)){
				echo "Imie: " . $row[1] . "<br>" . "Email: " . $row[2] . "<br>";
			}
		?>
	
	</body>


</html>