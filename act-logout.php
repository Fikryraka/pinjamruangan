<?php
session_start();
unset($_SESSION['idUser']);
unset($_SESSION['jabatan']);
session_destroy();
	header("Location:login-multiuser-php-mysql.php");
?>