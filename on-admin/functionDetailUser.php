<?php 
    include __DIR__."/../AuthCekLogin.php";
    include "adminRole.php";
	include  __DIR__."/../explodeTgl.php";

	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$query = "SELECT * FROM users WHERE id=?";
		$stmt = $mySql->prepare($query);
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$result = $stmt->get_result();
		$row = $result->fetch_assoc();

		//tanggal lahir
        $tanggal = new DateTime($row['tanggal_lahir']);

        // tanggal hari ini
        $today = new DateTime('today');

        // tahun
        $y = $today->diff($tanggal)->y;

		$nama = $row['nama'];
		$email = $row['email'];
		$umur = $y." Tahun";
		$tgl_lahir = tgl($row['tanggal_lahir']);
		$posisi = $row['posisi_yang_dilamar'];
		$pendidikan = $row['pendidikan_terakhir'];
		$jurusan = $row['jurusan'];
	}
 ?>