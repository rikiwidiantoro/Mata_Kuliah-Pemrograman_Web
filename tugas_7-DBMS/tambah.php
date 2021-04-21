<?php
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
</head>
<body>
    <h1>Tambah Data</h1>
    <form action="" method="post">
        <label for="nim">NIM : </label>
        <input type="text" id="nim" name="nim" autocomplete="off" required>
        <br>
        <label for="nama">Nama : </label>
        <input type="text" id="nama" name="nama" width="300px" autocomplete="off" required>
        <br>
        <label for="alamat">Alamat : </label>
        <input type="text" id="alamat" name="alamat" autocomplete="off">
        <br><br>
        <button type="submit" name="tambah">Tambah Data</button>
    </form>

    <br>
    <a href="index.php">Kembali</a>
    <hr>
</body>
</html>