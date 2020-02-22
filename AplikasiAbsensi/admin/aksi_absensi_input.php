<?php 
	include 'koneksi.php';
	$kartu = $_POST['no_kartu'];
	$tes= mysqli_query($koneksi, "INSERT INTO absensi VALUES('','$kartu',now())");
	if ($tes) {
		header("location:absensi.php?absensi=sukses");
	}else{
		header("location:absensi.php?absensi=gagal");
	}
 ?>