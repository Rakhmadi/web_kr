<?php 
    include __DIR__."/../AuthCekLogin.php";
    include "adminRole.php";
	$id = @$_GET['id'];

	$mySql->query("DELETE FROM users WHERE id ='".$id."'");

	exit(header("Location:index.php?m=user&msg=delete"));
 ?>