<?php
// koneksi ke database
// (nama host database/hostname, username mysql, password, database)
$koneksi = mysqli_connect("localhost", "root", "", "pemrogramanweb");


// function registrasi
function registrasi($data) {
    global $koneksi;

    // mengubah menjadi huruf kecil dan membersihkan dari karakter lain
    $username = strtolower(stripslashes($data["username"]));
    // biar bisa memasukkan karakter
    $password = mysqli_real_escape_string($koneksi, $data["password"]);
    $password2 = mysqli_real_escape_string($koneksi, $data["password2"]);

    // cek username & password sudah ada apa belum
    $cek = mysqli_query($koneksi, "SELECT username FROM uts WHERE username = '$username'");
    if( mysqli_fetch_assoc($cek) ) {
        echo "<script>
                alert('Username sudah terdaftar!');
            </script>";
        return false;
    }


    // cek konfirmasi password apakah sama dengan yg dimasukkan sebelumnya
    if( $password !== $password2 ) {
        echo "<script>
                alert('Konfirmasi password tidak sesuai!');
            </script>";
        return false;
    }

    // enkripsi password menggunakan hash
    $password = password_hash($password, PASSWORD_DEFAULT);
    
    // tambahkan data registrasi baru ke database
    mysqli_query($koneksi, "INSERT INTO uts VALUES('', '$username', '$password')");

    return mysqli_affected_rows($koneksi); //untuk menghasilkan angka 1 jika berhasil dan -1 jika gagal


}

?>
