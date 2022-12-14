<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="homestyle.css">
    <link rel="stylesheet" href="interface.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="div5">
        <br><br>
        <br>
        <h2 style="color:black;">Report History</h2>

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
        </div><br>
        <!--Boxes for information-->
        <section class="home-section">
            <div class="home-content">
                <center>
                    <h1>TODAY'S REPORT</h1>
                </center><br>
                <div class="overview-boxes">
                    <div class="box">
                        <div class="right-side">
                            <div class="box-topic">Beginning Cans</div>
                            <div class="number">#</div>
                            <div class="indicator">
                            </div>
                        </div>

                    </div>
                    <div class="box">
                        <div class="right-side">
                            <div class="box-topic">Ending Cans</div>
                            <div class="number">#</div>
                            <div class="indicator">
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="right-side">
                            <div class="box-topic">Difference</div>
                            <div class="number">#</div>
                            <div class="indicator">
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="right-side">
                            <div class="box-topic">Sales Total</div>
                            <div class="number">$</div>
                            <div class="indicator">
                            </div>
                        </div>
                    </div>
                </div>

                <!--Report History-->
                <div class="sales-boxes">
                    <div class="recent-sales box">
                        <b>
                            <div class="title">Report History
                        </b>
                    </div>
                    <div class="sales-details">
                        <ul class="details">
                            <li class="topic"><i>Recent</li></i>
                            <li><a href="#">Submitted Report</a></li>
                            <li><a href="#">Submitted Report</a></li>
                            <li><a href="#">Submitted Report</a></li>
                            <li><a href="#">Submitted Report</a></li>
                            <li><a href="#">Submitted Report</a></li>
                            <li><a href="#">Submitted Report</a></li>
                            <li><a href="#">Submitted Report</a></li>
                        </ul>
                        <ul class="details">
                            <li class="topic"><i>Date</li></i>
                            <li><a href="#">Date Here</a></li>
                            <li><a href="#">Date Here</a></li>
                            <li><a href="#">Date Here</a></li>
                            <li><a href="#">Date Here</a></li>
                            <li><a href="#">Date Here</a></li>
                            <li><a href="#">Date Here</a></li>
                            <li><a href="#">Date Here</a></li>
                        </ul>
                        <ul class="details">
                            <li class="topic"><i>Location</li></i>
                            <li><a href="#">Bar</a></li>
                            <li><a href="#">Bar</a></li>
                            <li><a href="#">Bar</a></li>
                            <li><a href="#">Bar</a></li>
                            <li><a href="#">Bar</a></li>
                            <li><a href="#">Bar</a></li>
                            <li><a href="#">Bar</a></li>
                        </ul>
                        <ul class="details">
                            <li class="topic"><i>Total</li></i>
                            <li><a href="#">$</a></li>
                            <li><a href="#">$</a></li>
                            <li><a href="#">$</a></li>
                            <li><a href="#">$</a></li>
                            <li><a href="#">$</a></li>
                            <li><a href="#">$</a></li>
                            <li><a href="#">$</a></li>
                        </ul>

                    </div>
                    <div>
                        <form method="post" action="">
                            <input type="submit" value="View All" name="see_all" id="submit_but" style="width:100px; height: 30px;" />
                        </form>
                    </div>
                </div>

                <!--I had a box for top sales but I'm not sure if we need that or not so for now it's invisible because it helps 
                    the formatting and can be easily added back if we decide to use it-->
                <div class="top-sales box">
                    <div class="title"></div>
                    <ul class="top-sales-details">
                        <li>
                            <a href="#">
                                <span class="product">Beer Name</span>
                            </a>
                            <span class="price">$</span>
                        </li>
                        <li>
                            <a href="#">
                                <span class="product">Beer Name</span>
                            </a>
                            <span class="price">$</span>
                        </li>
                        <li>
                            <a href="#">
                                <span class="product">Beer Name</span>
                            </a>
                            <span class="price">$</span>
                        </li>
                        <li>
                            <a href="#">
                                <span class="product">Beer Name</span>
                            </a>
                            <span class="price">$</span>
                        </li>
                        <li>
                            <a href="#">
                                <span class="product">Beer Name</span>
                            </a>
                            <span class="price">$</span>
                        </li>
                        <li>
                            <a href="#">
                                <span class="product">Beer Name</span>
                            </a>
                            <span class="price">$</span>
                        <li>
                            <a href="#">
                                <span class="product">Beer Name</span>
                            </a>
                            <span class="price">$</span>
                        </li>
                        <li>
                            <a href="#">
                                <span class="product">Beer Name</span>
                            </a>
                            <span class="price">$</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!--Bottom disclaimer-->
            <div class="overview-boxes2">
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic"><i><b>The printable version of the reports can be found by clicking the submitted reports</b></i></div>
                        <div class="indicator">
                        </div>
                    </div>
                </div>
        </section><br><br>
</body>

</html>

<?php
#need some stuff here
?>