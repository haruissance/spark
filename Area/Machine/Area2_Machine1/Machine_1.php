<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="../../../jquery/jquery.min.js"></script>
    <title>SPARK Monitoring System</title>
    <script>
        $(document).ready(function(){
            setInterval(function(){
                $("#ceksensor1").load('ceksensor1.php');
                $("#ceksensor2").load('ceksensor2.php');
                $("#ceksensor3").load('ceksensor3.php');
                $("#ceksensor4").load('ceksensor4.php');
                $("#cekMachine1ID").load('cekMachine1ID.php');
            }, 1000);
        });
    </script>
    <script>
    function updateTable(info, uid) {
    // Get the table body
    var table = document.getElementById("sensor-data").getElementsByTagName('tbody')[0];

    // Create a new row
    var row = table.insertRow();

    // Insert data into the new row
    var cellInfo = row.insertCell(0);
    cellInfo.innerHTML = info;
    var cellUID = row.insertCell(1);
    cellUID.innerHTML = uid;
  }
</script>
    <link href="css/Machine_1.css" rel="stylesheet"/>
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
                <h1>MONITORING</h1>
            </section>
            <section>

            </section>
            <hr id="line2">
            <p>Polibatam Welding Yard_Area 1_</p>
            <h1 id="text2"><span id ="cekMachine1ID"></span></h1>
            <hr id="line3">
            <div id="vertical-line"></div>
            
                <img id="icon2" src="../../../images/User_Icon.png">
        </div>

        <div class="main-content">

            <section>
                <img id="img1" src="../../../images/User_Machine.png">
            </section>

            <section>
                <div id="box1">
                <div id="info1">
                <p id="text_1">Name:</p>
                <h1 id="Name">
                            <a href="infoMachine1.php"><span id ="ceksensor1"></span></a>
                        </h1>
                    </div>

                    <div>
                        <p id="text_2">UID:</p>
                        <h1 id="UID">
                        <span id ="ceksensor2"></span>
                        </h1>
                    </div>
                    
                    <div>
                    <p id="text_3">Up Time:</p>
                    <h1 id="Status">
                        <span id ="ceksensor3"></span>
                        </h1>
                     </div>

                     <div>
                    <p id="text_4">Mode:</p>
                    <h1 id="Mode">
                        <span id ="ceksensor4"></span>
                        </h1>
                     </div>
                    </div>
            </section>

            <table class="my-table"> 
                    <thead>
                    <tr>
                      <td><strong>LOGIN</strong></td>
                      <td><strong>LOGOUT</strong></td>
                      <td><strong>UP TIME</strong></td>
                    </tr>
                    </thead>
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

                        //baca isi tabel sensor 
                        $sql1 = mysqli_query($konek, "SELECT * FROM area2 WHERE ID = $show");
                        $Data = mysqli_fetch_array($sql);
                        $no = 0;
                        while($Data = mysqli_fetch_array($sql1)){
                            $no++;

                        ?>
                        <tr>
                            <td><?php echo $Data['Login']; ?></td>
                            <td><?php echo $Data['Logout']; ?></td>
                            <td><?php echo $Data['Timing']; ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                  </table>
        </div>