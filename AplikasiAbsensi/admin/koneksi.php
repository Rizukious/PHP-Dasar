<?php 
//nama file : konekis.php
$server = "localhost";
$username = "root";
$password = "";
$database = "db_absensi";
$koneksi = mysqli_connect($server,$username,$password,$database)
or die ("database tidak bisa dibuka bro...");
 ?>