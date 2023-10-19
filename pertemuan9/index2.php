<?php
// koneksi ke database
// "hostname", "username", "password", "nama database"
$conn = mysqli_connect("Localhost", "root", "", "phpdasar_unpas" );

// amnil data dari table mahasiswa / query data mahasiswa

$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
// var_dump($result);
/*if (!$result) {
    echo mysqli_error ($conn);
}*/

//ambil data (fetch) mahasiswa dari object result
/*
    - mysqli_fetch_row()    => mengambalikan array numeric
                            => $mhs = mysqli_fetch_row($result);
                            => var_dump($mhs["3"]);

    - mysqli_fetch_assoc()  => mengambalikan array associative 
                            => $mhs = mysqli_fetch_assoc($result);
                            => var_dump($mhs["nama"]);

    - mysqli_fetch_array()  => mengambilkan nilai array numeric dan associative
                            => $mhs = mysqli_fetch_array($result);
                            => var_dump($mhs["nama" atau 4]);

    - mysqli_fetch_object() => mengambilkan nilai objek
                            => $mhs = mysqli_fetch_object($result);
                            => var_dump($mhs->nama);
*/

// while ( $mhs = mysqli_fetch_assoc($result) ) {
//     var_dump($mhs);
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

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
    <?php while($row = mysqli_fetch_assoc ($result)) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="">ubah</a>| 
            <a href="">hapus</a>
        </td>
        <td><img src="img/<?php echo $row["gambar"]; ?>" alt="Horanghae" widht="50px" height="50px"></td>
        <td><?= $row["nim"]; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endwhile; ?>

</table>
</body>
</html>