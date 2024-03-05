<?php
session_start();
if(isset($_SESSION['username'])) {
	include "../koneksi.php";
	include "header.php";
?>

			<div class="col-md-6 col-md-offset-3">
				<form action="../ceklogin.php" method="POST">
					<div class="form-group">
						<label><font color="yellow">Nama</font></label>
						<input type="text" name="username" class="form-control">
					</div>
					<div class="form-group">
						<label><font color="yellow">Alamat</font></label>
						<input type="text" name="alamat" class="form-control">
					</div>
					<div class="form-group">
						<label><font color="yellow">Pekerjaan</font></label>
						<input type="text" name="pekerjaan" class="form-control">
					</div>
						<input type="submit" class="btn btn-danger" value="Input" name="input"/>
						<input type="reset" class="btn btn-danger" value="Reset" name="reset"/>
				</form>
			</div>

<?php
include "../template/footer.php";
} else {
echo "<script language=\"javascript\"> alert(\"Ciee Hackerr\");document.location.href='index.php';</script>";
}
?>