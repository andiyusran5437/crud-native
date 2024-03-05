<?php
session_start();
if(isset($_SESSION['username'])) {
	include "../koneksi.php";
	include "header.php";
	
?>


	
	<center>
		<h1> Membuat CRUD</h1>
		<h2> Menampilkan data dari database</h2>
	</center>
	<hr>
	
<?php
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di perbaharui";
		}else if($pesan == "hapus"){
			echo "Data Telah terhapus";
		}
	}
	?>

	<br/>
	<a class="tombol" href="input.php">+ Tambah data baru</a>
	<h3> Data user</h3>
	<table border="1" class="table">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Pekerjaan</th>
			<th>Opsi</th>
		</tr>
<?php
	include "../koneksi.php";
	$query_mysql = mysql_query("SELECT * from crud") or die (mysql_error());
	$nomor = 1;
	while($data = mysql_fetch_array($query_mysql)){
?>
<tr>
	<td><?php echo $nomor++; ?> </td>
	<td><?php echo $data['nama']; ?></td>
	<td><?php echo $data['alamat']; ?></td>
	<td><?php echo $data['pekerjaan']; ?></td>
	<td>
		<a class="edit" href="edit.php?id=<?php echo $data['id']; ?>">Edit </a> |
		<a class="hapus" href="hapus.php?id=<?php echo $data['id']; ?>">Hapus </a>
	</td>
<tr>
	<?php } ?>
	</table>

	<?php
	include "../template/footer.php";
	} else {
	echo "<script language=\"javascript\"> alert(\"Ciee Hackerr\");document.location.href='index.php';</script>";
	}
	?>