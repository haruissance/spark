<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="jquery/jquery.min.js"></script>
    <title>SPARK Monitoring System</title>
    <link href="css/employee_data.css" rel="stylesheet"/>
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
        </div>
        <div class="header">
            <section>
                <img id="icon7" src="images/Employee_Data_Blue.png" alt="Icon">
                <h1>WELDER DATA</h1>
            </section>
            <hr id="line2">
            <p>Polibatam Welding Yard</p>
            <hr id="line3">
            <section>
            <img id="icon2" src="images/User_Icon.png">
            <div id="vertical-line"></div>
        </section>
        </div>
        <div class="main-content">
            <table class="my-table">
                <thead>
                    <tr>
                        <th style="width:50px">No.</th>
                        <th>Card UID</th>
                        <th>Welder Name</th>
                        <th>Welder Specification</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                        //koneksi ke database 
                        include "koneksi.php";

                        $sql = mysqli_query($konek, "select * from employee");
                        $no = 0;
                        while($data = mysqli_fetch_array($sql)){
                            $no++;
                        
                    ?>

                    <tr>
                        <td> <?php echo $no; ?></td>
                        <td> <?php echo $data['cardUID']; ?></td>
                        <td> <?php echo $data['Name']; ?> </td>
                        <td> <?php echo $data['welderSpec']; ?></td>
                        <td> <a href="edit.php?id=<?php echo $data['ID']; ?>">Edit</a> | <a href="hapus.php?id=<?php echo $data['ID']; ?>">Hapus</a>
                    </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        
            <div id="addButton">
                <a href="tambah.php">
                <p>Add New Employee</p>
                <img src="images/Add_Employee.png"></a>
        </div>
        
    </div>
</body>
</html>
