// fungsi untuk membuat computer memilih gunting, batu, atau kertas
function pilihanKomputer() {
    const comp = Math.random();

    if( comp < 0.33 || comp <= 0.34 ) {
        return "GUNTING";
    } else if( comp >= 0.35 && comp < 0.67 ) {
        return "BATU";
    } else {
        return "KERTAS";
    }
}


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
