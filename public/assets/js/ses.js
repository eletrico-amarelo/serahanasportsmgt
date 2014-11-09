//------------------------------------
//
//	SERAHANA
//
//------------------------------------


//	Core page objects
var $core,
	$site;


$(document).foundation();
$('.single-item').slick({
                arrows: false
            });
$('.multiple-item').slick();
$(function() {
	$('.clock').clock( {'format':'24'} );
	log('ok');

	//	Core page objects

	$core = {
		win:			$(window),
		doc:			$(document),
		html:			$('html'),
		body:			$('body')
	};

	//	Core site objects

	$site = {
		small_news_nav	: $('.small-news-list ul li', $core.body),
		small_news_list	: $('.small-news-list ol', $core.body)
	}






	$site.small_news_nav.on('click', function(e) {
		e.preventDefault();
		if ( $(this).hasClass('off') ) {
			$site.small_news_nav.toggleClass('on off');
			$site.small_news_list.toggleClass('on off');

		}
	});


	$('.left-off-canvas-toggle').on( 'click', function() {
		$(this).children('i').toggleClass('fa-bars fa-times');
		$(this).children('i').toggleClass('exit-off-canvas');
    });





});