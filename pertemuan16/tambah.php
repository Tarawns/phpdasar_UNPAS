<?php
session_start();

if (!isset ($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require 'functions.php';
// koneksi ke DMBS ada di halaman function

// cek apakah tombol sumbit sudah ditekan atau belom
if ( isset($_POST["submit"]) ) {


// var_dump($_FILES);    
//cek apakaha data berhasil di tambahkan atau tidak
    if ( tambah($_POST)> 0) {
        echo "<script>
                alert('Data Berhasil Ditambahkan!');
                document.location.href = 'index.php';
            </script>";
    } else {
        echo "<script>
            alert('Data Gagal Ditambahkan!');
            document.location.href = 'index.php';
        </script>";
    }
}

// Atribut “required” pada input digunakan untuk memastikan bahwa pengguna harus memasukkan nilai pada input tersebut sebelum dapat mengirimkan formulir.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nim">NIM : </label>
                <input type="text" name="nim" id="nim" require="">
            </li>
            <li>
                <label for="nama">NAMA : </label>
                <input type="text" name="nama" id="nama" require="">
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email" require="">
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" require="">
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="file" name="gambar" id="gambar" require="">
            </li>
            <li>
                <button type="submit" name="submit">
                    Tambah Data!
                </button>
            </li>
        </ul>
    </form>
</body>
</html>
