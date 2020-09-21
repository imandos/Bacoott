<?php 
//gawe konek ndek database
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

    $nama = $data["nama"];
    $nim = $data["nim"];
    $email = $data["email"];
    $jurusan = $data["jurusan"];

    echo $nama.$nim.$email.$jurusan;

    //query insert database
    $query = "INSERT INTO mahasiswa VALUES ('', '$nama', '$nim', '$email', '$jurusan')";
    mysqli_query($database,$query);

    return mysqli_affected_rows($database);
                
}


?>



