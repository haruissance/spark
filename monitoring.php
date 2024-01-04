<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="jquery/jquery.min.js"></script>
    <title>SPARK Monitoring System</title>
    <script>
        $(document).ready(function(){
            setInterval(function(){
                $("#cekMachine1Count").load('checkArea1.php');
                $("#cekMachine2Count").load('checkArea2.php');
                $("#cekMachine3Count").load('checkArea3.php');
            }, 1000);
        });
    </script>
    <link href="css/monitoring.css" rel="stylesheet"/>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <img id="icon1" src="images/SPARK LOGO.png" alt="Picture" width="90" >
            <hr id="line1">
            <section>
                <a href="index.php">
                    <img id="icon2" src="images/Home_Icon.png" alt="Icon">
                </a>
            </section>
            <section>
                <a href="monitoring.php">
                <img id="icon3" src="images/Monitoring.png" alt="Icon">
                </a>
            </section>
            <section>
                <a href="employee_data.php">
                <img id="icon4" src="images/Employee_Data.png" alt="Icon">
            </a>
            </section>
            <section>
                <a href="SOP.php">
                <img id="icon5" src="images/SOP.png" alt="Icon">
            </a>
            </section>
            <section>
                <a href="About_us.php">
                <img id="icon6" src="images/About_us.png" alt="Icon">
            </a>
            </section>
        </section>
    </div>
        <div class="header">
            <section>
                <img id="icon7" src="images/Monitoring_Blue.png" alt="Icon">
                <h1>MONITORING</h1>
            </section>

            <section>
            <hr id="line2">
            <p>Polibatam Welding Yard</p>
            <hr id="line3">
            <div id="vertical-line"></div>
            </section>

            <section>
                <img id="icon2" src="images/User_Icon.png">
            </section>
        </div>

        <div class="main-content">
            <div id="box1">
                <p id="area1_header">AREA-1</p>
                <hr id="line4">
                <p id="area1_content_active">Active Machines: </p><strong id ="area1_content_active_count"> <span id ="cekMachine1Count"></span></strong>
                <p id="area1_content_qty">Machine Quantity: </p><strong id ="area1_content_qty_count"></strong>
                <a href="Area/area1.php"><img id="area1_img" src="images/Area_Box.png"></a>
            </div>

            <div id="box2">
                <p id="area2_header">AREA-2</p>
                <hr id="line5">
                <p id="area2_content_active">Active Machines: </p><strong id ="area2_content_active_count"><span id ="cekMachine2Count"></span></strong>
                <p id="area2_content_qty">Machine Quantity: </p><strong id ="area2_content_qty_count"></strong>
                <a href="Area/area2.php"><img id="area2_img" src="images/Area_Box.png"></a>
            </div>

            <div id="box3">
                <p id="area3_header">AREA-3</p>
                <hr id="line6">
                <p id="area3_content_active">Active Machines: </p><strong id ="area3_content_active_count"><span id ="cekMachine3Count"></span></strong>
                <p id="area3_content_qty">Machine Quantity: </p><strong id ="area3_content_qty_count"></strong>
                <a href="Area/area3.php"><img id="area3_img" src="images/Area_Box.png"></a>
            </div>

        </div>
</body>
</html>