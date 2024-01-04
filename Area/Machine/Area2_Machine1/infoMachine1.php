<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="../../../jquery/jquery.min.js"></script>
    <title>SPARK Monitoring System</title>
    <link href="css/infoMachine1.css" rel="stylesheet"/>

</head>
<body>
    <div class="container">
        <div class="sidebar">
            <img id="icon1" src="../../../images/SPARK LOGO.png" alt="Picture" width="90" >
            <hr id="line1">
            <section>
                <a href="../../../index.php">
                    <img id="icon2" src="../../../images/Home_Icon.png" alt="Icon">
                </a>
            </section>
            <section>
                <a href="../../../monitoring.php">
                <img id="icon3" src="../../../images/Monitoring.png" alt="Icon">
                </a>
            <section>
                <a href="../../../employee_data.php">
                <img id="icon4" src="../../../images/Employee_Data.png" alt="Icon">
            </a>
            <section>
                <a href="../../../SOP.php">
                <img id="icon5" src="../../../images/SOP.png" alt="Icon">
            </a>
            <section>
                <a href="../../../About_us.php">
                <img id="icon6" src="../../../images/About_us.png" alt="Icon">
            </a>
            </section>
            </section>
            </section>
            </section>
            </section>
        </div>
        <div class="header">
            <section>
                <img id="icon1" src="../../../images/Home_Icon_Blue.png" alt="Icon">
                <h1>EMPLOYEE DATA</h1>
            </section>
            <section>

            </section>
            <hr id="line2">
            <p>Polibatam Welding Yard_Area 1_Infographics</p>
            <h1 id="text2"><span id ="cekMachine1ID"></span></h1>
            <hr id="line3">
            <div id="vertical-line"></div>
            
                <img id="icon2" src="../../../images/User_Icon.png">
        </div>

        <div class="main-content">
            <?php

                // Turn off all error reporting
                error_reporting(0);

                include "../../../koneksi.php";

                $sql = mysqli_query($konek, "SELECT MIN(ID) as min_id FROM area2 WHERE Status='Active'");
                $data = mysqli_fetch_array($sql);
                $IDCount = $data["min_id"];

                if($IDCount == 0) {
                    $i = 0;
                    $show = $i;
                } else {
                    $show = $IDCount + 1;
                }

                //baca isi tabel sensor 
                $sql = mysqli_query($konek, "SELECT * FROM area2 WHERE ID = $show");
                $data = mysqli_fetch_array($sql);
                $Info = $data["Name"];

            ?>
            <div id="box1">
                <img src="../../../images/User_Machine.png">
                <h2 id="text1"><?php echo $Info; ?></h2>
                <section id="circle1">
                    <h2 id="text2">WELDER</h2>
                </section>
            </div>
                <table class="my-table1">
                <tbody>
                <?php
                    include "../../../koneksi.php";

                    $sql = mysqli_query($konek, "SELECT MIN(ID) as min_id FROM area2 WHERE Status='Active'");
                    $data = mysqli_fetch_array($sql);
                    $IDCount = $data["min_id"];

                    if($IDCount == 0) {
                    $i = 0;
                    $show = $i;
                    } else {
                         $show = $IDCount;
                    }

                    $sql1 = mysqli_query($konek, "SELECT * FROM area2 WHERE ID = $show");
                    $Data = mysqli_fetch_array($sql1);
                    $UID = $Data['UID'];

                    //baca isi tabel sensor 
                    $sql2 = mysqli_query($konek, "SELECT * FROM employee WHERE cardUID = $UID");
                    $no = 0;
                    while($Com = mysqli_fetch_array($sql2)){
                    $no++;
                ?>
                    <tr>
                        <th style="width:200px;border-right: none;border-bottom: none;"><h2>PROFILE</h2></th>
                        <th style="width:300px;border-left: none;"></th>
                    </tr>
                     <tr>
                        <td style="background-color: #E8E5E5; border-top: none;"><h3>UID</h3></td>
                        <td><h3><?php echo $Com['cardUID']; ?></h3></td>
                    </tr>
                    <tr>
                        <td style="background-color: #E8E5E5"><h3>Address</h3></td>
                        <td><h3><?php echo $Com['address']; ?></h3></td>
                    </tr>
                    <tr>
                        <td style="background-color: #E8E5E5"><h3>Phone Number</h3></td>
                        <td><h3><?php echo $Com['phone']; ?></h3></td>
                    </tr>
                    <tr>
                        <td style="background-color: #E8E5E5"><h3>Email Address</h3></td>
                        <td><h3><?php echo $Com['email']; ?></h3></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

            <table class="my-table2">
                <tbody>
                    <?php

                        include "../../../koneksi.php";

                    $sql = mysqli_query($konek, "SELECT MIN(ID) as min_id FROM area2 WHERE Status='Active'");
                    $data = mysqli_fetch_array($sql);
                    $IDCount = $data["min_id"];

                    if($IDCount == 0) {
                    $i = 0;
                    $show = $i;
                    } else {
                         $show = $IDCount;
                    }

                    $sql1 = mysqli_query($konek, "SELECT * FROM area2 WHERE ID = $show");
                    $Data = mysqli_fetch_array($sql1);
                    $UID = $Data['UID'];

                    //baca isi tabel sensor 
                    $sql2 = mysqli_query($konek, "SELECT * FROM employee WHERE cardUID = $UID");
                    $no = 0;
                    while($Com = mysqli_fetch_array($sql2)){
                    $no++;

                    ?>
                <tr>
                    <th style="width:200px;border-right: none;border-bottom: none;"><h2>PROFICIENCY</h2></th>
                    <th style="width:300px;border-left: none;"></th>
                </tr>
                <tr>
                    <td style="background-color: #E8E5E5; border-top: none;"><h3>Welding Type</h3></td>
                    <td><h3><?php echo $Com['weldingType']; ?></h3></td>
                </tr>
                <tr>
                    <td style="background-color: #E8E5E5"><h3>Qualification</h3></td>
                    <td><h3><?php echo $Com['qualification']; ?></h3></td>
                </tr>
                <tr>
                    <td style="background-color: #E8E5E5"><h3>Material Type</h3></td>
                    <td><h3><?php echo $Com['materialType']; ?></h3></td>
                </tr>
                <tr>
                    <td style="background-color: #E8E5E5"><h3>Certification Number</h3></td>
                    <td><h3><?php echo $Com['certificationNumber']; ?></h3></td>
                </tr>
                <tr>
                    <td style="background-color: #E8E5E5"><h3>Expiration Date</h3></td>
                    <td><h3><?php echo $Com['expirationDate']; ?></h3></td>
                </tr>
            <?php } ?>
            </table>
            
            <div id="box2">
                <section id="box3">
                </section>
                <h2 id="text3">ANALYTICS</h2>
                <div id="box4">
                    <img id="icon3" src="../../../images/Icon1.png">
                    <p id="p_icon3">Total Welding Time</p>
                    <h2 id="h1_icon3"></h2>
                </div>
                <div id="box5">
                    <img id="icon4" src="../../../images/Icon2.png">
                    <p id="p_icon4">Average</p>
                    <h2 id="h1_icon4"></h2>
                </div>
            </div>
        </div>