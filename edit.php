<?php
include 'koneksi.php';
$id_pasien = $_GET['id_pasien'];
$data = mysqli_query($koneksi, "SELECT * FROM pasien WHERE id_pasien='$id_pasien'");
while($pasien = mysqli_fetch_array($data)){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit data pasien</title>
</head>
<body>
<h1>Tambah pasien</h1>
    <form action="proses-edit.php" method="post">
        <label for="">id pasien</label><br>
        <input type="hidden" name="id_pasien" id="id_pasien" value="<?php print $pasien['id_pasien'];?>">
        <br>

        <label for="">Nama Pasien</label><br>
        <input type="text" name="nama" id="nama_pasien" value="<?php print $pasien['nama'];?>">
        <br>

        <label for="">Alamat</label><br>
        <input type="text" name="alamat" id="alamat_pasien" value="<?php print $pasien['alamat'];?>">
        <br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
<?php
}
?>

