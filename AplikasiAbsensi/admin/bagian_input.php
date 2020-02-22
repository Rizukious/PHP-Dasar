<?php   
include "atas.php";
include "koneksi.php";
?>


<h2><center>Input Bagian</center></h2>
<form method="POST" action="aksi_bagian_input.php" enctype="multipart/form-data">
	<table border="0"  cellpacing="3" cellpadding="3" align="center">

		<tr>
			<td>Kode Bagian</td>
			<td><input type="text" name="kd_bagian" size="60"></td>
		</tr>

		<tr>
			<td>Nama Bagian</td>
			<td><input type="text" name="nama_bagian"
			 size="20"></td>
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