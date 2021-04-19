<?php
require "functions.php";

// $nama = mysqli_query("SELECT * FROM tugasdbms");
$result = mysqli_query($koneksi, "SELECT * FROM tugasdbms");

$rows = [];
while( $row = mysqli_fetch_assoc($result) ) {
    $rows[] = $row;
}
var_dump($rows);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrasi Data</title>
</head>
<body>
    <h1>Administrasi Data</h1>

    <a href="">Tambah Data</a>
    <br><br>

    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Menu</th>
        </tr>
        <tr>

        </tr>
    </table>
</body>
</html>
