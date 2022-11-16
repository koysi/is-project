<!-- add dropdown menu to select products being reported
DYNAMIC!-->
<!-- get input forms connected to backend-->
<!-- Think of DB like a checkbook in regards to transfers:
delete from srcbar, add to destbar-->
<!DOCTYPE html>
<html>

<head>
    <title>Reporting</title>
    <link rel="stylesheet" href="homestyle.css">
</head>

<body>
    <ul>
        <li class="taftandharding" href="#"><img src="https://taftandhardingevents.com/wp-content/uploads/2022/06/taft-and-harding-final.png" height=73 width=90 alt="logo"></li>
        <b>
            <li><a class="active" href="home.php">HOME</a></li>
        </b>
        <b>
            <li><a href="reports.php">REPORTS</a></li>
        </b>
        <b>
           <!-- <li><a href="transfer.php">TRANSFERS</a></li> -->
        </b>
        <b>
            <li style="float:right"><a href="index.php">LOGOUT</a></li>
        </b>
</body>
</ul>
<br><br><br><br><br>
<center>
    <h1>REPORTING</h1>
</center>
<div class="div3"">
        <form method=" post" action="">
    <form>
        <div>
            <label for="barid">Bar ID: </label><br>
            <input type="number" class="textbox" id="barid" name="barid" style="width: 690px" />
        </div>
    </form>

    <form>
        <div class="div2">
            <label for="barname">Bar Name: </label>
            <input type="text" class="textbox" id="barname" name="barname" style="width: 690px"/>
            <br>
        </div>
    </form>

    <form>
        <div>
            <label for="man_name">Manager: </label>
            <input type="text" class="textbox" id="man_name" name="man_name" style="width: 690px"/>
            <br>
        </div>
    </form>

    <form>
        <div class="div2">
            <label for="txt_date">Date: </label>
            <input type="text" class="textbox" id="txt_date" name="txt_date" style="width: 690px"/>
        </div>
    </form><br>

    <form method="post" action="">
        <center><div>
            <input type="radio" id="beginning" name="whenreport" value="Beginning">
            <label for="beginning">Beginning</label> 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" id="ending" name="whenreport" value="Ending">
            <label for="ending">Ending</label><br>
        </div></center>
    </form>
<br>
    <table id="beer">
        <form method="post" action="">
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
        </form>
    </table>

    <div class="div2">
        <input type="button" id="viewreports" name="viewreports" value="View Reports">
        <input type="submit" value="Submit" name="submit_but" id="submit_but" />
    </div>


</div>
<?php
    // getting values from HTML form
    if(isset($_POST['submit_but']) && isset($_POST['beginning']))
    {
        $barid = $_POST['barid'];
        $barname = $_POST['barname'];
        $manname = $_POST['man_name'];
        $date = $_POST['txt_date'];

        $begcoorscase = $_POST['begcoorcase'];
        $begcoorscan = $_POST['begcoorcan'];
        $begmillercase = $_POST['begmillercase'];
        $begmillercan = $_POST['begmillercan'];
        $begvizzycase = $_POST['begvizzycase'];
        $begvizzycan = $_POST['begvizzycan'];
        $begtopocase = $_POST['begtopocase'];
        $begtopocan = $_POST['begtopocan'];
        $begrdccase = $_POST['begrdccase'];
        $begrdccan = $_POST['begrdccan'];
        $begrdmcase = $_POST['begrdmcase'];
        $begrdmcan = $_POST['begrdmcan'];
        $begbstcase = $_POST['begbstcase'];
        $begbstcan = $_POST['begbstcan'];
        $begwatercase = $_POST['begwatercase'];
        $begwaterbottle = $_POST['begwatercan'];
    }

    // database login details
    $host = "localhost";
    $username = "root";
    $password = "";
    if(isset($_POST['beginning']))
    {
        $dbname = "begreports";
    }
    else
    {
        $dbname = "endreports";
    }

    // creating connection
    $con = mysqli_connect($host, $username, $password, $dbname);

    // ensure connection is made
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    // using SQL to create a data entry query
    $sql = "INSERT INTO `inv_entries` (`barid`, `barname`, `manname`, `date`) VALUES ('0', '$barid', '$barname', '$manname', '$date')";

    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Entries added!";
    }

    // close connection
    mysqli_close($con);

?>
</body>
<br><br><br><br>

</html>


<!-- Prototype form
            <form method="post" action="">
                <div class="div2">
                    <label>Coors: </label>
                    <br>
                    <input type="number" class="textbox" id="begcoorcase" name="begcoorcase" placeholder="Beginning Cases" />
                    <input type="number" class="textbox" id="begcoorcan" name="begcoorcan" placeholder="Beginning Cans" />
                </div>
            </form>

            <form method="post" action="">
                <div>
                    <label>Miller: </label>
                    <br>
                    <input type="number" class="textbox" id="begmillercase" name="begmillercase" placeholder="Beginning Cases" />
                    <input type="number" class="textbox" id="begmillercan" name="begmillercan" placeholder="Beginning Cans" />
                </div>
</form>
                <div class="div2">
                    <label>Vizzy: </label>
                    <br>
                    <input type="number" class="textbox" id="begvizzycase" name="begvizzycase" placeholder="Beginning Cases" />
                    <input type="number" class="textbox" id="begvizzycan" name="begvizzycan" placeholder="Beginning Cans" />
                </div>
                <div>
                    <label>Topo Chico: </label>
                    <br>
                    <input type="number" class="textbox" id="begtopocase" name="begtopocase" placeholder="Beginning Cases" />
                    <input type="number" class="textbox" id="begtopocan" name="begtopocan" placeholder="Beginning Cans" />
                </div>
                <div class="div2">
                    <label>R&D Carolina: </label>
                    <br>
                    <input type="number" class="textbox" id="begrdccase" name="begrdccase" placeholder="Beginning Cases" />
                    <input type="number" class="textbox" id="begrdccan" name="begrdccan" placeholder="Beginning Cans" />
                </div>
                <div>
                    <label>R&D MTN: </label>
                    <br>
                    <input type="number" class="textbox" id="begrdmcase" name="begrdmcase" placeholder="Beginning Cases" />
                    <input type="number" class="textbox" id="begrdmcan" name="begrdmcan" placeholder="Beginning Cans" />
                </div>
                <div class="div2">
                    <label>Booneshine Tropic: </label>
                    <br>
                    <input type="number" class="textbox" id="begbstcase" name="begbstcase" placeholder="Beginning Cases" />
                    <input type="number" class="textbox" id="begbstcan" name="begbstcan" placeholder="Beginning Cans" />
                </div>
                <div>
                    <label>Water: </label>
                    <br>
                    <input type="number" class="textbox" id="begwatercase" name="begwatercase" placeholder="Beginning Cases" />
                    <input type="number" class="textbox" id="begwatercan" name="begwatercan" placeholder="Beginning Bottles" />
                </div>
                <div class="div2">
                    <input type="button" id="viewreports" name="viewreports" value="View Reports">    
                    <input type="submit" value="Submit" name="submit_but" id="submit_but" />
                </div>
            </form>
        

-->