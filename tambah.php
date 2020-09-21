<?php

require 'config.php';

if ( isset($_POST["submit"]) ) {
 
//     $nama = $_POST["nama"];
//     $nim = $_POST["nim"];
//     $email = $_POST["email"];
//     $jurusan = $_POST["jurusan"];
        var_dump($_POST); die;

//     $query = "INSERT INTO mahasiswa VALUES ('', '$nama', '$nim', '$email', '$jurusan')";
//     mysqli_query($database,$query);
      if ( insert( $_POST) > 0) {
         echo "berhasil";
      } else {
        echo "gagal";
      }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah data</title>
</head>
<body>
    <h1>Tambah Data</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="nim">NIM :</label>
                <input type="text" name="nim" id="nim">
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan">
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah data</button>
            </li>
        </ul>
    </form>

</body>
</html>