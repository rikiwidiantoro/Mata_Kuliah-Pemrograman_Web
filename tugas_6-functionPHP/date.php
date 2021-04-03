<?php
// Nama = Riki Widiantoro & Savina Lutfia N
// Kelompok 6 | kelas 6C
echo "<h2>Riki Widiantoro & Savina Lutfia N | kelompok 6 | kelas 6C</h2>";

// date()
// untuk mengetahui hari, tanggal, bulan dan tahun dengan parameter hari=l, tanggal=d, bulan=m, tahun=y
echo "<h2>date()</h2>";
echo "<h3>tanggal hari ini?</h3>";
$waktu = date("l, d-M-Y");
echo $waktu;
echo "<br><br><br>";



// time()
// UNIX Timestamp/EPOCH time >> detik yang sudah berlalu sejak 1 januari 1970 atau hari lahirnya bahasa pemrograman PHP ini
echo "<h2>time()</h2>";
echo "<h3>detik yang telah berlalu sejak 1 januari 1970</h3>";
echo time();
echo "<br>";

// jika digabungkan function date dan time maka bisa membuat program sederhana untuk menghitung hari apa 100 hari kedepan dan hari apa 100 hari sebelum hari ini.
// 100 hari kedepan
echo "<h3>100 hari kedepan adalah hari?</h3>";
$kedepan = date("l, d-M-Y", time()+60*60*24*100);
echo $kedepan;
// 100 hari sebelumnya
echo "<h3>100 hari sebelum hari ini adalah hari?</h3>";
$sebelumnya = date("l, d-M-Y", time()-60*60*24*100);
echo $sebelumnya;

echo "<br><br><br>";



// mktime()
// membuat detik sendiri yang telah berlalu dengan memasukkan 6 parameter integer yaitu (jam, menit, detik, bulan, hari, tahun)
echo "<h2>mktime()</h2>";
// detik yang telah berlalu sejak kelahiran ku di 15 november 1998
echo "<h3>waktu yang telah berlalu sejak 15 november 1998</h3>";
$mktime = mktime(0,0,0,11,15,1998);
echo $mktime;

// jika digabungkan dengan function date() maka bisa mengetahui hari apa di 15 november 1998
echo "<h3>hari di 15 november 1998 adalah hari?</h3>";
echo date("l", $mktime);

echo "<br><br><br>";



// strtotime()
// sama seperti fungsi mktime() >> tapi beda nya di fungsi ini menerima parameter berupa string
echo "<h2>strtotime()</h2>";
echo "<h3>waktu yang telah berlalu sejak 15 november 1998</h3>";
echo strtotime("15 nov 1998");
echo "<br>";
echo "<h3>hari di 15 november 1998 adalah hari?</h3>";
echo date("l", strtotime("15 nov 1998"));

echo "<br><br><br><br><br>";
?>
