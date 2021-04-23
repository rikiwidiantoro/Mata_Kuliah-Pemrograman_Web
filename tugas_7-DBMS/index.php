<?php
session_start();

// session
if( !isset($_SESSION["login"]) ) {
    header("location: login.php");
}

require "functions.php";

$nama = tampil("SELECT * FROM tugasdbms");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrasi Data</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="index-nav">
        <a href="logout.php" class="index-logout">Logout</a>
        <br>
        
        <h1 class="index-h1">Administrasi Data 6C</h1>
    </div>

    <hr>

    <div class="index-isi">

        <div class="index-tambah">
            <button><a href="tambah.php">Tambah Data</a></button>
        </div>

        <table border="1" cellspacing="0" cellpadding="10" class="index-tabel">

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
                        <a href="edit.php?id=<?php echo $data['id']; ?>">edit</a> | 
                        <a href="hapus.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Anda yakin ingin menghapus data <?= $data['nama']; ?>');">hapus</a>
                    </td>
                </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
            
        </table>
    </div>

    

    <br><br>
    <footer>
        <p>Riki Widiantoro (18532969) | Savina Lutfia N.(18532976) | 6C</p>
        <p class="footer">&copy 2021 | <i class="fab fa-github"></i> <a href="https://github.com/Riki-Toro" target="_blank">Riki-Toro</a>  |  <i class="fab fa-instagram"> @karya.rw</i> |  <i class="fab fa-instagram"> @saviinalutfinas</i></p>
    </footer>
</body>
</html>
