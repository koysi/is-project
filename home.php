<?php
include "config.php";

// Check if user is logged in

// register
if(isset($_POST['but_register'])){
	header('Location: register.php');
}

// go to reports
if(isset($_POST['but_reports'])){
	header('Location: reports.php');
}

// go to beginning form
if(isset($_POST['but_begform'])){
	header('Location: begform.php');
}

// go to transfer inventory
if(isset($_POST['but_transfer'])){
	header('Location: transfer.php');
}

// go to end form
if(isset($_POST['but_endform'])){
	header('Location: endform.php');
}

// logout
if(isset($_POST['but_logout'])){
	session_destroy();
	header('Location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<ul>
		<li><a href="reports.php">Reporting</a></li>
		<li><a href="transfer.php">Transfers</a></li>
		<li><a href="register.php">Register User</a></li>
		<li><a href="index.php">Logout</a></li>
	</ul>
	<h1>Homepage</h1>
	<form method='post' action="">
		<input type="submit" value="Register User" name="but_register">
	</form>
	<form method='post' action="">
		<input type="submit" value="Go to Reporting" name="but_begform">
	</form>
	<form method='post' action="">
		<input type="submit" value="Logout" name="but_logout">
	</form>
</body>
</html>