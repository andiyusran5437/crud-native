<?php
session_start();
if(isset($_SESSION['username'])) {
	include "koneksi.php";
	include "template/header.php";
	
?>
<center><h1>Welcome To My Profile</h1></center>
<hr>
<ul>
<li>Nama : Yusran</li>
<li>Kelas : XII RPL</li>
<li>No Telp : 082188618794</li>
</ul>
</font>
	<?php
	include "template/footer.php";
	} else {
	echo "<script language=\"javascript\"> alert(\"Ciee Hackerr\");document.location.href='index.php';</script>";
	}
	?>