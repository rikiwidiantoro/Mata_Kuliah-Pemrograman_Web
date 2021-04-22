<?php
session_start();

// session
if ( isset($_SESSION["login"]) ) {
    header("location: index.php");
}

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

            // set session
            $_SESSION["login"] = true;

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
    <title>Halaman Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>


    <form action="" method="post" class="login-form">

        <h1 class="login-h1">Login</h1>

        <?php if( isset($error) ) : ?>
            <p style="color:red; text-align: center;">username / password salah!</p>
        <?php endif; ?>

        <table  cellspacing="0" cellpadding="8" class="login-tabel">
            <tr>
                <td><label for="username">Username : </label></td>
                <td><input type="text" id="username" name="username" autocomplete="off" required autofocus></td>
            </tr>
            <tr>
                <td><label for="password">Password : </label></td>
                <td><input type="password" id="password" name="password" required></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" name="login" class="login-button">Login</button></td>
            </tr>
        </table>
        <br><br>

        <footer>
            <p>Riki Widiantoro (18532969) | Savina Lutfia N.(18532976) | 6C</p>
            <p class="footer">&copy 2021 | <i class="fab fa-github"></i> <a href="https://github.com/Riki-Toro" target="_blank">Riki-Toro</a>  |  <i class="fab fa-instagram"> @karya.rw</i> |  <i class="fab fa-instagram"> @saviinalutfinas</i></p>
        </footer>
    </form>

</body>
</html>
