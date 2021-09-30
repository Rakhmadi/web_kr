<?php
$mySql =  new mysqli("localhost","root","","db-karyawan");
if($mySql->connect_errno){
    echo "Koneksi Gagal: " . $mysqli -> connect_error;
    exit();
}


?>