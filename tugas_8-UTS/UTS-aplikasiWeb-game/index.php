<?php
session_start();
// cek session
if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require_once 'functions.php';

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
        <link rel="stylesheet" href="css/style.css">
        <style>
            footer {
                font-size: 14px;
                line-height: 5px;
            }
        </style>

        <title>UTS Game</title>
    </head>
    <body class="index">
        <!-- header -->
        <header class="text-center mb-3">
            <h1>Game Gunting Batu Kertas</h1>
            <h3>Tugas UTS Pemrograman Web | <a href="logout.php" type="button" class="btn btn-outline-secondary btn-sm">Logout</a></h3>
        </header>


        <!-- isi -->
        <div class="isi">
            <div class="isi-hasil">
                <div class="hasilnya">
                    <p class="hasil">Selamat Bermain!</p>
                </div>
            </div>
            <div class="isi-atas">
                <div class="komputer">
                    <p class="text-center kotak">KOMPUTER</p>
                </div>
            </div>
            <div class="vs">
                <p>VS</p>
            </div>
            <div class="isi-bawah text-center">
                <button type="button" class="btn btn-danger p-3">GUNTING</button>
                <button type="button" class="btn btn-warning mx-4 py-3 px-4">BATU</button>
                <button type="button" class="btn btn-success p-3">KERTAS</button>
            </div>
        </div>


        <!-- footer -->
        <footer class="text-center mt-4">
            <p>Riki Widiantoro (18532969) | Savina Lutfia N.(18532976) | 6C</p>
            <p>&copy; 2021 | <a href="https://github.com/Riki-Toro" target="_blank" class="white-text"><i class="fab fa-github"></i> Riki-Toro </a> | <i class="fab fa-instagram"> @karya.rw</i> | <i class="fab fa-instagram"> @saviinalutfinas</i></p>
        </footer>




        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
        -->

        <!-- my javascript -->
        <script src="js/script.js"></script>
    </body>
</html>
