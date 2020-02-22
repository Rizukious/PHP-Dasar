<?php 
	include 'atas.php';
	include 'koneksi.php';
?>

<?php
	$tampil = mysqli_query($koneksi, "SELECT * FROM karyawan WHERE nik='$_GET[detail]'");
	$data=mysqli_fetch_array($tampil);
	echo "
		<h2>Detail Karyawan</h2>
		<a href='karyawan.php'>Kembali</a>
		<table border='0' width='100%' cellpadding='3' cellspacing='3'>
				<tr>
					<td>Foto</td>
					
					<td><img src='../foto/$data[foto]?>' alt='' width='200'></td>
				</tr>

				<tr>
					<td>Nomor Induk Karyawan</td>
					<td>$data[nik]</td>
				</tr>

				<tr>
					<td>Nama Karyawan</td>
					<td>$data[nama_karyawan]</td>
				</tr>

				<tr>
					<td>Tanggal Lahir</td>
					<td>$data[tgl_lahir]</td>
				</tr>

				<tr>
					<td>Jenis Kelamin</td>
					<td>$data[jk]</td>
				</tr>

				<tr>
					<td>Gaji</td>
					<td>$data[gaji]</td>
				</tr>

				<tr>
					<td>Telepon</td>
					<td>$data[telp]</td>
				</tr>

				<tr>
					<td>No. Kartu</td>
					<td>$data[no_kartu]</td>
				</tr>

			</table>";
 ?>
	

<?php 
	include 'bawah.php';
 ?>