<?php
	session_start();
	
	if (empty($_SESSION["username"]) && empty($_SESSION["password"])) {
		header("Location: index.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="theme-color" content="#2ecd99">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CMS | TuinenPoels</title>
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
</head>
<body>

	<div id="preloader">
		<div id="loader">			
		</div>
	</div>

	<header>

		<div class="top-header clearfix">
			<nav class="toggle-nav-btn" id="hamburger">
				<div class="logo-desktop">
					<a href="index.php">
						<img src="images/header/logo_dark.svg">
						<span class="brand-text">
							Myware
						</span>
					</a>
				</div>
				<i class="fa fa-bars" aria-hidden="true"></i>
			</nav>

			<div id="logo">
				<a href="index.php">
					<img src="images/header/logo_dark.svg">
					<span class="brand-text">
						Myware
					</span>
				</a>
			</div>

			<div class="toggle-nav-btn" id="settings">
				<i class="fa fa-ellipsis-h" aria-hidden="true"></i>
			</div>
		</div>

	</header>

	<header class="left-header">
		<ul>
			<li class="li-header">
				<span>Main</span>
				<i class="fa fa-ellipsis-h" aria-hidden="true"></i>
			</li>
			<li class="li-item active" id="dashboard">
				<div class="clearfix">
					<div class="li-item-left">
						<i class="fa fa-home" aria-hidden="true"></i>
						<span>Dashboard</span>
					</div>
					<div class="li-item-right">
						<i class="fa fa-caret-down" aria-hidden="true"></i>
					</div>
				</div>
			</li>

			<li class="submenu" id="Dashboard">
				<ul>
					<a href="dashboard.php">
						<li class="li-subitem" id="analytical">
							<span>
								Filter
							</span>
						</li>
					</a>
					<a href="all-filters.php">
						<li class="li-subitem" id="all">
							<span>
								All Filters
							</span>
						</li>
					</a>
					<a href="break.php">
						<li class="li-subitem" id="profile">
							<span>
								Break
							</span>
						</li>
					</a>
				</ul>
			</li>
		</ul>
	</header>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://www.gstatic.com/firebasejs/3.6.4/firebase.js"></script>
    <script src="js/config_firebase.js"></script>
	<script src="js/header.js"></script>
</body>
</html>