// scroll
$('.page-scroll').on('click', function(e) {

	// ambil isi href
	var tujuan = $(this).attr('href');

	// tangkap elemen yang bersangkutan
	var elemenTujuan = $(tujuan);

	// 1
	// console.log($('body').scrollTop());

	// pindahkan scroll
	$('html, body').animate({
		scrollTop: elemenTujuan.offset().top - 46
	}, 1300, 'easeInOutExpo');

	e.preventDefault();
});
// endscroll


//
// 
// 
// 
// 


// parallax

	// about
	$(window).on('load', function() {
		$('.pKiri').addClass('pMuncul');
		// $('.pAtas').addClass('pMuncul');
	});
	// endabout


	//
	// 
	// 
	// 
	// 


	$(window).scroll(function() {

		var wScroll = $(this).scrollTop();

		// jumbotron
		$('.jumbotron img').css({
			'transform' : 'translate(0px, ' + wScroll/5 + '%)'
		});

		$('.jumbotron h1').css({
			'transform' : 'translate(0px, ' + wScroll/2.1 + '%)'
		});

		$('.jumbotron p').css({
			'transform' : 'translate(0px, ' + wScroll/1.3 + '%)'
		});
		// end jumbotron


		//
		// 
		// 
		// 
		// 

		// about
		if ( wScroll > $('#home').offset().top + 130 )
		{
			$('.pKanan').addClass('pMuncul')
		}

		// active parallax



			// about
			if ( wScroll > $('.about').offset().top - 80 && wScroll < $('.portfolio').offset().top - 60 ) {

				// alert('ok');
				$('nav .collapse ul li a.nav-about').css({
					'color' : 'white'
				});

			} else {

				$('nav .collapse ul li a.nav-about').css({
					'color' : '#9d9d9d'
				});
			}
			// endabout

			// portfolio
			if ( wScroll > $('.portfolio').offset().top - 60 && wScroll < $('.contact').offset().top - 56 ) {

				$('nav .collapse ul li a.nav-portfolio').css({
					'color' : 'white'
				});

			} else {

				$('nav .collapse ul li a.nav-portfolio').css({
					'color' : '#9d9d9d'
				});
			}
			// endportfolio
			
			// contact
				if ( wScroll > $('.contact').offset().top - 56 && wScroll < $('.footer').offset().top ) {

					$('nav .collapse ul li a.nav-contact').css({
						'color' : 'white'
					});

				} else {

					$('nav .collapse ul li a.nav-contact').css({
						'color' : '#9d9d9d'
					});
				}
			// endcontact
		// end active parallax


		//
		// 
		// 
		// 
		// 


		// jumbotron
		// if ( wScroll > $('.about').offset().top - 116 && wScroll < $('.footer').offset().top ) {

		// 	// alert('ok');
		// 	$('.navbar').css({
		// 		'background-color' : '#222831',
		// 		'border-bottom' : '1px solid #222831'
		// 	});
		// } else {
		// 	$('.navbar').css({
		// 		'background-color' : 'rgba(0, 0, 0, 0)',
		// 		'border-bottom' : '1px solid rgba(0, 0, 0, 0)'
		// 	});
		// }
		// end jumbotron


		//
		// 
		// 
		// 
		// 


		
		// portfolio
		if ( wScroll > $('.portfolio').offset().top - 330 ) {
			
			$('.portfolio .thumbnail').addClass('muncul'); z
			
			// $('.portfolio .thumbnail').each(function(i) {
			// 	setTimeout(function() {
			// 		$('.portfolio .thumbnail').eq(i).addClass('muncul');
			// 	}, 600 * i );
			// });
		}
		// endportfolio


		//
		// 
		// 
		// 
		// 


		// about-Animasi
		if ( wScroll > $('.about').offset().top - 330 ) {

			// alert('ok');
			$('.about .pAtas').addClass('pMuncul');
		}

		if ( wScroll > $('.about').offset().top + 10 ) {

			// alert('ok');
			$('.about .skill').addClass('muncul');
			$('.about .skills .bar').addClass('skill-per');
		}
		// endabout-Animasi

	});


const menuToggle = document.querySelector('.contact .row .col-md-12 input');
const feedback = document.querySelector('section.feedback');
const fade = document.querySelector('.contact .box');

	menuToggle.addEventListener('click', function() {
		feedback.classList.toggle('slide');
	});
	
	menuToggle.addEventListener('click', function() {
		fade.classList.toggle('slide-fade');
	});