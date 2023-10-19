<?php
require 'functions.php';
// koneksi ke DMBS ada di halaman function

// ambil data di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id= $id")[0];

// cek apakah tombol sumbit sudah ditekan atau belom
if ( isset($_POST["submit"]) ) {
    
//cek apakah data berhasil di ubah atau tidak
    if ( ubah($_POST)> 0) {
        echo "<script>
                alert('Data Berhasil Diubah!');
                document.location.href = 'index.php';
            </script>";
    } else {
        echo "<script>
                alert('Data Gagal Diubah!');
                document.location.href = 'index.php';
            </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ubah Data Mahasiswa</title>
</head>
<body>
    <h1>Ubah Data Mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $mhs["id"] ?>">
        <input type="hidden" name="gambarlama" value="<?= $mhs["gambar"] ?>">

        <ul>
            <li>
                <label for="nim">NIM : </label>
                <input type="text" name="nim" id="nim" require 
                value="<?= $mhs["nim"]?>">
            </li>
            <li>
                <label for="nama">NAMA : </label>
                <input type="text" name="nama" id="nama" require 
                value="<?= $mhs["nama"]?>">
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email" require 
                value="<?= $mhs["email"]?>">
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" require 
                value="<?= $mhs["jurusan"]?>">
            </li>
            <li>
                <label for="gambar">Gambar : </label> <br>
                <img src="img/<?= $mhs['gambar']; ?>" widht="100px" height="100px"> <br>
                <input type="file" name="gambar" id="gambar" require>
            </li>
            <li>
                <button type="submit" name="submit">
                    Ubah Data!
                </button>
            </li>
        </ul>
    </form>
</body>
</html>