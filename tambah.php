<?php
error_reporting(0);
    include "koneksi.php";

    if(isset($_POST['btnSimpan'])){
        $cardUID    =   $_POST['cardUID'];
        $Name       =   $_POST['Name'];
        $welderSpec =   $_POST['welderSpec'];
        $email      =   $_POST['email'];
        $phone      =   $_POST['phone'];
        $address    =   $_POST['address'];
        $postal     =   $_POST['postal'];

        $simpan     =   mysqli_query($konek, "insert into employee(cardUID, Name, welderSpec, email, phone, address, postal)values('$cardUID', '$Name', '$welderSpec', '$email', '$phone', '$address', '$postal')");

    if($simpan){
        echo "
            <script>
            alert('Data Saved');
            location.replace('employee_data.php');
            </script>
        ";
        }
        else{
            echo "
            <script>
            alert('Data is not saved');
            location.replace('employee_data.php');
            </script>
        ";
        }
    }

    mysqli_query($konek, "delete from tmprfid");
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
    <script type="text/javascript">
        $(document).ready(function(){
            setInterval(function(){
                $("#norfid").load('nokartu.php')
            }, 0);
        });
        function validateForm() {
            var cardUID = document.forms["myForm"]["cardUID"].value;
            var Name = document.forms["myForm"]["Name"].value;
            var welderSpec = document.forms["myForm"]["welderSpec"].value;
            if (cardUID == "" || Name == "" || welderSpec == "") {
                alert("All fields must be filled out");
                return false;
            }
        }
    </script>
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
                <h1>ADD WELDER MENU</h1>
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
            <div id="box1">
                <h3 id="Profile">Profile</h3>
                <img id="img-box" src="images/User_Machine.png">
                <a href=""><img id="edit-img" src="images/Edit.png"></a>
                <h3 id="UID">Card ID</h3>
                <form method="POST">
                <div id="norfid">
                </div>
                <div class="form-group2">
                    <label>Welder Name:</label>
                    <input type="text" name="Name" id="Name" placeholder = "Insert New Welder Name">
                </div>
                <div class="form-group3">
                    <label>Qualification</label>
                    <input type="text" name="welderSpec" id="welderSpec" placeholder = "Insert Welder Specification">
                </div>
                <div class="form-group4">
                    <label>Email Address</label>
                    <input type="text" name="email" id="email" placeholder = "Insert Email Address">
                </div>
                <div class="form-group5">
                    <label>Phone Number</label>
                    <input type="text" name="phone" id="phone" placeholder = "Insert Phone Number">
                </div>
                <div class="form-group6">
                    <label>Address</label>
                    <input type="text" name="address" id="address" placeholder = "Insert Adress">
                </div>
                <div class="form-group7">
                    <label>ZIP/Postal Code</label>
                    <input type="text" name="postal" id="postal" placeholder = "Insert ZIP/Postal Code">
                </div>
                    <button class="saveButton" name="btnSimpan" id="btnSimpan"><h2 id="textButton">Save</button>
            </div>
         </div>
    </div>
</body>
</html>
