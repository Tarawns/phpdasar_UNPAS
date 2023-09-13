<?php
$mahasiswa = [
    ["T.Tara Wanesha", "3322004", "Teknik Informatika", "tarawns@gmail.com"],
    ["Sandhika Galih", "043030023", "Teknik Informatika", "sandhikagalih@unpas.ac.id"], 
    ["Doddy Ferdiansyah", "03304001", "Teknik Industri", "doydoy@yahoo.com"]
        ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
        <li>Nama: <?= $mhs[0]; ?> </li>
        <li>NIM: <?= $mhs[1]; ?> </li>
        <li>Jurusan: <?= $mhs[2]; ?> </li>
        <li>Email: <?= $mhs[3]; ?> </li>
    </ul>
    <?php endforeach; ?>

    <ol>
        <!-- menggunakan cara loping hanya untuk satu data (?)
        //<?php foreach ($mahasiswa as $mhs) : ?>
            <li> //<?php echo $mhs ?> </li>
        //<?php endforeach; ?> -->
    </ol>
</body>
</html>