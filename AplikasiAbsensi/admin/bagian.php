<?php 
	include 'atas.php';
?>

<html>
	<body>
		<h2>Data Bagian</h2>
		<a href="bagian_input.php">Tambah Bagian</a>
			<br><br>
			<table border="1" width="100%" align="center">
				<tr bgcolor=green>
					<th>No</th>
					<th>Kode Bagian</th>
					<th>Nama Bagian</th>
					<th>Aksi</th>
				</tr>
				<?php 
					$tampil = mysqli_query($koneksi, "SELECT * FROM bagian ORDER BY kd_bagian DESC");
					$no=1; while($data=mysqli_fetch_array($tampil)){
				 ?>
				 <tr>
				 	<td><?php echo $no++ ?></td>
				 	<td><?php echo $data['kd_bagian'] ?></td>
				 	<td><?php echo $data['nama_bagian'] ?></td>
				 	<td align="center">
				 		<a href="bagian_detail.php?detail=<?php echo $data['kd_bagian']?>"><img src="../drawable/b_browse.png" alt="Detail"></a> &nbsp;
				 		<a href="bagian_edit.php?edit=<?php echo $data['kd_bagian']?>"><img src="../drawable/b_edit.png" alt="Edit"></a> &nbsp;
				 		<a href="aksi_bagian_delete.php?hapus=<?php echo $data['kd_bagian']?>"><img src="../drawable/b_drop.png" alt="Hapus"></a> &nbsp;
				 	</td>
				 </tr>
				<?php } ?>
			</table>	
	</body>
</html>

<?php 
 	include 'bawah.php';
?>