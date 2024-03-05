<?php
session_start();
if(isset($_SESSION['username'])) {
	include "koneksi.php";
	include "template/header.php";
	
?>

	<h1 align="center">YusranPedia</h1>
	<hr>
	<h4 align="center"><marquee direction="right">Selamat Datang</marquee></h4>
	
	<?php
	include "template/footer.php";
	} else {
	echo "<script language=\"javascript\"> alert(\"Ciee Hackerr\");document.location.href='index.php';</script>";
	}
	?>