<?php
session_start();

if (!isset ($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}


// menghubungkan file dengan keyword require (ada satu lagi yaitu include)
require 'functions.php';

// pagination
// LIMIT nomor_indexnya, jumlahnya mau berapa //
$jumlahDataPerhalaman = 5;
$jumlahData = count(query("SELECT * FROM mahasiswa"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerhalaman);
$halamanAktif = (isset ($_GET["halaman"]) ) ? $_GET["halaman"] : 1;
$awalData = ($jumlahDataPerhalaman * $halamanAktif) - $jumlahDataPerhalaman;

// if ( isset ($_GET["halaman"]) ) {
//         $halamanAktif = $_GET["halaman"];
// } else {
//     $halamanAktif = 1;
// }
// var_dump($halamanAktif);

$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData,                   $jumlahDataPerhalaman");

// tombol cari ditekan
if (isset ($_POST["cari"]) ) {
    $mahasiswa = cari($_POST["keyword"]);
}

/*WHERE data = 'values'
$mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id ...");
DESC(Descanding)= mengurutkan dari yang paling besar atau yang paling baru
ASC (Ascanding)= mengurutkan dari yang paling kecil atau yang paling lama*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Admin</title>
</head>
<body>

<a href="logout.php">Logout</a>

    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br><br>

    <form action="" method="post">
        <input type="text" name="keyword" size="40" autofocus="" placeholder="Masukan Keyword Pencarian" autocomplete="off">
        <button type="submit" name="cari">Cari!</button>
    </form>
<br>  
    <!-- navigasi/pagination -->

    <?php if($halamanAktif > 1) : ?>
    <a href="?halaman=<?=$halamanAktif - 1; ?>">&laquo;</a>
    <?php endif; ?>


    <?php for($i = 1; $i <= $jumlahHalaman; $i++ ) : ?>
        <?php if($i == $halamanAktif) : ?>
        <a href="?halaman=<?= $i; ?>" style="font-weight: bold; color: red;"><?= $i; ?></a>
        <?php else : ?>
            <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
        <?php endif; ?>
    <?php endfor; ?>

    <?php if($halamanAktif < $jumlahHalaman) : ?>
    <a href="?halaman=<?=$halamanAktif + 1; ?>">&raquo;</a>
    <?php endif; ?>

<br><br>

<table border="1" cellpadding="10" cellspasing="0">
    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($mahasiswa as $row) : ?>
    <tr>
        <td><?= $i + $awalData; ?></td>
        <td>
            <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> | 
            <a href="hapus.php?id=<?= $row["id"]; ?>" oneclick="return confirm ('yakin?');">hapus</a>
        </td>
        <td><img src="img/<?= $row["gambar"]; ?>" alt="PICTURE" widht="50px" height="100px"></td>
        <td><?= $row["nim"]; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>

</table>
</body>
</html>