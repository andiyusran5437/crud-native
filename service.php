<?php
session_start();
if(isset($_SESSION['username'])) {
	include "koneksi.php";
	include "template/header.php";
	
?>
<center><h1>Layanan Service</h1></center>
<hr>
<p> Kami Menyediakan layanan seperti membeli peralatan camping dan berbagai alat service</p>
<p>Harga Murah dan terjangkau, aman tentram dan nyaman pastinya</p>
</font>
	<?php
	include "template/footer.php";
	} else {
	echo "<script language=\"javascript\"> alert(\"Ciee Hackerr\");document.location.href='index.php';</script>";
	}
	?>