<?php 
	include 'koneksi.php';
	$delete = mysqli_query($koneksi, "DELETE FROM karyawan WHERE nik='$_GET[hapus]'");
	if ($delete) {
		header("location:karyawan.php?hapus=berhasil");
	}

 ?>