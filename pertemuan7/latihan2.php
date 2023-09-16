<?php
// cek apakah tidak ada data di $_GET

if( 
    !isset($_GET["nama"]) || 
    !isset($_GET["nim"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["jurusan"]) ||
    !isset ($_GET["gambar"]) 
    ) 
{
    // redirect = memindahkan user dari satu halaman ke halaman lain
    header("Location: latihan1.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Detail Mahasiswa</title>
</head>
<body>
    <ul>
        <li><img src="img/<?= $_GET["gambar"]; ?>"></li>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["nim"]; ?></li>
        <li><?= $_GET["email"]; ?></li>
        <li><?= $_GET["jurusan"]; ?></li>
    </ul>

    <a href="latihan1.php">Kembali Ke Halaman 1</a>
</body>
</html>