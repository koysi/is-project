<!-- add dropdown menu to select products being reported
DYNAMIC!-->
<!-- get input forms connected to backend-->
<!-- Think of DB like a checkbook in regards to transfers:
delete from srcbar, add to destbar-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="homestyle.css">
    <title>Beginning Inventory</title>
</head>

<div class="div5">
    <br><br>
    <br>
    <h2 style="color:black;">Beginning Inventory</h2>
   
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
                        <li><a href="index.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<br>
    <center>
        <div class="div3">
            <form method=" post" action=""><br>
                <center><h1>BEGINNING INVENTORY</h1></center>
                <br>
                    <div class="div4">
                        <label for="barid">Bar ID: </label><br>
                        <input type="number" class="textbox" id="barid" name="barid" style="width: 690px" />
                    </div>

                    <div class="div2">
                        <label for="barname">Bar Name: </label>
                        <input type="text" class="textbox" id="barname" name="barname" style="width: 690px" />
                        <br>
                    </div>

                    <div class="div4">
                        <label for="man_name">Manager: </label>
                        <input type="text" class="textbox" id="man_name" name="man_name" style="width: 690px" />
                        <br>
                    </div>
                    <div class="div2">
                        <label for="txt_date">Date (yyyy-mm-dd): </label>
                        <input type="text" class="textbox" id="txt_date" name="txt_date" style="width: 690px" />
                    </div>
                <center><img src="https://taftandhardingevents.com/wp-content/uploads/2022/06/taft-and-harding-final.png" height=150 width=180 alt="logo"></center>
                    <table id="beer">
                        <tr>
                            <th>Beer</th>
                            <th>Cases</th>
                            <th>Cans</th>
                        </tr>
                        <tr>
                            <td>Coors</td>
                            <td><input type="number" class="textbox" id="begcoorcase" name="begcoorcase" placeholder="" style="width:200px" /></td>
                            <td><input type="number" class="textbox" id="begcoorcan" name="begcoorcan" placeholder="" style="width:200px" /></td>
                        </tr>
                        <tr>
                            <td>Miller</td>
                            <td><input type="number" class="textbox" id="begmillercase" name="begmillercase" placeholder="" style="width:200px" /></td>
                            <td><input type="number" class="textbox" id="begmillercan" name="begmillercan" placeholder="" style="width:200px" /></td>
                        </tr>
                        <tr>
                            <td>Vizzy</td>
                            <td><input type="number" class="textbox" id="begvizzycase" name="begvizzycase" placeholder="" style="width:200px" /></td>
                            <td><input type="number" class="textbox" id="begvizzycan" name="begvizzycan" placeholder="" style="width:200px" /></td>
                        </tr>
                        <tr>
                            <td>Topo Chico</td>
                            <td><input type="number" class="textbox" id="begtopocase" name="begtopocase" placeholder="" style="width:200px" /></td>
                            <td><input type="number" class="textbox" id="begtopocan" name="begtopocan" placeholder="" style="width:200px" /></td>
                        </tr>
                        <tr>
                            <td>R&D Carolina</td>
                            <td><input type="number" class="textbox" id="begrdccase" name="begrdccase" placeholder="" style="width:200px" /></td>
                            <td><input type="number" class="textbox" id="begrdccan" name="begrdccan" placeholder="" style="width:200px" /></td>
                        </tr>
                        <tr>
                            <td>R&D MTN</td>
                            <td><input type="number" class="textbox" id="begrdmcase" name="begrdmcase" placeholder="" style="width:200px" /></td>
                            <td><input type="number" class="textbox" id="begrdmcan" name="begrdmcan" placeholder="" style="width:200px" /></td>
                        </tr>
                        <tr>
                            <td>Booneshine Tropic</td>
                            <td><input type="number" class="textbox" id="begbstcase" name="begbstcase" placeholder="" style="width:200px" /></td>
                            <td><input type="number" class="textbox" id="begbstcan" name="begbstcan" placeholder="" style="width:200px" /></td>
                        </tr>
                        <tr>
                            <td>Water</td>
                            <td><input type="number" class="textbox" id="begwatercase" name="begwatercase" placeholder="" style="width:200px" /></td>
                            <td><input type="number" class="textbox" id="begwatercan" name="begwatercan" placeholder="" style="width:200px" /></td>
                        </tr>
                        <div>&nbsp;&nbsp;
                            <input type="button" id="viewreports" name="viewreports" value="View Reports" style="width:100px; height: 30px;"> &nbsp;
                            <input type="submit" value="Submit" name="submit_but" id="submit_but" style="width:100px; height: 30px;"/>
                        </div>
                    </table>
                </form>
                <br>
        </div>
<?php
include "config.php";

if(isset($_POST["submit_but"])) {
    $barid = $_POST["barid"];
    $barname = $_POST["barname"];
    $manname = $_POST["man_name"];
    $dateUp = $_POST["txt_date"];
}
$sql = "INSERT INTO beginv (barID, barName, manName, dateUploaded) VALUES ('" . $barid . "', '" . $barname . "', '" . $manname . "', '" . $dateUp . "')";
if (mysqli_query($con, $sql)) {
    echo "Database query successful.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);
?>
</center>
<br><br><br><br>
    </div>

</html>