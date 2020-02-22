<?php 
	include 'atas.php';
	include 'koneksi.php';
 ?>

	<html>
		<body>
			<h2>Absensi Karyawan</h2>
			<form action="aksi_absensi_input.php" method="POST" enctype="multipart/form-data">
				Tempelkan Kartu <input type="text" name="no_kartu" size="15" autofocus="">
				<input type="submit" value="Simpan">
			</form>

			<table border="1" width="100%">
				<tr bgcolor="green">
					<th>No</th>
					<th>ID Absensi</th>
					<th>Nomor Kartu</th>
					<th>Nama Karyawan</th>
					<th>Kehadiran</th>
					<th>Aksi</th>
				</tr>
				<?php 
					$tampil=mysqli_query($koneksi, "SELECT * FROM absensi ORDER BY id_absensi DESC");
					$no=1;
					while ($r=mysqli_fetch_array($tampil)) {
						$tampil2=mysqli_query($koneksi, "SELECT * FROM karyawan WHERE no_kartu='$r[no_kartu]'");
						$r2=mysqli_fetch_array($tampil2);
					
				 ?>
				 <tr>
				 	<td><?php echo $no ?></td>
				 	<td><?php echo $r['id_absensi'] ?></td>
				 	<td><?php echo $r['no_kartu'] ?></td>
				 	<td><?php echo $r2['nama_karyawan'] ?></td>
				 	<td><?php echo $r['jammasuk'] ?></td>
				 	<td align="center">
				 		<a href="aksi_absensi_delete.php?id<?=$r['id_absen']?>">Delete</a>
				 	</td>
				 </tr>
				 <?php  
				 	$no=$no+1; 
					}
				?>
			</table>
		</body>
	</html>

 <?php 
 	include 'bawah.php';
  ?>