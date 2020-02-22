<?php 
	include 'koneksi.php';
	$hapus = mysqli_query($koneksi, "DELETE FROM bagian WHERE kd_bagian = '$_GET[hapus]'");
	if ($hapus) {
		header("location:bagian.php?delete=berhasil");
	}else{
		header("location:aksi_bagian_delete.php?delete=gagal");
	}

 ?>