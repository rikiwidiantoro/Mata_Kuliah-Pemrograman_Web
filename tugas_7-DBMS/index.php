<?php
require "functions.php";

$nama = tampil("SELECT * FROM tugasdbms");

var_dump($nama);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrasi Data</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body>
    <h1>Administrasi Data</h1>

    <a href="tambah.php">Tambah Data</a>
    <br><br>

    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Menu</th>
        </tr>
        
        <?php $i = 1; ?>
        <?php foreach($nama as $data) : ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $data['nim']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['alamat']; ?></td>
                <td>
                    <a href="">edit</a>
                    <a href="">hapus</a>
                </td>
            </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
        
    </table>

    <br><br>
    <footer>
    <p class="footer">&copy Copyright 2021 | <i class="fab fa-github"></i> <a href="https://github.com/Riki-Toro" target="_blank">Riki-Toro</a>  |  <i class="fab fa-instagram"> @karya_rw</i></p>
    </footer>
</body>
</html>
