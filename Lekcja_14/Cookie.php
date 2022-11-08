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

			<div class="text-box">
					<input class="usr-pas" type="text" placeholder="Username" name="Login" value="">
			</div>

			<div class="text-box">
					<input class="usr-pas" type="password" placeholder="Password" name="Password" value="">
			</div>

			<input class="btn" type="submit" name="Sign_in" value="Sign in">
		</div>
	</form>
	<?php
		if (isset($_POST['Sign_in'])){

			if (isset($_POST['Login'])) {
				$login = $_POST['Login'];
				$_SESSION['login'] = $login;
				echo "<b>Login: </b>" . $_POST['Login'] . "<br>";
			}
			if (isset($_POST['Password'])) {
				$password = sha1($_POST['Password']);
				$_SESSION['password'] = $password;
				echo "<b>Password: </b>" . sha1($_POST['Password']);
			}

			if (isset($_SESSION['login']) && isset($_SESSION['password'])) {
				echo "<br>Utworzono sesje";
			}
		}
	?>
	
	</body>


</html>