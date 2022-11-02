<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>New User Registration</title>
    </head>
<body>
    <?php
    $nameErr = "";
    $emailErr = "";
    $name = "";
    $email = "";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name field is required";
        }
    }