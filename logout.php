<?php
session_start();
	if (isset($_SESSION['username'])) {
	session_destroy();
	header('Location:index.php?status=Logout berhasil');
	} else {
	header('Location:index.php?status=Silahkan Login Terlebih Dahulu');
	}
?>