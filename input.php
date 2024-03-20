<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
</head>
<body>
    <h1>Tambah pasien</h1>
    <form action="proses-input.php" method="post">
        <label for="">id pasien</label>
        <input type="number" name="id_pasien" id="id_pasien">
        <br>

        <label for="">Nama Pasien</label>
        <input type="text" name="nama_pasien" id="nama_pasien">
        <br>

        <label for="">Alamat</label>
        <input type="text" name="alamat_pasien" id="alamat_pasien">
        <br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>