<?php
session_start();

// jika sudah login jalankan session ini
if( isset($_SESSION["login"]) ) {
    header("Location: index.php");
    exit;
}

require_once 'functions.php';

// cek apakah tombol login sudah ditekan apa belum
if( isset($_POST["login"]) ) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    // cek satu satu apakah ada username tertentu dalam tabel user
    $result = mysqli_query($koneksi, "SELECT * FROM users WHERE username = '$username'");

    // cek username >> untuk menghitung berapa baris yg dikembalikan fungsi SELECT kalo ketemu nilainya 1, kalau nggak ada nilainya 0
    if( mysqli_num_rows($result) === 1 ) {
        // cek password
        $cekpas = mysqli_fetch_assoc($result);
        if( password_verify($password, $cekpas["password"]) ) { //kebalikan fungsi hash

            // set session
            $_SESSION["login"] = true;

            header("Location: index.php");
            exit;
        }
    }

    $error = true;
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
        <style>
            .container {
                width: 430px;
                height: auto;
                background-color: lightgrey;
                border-radius: 10px;
            }
            .error {
                color: red;
                font-style: italic;
            }
            .buat-akun {
                display: block;
                text-align: right;
                margin-right: 10px;
                font-size: 14px;
            }
            .footer {
                font-size: 12px;
                line-height: 5px;
            }
        </style>

        <title>Login</title>
    </head>
    <body>

        <form action="" method="post">
            <div class="mt-5 p-5 justify-content-center container">
                <h3 class="text-center">Halaman Login</h3>

                <?php if( isset($error) ) : ?>
                    <p class="error">username / password salah!</p>
                <?php endif; ?>

                <div class="input-group my-3 mt-4">
                    <label class="input-group-text" for="username"><i class="fas fa-user"></i></label>
                    <input type="text" class="form-control" placeholder="username" aria-label="username" aria-describedby="username" name="username" autocomplete="off" id="username" autofocus required>
                </div>
                <div class="input-group mb-4">
                    <label class="input-group-text" for="password"><i class="fas fa-lock"></i></label>
                    <input type="password" class="form-control" placeholder="password" aria-label="password" aria-describedby="password" name="password" autocomplete="off" id="password" required>
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" name="login" class="btn btn-dark mb-3">Login</button>
                </div>

                <a href="registrasi.php" class="buat-akun"><i class="fas fa-user-plus"> buat akun</i></a>

                <footer class="footer mt-5 text-center">
                    <p>Riki Widiantoro (18532969) | Savina Lutfia N.(18532976) | 6C</p>
                    <p>&copy; 2021 | <a href="https://github.com/rikiwidiantoro" target="_blank" class="white-text"><i class="fab fa-github"></i> rikiwidiantoro </a> | <i class="fab fa-instagram"> @karya.rw</i> | <i class="fab fa-instagram"> @saviinalutfinas</i></p>
                </footer>
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
