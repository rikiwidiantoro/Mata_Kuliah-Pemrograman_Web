<?php
session_start();

// session
if( !isset($_SESSION["login"]) ) {
    header("location: login.php");
}

require 'functions.php';

// ambil data dari url
$id = $_GET["id"];


// ambil data sesuai id
$data = tampil("SELECT * FROM tugasdbms WHERE id = $id")[0];


// cek apakah tombol simpan sudah ditekan
if( isset($_POST["simpan"]) ) {
    
    if( edit($_POST) > 0 ) {
        echo "
            <script>
                alert('Data berhasil diedit!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal diedit!');
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
    <title>Edit Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="body-edit">
    <h1>Edit Data</h1>
    <hr>

    <form action="" method="post" enctype="multipart/form-data">

        <table border="0" class="edit-tabel" cellspacing="0" cellpadding="5">
            <tr>
                <td><input type="hidden" id="id" name="id" value="<?php echo $data["id"]; ?>"></td>
            </tr>
            <tr>
                <td><label for="nim">NIM</label></td>
                <td>: <input type="text" id="nim" name="nim" value="<?php echo $data["nim"]; ?>"></td>
            </tr>
            <tr>
                <td><label for="nama">Nama</label></td>
                <td>: <input type="text" id="nama" name="nama" value="<?php echo $data["nama"]; ?>"></td>
            </tr>
            <tr>
                <td><label for="alamat">Alamat</label></td>
                <td>: <input type="text" id="alamat" name="alamat" value="<?php echo $data["alamat"]; ?>"></td>
            </tr>
            <tr>
                <td colspan="2" class="td-edit-simpan"><button type="submit" name="simpan" class="edit-simpan">Simpan Data</button></td>
            </tr>
        </table>

    </form>

    <br>
    <a href="index.php">Kembali</a>
</body>
</html>
