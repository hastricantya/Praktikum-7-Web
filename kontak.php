<html>
<head>
	<title> Form Data Kontak </title>
</head>
<body>
<form method="POST" action="tambahkontak.php"> 
	<table width="400" align="center" cellpadding="2" cellspacing="2">
	<center> <h1> Form Data Kontak </h1> </center>
	<tr>
		<td width="150"> Nama: </td>
		<td> <input type="text" name="nama"> </td>
	</tr>
	<tr>
		<td width="150">Jenis Kelamin: </td>
		<td>
			<input type="radio" name="jkel" value="L">Laki-Laki
			<input type="radio" name="jkel" value="P">Perempuan
			</td>
	<tr>
		<td width="150"> Email: </td>
		<td> <input type="text" name="email"> </td>
	</tr>
	<tr>
		<td width="150"> Alamat: </td>
		<td> <input type="text" name="alamat"> </td>
	</tr>
	<tr>
		<td width="150"> Kota: </td>
		<td> <select name="kota">
		<option value="Bandung"> Bandung </option> 
		<option value="Surabaya"> Surabaya </option>
		<option value="Jakarta"> Jakarta </option> 
		</td>
	</tr>
	<tr>
		<td width="150"> Pesan: </td>
		<td> <textarea name="pesan" cols="45" rows="5"> </textarea> </td>
	</tr>
	<tr>
		<td> <input type="submit" name="submit" value="submit">
		<input type="reset" name="reset" value="reset"></td>
	</tr>
	</table>
	<center><a href="cetak.php">Lihat Data</a></center>
	<center><a href="index.php">Keluar</a></center>
</form>
</body>
</html>