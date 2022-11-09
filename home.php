<?php
include "config.php";

// Check if user is logged in
if(!isset($_SESSION['uname'])){
	header('Location: index.php');
}

if(isset($POST['btnLogout'])){
	session_destroy();
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="homestyle.css">
</head>
<body>
	<form method="post" action="">
		<nav class="navbar background">
			<ul class="nav-list">
				<li><a href="home.php" class="active">Home</a></li>
				<li><a href="reports.php">Reporting</a></li>
				<li><a href="transfer.php">Transfers</a></li>
				<li><a href="register.php">Register</a></li>
				<li><a href="index.php" id="btnLogout">Logout</a></li>
			</ul>
		</nav>
	</form>
	<h1>Homepage</h1>
</body>
</html>