<?php 
	include 'koneksi.php';

	$update= mysqli_query($koneksi, "UPDATE bagian SET kd_bagian= '$_POST[kd_bagian]', nama_bagian= '$_POST[nama_bagian]' WHERE kd_bagian='$_POST[kd_bagian]'");
	if ($update) {
		header("location:bagian.php?Ubah=berhasil");
	}else{
		header("location:aksi_bagian_edit.php?ubah=gagal");
	}
 ?>

