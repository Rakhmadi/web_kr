<?php
include "MySqliConnection.php";


$soal = $mySql->query('SELECT * FROM soal_test')->fetch_all(MYSQLI_ASSOC);
echo json_encode(array_chunk($soal,2));


?>
