<?php
echo date("l", mktime(0,0,0,11,26,2002));

// Date = untuk menampilkan tanggal dengan format tertentu
/*
    l = nama hari (saat ini)
    D = nama hari 3 huruf saja
    d = tanggal
    M = bulan (nama bulan)
    m = bulang (bulan berapa)
    Y = tahun (lengkap)
    y = tahun (akhirnya saja)
    
    cth: echo date("l, d-M-Y");
*/
  
// Time
/*
UNIX Timestamp / EPOCH time = merupakan detik yang sudah berlalu sejak I Januari 1970. pada Zaman itu pada ahli menetapkan keputusan bersama yakni untuk mencari waktu yang disepakati bersama untuk komputer.
    echo time();
*/

//digabungin
//echo date("l, d M Y", time()+60*60*24*100); (maju +) (mundur -)

/*
mktike = membuat sendiri detik (yang diinginkan)
    mktime(0,0,0,0,0,0) 
    urutannya jam, menit, detik, bulan, tanggal, tahun
        echo date("l", mktime(0,0,0,11,26,2002));
*/

/*
    strtotime = masukin format tanggal hasilnya detik
    echo date("l", strtotime ("26 nov 2002"));
*/

    //String
/*
    - strlen() = untuk menghitung panjang dari sebuah string (lenght)
    - strcmp() = untuk membandingkan 2 buah string (compare)
    - explode()= untuk memecah sebuah string menjadi array. Dipakai ketika
                    ingin mengambil nama sebuah file.
    - htmlspecialchas () = function khusus untuk menjaga program kita dari orang
                            yang iseng ingin masuk ke website kita.
*/

    //utility
/*
    - var_dump() = untuk mencetak sebuah fungsi dari sebuah variabel 
                    (array/object)
    - isset () = untuk mengecek apakah sebuah variabel sudah pernah dibuat atau         belom (nilai bollean, jika belom maka false dan jika sudah maka true)
    - empty () = untuk mengecek variabel yang ada, ada isinya atau tidak.
    - die () = untuk memberhentikan program kita
                (jadi ketika ketemu perintah ini dalam baris program yang dibuat maka program yang berada di bawahnya tidak akan di eksekusi)
    - sleep () = untuk memberhentikan sementara (mis: 2 detik)
*/
?>