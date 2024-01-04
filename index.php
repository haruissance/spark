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
                $("#checkMachineCount").load('checkMachineCount.php');
            }, 1000);
        });
</script>

    <link href="css/home.css" rel="stylesheet"/>
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
            <section>
                <a href="employee_data.php">
                <img id="icon4" src="images/Employee_Data.png" alt="Icon">
            </a>
            <section>
                <a href="SOP.php">
                <img id="icon5" src="images/SOP.png" alt="Icon">
            </a>
            <section>
                <a href="About_us.php">
                <img id="icon6" src="images/About_us.png" alt="Icon">
            </a>
            </section>
            </section>
            </section>
            </section>
            </section>
        </div>
        <div class="header">
            <section>
                <img id="icon1" src="images/Home_Icon_Blue.png" alt="Icon">
                <h1>HOME</h1>
            </section>
            <section>

            </section>
            <hr id="line2">
            <p>Polibatam Welding Yard</p>
            <hr id="line3">
            <div id="vertical-line"></div>
                <a href="#"><img id="icon2" src="images/User_Icon.png"></a>

                
                
                <div class="main-content">
                    <div id="box1">
                        <img id="icon3" src="images/Icon1.png">
                        <p id="p_icon3">Total Machines</p>
                        <h1 id="h1_icon3">4</h1>
                    </div>
        
                    <div id="box2">
                        <img id="icon4" src="images/Icon2.png">
                        <p id="p_icon4">Active Machines</p>
                        <h1 id="h1_icon4"><span id ="checkMachineCount"></span></h1>
                    </div>
                </div>

</body>
</html>