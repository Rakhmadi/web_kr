<?php 
    include __DIR__."/../AuthCekLogin.php";
    include "adminRole.php";
	$nama = htmlspecialchars($_POST['nama']);
	$email = htmlspecialchars($_POST['email']);
	$password = htmlspecialchars(md5($_POST['password']));
	$tgl_lahir = htmlspecialchars($_POST['tgl_lahir']);
	$posisi = htmlspecialchars($_POST['posisi']);
	$pendidikan = htmlspecialchars($_POST['pendidikan']);
	$jurusan = htmlspecialchars($_POST['jurusan']);
	$role = htmlspecialchars("user");

	$mySql->query("INSERT INTO users VALUES
				('',
				'".$nama."',
				'".$email."',
				'".$password."',
				'".$tgl_lahir."',
				'".$posisi."',
				'".$pendidikan."',
				'".$jurusan."',
				'".$role."')
				");

	header("Location:index.php?m=user&msg=berhasil",true,301);


 ?>