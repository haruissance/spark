<?php
    //koneksi ke database
    $konek = mysqli_connect("localhost", "root", "", "websensor");

    //baca data yang dikirim oleh NodeMCU, UID = Link = "http://(IPAddress)/websensor/kirimdata.php?UID=" + String(UID);"
    $nilai = $_GET["sensor"];

    //update data di database
    mysqli_query($konek, "update sensor set nilai_sensor='$nilai'");
    
?>