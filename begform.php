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
            <br>
        </div>
        <div>
            <label for="barname">Bar Name: </label>
            <input type="text" class="textbox" id="barname" name="barname" />
            <br>
        </div>
        <div>
            <label for="man_name">Manager: </label>
            <input type="text" class="textbox" id="man_name" name="man_name" />
            <br>
        </div>
        <div>
            <label for="txt_date">Date: </label>
            <input type="text" class="textbox" id="txt_date" name="txt_date" />
        </div>
        <br>
        <div>
            <form method="post" action="">
                <div>
                    <label>Coors: </label>
                    <br>
                    <input type="number" class="textbox" id="begcoorcase" name="begcoorcase" placeholder="Beginning Cases" />
                    <input type="number" class="textbox" id="begcoorcan" name="begcoorcan" placeholder="Beginning Cans" />
                </div>
                <br>
                <div>
                    <label>Miller: </label>
                    <br>
                    <input type="number" class="textbox" id="begmillercase" name="begmillercase" placeholder="Beginning Cases" />
                    <input type="number" class="textbox" id="begmillercan" name="begmillercan" placeholder="Beginning Cans" />
                </div>
            </form>
        </div>
    </body>
</html>