<?php
// Function = merupakan baris-baris kode / potongan program yang dibuat untuk mempermudah saat memprogram. Kode program, bisa di beri nama & dipanggil berulang

/*
Ada 2 Function
    - Built-in Function = fungsi yang sudah disediakan oleh PHP (http://php.net/manual/en/funcref.php)
    - User-Defined function = fungsi yang dibuat oleh user sendiri
*/
?>


<?php
// fungsinya harus user definisikan (definisikan dulu lalu panggil)
// Default digunakan saat perintah perameternya kosong/ hanya ada satu perintah
function salam($waktu = "Datang", $nama = "TaraWns") {
    return "Selamat $waktu, $nama !";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= salam("Pagi"); ?></h1>
</body>
</html>

