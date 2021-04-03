<?php
// Nama = Riki Widiantoro & Savina Lutfia N
// Kelompok 6 | kelas 6C
echo "<h2>Riki Widiantoro & Savina Lutfia N | kelompok 6 | kelas 6C</h2>";


// strlen()
// untuk mengetahui panjang dari sebuah string
// contoh dibawah nama+spasi berjumlah 15, jadi fungsi strlen menghitung nama+spasi
echo "<h2>strlen()</h2>";
$riki = 'Riki Widiantoro';
echo "<p>panjang string Riki Widiantoro : ". strlen($riki) ." </p>";

echo "<br><br><br>";



// strcmp()
// untuk membandingkan string satu dengan string lainnya. | akan menghasilkan 0 jika kedua string yang dibandingkan sama.
echo "<h2>strcmp()</h2>";
$namaDepan = 'Riki';
$namaBelakang = 'Widiantoro';
echo strcmp($namaDepan, $namaDepan);
echo "<br>";

// jika dimasukkan dalam pengkondisian
$perbandingan = strcmp($namaDepan, $namaBelakang);
if ( $perbandingan == 0 ) {
    echo "nama depan dan dan nama belakang sama!";
} else {
    echo "nama depan dan dan nama belakang tidak sama!";
}

echo "<br><br><br>";



// strstr()
// mengembalikan sisa string
echo "<h2>strstr()</h2>";
$gabung = strstr("Riki Widiantoro","Widiantoro");
echo $gabung;

echo "<br><br><br>";



// implode() / join()
// untuk menggabungkan 2 atau lebih value array dalam satu output yang sama
echo "<h2>implode() / join()</h2>";
$array = ["Riki", "Widi", "Anto", "Toro"];
echo implode("-", $array);
echo "<br>";
echo join("=", $array);

echo "<br><br><br>";



// explode()
// sebagai pemisah string. jadi sebuah string akan di pecahkan menurut tanda pisah yang di tentukan sendiri.
echo "<h2>explode()</h2>";
$bahasa = "php javascript phyton ruby";
$explode = explode("-", $bahasa);

var_dump ($explode);
echo "<br><br>";
// jika ditampilkan satu-satu menggunakan pemecahan array dengan foreach
foreach($explode as $ex) {
    echo $ex;
}

echo "<br><br><br>";



// htmlspecialchars()
echo "<h2>htmlspecialchars()</h2>";
// $nama = "<label>Nama : </label><input type='text' name='nama'>";
// echo
// echo $nama;

// $aman = htmlspecialchars($nama['nama']);


echo "<br><br><br><br><br>";

?>
