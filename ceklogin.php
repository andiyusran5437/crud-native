<?php
	include"koneksi.php";
	if (isset ($_POST['input'])) {
		$user=$_POST['username'];
		$pass=$_POST['password'];

		$login=mysql_query("select * from login where username='$user' and password='$pass'");
		$cek=mysql_num_rows($login);
		$data=mysql_fetch_array($login);
	if ($cek>0) {
	session_start();
		$_SESSION['username']=$data['username'];
		$_SESSION['password']=$data['password'];
			echo "<script language=\"javascript\">alert(\"Berhasil Login'\");document.location.href='beranda.php';</script>";
			} else {
			echo "<script language=\"javascript\">alert(\"username dan password salah\");document.location.href='index.php';</script>";
			}
	}
?>