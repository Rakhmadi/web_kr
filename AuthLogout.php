<?php
include "AuthCekLogin.php";

$x = $mySql->query("DELETE FROM sessions Where session_token='{$_SESSION['token']}'");

session_regenerate_id();
session_destroy();

header("Location:./LoginPage.php?msg=UserLogout",true,301);

?>