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
                        <li><a href="view.php">View Reports</a></li>
                        <li><a href="index.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <br>
    <center>
        <div class="div3">
            <form method="post" action="reports.php"><br>
                <center>
                    <h1>BEGINNING INVENTORY</h1>
                </center>
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
                    <label for="manname">Manager: </label>
                    <input type="text" class="textbox" id="manname" name="manname" style="width: 690px" />
                    <br>
                </div>

                <div class="div2">
                    <label for="txt_date">Date (yyyy/mm/dd): </label>
                    <input type="text" class="textbox" id="txt_date" name="txt_date" style="width: 690px" />
                </div>
                <div>
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
                </div>
                </table>
                <br>
                <div>&nbsp;&nbsp;
                    <input type="submit" value="Submit" name="submit_but" id="submit_but" style="width:100px; height: 30px;" />
                </div>
                <br>
            </form>
        </div>
    </center>
    <?php

    // database login details
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "database";

    // creating connection
    $con = mysqli_connect($host, $username, $password, $dbname);

    // ensure connection is made
    if (!$con) {
        die("Connection failed!" . mysqli_connect_error());
    }

    // getting values from HTML form
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $barid = mysqli_real_escape_string($con, $_POST['barid']);
        $barname = mysqli_real_escape_string($con, $_POST['barname']);
        $managername = mysqli_real_escape_string($con, $_POST['manname']);
        $date = $_POST['txt_date'];

        $begcoorscase = mysqli_real_escape_string($con, $_POST['begcoorcase']);
        $begcoorscan = mysqli_real_escape_string($con, $_POST['begcoorcan']);
        $begmillercase = mysqli_real_escape_string($con, $_POST['begmillercase']);
        $begmillercan = mysqli_real_escape_string($con, $_POST['begmillercan']);
        $begvizzycase = mysqli_real_escape_string($con, $_POST['begvizzycase']);
        $begvizzycan = mysqli_real_escape_string($con, $_POST['begvizzycan']);
        $begtopocase = mysqli_real_escape_string($con, $_POST['begtopocase']);
        $begtopocan = mysqli_real_escape_string($con, $_POST['begtopocan']);
        $begrdccase = mysqli_real_escape_string($con, $_POST['begrdccase']);
        $begrdccan = mysqli_real_escape_string($con, $_POST['begrdccan']);
        $begrdmcase = mysqli_real_escape_string($con, $_POST['begrdmcase']);
        $begrdmcan = mysqli_real_escape_string($con, $_POST['begrdmcan']);
        $begbstcase = mysqli_real_escape_string($con, $_POST['begbstcase']);
        $begbstcan = mysqli_real_escape_string($con, $_POST['begbstcan']);
        $begwatercase = mysqli_real_escape_string($con, $_POST['begwatercase']);
        $begwaterbottle = mysqli_real_escape_string($con, $_POST['begwatercan']);

        // using SQL to create a data entry query
        $sql = "INSERT INTO beginv (barID, barName, manName, coorCase, coorCan, dateUploaded, millerCase, millerCan, vizzyCase, vizzyCan, topoCase, topoCan, rdcCase, rdcCan, rdmCase, rdmCan, bstCase, bstCan, waterCase, waterBottle) VALUES (" . $barid . ", '" . $barname . "', '" . $managername . "', " . $begcoorscase . ", " . $begcoorscan . ", '" . $date . "', " . $begmillercase . ", " . $begmillercan . ", " . $begvizzycase . ", " . $begvizzycan . ", " . $begtopocase . ", " . $begtopocan . ", " . $begrdccase . ", " . $begrdccan . ", " . $begrdmcase . ", " . $begrdmcan . ", " . $begbstcase . ", " . $begbstcan . ", " . $begwatercase . ", " . $begwaterbottle . ")";
        echo $sql;
        // send query to the database to add values and confirm if successful
        if ( mysqli_query($con, $sql) ) {
        echo "SQL Query Successful";
        } else {
        echo ("Failed: " . mysqli_error($con));
    }

    // close connection
    mysqli_close($con);
}

    ?>
    <br><br><br><br>
</div>

</html>