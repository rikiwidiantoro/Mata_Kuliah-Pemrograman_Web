// membuat event ketika join us menggetikkan nama
const tangkapJoin = document.querySelector('.navbar-nav .tombol');

tangkapJoin.addEventListener('click', function(e) {
	
	let nama = prompt('Masukkan nama Anda: ');

	if (e = nama) {
		alert(`Selamat Datang ${nama} !`); 
	} else if(e = 'number') {
		alert('Yang anda masukkan bukan nama!');
	} else {
		alert(`Anda belum memasukkan nama!`);
	}
	
});



// membuat text pada tag p pada testimonial berjalan sendiri dengan menambahkan tag marquee di javascript
const jalan = document.createElement('marquee');
const pM = document.querySelector('.testimonial p');
const bungkus = document.querySelector('.testimonial .col-lg-8');
bungkus.appendChild(jalan);
jalan.appendChild(pM);



// membuat efek hover pada 3 gambar footer ketika di sorot gambar diberi css transform scale & translate
const gfoot =document.querySelectorAll('.d-flex img');
gfoot[0].style.cursor = 'pointer';
gfoot[1].style.cursor = 'pointer';
gfoot[2].style.cursor = 'pointer';

gfoot[1].style:hover.transform: 'scale(-20px)';

