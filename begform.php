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
                <br>
                <div>
                    <label>Vizzy: </label>
                    <br>
                    <input type="number" class="textbox" id="begvizzycase" name="begvizzycase" placeholder="Beginning Cases" />
                    <input type="number" class="textbox" id="begvizzycan" name="begvizzycan" placeholder="Beginning Cans" />
                </div>
                <br>
                <div>
                    <label>Topo Chico: </label>
                    <br>
                    <input type="number" class="textbox" id="begtopocase" name="begtopocase" placeholder="Beginning Cases" />
                    <input type="number" class="textbox" id="begtopocan" name="begtopocan" placeholder="Beginning Cans" />
                </div>
                <br>
                <div>
                    <label>R&D Carolina: </label>
                    <br>
                    <input type="number" class="textbox" id="begrdccase" name="begrdccase" placeholder="Beginning Cases" />
                    <input type="number" class="textbox" id="begrdccan" name="begrdccan" placeholder="Beginning Cans" />
                </div>
                <br>
                <div>
                    <label>R&D MTN: </label>
                    <br>
                    <input type="number" class="textbox" id="begrdmcase" name="begrdmcase" placeholder="Beginning Cases" />
                    <input type="number" class="textbox" id="begrdmcan" name="begrdmcan" placeholder="Beginning Cans" />
                </div>
                <br>
                <div>
                    <label>Booneshine Tropic: </label>
                    <br>
                    <input type="number" class="textbox" id="begbstcase" name="begbstcase" placeholder="Beginning Cases" />
                    <input type="number" class="textbox" id="begbstcan" name="begbstcan" placeholder="Beginning Cans" />
                </div>
                <br>
                <div>
                    <label>Water: </label>
                    <br>
                    <input type="number" class="textbox" id="begwatercase" name="begwatercase" placeholder="Beginning Cases" />
                    <input type="number" class="textbox" id="begwatercan" name="begwatercan" placeholder="Beginning Bottles" />
                </div>
                <br>
                <div>
                        <input type="submit" value="Submit" name="submit_but" id="submit_but" />
                </div>
            </form>
        </div>
    </body>
</html>