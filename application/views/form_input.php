<html>
<head>
<title>Input Data Siswa</title>
</head>
<body>
<form action="<?= base_url('form/cetak'); ?>"
method="post">
<table>
			<tr>
		<td><label for="nama_siswa">Nama Siswa		:</label></td>
		<td><input type="text" name="nama_siswa" id="nama_siswa" required><br></td>
			</tr>
			<tr>
		<td><label for="nis">NIS		:</label></td>
		<td><input type="text" name="nis" id="nis" required><br></td>
			</tr>
			<tr>
		<td><label for="kelas">Kelas		:</label></td>
		<td><input type="text" name="kelas" id="kelas" required><br></td>
			</tr>
			<tr>
		<td><label for="tanggal_lahir">Tanggal Lahir		:</label></td>
		<td><input type="date" name="tanggal_lahir" id="ta
		nggal_lahir" required><br></td>
			</tr>
			<tr>
		<td><label for="tempat_lahir">Tempat Lahir		:</label></td>
		<td><input type="text" name="tempat_lahir" id="tempat_lahir" required><br></td>
			</tr>
			<tr>
		<td><label for="alamat">Alamat		:</label></td>
		<td><textarea name="alamat" id="alamat" required></textarea><br></td>
			</tr>
			<tr>
		<td><label for="jenis_kelamin">Jenis Kelamin		:</label><br></td>
			</tr>
			<tr>
		<td><input type="radio" name="jenis_kelamin" id="laki_laki" value="Laki-laki" required></td>
		<td><label for="laki_laki">Laki-laki</label><br></td>
			</tr>
			<tr>
		<td><input type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan" required></td>
		<td><label for="perempuan">Perempuan</label><br></td>
			</tr>
			<tr>
		<td><label for="agama">Agama		:</label></td>
		<td><select name="agama" id="agama" required>
			<option value="">-- Pilih Agama --</option>
			<option value="Islam">Islam</option>
			<option value="Kristen">Kristen</option>
			<option value="Katolik">Katolik</option>
			<option value="Budha">Budha</option>
			<option value="Hindu">Hindu</option>
			<option value="Protestan">Protestan</option>
			<option value="Khonghucu">Khonghucu</option>
		</select><br></td>
		</tr>
		<tr>
		<td><input type="submit" value="Simpan"></td>
</tr>
</table>
</form>
</body>
</html>