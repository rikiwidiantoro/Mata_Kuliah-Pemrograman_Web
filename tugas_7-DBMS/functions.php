<?php
// koneksi
$koneksi = mysqli_connect("localhost", "root", "", "pemrogramanweb");

// tampil
function tampil($data) {
    global $koneksi;
    $result = mysqli_query($koneksi, $data);

    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }

    return $rows;
}

// tambah
function tambah($data) {
    global $koneksi;

    // ambil data dari tiap" elemen di form tambah data
    $nim = htmlspecialchars($data["nim"]);
    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);

    // tambahkan data
    $ambil = "INSERT INTO tugasdbms VALUES ('', '$nim', '$nama', '$alamat')";
    mysqli_query($koneksi, $ambil);

    return mysqli_affected_rows($koneksi);
}
?>
