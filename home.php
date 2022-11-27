<?php

include "config.php";

// Check if user is logged in
if (!isset($_SESSION['uname'])) {
    header('Location: index.php');
}

if (isset($POST['btnLogout'])) {
    session_destroy();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="homestyle.css">
    <title>Home</title>
</head>

<body>
    <div class="menu-wrap">
        <input type="checkbox" class="toggler">
        <div class="hamburger">
            <div></div>
        </div>
        <div class="menu">
            <div>
                <div>
                    <ul>
                        <li><a href="home.php">Home</a></li>
                        <li><a href="reports.php">Report Beginning Inventory</a></li>
                        <li><a href="endreports.php">Report Ending Inventory</a></li>
                        <li><a href="view.php">View Reports</a></li>
                        <li><a href="index.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <header class="showcase">
        <div class="container showcase-inner">
            <h1>Taft & Harding</h1>
            <p>PROVIDING STAFF & MANAGEMENT FOR BALLGAMES, CONCERTS, RODEOS, FESTIVALS & MORE SINCE 2005
            </p>
            <a href="https://taftandhardingevents.com/" target="_blank" rel="noopener noreferrer"class="btn">Main Website</a>
        </div>
    </header>
<!--
    <header class="showcase2">
        <div class="container showcase-inner">
            <br><br><br><center><h1>Welcome<center></h1>
        </div>
    </header>
-->
</body>

</html>