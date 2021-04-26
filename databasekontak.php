<?php
include 'koneksi.php';
if (!$koneksi) {
	die("connection failed:".mysqli_connect_error());
}
$sql = "CREATE TABLE kontak (
id int(4) AUTO_INCREMENT NOT NULL PRIMARY KEY,
nama varchar(30) NOT NULL,
jkel varchar(10),
email varchar(40),
alamat varchar(50),
kota varchar(20),
pesan text)";
if (mysqli_query($koneksi, $sql)) {
	echo "berhasil dibuat";
}
else{
	echo "Error:".$sql."<br>".mysqli_error($koneksi);
}
mysqli_close($koneksi);
?>