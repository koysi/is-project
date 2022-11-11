<!DOCTYPE html>
<html>
    <head>
        <title>Transfer</title>
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
        <center><h1>Transfer Inventory</h1></center>
            <form method="post" action="">
                <div>
                    <label for="srcbarid">Source Bar ID: </label>
                    <input type="number" class="textbox" id="srcbarid" name="srcbarid" />
                </div><br>
                <div>
                    <label for="srcbarname">Source Bar Name: </label>
                    <input type="text" class="textbox" id="srcbarname" name="srcbarname" />
                </div><br>
                <div>
                    <label for="destbarid">Destination Bar ID: </label>
                    <input type="number" class="textbox" id="destbarid" name="destbarid" />
                </div><br>
                <div>
                    <label for="destbarname">Destination Bar Name: </label>
                    <input type="text" class="textbox" id="destbarname" name="destbarname" />
                </div><br>
                <div>
                    <label for="man_name">Manager: </label>
                    <input type="text" class="textbox" id="man_name" name="man_name" />
                </div><br>
                <div>
                    <label for="txt_date">Date: </label>
                    <input type="text" class="textbox" id="txt_date" name="txt_date" />
                </div><br>
            </form>
            
            <form method="post" action="">
                <div>
                    <label>Coors: </label>
                    <br>
                    <input type="number" class="textbox" id="begcoorcase" name="begcoorcase" placeholder="Cases Transferred" />
                    <input type="number" class="textbox" id="begcoorcan" name="begcoorcan" placeholder="Cans Transferred" />
                </div>
                <br>
                <div>
                    <label>Miller: </label>
                    <br>
                    <input type="number" class="textbox" id="begmillercase" name="begmillercase" placeholder="Cases Transferred" />
                    <input type="number" class="textbox" id="begmillercan" name="begmillercan" placeholder="Cans Transferred" />
                </div>
                <br>
                <div>
                    <label>Vizzy: </label>
                    <br>
                    <input type="number" class="textbox" id="begvizzycase" name="begvizzycase" placeholder="Cases Transferred" />
                    <input type="number" class="textbox" id="begvizzycan" name="begvizzycan" placeholder="Cans Transferred" />
                </div>
                <br>
                <div>
                    <label>Topo Chico: </label>
                    <br>
                    <input type="number" class="textbox" id="begtopocase" name="begtopocase" placeholder="Cases Transferred" />
                    <input type="number" class="textbox" id="begtopocan" name="begtopocan" placeholder="Cans Transferred" />
                </div>
                <br>
                <div>
                    <label>R&D Carolina: </label>
                    <br>
                    <input type="number" class="textbox" id="begrdccase" name="begrdccase" placeholder="Cases Transferred" />
                    <input type="number" class="textbox" id="begrdccan" name="begrdccan" placeholder="Cans Transferred" />
                </div>
                <br>
                <div>
                    <label>R&D MTN: </label>
                    <br>
                    <input type="number" class="textbox" id="begrdmcase" name="begrdmcase" placeholder="Cases Transferred" />
                    <input type="number" class="textbox" id="begrdmcan" name="begrdmcan" placeholder="Cans Transferred" />
                </div>
                <br>
                <div>
                    <label>Booneshine Tropic: </label>
                    <br>
                    <input type="number" class="textbox" id="begbstcase" name="begbstcase" placeholder="Cases Transferred" />
                    <input type="number" class="textbox" id="begbstcan" name="begbstcan" placeholder="Cans Transferred" />
                </div>
                <br>
                <div>
                    <label>Water: </label>
                    <br>
                    <input type="number" class="textbox" id="begwatercase" name="begwatercase" placeholder="Cases Transferred" />
                    <input type="number" class="textbox" id="begwatercan" name="begwatercan" placeholder="Bottles Transferred" />
                </div>
                <br>
                <div>   
                    <input type="submit" value="Submit" name="submit_but" id="submit_but" />
                </div>
            </form>
        </div>
    </body>
</html>