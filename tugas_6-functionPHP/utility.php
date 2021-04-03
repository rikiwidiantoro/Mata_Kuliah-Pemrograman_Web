<?php
// Nama = Riki Widiantoro & Savina Lutfia N
// Kelompok 6 | kelas 6C
echo "<h2>Riki Widiantoro & Savina Lutfia N | kelompok 6 | kelas 6C</h2>";

// count()
// untuk mengetahui atau menghitung jumlah data yang terdapat dalam sebuah array
echo "<h2>count()</h2>";
$array1 = ["senin", "selasa", "rabu", "kamis", "jumat", "sabtu", "minggu"];
// pengulangan untuk menampilkan array1 pada web browser
echo "isi array1 adalah = ";
foreach($array1 as $ar) {
    echo " " . $ar;
}
echo "<br><br>";
echo "jumlah data pada array1 = " . count($array1); // ada 7 data dalam array1

echo "<br><br><br><br>";



// isset()
// untuk memeriksa apakah suatu variabel sudah dibuat atau diatur atau belum.
echo "<h2>isset()</h2>";
if ( !isset($riki) ) {
    echo "variabel riki belum dibuat!"; // jika ada tanda ! ini ditampilkan
} else {
    echo "variabel riki sudah dibuat!"; // jika tidak ada tanda ! ini ditampilkan
}


echo "<br><br><br><br>";



// empty()
// 
echo "<h2>empty()</h2>";
if( empty($widi) ) {
    echo 
}



?>
