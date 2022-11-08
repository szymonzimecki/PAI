<?php
	session_start();
?>
<html>


	<head>
		<title> Strona Szefa </title>
		<meta charset="utf-8">
	</head>

	<body>
	
	<div id="header">
		
	</div>
	<form action="./Cookie.php" method="POST">
		<div id="login-box">

			<h2>Login</h2>
		</div>
	</form>

	<?php

		echo "Login: " . $_SESSION['login'];

		echo "Password: " . $_SESSION['password'];
	?>
	
	</body>


</html>