<?php

require_once "functions.php";

// tombol register sudah di tekan apa belum
if( isset($_POST['button']) ) {
    if( registrasi($_POST) > 0 ) {
        echo "<script>
            alert('Registrasi berhasil!');
        </script>";
    } else {
        echo mysqli_error($koneksi);
    }
}


?>


<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

        <!-- my css -->
        <style>
            .container {
                width: 450px;
                height: auto;
                background-color: grey;
                border-radius: 10px;
            }
        </style>

        <title>Registrasi</title>
    </head>
    <body>

        <form action="" method="post">
            <div class="mt-5 p-5 justify-content-center container">
                <h3>Halaman Registrasi</h3>
                <div class="input-group my-3 mt-4">
                    <label class="input-group-text" for="username">Username</label>
                    <input type="text" class="form-control" placeholder="" aria-label="username" aria-describedby="username" name="username" autocomplete="off" id="username" autofocus>
                </div>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="password">Password</label>
                    <input type="password" class="form-control" placeholder="" aria-label="password" aria-describedby="password" name="password" autocomplete="off" id="password">
                </div>
                <div class="input-group mb-4">
                    <label class="input-group-text" for="password2">Ulangi Password</label>
                    <input type="password" class="form-control" placeholder="" aria-label="password2" aria-describedby="password2" name="password2" autocomplete="off" id="password2">
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" name="button" class="btn btn-dark">Registrasi</button>
                </div>

                <a href="login.php">kembali</a>

                <p class="mt-3">&copy; 2021 | Riki Widiantoro | <a href="https://github.com/Riki-Toro" target="_blank" class="white-text"><i class="fab fa-github"></i> Riki-Toro </a> | <i class="fab fa-instagram"> @karya.rw</i></p>
            </div>
        </form>



        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
        -->
    </body>
</html>
