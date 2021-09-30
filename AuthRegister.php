<?php
include "MySqliConnection.php";

$nama = htmlspecialchars(@$_POST['nama']);
$email =  htmlspecialchars(@$_POST['email']);
$password = htmlspecialchars(md5(@$_POST['password']));
$tanggal_lahir = date('Y-m-d', strtotime(@$_POST["tanggal_lahir"]));
$posisi = htmlspecialchars(@$_POST['posisi']);
$pendidikan = htmlspecialchars(@$_POST['pendidikan']);
$jurusan = htmlspecialchars(@$_POST['jurusan']);

$x = $mySql->query("INSERT INTO users  VALUES(null,'{$nama}','{$email}','{$password}',{$tanggal_lahir},'{$posisi}','{$pendidikan}','{$jurusan}','user') ");
if ($x) {
    header("Location: LoginPage.php?msg=daftarsuccess",true,301);
}

?>