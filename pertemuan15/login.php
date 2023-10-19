<?php
require 'functions.php';

// cek tombol submit sudah ditekan apa belom
    if( isset($_POST["login"]) ) {
    
// menangkap data username dan password
    $username = $_POST["username"];
    $password = $_POST["password"];

// cek adakah username di database yang sama dengan username yang inputkan saat login, kalo ada baru kita cek passwordnya
    $result = mysqli_query($conn, "SELECT * FROM user WHERE username =          '$username' ");

// cek username
        if( mysqli_num_rows($result) === 1 ) {

            // cek password
            $row = mysqli_fetch_assoc($result);
            if( password_verify($password, $row["password"]) ) {
                header("Location: index.php");
                exit;
            }
        }

        $error = true;
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Login</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>
    <h1>Halaman Login</h1>

<?php if( isset ($error) ) : ?>
    <p style="color: red; font-style: italic;">username / password salah!</p>
    <?php endif; ?>

    <form action="" method="post">
        <ul>
            <li>
                <label for="username"> Username :</label>
                <input type="text" name="username" id="username">
            </li>
            <br>
            <li>
                <label for="password"> Password :</label>
                <input type="password" name="password" id="password">
            </li>
            <br>
            <li>
                <button type="submit" name="login">Login!</button>
            </li>
        </ul>
    </form>
</body>
</html>