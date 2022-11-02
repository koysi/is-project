<?php

if(isset($_POST['but_home'])){
    header('Location: home.php');
}

if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: index.php');
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Reporting Form</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div>
            <form method='post' action="">
                <input type="submit" value="Home" name="but_home">
                <input type="submit" value="Logout" name="but_logout">
            </form>
        </div>
        <div>
            <input type="text" class="textbox" id="barname" name="barname" />
        </div>
        <div>
            <input type="text" class="textbox" id="man_name" name="man_name" />
        </div>
        <div>
            <input type="text" class="textbox" id="txt_date" name="txt_date" />
        </div>
    </body>
</html>