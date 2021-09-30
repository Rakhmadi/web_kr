<?php
include __DIR__."/../AuthCekLogin.php";

header('Content-Type: application/json');
$inputJSON = file_get_contents('php://input');
$input = json_decode($inputJSON, TRUE); //convert JSON into array

foreach ($input as $key => $val ) {
   $id_soal = $val['id_soal'];
   $id_user = $val['id_user'];
   $jawaban = $val['jawaban'];
   $g = $mySql->query("SELECT * FROM jawaban_user_test WHERE user_id='{$id_user}' AND soal_id='{$id_soal}'")->fetch_all(MYSQLI_ASSOC);
   if ($g == NULL) {
        $mySql->query("INSERT INTO jawaban_user_test VALUES('','{$id_user}','{$id_soal}','{$jawaban}')");
   }
}

?>