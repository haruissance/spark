<?php

    //koneksi ke database
    include "koneksi.php";

    //baca data
    $Area = $_GET['Area'];
    $MachineID = $_GET['MachineID'];
    $Timing = $_GET['Timing'];
    $Status = $_GET['Status'];

    if($Area == "1"){

        $sql = mysqli_query($konek, "SELECT MAX(ID) as max_id FROM area1");
        $data = mysqli_fetch_array($sql);
        $IDCount = $data["max_id"];

        echo "HI";

        if($IDCount == 0) {
            $i = 0;
        } else {
            $i = $IDCount;
            $ID = $i;
        }

        if($Status == "Active"){
            $query = "UPDATE area1 SET Status='$Status', `MachineID`='$MachineID', Timing='$Timing' WHERE MachineID='$MachineID';";
            $query .= "UPDATE recaparea1 SET Status='$Status', `MachineID`='$MachineID', Timing='$Timing' WHERE MachineID='$MachineID' AND ID=(SELECT MAX(ID) FROM recaparea1 WHERE `MachineID`='$MachineID')";
            
            if(mysqli_multi_query($konek, $query)){
                while(mysqli_more_results($konek)) {
                    mysqli_next_result($konek);
                    mysqli_store_result($konek);
                }
                echo "Data berhasil diupdate";
            } else {
                echo "Error: " . mysqli_error($konek);
            }
        }
    }

    else if($Area == "2"){

        $sql = mysqli_query($konek, "SELECT MAX(ID) as max_id FROM area2");
        $data = mysqli_fetch_array($sql);
        $IDCount = $data["max_id"];

        echo "HI";

        if($IDCount == 0) {
            $i = 0;
        } else {
            $i = $IDCount;
            $ID = $i;
        }

        if($Status == "Active"){
            $query = "UPDATE area2 SET Status='$Status', `MachineID`='$MachineID', Timing='$Timing' WHERE MachineID='$MachineID';";
            $query .= "UPDATE recaparea2 SET Status='$Status', `MachineID`='$MachineID', Timing='$Timing' WHERE MachineID='$MachineID' AND ID=(SELECT MAX(ID) FROM recaparea2 WHERE `MachineID`='$MachineID')";
            
            if(mysqli_multi_query($konek, $query)){
                while(mysqli_more_results($konek)) {
                    mysqli_next_result($konek);
                    mysqli_store_result($konek);
                }
                echo "Data berhasil diupdate";
            } else {
                echo "Error: " . mysqli_error($konek);
            }
        }
    }

    else if($Area == "3"){

        $sql = mysqli_query($konek, "SELECT MAX(ID) as max_id FROM area3");
        $data = mysqli_fetch_array($sql);
        $IDCount = $data["max_id"];

        echo "HI";

        if($IDCount == 0) {
            $i = 0;
        } else {
            $i = $IDCount;
            $ID = $i;
        }

        if($Status == "Active"){
            $query = "UPDATE area3 SET Status='$Status', `MachineID`='$MachineID', Timing='$Timing' WHERE MachineID='$MachineID';";
            $query .= "UPDATE recaparea3 SET Status='$Status', `MachineID`='$MachineID', Timing='$Timing' WHERE MachineID='$MachineID' AND ID=(SELECT MAX(ID) FROM recaparea3 WHERE `MachineID`='$MachineID')";
            
            if(mysqli_multi_query($konek, $query)){
                while(mysqli_more_results($konek)) {
                    mysqli_next_result($konek);
                    mysqli_store_result($konek);
                }
                echo "Data berhasil diupdate";
            } else {
                echo "Error: " . mysqli_error($konek);
            }
        }
    }

    else if($Area == "4"){

        $sql = mysqli_query($konek, "SELECT MAX(ID) as max_id FROM area4");
        $data = mysqli_fetch_array($sql);
        $IDCount = $data["max_id"];

        echo "HI";

        if($IDCount == 0) {
            $i = 0;
        } else {
            $i = $IDCount;
            $ID = $i;
        }

        if($Status == "Active"){
            $query = "UPDATE area4 SET Status='$Status', `MachineID`='$MachineID', Timing='$Timing' WHERE MachineID='$MachineID';";
            $query .= "UPDATE recaparea4 SET Status='$Status', `MachineID`='$MachineID', Timing='$Timing' WHERE MachineID='$MachineID' AND ID=(SELECT MAX(ID) FROM recaparea4 WHERE `MachineID`='$MachineID')";
            
            if(mysqli_multi_query($konek, $query)){
                while(mysqli_more_results($konek)) {
                    mysqli_next_result($konek);
                    mysqli_store_result($konek);
                }
                echo "Data berhasil diupdate";
            } else {
                echo "Error: " . mysqli_error($konek);
            }
        }
    }

    else if($Area == "5"){

        $sql = mysqli_query($konek, "SELECT MAX(ID) as max_id FROM area5");
        $data = mysqli_fetch_array($sql);
        $IDCount = $data["max_id"];

        echo "HI";

        if($IDCount == 0) {
            $i = 0;
        } else {
            $i = $IDCount;
            $ID = $i;
        }

        if($Status == "Active"){
            $query = "UPDATE area5 SET Status='$Status', `MachineID`='$MachineID', Timing='$Timing' WHERE MachineID='$MachineID';";
            $query .= "UPDATE recaparea5 SET Status='$Status', `MachineID`='$MachineID', Timing='$Timing' WHERE MachineID='$MachineID' AND ID=(SELECT MAX(ID) FROM recaparea5 WHERE `MachineID`='$MachineID')";
            
            if(mysqli_multi_query($konek, $query)){
                while(mysqli_more_results($konek)) {
                    mysqli_next_result($konek);
                    mysqli_store_result($konek);
                }
                echo "Data berhasil diupdate";
            } else {
                echo "Error: " . mysqli_error($konek);
            }
        }
    }
?>