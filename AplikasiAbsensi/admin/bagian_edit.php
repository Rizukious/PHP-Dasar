<?php 
	include 'atas.php';
	include 'koneksi.php';
	$tampil = mysqli_query($koneksi, "SELECT * FROM bagian WHERE kd_bagian = '$_GET[edit]'");
	$data = mysqli_fetch_array($tampil);
 ?>

<!-- penampilan Data -->

		<html>
			<body>
				<h2>Edit Data Karyawan</h2>
				<hr>
				<form action="aksi_bagian_edit.php" method="POST">
					<table border="0" width="100%" cellpadding="3" cellspacing="3">
						<tr>
							<td>Kode Bagian</td>
							<td><input type="text" name="kd_bagian" size="10" value="<?php echo $data['kd_bagian']?>"></td>
						</tr>

						<tr>
							<td>Nama Bagian</td>
							<td><input type="text" name="nama_bagian" size="60" value="<?php echo $data['nama_bagian']?>"></td>
						</tr>


						<td colspan="2">
							<input type="submit" value="Update">
							<input type="reset" value="Reset">
						</td>
					</table>
				</form>
			</body>
		</html>

<?php 
 	include 'bawah.php';
?>