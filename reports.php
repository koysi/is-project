<!-- add dropdown menu to select products being reported
DYNAMIC!-->
<!-- get input forms connected to backend-->
<!-- Think of DB like a checkbook in regards to transfers:
delete from srcbar, add to destbar-->

<!-- Update by Chris: encapsulated submit button in form field, 
attempted to add inventory variables to query-->
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
            <form method=" post" action=""><br>
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
                </table>
            </form>
        </div>
        <br>
        <div>
            <form method="post" action="">&nbsp;&nbsp;
                <input type="submit" value="Submit" name="submit_but" id="submit_but" style="width:100px; height: 30px;" />
            </form>
        </div>
        <br>
    </center>
    <?php
    // getting values from HTML form
    if (isset($_POST['submit_but'])) {
        $barid = $_REQUEST['barid'];
        $barname = $_REQUEST['barname'];
        $manname = $_REQUEST['man_name'];
        $date = $_REQUEST['txt_date'];

        $begcoorscase = $_REQUEST['begcoorcase'];
        $begcoorscan = $_REQUEST['begcoorcan'];
        $begmillercase = $_REQUEST['begmillercase'];
        $begmillercan = $_REQUEST['begmillercan'];
        $begvizzycase = $_REQUEST['begvizzycase'];
        $begvizzycan = $_REQUEST['begvizzycan'];
        $begtopocase = $_REQUEST['begtopocase'];
        $begtopocan = $_REQUEST['begtopocan'];
        $begrdccase = $_REQUEST['begrdccase'];
        $begrdccan = $_REQUEST['begrdccan'];
        $begrdmcase = $_REQUEST['begrdmcase'];
        $begrdmcan = $_REQUEST['begrdmcan'];
        $begbstcase = $_REQUEST['begbstcase'];
        $begbstcan = $_REQUEST['begbstcan'];
        $begwatercase = $_REQUEST['begwatercase'];
        $begwaterbottle = $_REQUEST['begwatercan'];
    }

    // database login details
    $host = "localhost";
    $username = "root";
    $password = "";
    $dnbame = "database";

    // creating connection
    $con = mysqli_connect($host, $username, $password, $dbname);

    // ensure connection is made
    if (!$con) {
        die("Connection failed!" . mysqli_connect_error());
    }

    // using SQL to create a data entry query
    $sql = "INSERT INTO `inv_entries` (`barid`, `barname`, `manname`, `date`, `begcoorscase`, `begcoorscan`, `begmillercase`, `begmillercan`, `begvizzycase`, `begvizzycan`, `begtopocase`, `begtopocan`, `begrdccase`, `begrdccan`, `begrdmcase`, `begrdmcan`, `begwatercase`, `begwaterbottle`) VALUES ('$barid', '$barname', '$manname', '$date', '$begcoorscase', '$begcoorscan', '$begmillercase', '$begmillercan', '$begvizzycase', '$begvizzycan', '$begtopocase', '$begtopocan', '$begrdccase', '$begrdccan', '$begrdmcase', '$begrdmcan', '$begbstcase', '$begbstcan', '$begwatercase', '$begwaterbottle')";

    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if ($rs) {
        echo "Entries added!";
    }

    // close connection
    mysqli_close($con);

    ?>
    <br><br><br><br>
</div>

</html>