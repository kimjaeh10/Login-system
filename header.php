<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="Login">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css?<?php echo date('l jS \of F Y h:i:s A'); ?>" />
	<!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body>
	<header>
		<nav class="nav-header-main">
			<a href="index.php">Home</a>
			<a href="#">About</a>
			<a href="#">Portfolio</a>
			<a href="#">Contact</a>
			<div class="header-login">
				<form action="includes/login-inc.php" method="post">
					<input type="text" name="emailuid" placeholder="Username/E-mail...">
					<input type="password" name="pwd" placeholder="Password">
					<button type="submit" name="login-submit">Login</button>
				</form>
				<a href="signup.php">Sign Up</a>
				<form action="includes/logout-inc.php" method="post">
					<button type="submit" name="logout-submit">Logout</button>
				</form>
			</div>
		</nav>	
		
	</header>
</body>
</html>