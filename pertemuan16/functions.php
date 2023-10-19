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

// upload gambar
$gambar = upload();
    if ( !$gambar) {
        return false;
    }

    // query insert data (gak boleh ketukar dengan yang di database)
    $query = "INSERT INTO mahasiswa
                VALUES
                ('', '$nama', '$nim', '$email', '$jurusan', '$gambar')
            ";
    mysqli_query($conn, $query);

    return  mysqli_affected_rows($conn);
}

// function upload
function upload() {
    $namafile = $_FILES['gambar']['name'];
    $ukuranfile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if($error === 4) {
        echo "<Script>
            alert('pilih gambar terlebih dahulu!');    
        </script>";
        return false;
    }

    // cek apakah yang diupload adalah gambar
// explode adalah sebuah fungsi untuk memecah sebuah fungsi menjadi array (delimiter)
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png',];
    $ekstensiGambar = explode('.', $namafile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    
    if (!in_array($ekstensiGambar, $ekstensiGambarValid) ) {
    echo "<Script>
            alert('yang anda upload bukan gambar!');    
        </script>";

        return false;
    }

    // cek jika ukurannya terlalu besar
    if ($ukuranfile > 1000000) {
        echo "<Script>
            alert('ukuran gambar terlalu besar!');    
        </script>";

        return false;
    }

    // lolos pengecekan, gambar siap di upload
    // generate nama gambar baru
    $namafilebaru = uniqid();
    $namafilebaru .= '.';
    $namafilebaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'img/' . $namafilebaru);

    return $namafilebaru;


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
    $gambarlama = htmlspecialchars($data['gambarlama']);

    // cek apakah user pilih gambar baru atau tidak
    if($_FILES ['gambar']['error'] === 4 ) {
        $gambar = $gambarlama;
    } else {
        $gambar = upload();
    }

    

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

// function registrasi
 function registrasi($data) {
    global $conn;

    $username = strtolower(stripslashes($data["username"] ) );
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek username sudah ada atau belom
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");

    if(mysqli_fetch_assoc($result) ) {
        echo "<script>
                    alert('username sudah terdaftar')
                </script>";
        return false;
    }

    // cek konfimasi password
    if( $password !== $password2 ) {
        echo "<script>
                    alert('konfimasi password tidak sesuai!');
                </script>";

        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO user 
                        VALUES('', '$username', '$password')" );
    
    return mysqli_affected_rows($conn);

 }






?>