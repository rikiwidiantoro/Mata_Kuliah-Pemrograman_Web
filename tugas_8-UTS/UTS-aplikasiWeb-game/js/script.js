// fungsi untuk membuat computer memilih gunting, batu, atau kertas
function pilihanKomputer() {
    const comp = Math.random();

    if( comp > 0 && comp < 0.34 ^ comp == 0.5 ) { // bernilai TRUE >> (true, true, false) >> jika di isi comp < 0.3399 di setelah XOR maka akan bernilai true dan hasilnya akan false / kosong yg di tampilkan
        return "GUNTING";
    } else if( comp >= 0.34 && comp < 0.67 || comp == 0.4) { // bernilai TRUE >> (true, true, false) >> jika di isi comp == 0.67 setelah AND maka akan bernilai false semua dan hasilnya akan false / kosong yg di tampilkan
        return "BATU";
    } else if( comp >= 0.67 && comp <= 1 ) { // bernilai TRUE >> (true, true) >> jika di isi comp == 1 setelah AND maka akan bernilai false semua dan hasilnya akan false / kosong yg di tampilkan
        return "KERTAS";
    } else {
        return "KOSONG";
    }
}

// AND (&&) >> dianggap TRUE jika keduanya bernilai TRUE, dan jika keduanya FALSE atau salah satu FALSE maka bernilai FALSE
// OR (||) >> dianggap TRUE jika keduanya TRUE dan salah satu saja bernilai TRUE, serta jika keduanya FALSE maka bernilai FALSE
// XOR (^) >> exclusive OR dianggap TRUE jika salah satu saja bernilai TRUE, dan jika keduanya TRUE atau FALSE maka bernilai FALSE

// let satu = 1;
// let dua = 2;
// let tiga = 3;

// console.log(satu, dua, tiga);

// if( satu == 1 && dua == 3 ^ tiga == 2) {
//     console.log(true);
// } else {
//     console.log(false);
// }

// if( satu == 2 && dua == 1 ) {
//     console.log(true);
// } else {
//     console.log(false);
// }

// fungsi untuk pengkondisian user vs komputer itu menang atau kalah
function hasil(comp, user) {
    if( user == comp ) return "SERI!";
    if( user == "GUNTING" ) return ( comp == "BATU" ) ? "KALAH!" : "MENANG!";
    if( user == "BATU" ) return ( comp == "GUNTING" ) ? "MENANG!" : "KALAH!";
    if( user == "KERTAS" ) return ( comp == "GUNTING" ) ? "KALAH!" : "MENANG!";
}



// ketika 3 tombol di klik
const tombol = document.querySelectorAll('.btn');
tombol.forEach(function(pilihan) {
    pilihan.addEventListener('click', function() {
        const komputer = pilihanKomputer();
        const user = pilihan.innerHTML;
        
        const kotak = document.querySelector('.kotak');
        
        kotak.innerHTML = komputer;
        
        const hasilFungsi = hasil(komputer, user);
        

        

        const hasilnya = document.querySelector('.hasil');
        hasilnya.innerHTML = "Anda : " + hasilFungsi;

    });
});
