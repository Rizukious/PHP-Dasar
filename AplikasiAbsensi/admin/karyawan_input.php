<?php   
include "atas.php";
include "koneksi.php";
?>


<h2><center>Input Karyawan</center></h2>
<form method="POST" action="aksi_karyawan_input.php" enctype="multipart/form-data">
	<table border="0"  cellpacing="3" cellpadding="3" align="center">
		<tr>
			<?php 
				$norut=mysqli_query($koneksi, "SELECT nik FROM karyawan ORDER BY nik DESC LIMIT 1");
				$no=mysqli_fetch_array($norut);
				$nox = $no['nik'];
				$nox = $nox +1;			
			 ?>
			<td>NIK</td>
			<td><input type="text" name="nik" size="10" value="<?php echo $nox ?>"></td>
		</tr>

		<tr>
			<td>Nama Karyawan</td>
			<td><input type="text" name="nama_karyawan" size="60"></td>
		</tr>

		<tr>
			<td>Tanggal Lahir</td>
			<td><input type="date" name="tgl_lahir"
			 size="20"></td>
		</tr>

		<tr>
			<td>Jenis Kelamin</td>
			<td>Pria<input type="radio" name="jk" value="pria">Wanita<input type="radio" name="jk" value="wanita"></td>
		</tr>

		<tr>
			<td>Gaji</td>
			<td><input type="text" name="gaji" size="35"></td>
		</tr>

		<tr>
			<td>Bagian</td>
			<td>
				<select name="bagian">
					<option>Pilih bagian</option>
					<?php
					$query=mysqli_query($koneksi, "select * from bagian");
					while($data=mysqli_fetch_array($query))
					{
						?>
						<option value="<?php echo $data['kd_bagian']?>"><?php echo $data['nama_bagian']?></option>
					<?php } ?>
				</select>
			</td>
		</tr>

	<tr>
		<td>No. Telepon</td>
		<td><input type="text" name="telp" size="15"></td>
	</tr>

	<tr>
		<td>Foto</td>
		<td><input type="file" name="fupload" value="Upload"><br></td>
	</tr>

	<tr><td>No. Kartu</td>
		<td><input type="text" name="no_kartu" size="20"></td>
	</tr>


	<tr>
		<td colspan=2>
			<input type="submit" name="simpan" value="simpan">
			<input type="reset" value="reset">
		</td>	
	</tr>
</table>
<form>

<?php 
	include "bawah.php";
?>