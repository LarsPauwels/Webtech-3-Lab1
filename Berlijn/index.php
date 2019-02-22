<?php
	require_once("main-header.php");

	session_start();

	if (!empty($_SESSION["username"]) && $_SESSION["password"]) {
		header("Location: dashboard.php");
	}

	if (isset($_POST["send"])) {
		if (!empty($_POST["username"]) && !empty($_POST["password"])) {
			$username = $_POST["username"];
			$password = $_POST["password"];

			if ($username == "LarsPauwels" && $password == "Berlijn2019IMD") {
				$_SESSION["username"] = $username;
				$_SESSION["password"] = $password;

				header("Location: dashboard.php");
			}
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>CMS | TuinenPoels</title>
</head>
<body>

	<header class="clearfix">
		<div id="logo">
			<a href="index.php">
				<img src="images/header/logo_light.svg">
				<span>
					Myware
				</span>
			</a>
		</div>
	</header>

	<div id="main">
		<div id="container">
			<div id="title">
				<h1>
					Sign in to Myware
				</h1>
				<p>
					Enter your details below
				</p>
			</div>
			<form method="post" action>
				<div class="form-group">
					<label for="email">
						Username
					</label>
					<input type="text" name="username" id="email" placeholder="Enter username" autofocus>
				</div>
				<div class="form-group">
					<label for="password">
						Password
					</label>
					<input type="password" name="password" id="password" placeholder="Enter password">
				</div>
				<div class="form-group">
					<div class="button">
						<button name="send">Sign In</button>
					</div>
				</div>
			</form>
		</div>
	</div>

<script src="js/profile.js"></script>
</body>
</html>