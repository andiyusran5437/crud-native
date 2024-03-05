<?php
$host="localhost";
$user="root";
$pass="";
$db="belajar";
mysql_connect($host,$user,$pass) or die ("gagal koneksi ke server");
mysql_select_db($db) or die ("gagal koneksi ke database");
?>