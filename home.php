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
    <body style="margin:0">
    <ul>
    <li class="taftandharding" href="#"><img src="https://taftandhardingevents.com/wp-content/uploads/2022/06/taft-and-harding-final.png" height=73 width=90 alt="logo"></li>
        <b><li><a class="active" href="home.php">HOME</a></li></b>
        <b><li><a href="reports.php">BEGINNING REPORTS</a></li></b>
        <li><a href="endreports.php">ENDING REPORTS</a></li>
        <b><li style="float:right"><a href="index.php">LOGOUT</a></li></b>
    </body>
    </ul>
</html>