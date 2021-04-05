<?php
// Nama = Riki Widiantoro & Savina Lutfia N
// Kelompok 6 | kelas 6C
echo "<h2>Riki Widiantoro (18532969) & Savina Lutfia N. (18532976) | kelompok 6 | kelas 6C</h2>";


// pow()
// digunakan untuk pemangkatan matematika, membutuhkan 2 argumen yaitu (nilai awal, nilai pangkat).
echo "<h2>pow()</h2>";
echo " 5 pangkat 2 adalah " . pow(5,2); // 5 pangkat 2 adalah 25


// log()
// untuk menghitung rumus matematika log atau mengembalikan logaritma natural sebuah bilangan atau logaritma bilangan ke basis.
echo "<h2>log()</h2>";
echo "log 20 adalah " . log(20);


// pi()
// untuk mengembalikan nilai phi
echo "<h2>pi()</h2>";
echo "nilai phi dalam rumus lingkaran adalah " . pi();

echo "<br><br><br>";




// rand()
// untuk mengacak nilai random dengan memasukkan 2 parameter (niali awal, nilai akhir) atau tanpa parameter juga bisa akan tetapi batasannya default php.
echo "<h2>rand()</h2>";
echo "refresh browser untuk mengetahui nilai random 1 sampai 10 =  " . rand(1,10); // nilai random antara 1 sampai 10 jika di-refresh

echo "<br><br><br>";




// max()
// untuk mengembalikan nilai tertinggi yang telah dibuat sebelumnya seperti contoh dibawah, nilai tertinggi 98 yang akan ditampilkan di browser
echo "<h2>max()</h2>";
$arr = [1,2,3,4,5,6,7,8,9,20,98];
echo "nilai tertinggi dari 1,2,3,4,5,6,7,8,9,20,98 adalah = ";
echo max($arr);

// min()
// kebalikan dari max(), yaitu untuk mengembalikan nilai terendah yang telah dibuat sebelumnya seperti contoh dibawah, nilai terendah 1 yang akan ditampilkan di browser
echo "<h2>min()</h2>";
echo "nilai terendah dari 1,2,3,4,5,6,7,8,9,20,98 adalah = ";
echo min($arr);

echo "<br><br><br>";




// floor()
// untuk membulatkan angka kebawah.
echo "<h2>floor()</h2>";
$angka = 4.545;
echo "variabel = " . $angka;
echo "<br><br>";
echo "pembulatan kebawah dari variabel diatas adalah = " . floor($angka); // pembulatan kebawah dari variabel angka adalah 4


// ceil()
// kebalikan dari floor yaitu untuk membulatkan angka keatas.
echo "<h2>ceil()</h2>";
echo "pembulatan keatas dari variabel diatas adalah = " . ceil($angka); // pembulatan kebawah dari variabel angka adalah 5


// round()
// untuk pembulatan dengan nilai terdekat dengan aslinya.
echo "<h2>round()</h2>";
echo "pembulatan dari variabel diatas adalah = " . round($angka); // 5 adalah pembulatan terdekat

echo "<br><br><br>";




// sin()
// untuk menghitung nilai sinus dari sebuah angka dan mengembalikannya dalam satuan sudut radian
echo "<h2>sin()</h2>";
$angka2 = 10;
echo "variabel2 = " . $angka2;
echo "<br>";
echo sin($angka2); // hasil sin(10)


// cos()
// untuk mengembalikan kosinus sebuah angka
echo "<h2>cos()</h2>";
echo cos($angka2); // hasil cos(10)


// tan()
// untuk mengembalikan tangen sebuah angka
echo "<h2>tan()</h2>";
echo tan($angka2); // hasil tan(10)

echo "<br><br><br><br><br><br>";

?>
