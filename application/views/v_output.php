<html>
<head>
<title>Tampil Data Diri</title>
</head>
<body>
 <center>
 <table>
 <tr>
 <th colspan="3">
 Tampil Data Diri
 </th>
 </tr>
 <tr>
 <td colspan="3">
 <hr>
 </td>
 </tr>
 <tr>
 <th>Nama</th>
 <th>:</th>
 <td>
 <?= $nama_siswa; ?>
 </td>
 </tr>
 <tr>
 <td>NIS</td>
 <td>:</td>
 <td>
 <?= $nis; ?>
 </td>
 </tr>
 <tr>
 <td>Kelas</td>
 <td>:</td>
 <td>
 <?= $kelas; ?>
 </td>
 </tr>
 <tr>
 <th>Tanggal Lahir</th>
 <th>:</th>
 <td>
 <?= $tanggal_lahir; ?>
 </td>
 </tr>
 <tr>
 <th>Tempat Lahir</th>
 <th>:</th>
 <td>
 <?= $tempat_lahir; ?>
 </td>
 </tr>
 <tr>
 <th>Alamat</th>
 <th>:</th>
 <td>
 <?= $alamat; ?>
 </td>
 </tr>
 <tr>
 <th>Jenis Kelamin</th>
 <th>:</th>
 <td>
 <?= $jenis_kelamin; ?>
 </td>
 </tr>
 <tr>
 <th>Agama</th>
 <th>:</th>
 <td>
 <?= $agama; ?>
 </td>
 </tr>
 <tr>
 <td colspan="3" align="center">
 <a href="<?= base_url('matakuliah'); 
?>">Kembali</a>
 </td>
 </tr>
 </table>
 </center>
</body>
</html>