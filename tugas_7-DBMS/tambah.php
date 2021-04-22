<?php
session_start();

// session
if( !isset($_SESSION["login"]) ) {
    header("location: login.php");
}

require 'functions.php';

// cek apakah tombol tambah sudah ditekan apa belum
if( isset($_POST["tambah"]) ) {

    // cek apakah function tambah atau data berhasil ditambahkan atau tidak
    if ( tambah($_POST) > 0 ) {
        echo "
            <script>
                alert('Data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="body-tambah">
    <h1>Tambah Data</h1>
    <hr>
    <form action="" method="post">

        <table border="0" cellspacing="0" cellpadding="5">
            <tr>
                <td><label for="nim">NIM</label></td>
                <td>: <input type="text" id="nim" name="nim" autocomplete="off" required autofocus></td>
            </tr>
            <tr>
                <td><label for="nama">Nama</label></td>
                <td>: <input type="text" id="nama" name="nama" width="300px" autocomplete="off" required></td>
            </tr>
            <tr>
                <td><label for="alamat">Alamat</label></td>
                <td>: <input type="text" id="alamat" name="alamat" autocomplete="off"></td>
            </tr>
            <tr>
                <td colspan="2" class="td-tambah-tambah">
                    <button type="submit" name="tambah">Tambah Data</button>
                </td>
            </tr>
        </table>

    </form>

    <br>
    <a href="index.php">Kembali</a>
    
</body>
</html>
