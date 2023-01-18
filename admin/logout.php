<?php 
session_start();
session_destroy();
header("Location:login.php?kontrol=cikis");
die();
?>