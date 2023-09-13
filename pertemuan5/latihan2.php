<?php
// Pengulangan pada Array
// bisa menggunakan for / foreach (pengulangan khusu Array)
// count = funsi untuk ngitung sendiri ada berapa jumlah elemen
$angka = [3,2,15,20,11,77,89,8];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }

        .clear {clear: both; }
    </style>
</head>
<body>
    <?php for ($i = 0; $i < count ($angka); $i++) { ?>
    <div class= "kotak"><?= $angka [$i]; ?> </div>
    <?php } ?>

    <div class="clear"></div>

    <?php foreach ( $angka as $a  ) { ?>
        <div class="kotak"> <?php echo $a; ?> </div>
    <?php } ?>

    <div class="clear"></div>

    <?php foreach ( $angka as $a  ) : ?>
        <div class="kotak"> <?= $a; ?> </div>
    <?php endforeach; ?>
    
    <!-- as untuk mengambil satu bagian dari elemen-->
    <!-- kurung kurawa buka { bisa di ganti dengan titik dua (:) di awal dan kurung kurawa tutup } bisa di ganti dengan end... --> 
</body>
</html>