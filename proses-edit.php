<?php
include 'koneksi.php';

$id_pasien = $_POST['id_pasien'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

$data = mysqli_query($koneksi, "UPDATE pasien SET nama='$nama', alamat='$alamat' WHERE id_pasien='$id_pasien'");

header("location:index.php");
?>