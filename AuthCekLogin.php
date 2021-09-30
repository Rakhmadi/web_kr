<?php
include "MySqliConnection.php";
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$TokenNow = $_SESSION['token'] ;
$ext = $mySql->query("SELECT * FROM sessions Where session_token='{$TokenNow}'")->fetch_all(MYSQLI_ASSOC);

if ($ext == NULL) {
    header("Location:../LoginPage.php?msg=userTidakLogin",true,301);
}