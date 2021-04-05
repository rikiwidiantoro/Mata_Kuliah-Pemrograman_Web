<?php
// Nama = Riki Widiantoro & Savina Lutfia N
// Kelompok 6 | kelas 6C
echo "<h2>Riki Widiantoro (18532969) & Savina Lutfia N. (18532976) | kelompok 6 | kelas 6C</h2>";

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
// untuk memeriksa apakah suatu variabel sudah dibuat atau diatur atau belum. dan jika di buat dalam pengkondisian maka hasilnya seperti berikut
echo "<h2>isset()</h2>";
if ( !isset($riki) ) { // variabel riki belum dibuat sehingga nanti yang tampil pasti 'variabel belum dibuat!'
    echo "variabel belum dibuat!"; // jika ada tanda ! ini ditampilkan
} else {
    echo "variabel sudah dibuat!"; // jika tidak ada tanda ! ini ditampilkan
}


echo "<br><br><br><br>";



// empty()
// mirip seperti fuction isset(), tetapi fungsi nya agak berbeda yaitu untuk memriksa apakah suatu variabel bernilai kosong atau tidak,, dan jika di buat dalam pengkondisian seperti berikut
echo "<h2>empty()</h2>";
$widi = "";  // variabel widi dibuat tetapi nilainya tidak ada,, jadi yang tampil pasti 'variabel bernilai kosong!'.
if( empty($widi) ) {
    echo "variabel bernilai kosong!";
} else {
    echo "variabel ada nilainya!";
}



?>
