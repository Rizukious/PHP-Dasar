<?php 
include"koneksi.php";
if (isset($_POST['simpan'])) {

$kb = $_POST['kd_bagian'];
$nb = $_POST['nama_bagian'];
$query=mysqli_query($koneksi,"INSERT INTO bagian VALUES('$kb', '$nb')");
}

if($query){
	header("location:bagian.php");
}else{	
	header("location:aksi_bagian_input.php");
 }
 
 ?>
