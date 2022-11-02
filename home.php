<?php
include "config.php";

// Check if user is logged in
if(!isset($_SESSION['uname'])){
	header('Location: index.php');
}

// logout
if(isset($_POST['but_logout'])){
	session_destroy();
	header('Location: index.php');
}
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head></head>
<body>
	<h1>Homepage</h1>
	<form method='post' action="">
		<input type="submit" value="Logout" name="but_logout">
	</form>
</body>
</html>