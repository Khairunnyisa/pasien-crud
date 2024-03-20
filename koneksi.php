<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "pasien-db";

$koneksi = mysqli_connect($host, $user, $pass, $db);
if(mysqli_connect_errno()){
    echo "gagal terhubung ke server : " .mysqli_connect_error();
}
// echo "Berhasil terhubung";
?>