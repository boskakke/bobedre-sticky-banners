
(function($) {

	var body = $('body');
	// toggle menu overlay
	$('.js-toggleMenu').on('click', function(e){
		e.preventDefault();
		// remove search overlay
		if($(body).hasClass('show-search')) {
			$(body).removeClass('show-search');
		}
		$(body).toggleClass('show-menu');
	});

	// toggle search overlay
	$('.js-toggleSearchDesktop').on('click', function(e){
		e.preventDefault();
		// remove menu overlay
		if($(body).hasClass('show-menu')) {
			$(body).removeClass('show-menu');
		}
		$(body).toggleClass('show-search');	
		
		// focus on the search input field - wait until css transition is done
		setTimeout(function(){
			$('#desktop-search').focus();	
		}, 400);
	});

	// enables mobile search form
	$('.js-toggleSearchMobile').on('click',function(e) {
		e.preventDefault();
		$(this).closest('.grid-menu__search').toggleClass('active');
		$('#mobile-search').focus();
	});

	// Toggle sub-menus (only on small screens - always visible on tablets and up )
	$('.js-toggleSub').on('click',function(e) {
		$(this).closest('.main-menu').toggleClass('active');
	});


	// Slider in hero element on frontpage

	$(".slider__container").slick({
		slidesToShow: 1,
		dots: true,
		dotsClass: 'slider__dots',
		appendDots: '#slider-nav',
		prevArrow: '<div class="slider__arrow slider__arrow--left"></div>',
		nextArrow: '<div class="slider__arrow slider__arrow--right"></div>',
	});

	// slider on advertorials 
	$(".article-gallery__container").slick({
		slidesToShow: 1,
		dots: true,
		dotsClass: 'article-gallery__dots',
		appendDots: '#article-gallery__nav',
		appendArrows: '.article-gallery__arrows',
		prevArrow: '<div class="article-gallery__arrow article-gallery__arrow--left"></div>',
		nextArrow: '<div class="article-gallery__arrow article-gallery__arrow--right"></div>'
	});


	$('.main-article').slickLightbox({
		itemSelector: '.js-gallery',
		background: '#ffffff',
		caption: 'caption',
		lazy: true,
		useHistoryApi: true,
		// closeButton: '<span style="position: absolute; top: 10px; right: 10px; color: red;"><i class="icon-close"></i></span>'
		slick: { infinite: true}
	});


	/**
	* Custom Slick init to load/unload iframe src on events
	*/

// 	$('.main-article').slickLightbox({
// 		closeOnBackdropClick : false,
// 		itemSelector: '.js-gallery',
// 		slick : function ($e) {

// 			$e.find('.slick-lightbox-slick-iframe').each(function () {
// 				$(this)
// 				.attr('data-src', $(this).attr('src'))
// 				.attr('src', '');
// 			});

// 			function clearIframe (slick, index) {
// 				var $iframe = $(slick.$slides.get(index)).find('.slick-lightbox-slick-iframe');
// 				if ($iframe.length) {
// 					setTimeout(function () {
// 						$iframe.attr('src', '');
// 					}, slick.options.speed);
// 				}
// 			}

// 			function loadIframe (slick, index) {
// 				var $iframe = $(slick.$slides.get(index)).find('.slick-lightbox-slick-iframe');
// 				if ($iframe.length) $iframe.attr('src', $iframe.attr('data-src'));
// 			}

//       /**
//        * Return slick instance
//        */
//        return $e.find('.slick-lightbox-slick')
//        .on('init', function (event, slick) {
//        	loadIframe(slick, slick.currentSlide);
//        })
//        .on('beforeChange', function (event, slick, currentSlide, nextSlide) {
//        	clearIframe(slick, currentSlide);
//        	loadIframe(slick, nextSlide);
//        })
//        .slick();
//    }
// });

})(jQuery);


