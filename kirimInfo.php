<?php
    //koneksi ke database
    include "koneksi.php";

    //baca data
    $Area = $_GET['Area'];
    $UID = $_GET['UID'];
    $Status = $_GET['Status'];
    $Mode = $_GET['Mode'];
    $MachineID = $_GET['MachineID'];
    $Timing = $_GET['Timing'];

    // Check if UID exists in employee table
    $query = "SELECT Name FROM employee WHERE cardUID= '$UID'";
    $result = mysqli_query($konek, $query);
    if (mysqli_num_rows($result) > 0) {
        // UID exists, retrieve corresponding Name value
        $data = mysqli_fetch_array($result);
        $Name = $data['Name'];
    } else {
        // UID does not exist, set Name to empty string
        echo "Card not in database";
        $Name = '';
    }

    date_default_timezone_set('Asia/Jakarta');
    $Date = date('Y-m-d');
    $Time = date('H:i:s');

    if($Area == "1"){

        $sql = mysqli_query($konek, "SELECT MAX(ID) as max_id FROM area1");
        $data = mysqli_fetch_array($sql);
        $IDCount = $data["max_id"];

        echo "HI";
        echo "$Date";
        echo "$Mode";

        if($IDCount == 0) {
            $i = 0;
        } else {
            $i = $IDCount;
            $ID = $i;
        }
    
        if($Status == "Inactive"){
            $i++;
            $query = "INSERT INTO area1 (ID, Area, UID, Status, Mode, `MachineID`, Timing, Date) VALUES ('$i','$Area', '$UID', '$Status', '$Mode', '$MachineID', '$Timing', '$Date');";
            $query .= "INSERT INTO recaparea1 (Area, UID, Status, Mode, `MachineID`, Timing, Date) VALUES ('$Area', '$UID', '$Status', '$Mode', '$MachineID', '$Timing', '$Date');";
    
            if(mysqli_multi_query($konek, $query)){
                echo "Data berhasil ditambahkan ke kedua tabel";
            } else {
                echo "Error: " . mysqli_error($konek);
            }
    
        } else if($Status == "Active"){
            $query = "UPDATE area1 SET Name='$Name', UID='$UID', Status='$Status', Mode='$Mode', `MachineID`='$MachineID', Timing='$Timing', Date='$Date' WHERE MachineID='$MachineID';";
            $query .= "UPDATE recaparea1 SET Name='$Name', UID='$UID', Status='$Status', Mode='$Mode', `MachineID`='$MachineID', Timing='$Timing', Date='$Date' WHERE MachineID='$MachineID' AND ID=(SELECT MAX(ID) FROM recaparea1 WHERE `MachineID`='$MachineID')";
            
            if(mysqli_multi_query($konek, $query)){
                while(mysqli_more_results($konek)) {
                    mysqli_next_result($konek);
                    mysqli_store_result($konek);
                }
                echo "Data berhasil diupdate";
            } else {
                echo "Error: " . mysqli_error($konek);
            }
        
            if($Mode == "Login"){
                $query = "UPDATE area1 SET Login='$Time' WHERE MachineID='$MachineID';";
                $query .= "UPDATE recaparea1 SET Login='$Time' WHERE MachineID='$MachineID';";
                if(mysqli_multi_query($konek, $query)){
                    if(mysqli_affected_rows($konek) > 0){
                        echo "Jam berhasil diganti";
                    } else {
                        echo "No rows were updated";
                    }
                } else {
                    echo "Error Login: " . mysqli_error($konek);
                }
            }
            else if($Mode == "Break"){
                $query = "UPDATE area1 SET Break='$Time' WHERE MachineID='$MachineID';";
                $query .= "UPDATE recaparea1 SET Break='$Time' WHERE MachineID='$MachineID';";
                if(mysqli_multi_query($konek, $query)){
                    echo "Jam berhasil diganti";
                } else {
                    echo "Error Break: " . mysqli_error($konek);
                }
            }
            else if($Mode == "Back-From-Break"){
                $query = "UPDATE area1 SET Back_From_Break='$Time' WHERE MachineID='$MachineID';";
                $query .= "UPDATE recaparea1 SET Back_From_Break='$Time' WHERE MachineID='$MachineID';";
                if(mysqli_multi_query($konek, $query)){
                    echo "Jam berhasil diganti";
                } else {
                    echo "Error Back From Break: " . mysqli_error($konek);
                }
            }
            
            else if($Mode == "Logout"){
                $query = "UPDATE area1 SET Logout='$Time' WHERE MachineID='$MachineID';";
                $query .= "UPDATE recaparea1 SET Logout='$Time' WHERE MachineID='$MachineID';";
                if(mysqli_multi_query($konek, $query)){
                    echo "Jam berhasil diganti";
                } else {
                    echo "Error Logout: " . mysqli_error($konek);
                }
            }
        }
        
    
        if ($Status == "Done") {
            $query = "DELETE FROM area1 WHERE `MachineID`='$MachineID';";
            if (mysqli_query($konek, $query)) {
                echo "Data berhasil dihapus";
            } else {
                echo "Error: " . mysqli_error($konek);
            }
        }
    }

    else if($Area === "2"){

        $sql = mysqli_query($konek, "SELECT MAX(ID) as max_id FROM area2");
        $data = mysqli_fetch_array($sql);
        $IDCount = $data["max_id"];

        echo "HI";
        echo "$Time";
        echo "$Mode";

        if($IDCount == 0) {
            $i = 0;
        } else {
            $i = $IDCount;
            $ID = $i;
        }
    
        if($Status == "Inactive"){
            $i++;
            $query = "INSERT INTO area2 (ID, Area, Name, UID, Status, Mode, `MachineID`, Timing) VALUES ('$i','$Area', '$Name', '$UID', '$Status', '$Mode', '$MachineID', '$Timing');";
            $query .= "INSERT INTO recaparea2 (Area, Name, UID, Status, Mode, `MachineID`, Timing) VALUES ('$Area', '$Name', '$UID', '$Status', '$Mode', '$MachineID', '$Timing');";
    
            if(mysqli_multi_query($konek, $query)){
                echo "Data berhasil ditambahkan ke kedua tabel";
                echo "$i";
            } else {
                echo "Error: " . mysqli_error($konek);
            }
    
        } else if($Status == "Active"){
            $query = "UPDATE area2 SET Name='$Name', UID='$UID', Status='$Status', Mode='$Mode', `MachineID`='$MachineID', Timing='$Timing' WHERE MachineID='$MachineID';";
            $query .= "UPDATE recaparea2 SET Name='$Name', UID='$UID', Status='$Status', Mode='$Mode', `MachineID`='$MachineID', Timing='$Timing' WHERE MachineID='$MachineID' AND ID=(SELECT MAX(ID) FROM recaparea2 WHERE `MachineID`='$MachineID')";
            
            if(mysqli_multi_query($konek, $query)){
                while(mysqli_more_results($konek)) {
                    mysqli_next_result($konek);
                    mysqli_store_result($konek);
                }
                echo "Data berhasil diupdate";
            } else {
                echo "Error: " . mysqli_error($konek);
            }
        
            if($Mode == "Login"){
                $query = "UPDATE area2 SET Login='$Time' WHERE MachineID='$MachineID';";
                $query .= "UPDATE recaparea2 SET Login='$Time' WHERE MachineID='$MachineID';";
                if(mysqli_multi_query($konek, $query)){
                    if(mysqli_affected_rows($konek) > 0){
                        echo "Jam berhasil diganti";
                    } else {
                        echo "No rows were updated";
                    }
                } else {
                    echo "Error Login: " . mysqli_error($konek);
                }
            }
            else if($Mode == "Break"){
                $query = "UPDATE area2 SET Break='$Time' WHERE MachineID='$MachineID';";
                $query .= "UPDATE recaparea2 SET Break='$Time' WHERE MachineID='$MachineID';";
                if(mysqli_multi_query($konek, $query)){
                    echo "Jam berhasil diganti";
                } else {
                    echo "Error Break: " . mysqli_error($konek);
                }
            }
            else if($Mode == "Back-From-Break"){
                $query = "UPDATE area2 SET Back_From_Break='$Time' WHERE MachineID='$MachineID';";
                $query .= "UPDATE recaparea2 SET Back_From_Break='$Time' WHERE MachineID='$MachineID';";
                if(mysqli_multi_query($konek, $query)){
                    echo "Jam berhasil diganti";
                } else {
                    echo "Error Back From Break: " . mysqli_error($konek);
                }
            }
            
            else if($Mode == "Logout"){
                $query = "UPDATE area2 SET Logout='$Time' WHERE MachineID='$MachineID';";
                $query .= "UPDATE recaparea2 SET Logout='$Time' WHERE MachineID='$MachineID';";
                if(mysqli_multi_query($konek, $query)){
                    echo "Jam berhasil diganti";
                } else {
                    echo "Error Logout: " . mysqli_error($konek);
                }
            }
        }
        
    
        if ($Status == "Done") {
            $query = "DELETE FROM area2 WHERE `MachineID`='$MachineID';";
            if (mysqli_query($konek, $query)) {
                echo "Data berhasil dihapus";
            } else {
                echo "Error: " . mysqli_error($konek);
            }
        }
    }

    else if($Area === "3"){

        $sql = mysqli_query($konek, "SELECT MAX(ID) as max_id FROM area3");
        $data = mysqli_fetch_array($sql);
        $IDCount = $data["max_id"];

        echo "HI";
        echo "$Time";
        echo "$Mode";

        if($IDCount == 0) {
            $i = 0;
        } else {
            $i = $IDCount;
            $ID = $i;
        }
    
        if($Status == "Inactive"){
            $i++;
            $query = "INSERT INTO area3 (ID, Area, Name, UID, Status, Mode, `MachineID`, Timing) VALUES ('$i','$Area', '$Name', '$UID', '$Status', '$Mode', '$MachineID', '$Timing');";
            $query .= "INSERT INTO recaparea3 (Area, Name, UID, Status, Mode, `MachineID`, Timing) VALUES ('$Area', '$Name', '$UID', '$Status', '$Mode', '$MachineID', '$Timing');";
    
            if(mysqli_multi_query($konek, $query)){
                echo "Data berhasil ditambahkan ke kedua tabel";
                echo "$i";
            } else {
                echo "Error: " . mysqli_error($konek);
            }
    
        } else if($Status == "Active"){
            $query = "UPDATE area3 SET Name='$Name', UID='$UID', Status='$Status', Mode='$Mode', `MachineID`='$MachineID', Timing='$Timing' WHERE MachineID='$MachineID';";
            $query .= "UPDATE recaparea3 SET Name='$Name', UID='$UID', Status='$Status', Mode='$Mode', `MachineID`='$MachineID', Timing='$Timing' WHERE MachineID='$MachineID' AND ID=(SELECT MAX(ID) FROM recaparea3 WHERE `MachineID`='$MachineID')";
            
            if(mysqli_multi_query($konek, $query)){
                while(mysqli_more_results($konek)) {
                    mysqli_next_result($konek);
                    mysqli_store_result($konek);
                }
                echo "Data berhasil diupdate";
            } else {
                echo "Error: " . mysqli_error($konek);
            }
        
            if($Mode == "Login"){
                $query = "UPDATE area3 SET Login='$Time' WHERE MachineID='$MachineID';";
                $query .= "UPDATE recaparea3 SET Login='$Time' WHERE MachineID='$MachineID';";
                if(mysqli_multi_query($konek, $query)){
                    if(mysqli_affected_rows($konek) > 0){
                        echo "Jam berhasil diganti";
                    } else {
                        echo "No rows were updated";
                    }
                } else {
                    echo "Error Login: " . mysqli_error($konek);
                }
            }
            else if($Mode == "Break"){
                $query = "UPDATE area3 SET Break='$Time' WHERE MachineID='$MachineID';";
                $query .= "UPDATE recaparea3 SET Break='$Time' WHERE MachineID='$MachineID';";
                if(mysqli_multi_query($konek, $query)){
                    echo "Jam berhasil diganti";
                } else {
                    echo "Error Break: " . mysqli_error($konek);
                }
            }
            else if($Mode == "Back-From-Break"){
                $query = "UPDATE area3 SET Back_From_Break='$Time' WHERE MachineID='$MachineID';";
                $query .= "UPDATE recaparea3 SET Back_From_Break='$Time' WHERE MachineID='$MachineID';";
                if(mysqli_multi_query($konek, $query)){
                    echo "Jam berhasil diganti";
                } else {
                    echo "Error Back From Break: " . mysqli_error($konek);
                }
            }
            
            else if($Mode == "Logout"){
                $query = "UPDATE area3 SET Logout='$Time' WHERE MachineID='$MachineID';";
                $query .= "UPDATE recaparea3 SET Logout='$Time' WHERE MachineID='$MachineID';";
                if(mysqli_multi_query($konek, $query)){
                    echo "Jam berhasil diganti";
                } else {
                    echo "Error Logout: " . mysqli_error($konek);
                }
            }
        }
        
    
        if ($Status == "Done") {
            $query = "DELETE FROM area3 WHERE `MachineID`='$MachineID';";
            if (mysqli_query($konek, $query)) {
                echo "Data berhasil dihapus";
            } else {
                echo "Error: " . mysqli_error($konek);
            }
        }
    }
   
    else if($Area === "4"){

        $sql = mysqli_query($konek, "SELECT MAX(ID) as max_id FROM area4");
        $data = mysqli_fetch_array($sql);
        $IDCount = $data["max_id"];

        echo "HI";
        echo "$Time";
        echo "$Mode";

        if($IDCount == 0) {
            $i = 0;
        } else {
            $i = $IDCount;
            $ID = $i;
        }
    
        if($Status == "Inactive"){
            $i++;
            $query = "INSERT INTO area4 (ID, Area, Name, UID, Status, Mode, `MachineID`, Timing) VALUES ('$i','$Area', '$Name', '$UID', '$Status', '$Mode', '$MachineID', '$Timing');";
            $query .= "INSERT INTO recaparea4 (Area, Name, UID, Status, Mode, `MachineID`, Timing) VALUES ('$Area', '$Name', '$UID', '$Status', '$Mode', '$MachineID', '$Timing');";
    
            if(mysqli_multi_query($konek, $query)){
                echo "Data berhasil ditambahkan ke kedua tabel";
                echo "$i";
            } else {
                echo "Error: " . mysqli_error($konek);
            }
    
        } else if($Status == "Active"){
            $query = "UPDATE area4 SET Name='$Name', UID='$UID', Status='$Status', Mode='$Mode', `MachineID`='$MachineID', Timing='$Timing' WHERE MachineID='$MachineID';";
            $query .= "UPDATE recaparea4 SET Name='$Name', UID='$UID', Status='$Status', Mode='$Mode', `MachineID`='$MachineID', Timing='$Timing' WHERE MachineID='$MachineID' AND ID=(SELECT MAX(ID) FROM recaparea4 WHERE `MachineID`='$MachineID')";
            
            if(mysqli_multi_query($konek, $query)){
                while(mysqli_more_results($konek)) {
                    mysqli_next_result($konek);
                    mysqli_store_result($konek);
                }
                echo "Data berhasil diupdate";
            } else {
                echo "Error: " . mysqli_error($konek);
            }
        
            if($Mode == "Login"){
                $query = "UPDATE area4 SET Login='$Time' WHERE MachineID='$MachineID';";
                $query .= "UPDATE recaparea4 SET Login='$Time' WHERE MachineID='$MachineID';";
                if(mysqli_multi_query($konek, $query)){
                    if(mysqli_affected_rows($konek) > 0){
                        echo "Jam berhasil diganti";
                    } else {
                        echo "No rows were updated";
                    }
                } else {
                    echo "Error Login: " . mysqli_error($konek);
                }
            }
            else if($Mode == "Break"){
                $query = "UPDATE area4 SET Break='$Time' WHERE MachineID='$MachineID';";
                $query .= "UPDATE recaparea4 SET Break='$Time' WHERE MachineID='$MachineID';";
                if(mysqli_multi_query($konek, $query)){
                    echo "Jam berhasil diganti";
                } else {
                    echo "Error Break: " . mysqli_error($konek);
                }
            }
            else if($Mode == "Back-From-Break"){
                $query = "UPDATE area4 SET Back_From_Break='$Time' WHERE MachineID='$MachineID';";
                $query .= "UPDATE recaparea4 SET Back_From_Break='$Time' WHERE MachineID='$MachineID';";
                if(mysqli_multi_query($konek, $query)){
                    echo "Jam berhasil diganti";
                } else {
                    echo "Error Back From Break: " . mysqli_error($konek);
                }
            }
            
            else if($Mode == "Logout"){
                $query = "UPDATE area4 SET Logout='$Time' WHERE MachineID='$MachineID';";
                $query .= "UPDATE recaparea4 SET Logout='$Time' WHERE MachineID='$MachineID';";
                if(mysqli_multi_query($konek, $query)){
                    echo "Jam berhasil diganti";
                } else {
                    echo "Error Logout: " . mysqli_error($konek);
                }
            }
        }
        
    
        if ($Status == "Done") {
            $query = "DELETE FROM area4 WHERE `MachineID`='$MachineID';";
            if (mysqli_query($konek, $query)) {
                echo "Data berhasil dihapus";
            } else {
                echo "Error: " . mysqli_error($konek);
            }
        }
    }

    else if($Area === "5"){

        $sql = mysqli_query($konek, "SELECT MAX(ID) as max_id FROM area5");
        $data = mysqli_fetch_array($sql);
        $IDCount = $data["max_id"];

        echo "HI";
        echo "$Time";
        echo "$Mode";

        if($IDCount == 0) {
            $i = 0;
        } else {
            $i = $IDCount;
            $ID = $i;
        }
    
        if($Status == "Inactive"){
            $i++;
            $query = "INSERT INTO area5 (ID, Area, Name, UID, Status, Mode, `MachineID`, Timing) VALUES ('$i','$Area', '$Name', '$UID', '$Status', '$Mode', '$MachineID', '$Timing');";
            $query .= "INSERT INTO recaparea5 (Area, Name, UID, Status, Mode, `MachineID`, Timing) VALUES ('$Area', '$Name', '$UID', '$Status', '$Mode', '$MachineID', '$Timing');";
    
            if(mysqli_multi_query($konek, $query)){
                echo "Data berhasil ditambahkan ke kedua tabel";
                echo "$i";
            } else {
                echo "Error: " . mysqli_error($konek);
            }
    
        } else if($Status == "Active"){
            $query = "UPDATE area5 SET Name='$Name', UID='$UID', Status='$Status', Mode='$Mode', `MachineID`='$MachineID', Timing='$Timing' WHERE MachineID='$MachineID';";
            $query .= "UPDATE recaparea5 SET Name='$Name', UID='$UID', Status='$Status', Mode='$Mode', `MachineID`='$MachineID', Timing='$Timing' WHERE MachineID='$MachineID' AND ID=(SELECT MAX(ID) FROM recaparea5 WHERE `MachineID`='$MachineID')";
            
            if(mysqli_multi_query($konek, $query)){
                while(mysqli_more_results($konek)) {
                    mysqli_next_result($konek);
                    mysqli_store_result($konek);
                }
                echo "Data berhasil diupdate";
            } else {
                echo "Error: " . mysqli_error($konek);
            }
        
            if($Mode == "Login"){
                $query = "UPDATE area5 SET Login='$Time' WHERE MachineID='$MachineID';";
                $query .= "UPDATE recaparea5 SET Login='$Time' WHERE MachineID='$MachineID';";
                if(mysqli_multi_query($konek, $query)){
                    if(mysqli_affected_rows($konek) > 0){
                        echo "Jam berhasil diganti";
                    } else {
                        echo "No rows were updated";
                    }
                } else {
                    echo "Error Login: " . mysqli_error($konek);
                }
            }
            else if($Mode == "Break"){
                $query = "UPDATE area5 SET Break='$Time' WHERE MachineID='$MachineID';";
                $query .= "UPDATE recaparea5 SET Break='$Time' WHERE MachineID='$MachineID';";
                if(mysqli_multi_query($konek, $query)){
                    echo "Jam berhasil diganti";
                } else {
                    echo "Error Break: " . mysqli_error($konek);
                }
            }
            else if($Mode == "Back-From-Break"){
                $query = "UPDATE area5 SET Back_From_Break='$Time' WHERE MachineID='$MachineID';";
                $query .= "UPDATE recaparea5 SET Back_From_Break='$Time' WHERE MachineID='$MachineID';";
                if(mysqli_multi_query($konek, $query)){
                    echo "Jam berhasil diganti";
                } else {
                    echo "Error Back From Break: " . mysqli_error($konek);
                }
            }
            
            else if($Mode == "Logout"){
                $query = "UPDATE area5 SET Logout='$Time' WHERE MachineID='$MachineID';";
                $query .= "UPDATE recaparea5 SET Logout='$Time' WHERE MachineID='$MachineID';";
                if(mysqli_multi_query($konek, $query)){
                    echo "Jam berhasil diganti";
                } else {
                    echo "Error Logout: " . mysqli_error($konek);
                }
            }
        }
        
    
        if ($Status == "Done") {
            $query = "DELETE FROM area4 WHERE `MachineID`='$MachineID';";
            if (mysqli_query($konek, $query)) {
                echo "Data berhasil dihapus";
            } else {
                echo "Error: " . mysqli_error($konek);
            }
        }
    }
?>
