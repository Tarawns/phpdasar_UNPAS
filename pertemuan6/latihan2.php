<?php
// $mahasiswa = [
//     ["Tara Wanesha", "33222004", "tartar@gmail.com", "Teknik Informatika"],
//     ["Wahyu Andita Rahma", "33222005", "andita_r@gmail.com", "Teknik Informatika"]
// ];

// Array Associative = keynya kita yang buat sendiri

//Array multidimensi
$mahasiswa = [
    [
        "nama" => "Tara Wanesha",
        "nim" => "33222004",
        "email" => "tartar@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "Hoshi.jpg"
    ],

    [
        "nama" => "Wahyu Andita Rahma",
        "nim" => "33222005",
        "email" => "andita_r@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "so mun.jpeg"
    ]
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
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nama: <?= $mhs["nama"]; ?></li>
            <li>NIM: <?= $mhs["nim"]; ?></li>
            <li>Jurusan: <?= $mhs["jurusan"]; ?></li>
            <li>Email: <?= $mhs["email"]; ?></li>
            
        </ul>
    <?php endforeach; ?>
</body>
</html>
