<?php
include "../../../koneksi.php";

error_reporting(0);

$sql = mysqli_query($konek, "SELECT MIN(ID) as max_id FROM area1 WHERE Status='Active'");
$data = mysqli_fetch_array($sql);
$IDCount = $data["max_id"];

if($IDCount == 0) {
    $i = 0;
    $show = $i;
} else {
    $show = $IDCount;
}

//baca isi tabel sensor 
$sql = mysqli_query($konek, "SELECT * FROM area1 WHERE ID = '$show'");
$data = mysqli_fetch_array($sql);
$Info = $data["Mode"];

echo $Info;

?>