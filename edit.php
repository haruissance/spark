<?php
    include "koneksi.php";

    $ID = $_GET['id'];

    $cari = mysqli_query($konek, "select * from employee where ID='$ID'");
    $hasil = mysqli_fetch_array($cari);
    if(isset($_POST['btnSimpan'])){
        $cardUID    =   $_POST['cardUID'];
        $Name       =   $_POST['Name'];
        $welderSpec =   $_POST['welderSpec'];

        $simpan     =   mysqli_query($konek, "update employee set cardUID='$cardUID', Name='$Name', welderSpec='$welderSpec' where ID='$ID'");

    if($simpan){
        echo "
            <script>
            alert('Tersimpan');
            location.replace('employee_data.php');
            </script>
        ";
        }
        else{
            echo "
            <script>
            alert('Gagal Tersimpan');
            location.replace('employee_data.php');
            </script>
        ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="jquery/jquery.min.js"></script>
    <title>SPARK Monitoring System</title>
    <link href="css/tambah.css" rel="stylesheet"/>
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
                <h1>ADD EMPLOYEE MENU</h1>
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
            <form method="POST">
             <div class="form-group1">
                <label>Card ID:</label>
                <input type="text" name="cardUID" id="cardUID" placeholder = "Insert UID" value="<?php echo $hasil['cardUID']; ?>">
             </div>
             <div class="form-group2">
                <label>Welder:</label>
                <input type="text" name="Name" id="Name" placeholder = "Insert New Welder Name" value="<?php echo $hasil['Name']; ?>">
             </div>
             <div class="form-group3">
                <label>Welder Specification</label>
                <input type="text" name="welderSpec" id="welderSpec" placeholder = "Insert Welder Specification" value="<?php echo $hasil['welderSpec']; ?>">
             </div>
                <button class="saveButton" name="btnSimpan" id="btnSimpan"><h2 id="textButton">Save</button>
        </div>
        
    </div>
</body>
</html>
