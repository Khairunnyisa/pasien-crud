<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>List pasien</h1>
    <a href="input.php">Tambah pasien</a>
    <br><br>

    <table border="1">
        <tr>
            <th>ID Pasien</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>

        <?php
        $data = mysqli_query($koneksi, "SELECT * FROM pasien");
        while($pasien = mysqli_fetch_array($data)){
            ?>
            <tr>
            <td><?php print $pasien['id_pasien']; ?></td>
            <td><?php print $pasien['nama']; ?></td>
            <td><?php print $pasien['alamat']; ?></td>

            <td>
                <a href="edit.php?id_pasien=<?php print $pasien['id_pasien']?>">Edit</a>
                <a href="delete.php?id_pasien=<?php print $pasien['id_pasien']?>"
                onclick="return confirm('Yakin mau hapus data <?php print $pasien['nama'] ;?> ?')">Delete</a>
            
            </td>
        </tr>
        
        <?php
        };
        ?>
        

    </table>
</body>
</html>

