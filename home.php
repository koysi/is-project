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
        <title>Home</title>
        <link rel="stylesheet" href="homestyle.css">
    </head>
    <body>
    <ul>
        <li><a class="active" href="home.php">Home</a></li>
        <li><a href="reports.php">Reports</a></li>
        <li><a href="transfer.php">Transfers</a></li>
        <li><a href="register.php">Register</a></li>
        <li style="float:right"><a href="index.php">Logout</a></li>
    </body>
    </ul>
</html>