<?php
session_start();
if(isset($_SESSION['username'])) {
	include "koneksi.php";
	include "template/header.php";
	
?>
<center><h1>Contact</h1></center>
<hr>
<ul>
<li>ID LINE : andi.yusran</li>
<li>FB : <a href="https://www.facebook.com/andiyusran.id">Andi Yusran</a></li>
</ul>
</font>
	<?php
	include "template/footer.php";
	} else {
	echo "<script language=\"javascript\"> alert(\"Ciee Hackerr\");document.location.href='index.php';</script>";
	}
	?>