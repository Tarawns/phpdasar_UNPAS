<?php
/*
Control Flow/Strukutur Kendali adalah  bagaimana alur dari program kita ketika dibaca oleh interpreter PHP. normalnya skriptnya di baca dari atas ke bawah dan dari kiri ke kanan, tapi dengan control flow, kita bisa mengatur alur pembacaan program
*/

// Pengulangan
/*
    -for = ada tiga bagian
        1. inisialisasi = menentukan variabel awal untuk pengulangan
        2. kondisi terminalisasi = untuk memberhentikan pengulangan
        3. increment/decrement = supaya pengulangan bisa maju/mundur
            cth: for ( $i = 0; $i < 5; $i++ ) {
                    echo "Hello World <br>";
                    }

    -while = selama kondisi nya bernilai true lakukan kondisi di dalamnya. 
        ada tiga bagian juga sama seperti for, namun yang membedakan adalah posisinya. varible nya diluar tanda kurung, kondisi terminalnya adalah di dalam kurung, dan increment/decrement nya ada di dalah kurung kurawa.
                    cth: $i = 0;
                        while ( $i < 5 ) {
                            echo "Hello World! <br>";
                            $i++;
                        }
                        
    -do.. while = jalankan dulu baru cek kondisinya (jika true hasilnya maka akan dijalankan, tetapi jika false makan hanya akan di jalankan sekali)
                    cth: $i = 0;
                        do {
                            echo "Hello World! <br>";
                        $i++;
                    }   while ( $i < 5 );

    -foreach: pengulangan khusus array

    (<?php echo ... bisa dibuat <?= ...)
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 1</title>
    <style>
        .warna-baris{
            "backgroud-color= red;"
        }
    </style>
</head>
<body>
    PENGULANGAN DAN PENGKONDISIAN BERBENTUK TABEL
    <table border="1" cellpadding="10" cellspacing="0">
           <!-- contoh  html didlm php 
           <?php
            for ($i = 1; $i <= 3; $i++) {
                echo "<tr>";
                for ($j = 1; $j <= 5; $j++)
                    echo "<td>$i,$j</td>";
                echo "</tr>";
            }
            ?>
           -->

            <!--contoh html dan php di pisah
            <?php for ($i = 1; $i <= 5; $i++) : ?>
                <tr class="warna-baris">
                    <?php for ($j = 1; $j <= 5; $j++) : ?>
                        <td>
                            <?= "$i,$j"; ?>
                        </td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>-->

            <!-- ini untuk pengkondisian
                        <?php if ( $i % 2 == 1) : ?>
                            <tr class="warna-baris">
                        <?php else : ?>
                            <tr>
                        <?php endif; ?>
            -->
            
    </table>
</body>
</html>