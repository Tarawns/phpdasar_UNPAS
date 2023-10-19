<?php
// koneksi ke database
// "hostname", "username", "password", "nama database"
$conn = mysqli_connect("Localhost", "root", "", "phpdasar_unpas" );


function query($query) {
    global $conn;
    $result = mysqli_query ($conn, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc ($result) ) {
        $rows[] = $row;
    }

    return $rows;
}



?>