<?php
  //ini adalah komentar
  /* ini untuk komentar banyak baris*/

  //Pertemuan 2 - PHP Dasar_UNPAS Sintaks PHP
  /*
  Standar Output = untuk menampilkan sesuatu kelayar
    -echo, print = untuk mencetak tulisan atau variabel dll
                = echo tidak memerlukan tanda kutip untuk angka, boolean dan memerlukan kutip dua(dipakai saat kata yang digunakan menggunakan tanda kutip satu dan juga kutip dua lebih sakti daripada kutip satu dari segi interpolasi cth: echo "dul set $nama";) 
                atau kutip satu untuk string
    -print_r = untuk khusus untuk mencetak isi array
    -var_dump = melihat isi dari varibael (menampilkan informasi dari variabel tersebut)
        = jika menggunakan sintaks ini maka akan menampilkan tipe data beserta ukurannya (ada infimasi tambahan) (spasi dihitung)
    -print_r dan var_dump, kedua ini merupakan sintaks Debugging (mencari kesalahan), bukan di pakai untuk website.
  */

  //Penulisan Sintaks PHP
  /*
    1. PHP di dalam HTML = cth: <h1>Hello <?php echo "World"; ?> </h1>
    2. HTML di dalam PHP = cth: <?php echo "<h1>Hello World</h1>" ?>
  */

  //Variabel dan Tipe Data
  /*
    Variabel = untuk menampung sebuah nilai 
            = tidak boleh ada spasinya
            = untuk menampikan variabel cukup menggunakan $ lalu nama variabel. cth: $nama = "Bangtan";
            = tidak boleh diamali dengan angka ($1nama), tapi boleh mengandung angka($nama1).
    $nama = "Bangtan";
    echo 'dul set $nama';
*/

//operator
/*
    Aritmatika = + - * / %(modulus = sisa bagi)
        cth:$x = 10;
            $y = 20;
            echo $x * $y;

    Penggabung string / concatenition / concat = . 
        cth:$nama_depan = "Tara";
            $nama_belakang = "Wanesha";
            echo $nama_depan . " " . $nama_belakang;
            (. " " . = bisa untuk Spasi)

    Assigment (operator penugasan)
    =, +=, -=, *=, /=, %=, .=, !=
        cth:$x = 1;
            $x -= 5;
            echo $x;

            $nama = "Tara";
            $nama .= " ";
            $nama .= "Wanesha";
            echo $nama;
                
    Perbandingan (pengkondisian) = <, >, <=, >=, ==
        cth: var_dump(1 < 5);

    Identitas ( ngecek tipe data)
    ===, !==
        cth:var_dump(1 === "1");

    Logika(pengkondisian)= &&(and), ||(or), !(not)
        &&(and) kedua perbandingan harus bernilai sama (benar)
            cth:$x = 10;
                var_dump($x < 20 && $x % 2 == 0);
                kalau satu salah, maka hasilnya false
        
        ||(or) kalau perbandingan nya satu benar maka hasilnya benar
            cth:$x = 30;
 var_dump($x < 20 || $x % 2 == 0);
*/
 
  echo "Catatan tentang Sintaks PHP";
?>
