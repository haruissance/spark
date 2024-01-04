<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="1">
    <script type="text/javascript" src="../jquery/jquery.min.js"></script>
    <title>SPARK Monitoring System</title>
    <link href="css/recaparea3.css" rel="stylesheet"/>
</head>
<script src="../table2excel.js">

</script>
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
                <h1 id="text1">MONITORING</h1>
            </section>
            <section>

                <!-- text: 247
                img: 245-->

            </section>
            <hr id="line2">
            <p>Polibatam Welding Yard_</p>
            <h1 id="text2">Area 1</h1>
            <hr id="line3">
            <div id="vertical-line"></div>

            <section>
                <img id="icon2" src="../images/User_Icon.png">
            </section>
        </div>

        <div class="main-content">
            <table class="my-table">
                <thead>
                    <tr style="background-color: grey; color: black;">
                        <th style="width:50px">No.</th>
                        <th style="width:200px">Machine ID</th>
                        <th style="width:200px">Date</th>
                        <th style="width:250px">Name</th>
                        <th style="width:150px">Login</th>
                        <th style="width:150px">Logout</th>
                        <th style="width:180px">Up Time</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                        //koneksi ke database 
                        include "../koneksi.php";

                        $sql = mysqli_query($konek, "select * from recaparea3");
                        $no = 0;
                        while($data = mysqli_fetch_array($sql)){
                            $no++;
                        
                    ?>
                    <tr>
                        <td><?php echo $no;  ?></td>
                        <td><?php echo $data['MachineID']; ?></td>
                        <td><?php echo $data['Date']; ?></td>
                        <td><?php echo $data['Name']; ?></td>
                        <td><?php echo $data['Login']; ?></td>
                        <td><?php echo $data['Logout']; ?></td>
                        <td><?php echo $data['Timing']; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

            <a href="#" id="downloadexcel">
        <div id="box1">
            <img id="img3" src="../images/Excel_Logo.png" alt="Icon">
            <h1 id="text3">Export</h1>
        </div>
    </a>

    <script src="table2excel.js"></script>
    <script>
        document.getElementById('downloadexcel').addEventListener('click', function(){
            var table2excel = new Table2Excel();

            // Get today's date
            var today = new Date();
            var year = today.getFullYear();
            var month = String(today.getMonth() + 1).padStart(2, '0');
            var day = String(today.getDate()).padStart(2, '0');
            var dateString = year + '-' + month + '-' + day;

            // Generate filename with today's date
            var filename = 'Area 1_' + dateString + '.xls';

            // Export the table to Excel with the generated filename
            table2excel.export(document.querySelector(".my-table"), filename);
        });
    </script>
</body>
</html>