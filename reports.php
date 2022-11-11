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
        <li class="taftandharding" href="#"><img src="https://taftandhardingevents.com/wp-content/uploads/2022/06/taft-and-harding-final.png" height=73 width=90 alt="logo"></li>
        <b><li><a class="active" href="home.php">HOME</a></li></b>
        <b><li><a href="reports.php">REPORTS</a></li></b>
        <b><li><a href="transfer.php">TRANSFERS</a></li></b>
        <b><li><a href="register.php">REGISTER</a></li></b>
        <b><li style="float:right"><a href="index.php">LOGOUT</a></li></b>
    </body>
    </ul>
        <center><h1>REPORTING</h1></center>
        <div class="div3"">
        <form method="post" action="">
            <form>
        <div>
            <label for="barid">Bar ID: </label>
            <input type="number" class="textbox" id="barid" name="barid"/>
        </div>
        </form>

        <form>
        <div class="div2">
            <label for="barname">Bar Name: </label>
            <input type="text" class="textbox" id="barname" name="barname" />
            <br>
        </div>
        </form>

        <form>
        <div>
            <label for="man_name">Manager: </label>
            <input type="text" class="textbox" id="man_name" name="man_name" />
            <br>
        </div>
        </form>

        <form>
        <div class="div2">
            <label for="txt_date">Date: </label>
            <input type="text" class="textbox" id="txt_date" name="txt_date" />
        </div>
        </form>
        
        <form method="post" action="">
        <div>
            <input type="radio" id="beginning" name="whenreport" value="Beginning">
            <label for="beginning">Beginning</label><br>
            </form><br>
<form>
            <input type="radio" id="ending" name="whenreport" value="Ending">
            <label for="ending">Ending</label>
        </div>
        </form>
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
        </div>
    </body>
</html>