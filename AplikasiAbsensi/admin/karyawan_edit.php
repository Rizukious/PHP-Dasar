<?php 
	include 'atas.php';
	include 'koneksi.php';
	$tampil = mysqli_query($koneksi, "SELECT * FROM karyawan WHERE nik = '$_GET[edit]'");
	$data = mysqli_fetch_array($tampil);
 ?>

<!-- penampilan Data -->

		<html>
			<body>
				<h2>Edit Data Karyawan</h2>
				<hr>
				<form action="aksi_karyawan_edit.php" method="POST">
					<table border="0" width="100%" cellpadding="3" cellspacing="3">
						<tr>
							<td>Nomor Induk Karyawan</td>
							<td><input type="text" name="nik" size="10" value="<?php echo $data['nik']?>"></td>
						</tr>

						<tr>
							<td>Nama Karyawan</td>
							<td><input type="text" name="nama_karyawan" size="60" value="<?php echo $data['nama_karyawan']?>"></td>
						</tr>

						<tr>
							<td>Tanggal Lahir</td>
							<td><input type="date" name="tgl_lahir" size="20" value="<?php echo $data['tgl_lahir']?>"></td>
						</tr>

						<tr>
							<td>Jenis Kelamin</td>
							<td><input type="text" name="jk" value="<?php echo $data['jk']?>"></td>
						</tr>

						<tr>
							<td>Gaji</td>
							<td><input type="text" name="gaji" value="<?php echo $data['gaji']?>"></td>
						</tr>

						<tr>
							<td>Telepon</td>
							<td><input type="text" name="telp" value="<?php echo $data['telp']?>"></td>
						</tr>

						<tr>
							<td>Foto</td>
							<td><input type="text" name="foto" value="<?php echo $data['foto']?>"></td>
						</tr>

						<tr>
							<td>No. Kartu</td>
							<td><input type="text" name="no_kartu" value="<?php echo $data['no_kartu']?>"></td>
						</tr>

						<tr>
							<td>Kode Bagian</td>
							<td><input type="text" name="Kodebagian" value="<?php 
							echo $data['Kodebagian']?>"></td>
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