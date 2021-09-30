<?php
if($_SESSION["role"] == "user"){
    header('Location: ../on-user/index.php');
}
?>