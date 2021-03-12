// Nama : Riki Widiantoro & Savina Lutfia N.
// Kelompok 6 | Kelas 6C | Teknik Informatika

// 1. membuat event ketika join us menggetikkan nama
const tangkapJoin = document.querySelector('.navbar-nav .tombol');

tangkapJoin.addEventListener('click', function(e) {
	
	let nama = prompt('Masukkan nama Anda: ');

	if (e = nama) {
		alert(`Selamat Datang ${nama} !`); 
	// } else if(e = 'number') {
	// 	alert('Yang anda masukkan bukan nama!');
	} else {
		alert(`Anda belum memasukkan nama!`);
	}
	
});



// 2. membuat text pada tag p pada testimonial berjalan sendiri dengan menambahkan tag marquee di javascript
const jalan = document.createElement('marquee');
const pM = document.querySelector('.testimonial p');
const bungkus = document.querySelector('.testimonial .col-lg-8');
bungkus.appendChild(jalan);
jalan.appendChild(pM);



// 3. membuat efek hover pada 3 gambar dibawah ketika di sorot gambar diberi css transform translate
const gfoot =document.querySelectorAll('.d-flex img');
gfoot[0].style.cursor = 'pointer';
gfoot[1].style.cursor = 'pointer';
gfoot[2].style.cursor = 'pointer';
// efek hover nya pakai css


// 4. membuat background cover pada jumbotron tetap tetap di css >> dengan menambahkan properti background-Attachment dengan value fixed
const bg = document.querySelector('.jumbotron');
bg.style.backgroundAttachment = 'fixed';



// 5. membuat tulisan di jumbotron mempunyai efek parallax dari atas turun kebawah ketika halaman di refresh
// const tulisanCover = bg.querySelector('display-4');
// tulisanCover.addEventListener('load', function() {
// 	tulisanCover.addClass = '.tMuncul';
// });

$(window).on('load', function() {
	$('.display-4').addClass('tMuncul');

	// 6. membuat 3 info panel muncul satu per satu dengan efek parallax
	$('.info-panel .y').each(function(i) {
		setTimeout(function() {
			$('.info-panel .y').eq(i).addClass('iMuncul');
		}, 500 * (i + 1));
	});
});



// 7. membuat efek parallax pada bagian workingspace >> gambar baru muncul ketika cursor hampir mencapai area dari workingspace
$(window).scroll(function () {

	let wScroll = $(this).scrollTop();

	// 7. gambar baru muncul ketika cursor hampir mencapai area workingspace
	if ( wScroll > $('.workingspace').offset().top - 400 ) {
		$('.workingspace .img-fluid').addClass('gMuncul');

		// 8. efek tulisan di samping img yaitu h2 & p baru muncul dari samping ketika cursor hampir mencapai area workingspce dengan koordinat sama seperti diatas
		$('.workingspace h2').addClass('workingspaceMuncul');
		$('.workingspace p').addClass('workingspaceMuncul');
	}

});

