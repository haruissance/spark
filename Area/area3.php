<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="../jquery/jquery.min.js"></script>
    <title>SPARK Monitoring System</title>
    <script>
       $(document).ready(function(){
         setInterval(function(){
            console.log('Inside setInterval function');
        $.get('Machine/Area3_Machine1/cekMachine1State.php', function(data) {
            console.log(data); // check the value of data
            if (data.trim() === 'Active') {
                $("#img1").attr("src", "images/Area_On.png");
            } else {
                $("#img1").attr("src", "images/Area_Off.png");
            }
        }).fail(function() {
            console.log('AJAX request failed'); // handle AJAX request failure
        });
    }, 1000);
});
    </script>
    <script>
       $(document).ready(function(){
         setInterval(function(){
            console.log('Inside setInterval function');
        $.get('Machine/Area3_Machine2/cekMachine2State.php', function(data) {
            console.log(data); // check the value of data
            if (data.trim() === 'Active') {
                $("#img2").attr("src", "images/Area_On.png");
            } else {
                $("#img2").attr("src", "images/Area_Off.png");
            }
        }).fail(function() {
            console.log('AJAX request failed'); // handle AJAX request failure
        });
    }, 1000);
});
    </script>
        <script>
        $(document).ready(function(){
            setInterval(function(){
                $("#cekMachine1ID").load('Machine/Area3_Machine1/cekMachine1ID.php');
                $("#cekMachine2ID").load('Machine/Area3_Machine2/cekMachine2ID.php');
            }, 1000);
        });
    </script>
    <link href="css/area2.css" rel="stylesheet"/>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <img id="icon1" src="../images/SPARK LOGO.png" alt="Picture" width="90" >
            <hr id="line1">
            <section>
                <a href="../index.php">
                    <img id="icon2" src="../images/Home_Icon.png" alt="Icon">
                </a>
            </section>
            <section>
                <a href="../monitoring.php">
                <img id="icon3" src="../images/Monitoring.png" alt="Icon">
                </a>
            <section>
                <a href="../employee_data.php">
                <img id="icon4" src="../images/Employee_Data.png" alt="Icon">
            </a>
            <section>
                <a href="../SOP.php">
                <img id="icon5" src="../images/SOP.png" alt="Icon">
            </a>
            <section>
                <a href="../About_us.php">
                <img id="icon6" src="../images/About_us.png" alt="Icon">
            </a>
            </section>
            </section>
            </section>
            </section>
            </section>
        </div>
        <div class="header">
            <section>
                <img id="icon1" src="../images/Monitoring_Blue.png" alt="Icon">
                <h1 id="text1">HOME</h1>
            </section>
            <section>

                <!-- text: 247
                img: 245-->

            </section>
            <hr id="line2">
            <p>Polibatam Welding Yard_</p>
            <h1 id="text2">Area 3</h1>
            <hr id="line3">
            <div id="vertical-line"></div>

            <section>
                <img id="icon2" src="../images/User_Icon.png">
            </section>

        <div class="main-content">
            <div id="icon7">
                <a href="Machine/Area3_Machine1/Machine_1.php"><img id="img1" src="images/Area_Off.png"></a>
                <h1 id="text_img1"><span id ="cekMachine1ID"></span></h1>
            </div>

            <div id="icon8">
            <a href="Machine/Area3_Machine2/Machine_2.php"><img id="img2" src="images/Area_Off.png"></a>
                <h1 id="text_img2"><span id ="cekMachine2ID"></span></h1>
            </div>
            <div id="recap">
                <a href="recaparea3.php"><h1 id="recapText">Recap</h1></a>
            </div>
        </div>
</body>
</html>