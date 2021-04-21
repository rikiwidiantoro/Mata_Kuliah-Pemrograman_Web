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

// hapus
function hapus($id) {
    global $koneksi;

    mysqli_query($koneksi, "DELETE FROM tugasdbms WHERE id = $id");

    return mysqli_affected_rows($koneksi);
}

// edit
function edit($data) {
    global $koneksi;

    // ambil data dari tiap elemen form
    $id = $data["id"];
    $nim = htmlspecialchars($data["nim"]);
    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);

    // update
    $update = "UPDATE tugasdbms SET nim = '$nim', nama = '$nama', alamat = '$alamat' WHERE id = $id";

    mysqli_query($koneksi, $update);

    return mysqli_affected_rows($koneksi);
}
?>
