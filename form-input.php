<!DOCTYPE html>
<html>
<head>
	<!-- Title untuk memberi judul pada jendela browser -->
	<title>Form Input</title>
</head>
<body>
	<form method="POST" action="simpan.php">
		<table>
			<tr><td>NIM</td>
				<td><input type="text" onkeyup="isi_otomatis()" name="nim"></td>
			</tr>
			<tr><td>NAMA</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>JENIS KELAMIN</td>
				<td>
					<input type="radio" name="jenis_kelamin" value="L">Laki-Laki
					<input type="radio" name="jenis_kelamin" value="P">Perempuan
				</td>
			</tr>	
			<tr><td>JURUSAN</td>
				<td><select name="jurusan">
					<option value="Teknik Informatika">Teknik Informatika</option>
					<option value="Sistem Informasi">Sistem Informasi</option>
					<option value="Data Sains">Data Sains</option>
				</select>
				</td></tr>
			<tr><td>ALAMAT</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr><td colspan="2"><button type="submit" value="simpan">SIMPAN</button>
			</td></tr>	
		</table>	
	</form>
</body>
</html>