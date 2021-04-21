<?php
require 'functions.php';

// cek apakah tombol login sudah ditekan
if( isset($_POST["login"]) ) {
    
    // ambil username & password
    $username = $_POST["username"];
    $password = $_POST["password"];

    // cek apakah ada username ditabel data di database
    $login = mysqli_query($koneksi, "SELECT * FROM datas WHERE username = '$username'");
    // $pass = mysqli_fetch_assoc($login);
    // var_dump($pass["password"]);
    // cek username
    if( mysqli_num_rows($login) === 1 ) {
        // cek password
        $pass = mysqli_fetch_assoc($login);
        if( $password === $pass["password"] ) {
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Halaman Login</h1>

    <?php if( isset($error) ) : ?>
        <p style="color:red;">username / password salah!</p>
    <?php endif; ?>
    

    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username : </label>
                <input type="text" id="username" name="username" autocomplete="off" required autofocus>
            </li>
            <li>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </li>
            <li>
                <button type="submit" name="login">Login</button>
            </li>
        </ul>
    </form>
</body>
</html>
