<?php 
	include 'koneksi.php';

	$update= mysqli_query($koneksi, "UPDATE karyawan SET nama_karyawan= '$_POST[nama_karyawan]', tgl_lahir = '$_POST[tgl_lahir]', jk = '$_POST[jk]', gaji ='$_POST[gaji]', telp='$_POST[telp]', foto='$_POST[foto]', no_kartu='$_POST[no_kartu]' WHERE nik='$_POST[nik]'");
	if ($update) {
		header("location:karyawan.php?Ubah=berhasil");
	}else{
		header("location:aksi_karyawan_edit.php?ubah=gagal");
	}
 ?>

