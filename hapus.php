<?php
    include "koneksi.php";

    $ID = $_GET['id'];

        $hapus    =   mysqli_query($konek, "delete from employee where ID='$ID'");

    if($hapus){
        echo "
            <script>
            alert('Terhapus');
            location.replace('employee_data.php');
            </script>
        ";
        }
        else{
            echo "
            <script>
            alert('Gagal Terhapud');
            location.replace('employee_data.php');
            </script>
        ";
        }
?>