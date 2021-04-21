<?php
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
</head>
<body>
    <h1>Edit Data</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" id="id" name="id" value="<?php echo $data["id"]; ?>">
        <ul>
            <li>
                <label for="nim">NIM : </label>
                <input type="text" id="nim" name="nim" value="<?php echo $data["nim"]; ?>">
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" id="nama" name="nama" value="<?php echo $data["nama"]; ?>">
            </li>
            <li>
                <label for="nim">Alamat : </label>
                <input type="text" id="alamat" name="alamat" value="<?php echo $data["alamat"]; ?>">
            </li>
            <br>
            <li>
                <button type="submit" name="simpan">Simpan Data</button>
            </li>
        </ul>
    </form>

    <a href="index.php">Kembali</a>
</body>
</html>
