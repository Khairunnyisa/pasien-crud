<?php
include 'koneksi.php';

$id_pasien =$_POST['id_pasien'];
$nama =$_POST['nama_pasien'];
$alamat= $_POST['alamat_pasien'];

//proses simpan data
mysqli_query($koneksi, "INSERT INTO pasien VALUES('$id_pasien', '$nama', '$alamat')");

header("location:index.php");

?>