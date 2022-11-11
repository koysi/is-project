<!-- add dropdown menu to select products being reported
DYNAMIC!-->
<!-- get input forms connected to backend-->
<!-- A and B stylesheets?-->
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
        <li><a class="active" href="home.php">Home</a></li>
        <li><a href="reports.php">Reports</a></li>
        <li><a href="transfer.php">Transfers</a></li>
        <li><a href="register.php">Register</a></li>
        <li style="float:right"><a href="index.php">Logout</a></li>
    </body>
    </ul>
        <h1>Reporting</h1><br>
        <form method="post" action="">
        <div>
            <label for="barid">Bar ID: </label>
            <input type="number" class="textbox" id="barid" name="barid" />
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
        </form>
        <br>
        <form method="post" action="">
        <div>
            <input type="radio" id="beginning" name="whenreport" value="Beginning">
            <label for="beginning">Beginning</label><br>
            <input type="radio" id="ending" name="whenreport" value="Ending">
            <label for="ending">Ending</label><br>
        </div>
        </form>
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
                    <input type="button" id="viewreports" name="viewreports" value="View Reports">    
                    <input type="submit" value="Submit" name="submit_but" id="submit_but" />
                </div>
            </form>
        </div>
    </body>
</html>