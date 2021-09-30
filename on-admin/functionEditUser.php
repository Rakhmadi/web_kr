<?php 
    include __DIR__."/../AuthCekLogin.php";
    include "adminRole.php";
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$posisi = $_POST['posisi'];
	$pendidikan = $_POST['pendidikan'];
	$jurusan = $_POST['jurusan'];

	$mySql->query("UPDATE users SET
				   nama = '".$nama."',
				   email = '".$email."',
				   tanggal_lahir = '".$tgl_lahir."',
				   posisi_yang_dilamar = '".$posisi."',
				   pendidikan_terakhir = '".$pendidikan."',
				   jurusan = '".$jurusan."'
				   WHERE id = ".$id."
				");

	header("Location:index.php?m=user&msg=update",true,301);


 ?>