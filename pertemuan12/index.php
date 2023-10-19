<?php
// menghubungkan file dengan keyword require (ada satu lagi yaitu include)
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

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
    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br><br>

    <form action="" method="post">
        <input type="text" name="keyword" size="40" autofocus="" placeholder="Masukan Keyword Pencarian" autocomplete="off">
        <button type="submit" name="cari">Cari!</button>
    </form>

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
        <td><?= $i; ?></td>
        <td>
            <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a>| 
            <a href="hapus.php?id=<?= $row["id"]; ?>" oneclick="return confirm ('yakin?');">hapus</a>
        </td>
        <td><img src="img/<?= $row["gambar"]; ?>" alt="PICTURE" widht="50px" height="50px"></td>
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