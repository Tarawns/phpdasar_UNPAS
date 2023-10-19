<?php
// koneksi ke database
// "hostname", "username", "password", "nama database"
$conn = mysqli_connect("Localhost", "root", "", "phpdasar_unpas" );


function query($query) {
    global $conn;
    $result = mysqli_query ($conn, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc ($result) ) {
        $rows[] = $row;
    }

    return $rows;
}

// tambah data
function tambah($data) {
    global $conn;

    // nyiapin ambil data dari tiap elemen dalam form
    // htmlspecialchars() keamanan data
    $nim = htmlspecialchars($data["nim"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    // query insert data (gak boleh ketukar dengan yang di database)
    $query = "INSERT INTO mahasiswa
                VALUES
                ('', '$nama', '$nim', '$email', '$jurusan', '$gambar')
            ";
    mysqli_query($conn, $query);

    return  mysqli_affected_rows($conn);
}

// hapus data
function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}


// ubah data
function ubah($data) {
    global $conn;

    // nyiapin ambil data dari tiap elemen dalam form
    // htmlspecialchars() keamanan data
    $id = $data["id"];
    $nim = htmlspecialchars($data["nim"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    // query insert data (gak boleh ketukar dengan yang di database)
    $query = "UPDATE mahasiswa SET
                nim = '$nim',
                nama = '$nama',
                email = '$email',
                jurusan = '$jurusan',
                gambar = '$gambar'
            WHERE id = $id 
            ";

    mysqli_query($conn, $query);

    return  mysqli_affected_rows($conn);
}


// cari data
// nama LIKE '%$keyword%' => mencari data dengan fleksibel
function cari($keyword) {
    $query = "SELECT * FROM mahasiswa WHERE
                nama LIKE '%$keyword%'OR
                nim LIKE '%$keyword%' OR
                email LIKE '%$keyword%' OR
                jurusan LIKE '%$keyword%'
            ";
    return query($query);
}








?>