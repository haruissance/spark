<?php
// Turn off all error reporting
error_reporting(0);

include "../../../koneksi.php";

$sql = mysqli_query($konek, "SELECT MIN(ID) as min_id FROM area3 WHERE Status='Active'");
$data = mysqli_fetch_array($sql);
$IDCount = $data["min_id"];

if($IDCount == 0) {
    $i = 0;
    $show = $i;
} else {
    $show = $IDCount;
}

//baca isi tabel sensor 
$sql = mysqli_query($konek, "SELECT * FROM area3 WHERE ID = $show");
$data = mysqli_fetch_array($sql);
$Info = $data["MachineID"];

echo $Info;
?>
