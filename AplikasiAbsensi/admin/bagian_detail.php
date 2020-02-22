<?php 
	include 'atas.php';
	include 'koneksi.php';
?>

<?php
	$tampil = mysqli_query($koneksi, "SELECT * FROM bagian WHERE kd_bagian='$_GET[detail]'");
	$data=mysqli_fetch_array($tampil);
	echo "
		<h2>Detail Bagian</h2>
		<a href='bagian.php'>Kembali</a>
		<table border='0' width='100%' cellpadding='3' cellspacing='3'>

				<tr>
					<td>Kode Bagian</td>
					<td>$data[kd_bagian]</td>
				</tr>

				<tr>
					<td>Nama Bagian</td>
					<td>$data[nama_bagian]</td>
				</tr>


			</table>";
 ?>
	

<?php 
	include 'bawah.php';
 ?>