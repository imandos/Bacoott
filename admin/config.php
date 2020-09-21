<?php 
//gawe konek ndek datanase
$database = mysqli_connect("localhost", "root", "", "tes_crud");

//menampilkan data dari tabel
function query ($query) {
    global $database;
    $result = mysqli_query($database, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}


function hapus ($id) {
    global $database;
    mysqli_query ($database, "DELETE FROM mahasiswa WHERE id = $id");

    return mysqli_affected_rows($database);
}

function insert ($data) {
    global $database;

    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);

    //upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }


    //query insert database
    $query = "INSERT INTO mahasiswa VALUES ('', '$nama', '$nim', '$email', '$jurusan', '$gambar')";
    mysqli_query($database,$query);

    return mysqli_affected_rows($database);
                
}


function upload () {
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name']; 


    // apakah ada gmbr yg diupload
    if ($error === 4) {
        echo "tidak ada gambar di upload";
        return false;
    }

    //cek upload gmbr atau bukan
    $ekstensiGambarValid = ['jpg','jpeg','png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "yg anda upload bukan gambar";
        return false;
    }


    // cek ukuran terlalu besar
    if ( $ukuranFile > 1000000 ) {
        echo "ukuran gambar terlalu besar";
        return false;
    }




    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    //lolos cek, gambar siap upload
    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
    return $namaFileBaru;


}


function edit ($data) {
    global $database;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);


    //cek apakah user pencet tombol upload
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }


    //query insert database
    $query = "UPDATE mahasiswa SET 
                nama = '$nama',
                nim = '$nim',
                email = '$email',
                jurusan = '$jurusan'
            WHERE id = $id";
    mysqli_query($database,$query);

    return mysqli_affected_rows($database);
                
}

?>



