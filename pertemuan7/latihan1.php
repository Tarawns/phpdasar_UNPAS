<?php
// Variable Scope / lingkup variable
// variable lokal = variable yang berada di satu lingkungan tertentu            misalnya didalam function.
// variable global = variable yang berada di diluar ruang lingkup tertentu, misalnya diluar function. (global)


// variable superglobal = variable-variable yang sudah ada di php yang bisa di gunakan di mana pun dan kapan pun di dalam halaman php. semua variabel super global ini merupakan array asosiatif

// tanda tanya dalam halama url php itu bacanya "saya akan memasukkan data ke halaman ini"
// tanda dan artinya menambahkan data lainnya
        /*  - $_GET ...
            - $_POST ...
            - $_REQUEST
            - $_SESSION ...
            - $_COOKIE ...
            - $_SERVER
            - $_ENV
        */

// $_GET
// untuk URL hanya bisa menggunakan $_GET

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
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li> 
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>
                &nim=<?= $mhs["nim"]; ?>
                &email=<?=$mhs["email"]; ?>
                &jurusan=<?= $mhs ["jurusan"]; ?>
                &gambar=<?= $mhs["gambar"]; ?>
                ">
                <?= $mhs["nama"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</head>
<body>
    
</body>
</html>