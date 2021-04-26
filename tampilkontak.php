<h2>DATA</h2>
<table border="1">
	<tr>
		<th>NO</th>
		<th>NAMA</th>
		<th>JENIS KELAMIN</th>
		<th>EMAIL</th>
		<th>ALAMAT</th>
		<th>KOTA</th>
		<th>PESAN</th>
	</tr>
<?php
include 'koneksi.php';
$sql = mysqli_query($koneksi, "SELECT * FROM kontak");
$no=1;
foreach ($sql as $row){
$jkel = $row ['jkel']=='P'?'Perempuan':'Laki - Laki';
	echo "<tr>
	<td>$no</td>
	<td>".$row['nama']."</td>
	<td>".$jkel."</td>
	<td>".$row['email']."</td>
	<td>".$row['alamat']."</td>
	<td>".$row['kota']."</td>
	<td>".$row['pesan']."</td>
	</tr>";
	$no++;
}
?>
</table>