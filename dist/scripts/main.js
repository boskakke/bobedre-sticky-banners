!function(e){var s=e("body");e(".js-toggleMenu").on("click",function(r){r.preventDefault(),e(s).hasClass("show-search")&&e(s).removeClass("show-search"),e(s).toggleClass("show-menu")}),e(".js-toggleSearchDesktop").on("click",function(r){r.preventDefault(),e(s).hasClass("show-menu")&&e(s).removeClass("show-menu"),e(s).toggleClass("show-search"),setTimeout(function(){e("#desktop-search").focus()},400)}),e(".js-toggleSearchMobile").on("click",function(s){s.preventDefault(),e(this).closest(".grid-menu__search").toggleClass("active"),e("#mobile-search").focus()}),e(".js-toggleSub").on("click",function(s){e(this).closest(".main-menu").toggleClass("active")}),e(".slider__container").slick({slidesToShow:1,dots:!0,dotsClass:"slider__dots",appendDots:"#slider-nav",prevArrow:'<div class="slider__arrow slider__arrow--left"></div>',nextArrow:'<div class="slider__arrow slider__arrow--right"></div>'}),e(".article-gallery__container").slick({slidesToShow:1,dots:!0,dotsClass:"article-gallery__dots",appendDots:"#article-gallery__nav",appendArrows:".article-gallery__arrows",prevArrow:'<div class="article-gallery__arrow article-gallery__arrow--left"></div>',nextArrow:'<div class="article-gallery__arrow article-gallery__arrow--right"></div>'}),e(".main-article").slickLightbox({itemSelector:".js-gallery",background:"#ffffff",caption:"caption",lazy:!0,useHistoryApi:!0,slick:{infinite:!0}})}(jQuery);