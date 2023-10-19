<?php
require 'functions.php';
$id = $_GET["id"];
if( hapus($id) > 0 ) {
    echo "Data Berhasil Dihapus";
    // <script>
    //     alert('Data Berhasil Dihapus')!
    //     document.location.href = 'index.php';
    // </script>
} else {
echo "Data Gagal Dihapus";
// <script>
//     alert('Data Gagal Dihapus')!
//     document.location.href = 'index.php';
// </script>

}


?>