<?php 
	include 'atas.php';
?>

<html>
	<body>
		<h2>data karyawan</h2>
		<a href="karyawan_input.php">Tambah Karyawan</a>
			<br><br>
			<table border="1" width="100%" align="center">
				<tr bgcolor=green>
					<th>No</th>
					<th>NIK</th>
					<th>Nama Karyawan</th>
					<th>Tanggal Lahir</th>
					<th>Jenis Kelamin</th>
					<th>Gaji</th>
					<th>Telp</th>
					<th>Foto</th>
					<th>No. Kartu</th>
					<th>Kode Bagian</th>
					<th>Aksi</th>
				</tr>
				<?php 
					$tampil = mysqli_query($koneksi, "SELECT * FROM karyawan ORDER BY nik DESC LIMIT 10");
					$no=1; while($data=mysqli_fetch_array($tampil)){
				 ?>
				 <tr>
				 	<td><?php echo $no++ ?></td>
				 	<td><?php echo $data['nik'] ?></td>
				 	<td><?php echo $data['nama_karyawan'] ?></td>
				 	<td><?php echo $data['tgl_lahir'] ?></td>
				 	<td><?php echo $data['jk'] ?></td>
				 	<td><?php echo $data['gaji'] ?></td>
				 	<td><?php echo $data['telp'] ?></td>
				 	<td><?php echo $data['foto'] ?></td>
				 	<td><?php echo $data['no_kartu'] ?></td>
				 	<td><?php echo $data['Kodebagian'] ?></td>
				 	<td align="center">
				 		<a href="karyawan_detail.php?detail=<?php echo $data['nik']?>"><img src="../drawable/b_browse.png" alt="Detail"></a> &nbsp;
				 		<a href="karyawan_edit.php?edit=<?php echo $data['nik']?>"><img src="../drawable/b_edit.png" alt="Edit"></a> &nbsp;
				 		<a href="aksi_karyawan_delete.php?hapus=<?php echo $data['nik']?>"><img src="../drawable/b_drop.png" alt="Hapus"></a> &nbsp;
				 	</td>
				 </tr>
				<?php } ?>
			</table>	
	</body>
</html>

<?php 
 	include 'bawah.php';
?>