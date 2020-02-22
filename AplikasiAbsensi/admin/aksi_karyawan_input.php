<?php 
include"koneksi.php";
if (isset($_POST['simpan'])) {
$dir_upload = "../foto/";
$nama_file = $_FILES['fupload']['name'];
if(is_uploaded_file($_FILES['fupload']['tmp_name'])){
$cek = move_uploaded_file($_FILES['fupload']['tmp_name'],$dir_upload.$nama_file);

$nik = $_POST['nik'];
$nk = $_POST['nama_karyawan'];
$tgl = $_POST['tgl_lahir'];
$jk = $_POST['jk'];
$gj = $_POST['gaji'];
$t = $_POST['telp'];
$nok = $_POST['no_kartu'];
$kb = $_POST['bagian'];
$query=mysqli_query($koneksi,"INSERT INTO karyawan(nik,nama_karyawan,tgl_lahir,jk,gaji,telp,foto,no_kartu,Kodebagian) VALUES('$nik', '$nk', '$tgl', '$jk', '$gj', '$t','$nama_file', '$nok', '$kb')");
}
}
if($query){
	header("location:karyawan.php");
}else{	
	header("location:aksi_karyawan_input.php");
 }
 
 ?>
