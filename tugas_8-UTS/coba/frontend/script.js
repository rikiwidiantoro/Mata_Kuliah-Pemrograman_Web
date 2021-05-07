function pilihanKomputer() {
    const comp = Math.random();

    if(comp < 0.33 || comp <= 0.34) {
        return "GUNTING";
    } else if(comp >= 0.35 && comp < 0.67) {
        return "BATU";
    } else {
        return "KERTAS";
    }

}



// ketika di klik
const tombol = document.querySelectorAll('.btn');
tombol.forEach(function(pilihan) {
    pilihan.addEventListener('click', function() {
        const hasil = pilihanKomputer();
        const kotak = document.querySelector('.kotak');
        kotak.innerHTML = hasil;
    });
});
