<?php
require 'config.php';

$mahasiswa = query (" SELECT * FROM mahasiswa");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar CRUD</title>
</head>
<body>
    <h1>daftar mahasiswa</h1>
    <a href="tambah.php">Tambah Data</a>
    <br> <br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Email</th>
            <th>Jurusan</th>
            <th>Gambar</th>
        </tr>

        <?php $i = 1 ; ?>
        <?php foreach( $mahasiswa as $row) : ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><a href="#"> Edit </a> | <a href="hapus.php?id=<?php echo $row["id"]; ?>" >Delete</a></td>
            <td><?php echo $row["nama"]; ?></td>
            <td><?php echo $row["nim"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["jurusan"]; ?></td>
            <td><?php echo $row["gambar"]; ?></td>
        </tr>
        <?php $i++ ?>
        <?php endforeach ?>

    </table>
</body>
</html>